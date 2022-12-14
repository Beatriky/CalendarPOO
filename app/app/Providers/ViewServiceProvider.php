<?php

declare(strict_types=1);

namespace App\Providers;

use App\Views\View;
use League\Container\ServiceProvider\AbstractServiceProvider;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use Twig\Extension\DebugExtension;

class ViewServiceProvider extends AbstractServiceProvider
{
    public function provides(string $id): bool
    {
        $services = [View::class];

        return in_array($id, $services);
    }

    public function register(): void
    {
        $container = $this->getContainer();

        $config = $container->get('config');

        $container->addShared(View::class, function () use ($config){
            $loader = new FilesystemLoader(base_path('views'));

            $twig = new Environment($loader, [
                'cache' => $config->get('cache.views.enabled') ? $config->get('cache.views.path') : false,
                'debug' => $config->get('app.debug'),
            ]);

            if ($config->get('app.debug')) {
                $twig->addExtension(new DebugExtension);
            }
            return new View($twig);
        });

    }
}
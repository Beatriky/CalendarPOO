<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class UserEntity
{


    /**
     * @ORM\COlumn(name="id",type="integer",nullable=false)
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private int $id;

    /**
     * @ORM\COlumn(name="id",type="integer",nullable=false)
     * @ORM\GeneratedValue(strategy="AUTO")
     */


    private string $password;

    /**
     * @ORM\COlumn(name="id",type="string",)
     */

    private string $email;


    public function __construct()
    {

    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }


}

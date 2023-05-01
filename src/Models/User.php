<?php

namespace Phoenix\Models;

/** Class User **/
class User
{
    // Méthodes
    private $PASSWORD_USER;
    private $ID_USER;
    private $NAME_USER;
    // Accesseurs
    public function getPassword()
    {
        return $this->PASSWORD_USER;
    }

    public function setPassword(String $PASSWORD_USER)
    {
        $this->PASSWORD_USER = $PASSWORD_USER;
    }

    public function getId()
    {
        return $this->ID_USER;
    }

    public function setId(String $ID_USER)
    {
        $this->ID_USER = $ID_USER;
    }

    public function getUsername()
    {
        return $this->NAME_USER;
    }

    public function setUsername(String $NAME_USER)
    {
        $this->NAME_USER = $NAME_USER;
    }
}

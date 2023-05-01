<?php

namespace Project\Models;

use Project\Models\User;

/** Class UserManager **/
class UserManager
{

    private $bdd;

    public function __construct()
    {
        $this->bdd = new \PDO('mysql:host=' . HOST . ';dbname=' . DATABASE . ';charset=utf8;', USER, PASSWORD);
        $this->bdd->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function getBdd()
    {
        return $this->bdd;
    }

    public function find($username)
    {
        $stmt = $this->bdd->prepare("SELECT * FROM users WHERE NOM_USER = ?");
        $stmt->execute(array(
            $username
        ));
        $stmt->setFetchMode(\PDO::FETCH_CLASS, "Project\Models\User");

        return $stmt->fetch();
    }

    public function store($password)
    {
        $stmt = $this->bdd->prepare("INSERT INTO users(ID_USER, NOM_USER, PASSWORD_USER) VALUES (?, ?, ?)");
        $stmt->execute(array(
            uniqid(),
            $_POST["username"],
            $password
        ));
    }
}

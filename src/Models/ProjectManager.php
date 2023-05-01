<?php

namespace Project\Models;

use Project\Models\Project;

/** Class Project Manager **/
class ProjectManager
{

    private $bdd;

    public function __construct()
    {
        $this->bdd = new \PDO('mysql:host=' . HOST . ';dbname=' . DATABASE . ';charset=utf8;', USER, PASSWORD);
        $this->bdd->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function finddestination($destination)
    {
        $stmt = $this->bdd->prepare("SELECT * FROM destinations WHERE LIBELLE_DESTINATION = :nom");
        $stmt->execute(array("nom" => $destination));
        return $stmt->setFetchMode(\PDO::FETCH_CLASS, "Project\Models\Project");
    }

    public function findtypedestination($type)
    {
        $stmt = $this->bdd->prepare("SELECT * FROM `type_destination` WHERE LIBELLE_TYPE_DESTINATION = :nom");
        $stmt->execute(array("nom" => $type));
        return $stmt->setFetchMode(\PDO::FETCH_CLASS, "Project\Models\Project");
    }

    public function getDestinations()
    {
        $stmt = $this->bdd->prepare("SELECT * FROM destinations");
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_CLASS, "Project\Models\Project");
    }

    public function getReservation($slug)
    {
        $stmt = $this->bdd->prepare("SELECT * FROM destinations WHERE ID_DESTINATION = :id");
        $stmt->execute(array("id" => $slug));
        return $stmt->fetchAll(\PDO::FETCH_CLASS, "Project\Models\Project");
    }

    public function AddReservation($slug, $participants, $prix, $email)
    {
        $stmt = $this->bdd->prepare("INSERT INTO reservations (ID_RESERVATION, ID_USER, ID_DESTINATION, PARTICIPANT_RESERVATION, PRIX_RESERVATION, EMAIL_USER) VALUES (:id_reservation, :id_user, :id_destination, :participant, :prix, :email");
        $stmt->execute(array(
            "id_reservation" => uniqid(),
            "id_user" => $_SESSION['user']['id'],
            "id_destination" => $slug,
            "participant" => $participants,
            "prix" => $prix,
            "email" => $email,
        ));
    }
}

<?php

namespace Project\Controllers;

use Project\Models\ProjectManager;
use Project\Validator;

/** Class ProjectController **/
class ProjectController
{
    private $manager;
    private $validator;

    public function __construct()
    {
        $this->manager = new ProjectManager();
        $this->validator = new Validator();
    }

    public function index()
    {
        require VIEWS . 'Project/index.php';
    }


    public function login()
    {
        require VIEWS . 'Auth/login.php';
    }


    public function destinations()
    {
        $destinations = $this->manager->getDestinations();
        require VIEWS . 'Project/destinations.php';
        if (!$destinations) {
            require VIEWS . 'error_destinations.php';
        }
    }

    public function reservation($slug)
    {

        // if (empty($reservation)) {
        //     header("Location:/destinations");
        // }
        $reservation = $this->manager->getReservation($slug);
        require VIEWS . 'Project/reservation.php';
    }

    public function confirmation($slug)
    {
        $email = $_POST['mail'];
        //$semaines = $_POST['semaines'];
        $participants = $_POST['personnes'];
        $prix = $_POST['prix'];
        $confirmation = $this->manager->AddReservation($slug, $participants, $prix, $email);

        require VIEWS . 'Project/confirmation.php';
    }
}

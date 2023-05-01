<?php

namespace Project\Models;

/** Class Project **/
class Project
{
    private $ID_DESTINATION;
    private $LIBELLE_DESTINATION;
    private $DESCRIPTION_DESTINATION;
    private $PRIX_DESTINATION;
    private $TYPE_DESTINATION;
    private $ID_IMG;

    private $ID_RESERVATION;
    private $ID_USER;
    private $LIBELLE_RESERVATION;
    private $PARTICIPANT_RESERVATION;
    private $PRIX_RESERVATION;

    public function getIdDestination()
    {
        return $this->ID_DESTINATION;
    }

    public function getLibelleDestination()
    {
        return $this->LIBELLE_DESTINATION;
    }

    public function getDescriptionDestination()
    {
        return $this->DESCRIPTION_DESTINATION;
    }

    public function getPrixDestination()
    {
        return $this->PRIX_DESTINATION;
    }

    public function getTypeDestination()
    {
        return $this->TYPE_DESTINATION;
    }

    public function getIdImg()
    {
        return $this->ID_IMG;
    }

    public function setIdDestination(string $ID_DESTINATION)
    {
        $this->ID_DESTINATION = $ID_DESTINATION;
    }

    public function setLibelleDestination(string $LIBELLE_DESTINATION)
    {
        $this->LIBELLE_DESTINATION = $LIBELLE_DESTINATION;
    }

    public function setDescriptionDestination(string $DESCRIPTION_DESTINATION)
    {
        $this->DESCRIPTION_DESTINATION = $DESCRIPTION_DESTINATION;
    }

    public function setPrixDestination(int $PRIX_DESTINATION)
    {
        $this->PRIX_DESTINATION = $PRIX_DESTINATION;
    }

    public function setTypeDestination(string $TYPE_DESTINATION)
    {
        $this->TYPE_DESTINATION = $TYPE_DESTINATION;
    }

    public function setIdImg(string $ID_IMG)
    {
        $this->ID_IMG = $ID_IMG;
    }

    /**
     * Get the value of ID_RESERVATION
     */
    public function getIdReservation()
    {
        return $this->ID_RESERVATION;
    }

    /**
     * Set the value of ID_RESERVATION
     *
     * @return  self
     */
    public function setIdReservation($ID_RESERVATION)
    {
        $this->ID_RESERVATION = $ID_RESERVATION;

        return $this;
    }

    /**
     * Get the value of ID_USER
     */
    public function getIdUser()
    {
        return $this->ID_USER;
    }

    /**
     * Set the value of ID_USER
     *
     * @return  self
     */
    public function setIdUser($ID_USER)
    {
        $this->ID_USER = $ID_USER;

        return $this;
    }

    /**
     * Get the value of LIBELLE_RESERVATION
     */
    public function getLibelleReservation()
    {
        return $this->LIBELLE_RESERVATION;
    }

    /**
     * Set the value of LIBELLE_RESERVATION
     *
     * @return  self
     */
    public function setLibelleReservation($LIBELLE_RESERVATION)
    {
        $this->LIBELLE_RESERVATION = $LIBELLE_RESERVATION;

        return $this;
    }

    /**
     * Get the value of PARTICIPANT_RESERVATION
     */
    public function getParticipantReservation()
    {
        return $this->PARTICIPANT_RESERVATION;
    }

    /**
     * Set the value of PARTICIPANT_RESERVATION
     *
     * @return  self
     */
    public function setParticipantReservation($PARTICIPANT_RESERVATION)
    {
        $this->PARTICIPANT_RESERVATION = $PARTICIPANT_RESERVATION;

        return $this;
    }

    /**
     * Get the value of PRIX_RESERVATION
     */
    public function getPrixReservation()
    {
        return $this->PRIX_RESERVATION;
    }

    /**
     * Set the value of PRIX_RESERVATION
     *
     * @return  self
     */
    public function setPrixReservation($PRIX_RESERVATION)
    {
        $this->PRIX_RESERVATION = $PRIX_RESERVATION;

        return $this;
    }
}

<?php

class cita
{
    private $ID_Res;
    private $reserva;
    private $confReserva;
    private $usuarioReserva;
    private $fecha;

    /**
     * cita constructor.
     * @param $ID_Res
     * @param $reserva
     * @param $confReserva
     * @param $usuarioReserva
     * @param $fecha
     */
    public function __construct($ID_Res=" ", $reserva=" ", $confReserva=" ", $usuarioReserva=" ", $fecha=" ")
    {
        $this->ID_Res = $ID_Res;
        $this->reserva = $reserva;
        $this->confReserva = $confReserva;
        $this->usuarioReserva = $usuarioReserva;
        $this->fecha = $fecha;
    }

    /**
     * @return string
     */
    public function getIDRes(): string
    {
        return $this->ID_Res;
    }

    /**
     * @param string $ID_Res
     * @return cita
     */
    public function setIDRes(string $ID_Res): cita
    {
        $this->ID_Res = $ID_Res;
        return $this;
    }

    /**
     * @return string
     */
    public function getReserva(): string
    {
        return $this->reserva;
    }

    /**
     * @param string $reserva
     * @return cita
     */
    public function setReserva(string $reserva): cita
    {
        $this->reserva = $reserva;
        return $this;
    }

    /**
     * @return string
     */
    public function getConfReserva(): string
    {
        return $this->confReserva;
    }

    /**
     * @param string $confReserva
     * @return cita
     */
    public function setConfReserva(string $confReserva): cita
    {
        $this->confReserva = $confReserva;
        return $this;
    }

    /**
     * @return string
     */
    public function getUsuarioReserva(): string
    {
        return $this->usuarioReserva;
    }

    /**
     * @param string $usuarioReserva
     * @return cita
     */
    public function setUsuarioReserva(string $usuarioReserva): cita
    {
        $this->usuarioReserva = $usuarioReserva;
        return $this;
    }

    /**
     * @return string
     */
    public function getFecha(): string
    {
        return $this->fecha;
    }

    /**
     * @param string $fecha
     * @return cita
     */
    public function setFecha(string $fecha): cita
    {
        $this->fecha = $fecha;
        return $this;
    }


}
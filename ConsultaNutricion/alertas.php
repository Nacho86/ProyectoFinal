<?php

class alertas
{

    private $nombre;
    private $correo;
    private $num_Usuario;
    private $ID_Res;
    private $fecha;

    /**
     * alertaa constructor.
     * @param $nombre
     * @param $correo
     * @param $num_Usuario
     * @param $ID_Res
     * @param $fecha
     */
    public function __construct($nombre=" ", $correo=" ", $num_Usuario=" ", $ID_Res=" ", $fecha=" ")
    {
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->num_Usuario = $num_Usuario;
        $this->ID_Res = $ID_Res;
        $this->fecha = $fecha;
    }

    /**
     * @return string
     */
    public function getNombre(): string
    {
        return $this->nombre;
    }

    /**
     * @param string $nombre
     * @return alertaa
     */
    public function setNombre(string $nombre): alertaa
    {
        $this->nombre = $nombre;
        return $this;
    }

    /**
     * @return string
     */
    public function getCorreo(): string
    {
        return $this->correo;
    }

    /**
     * @param string $correo
     * @return alertaa
     */
    public function setCorreo(string $correo): alertaa
    {
        $this->correo = $correo;
        return $this;
    }

    /**
     * @return string
     */
    public function getNumUsuario(): string
    {
        return $this->num_Usuario;
    }

    /**
     * @param string $num_Usuario
     * @return alertaa
     */
    public function setNumUsuario(string $num_Usuario): alertaa
    {
        $this->num_Usuario = $num_Usuario;
        return $this;
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
     * @return alertaa
     */
    public function setIDRes(string $ID_Res): alertaa
    {
        $this->ID_Res = $ID_Res;
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
     * @return alertaa
     */
    public function setFecha(string $fecha): alertaa
    {
        $this->fecha = $fecha;
        return $this;
    }




}
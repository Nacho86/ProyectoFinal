<?php

class respuesta
{
	public $nom_usu;
	public $tex_res;
	public $fecha;
	public $ID_res;

    public function __construct($nom_usu=" ", $tex_res=" ", $fecha=" ", $ID_res=" ")
    {
        $this->nom_usu = $nom_usu;
        $this->tex_res = $tex_res;
        $this->fecha = $fecha;
        $this->ID_res = $ID_res;
    }

    /**
     * @return string
     */
    public function getNomUsu(): string
    {
        return $this->nom_usu;
    }

    /**
     * @param string $nom_usu
     * @return respuesta
     */
    public function setNomUsu(string $nom_usu): respuesta
    {
        $this->nom_usu = $nom_usu;
        return $this;
    }

    /**
     * @return string
     */
    public function getTexRes(): string
    {
        return $this->tex_res;
    }

    /**
     * @param string $tex_res
     * @return respuesta
     */
    public function setTexRes(string $tex_res): respuesta
    {
        $this->tex_res = $tex_res;
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
     * @return respuesta
     */
    public function setFecha(string $fecha): respuesta
    {
        $this->fecha = $fecha;
        return $this;
    }

    /**
     * @return string
     */
    public function getIDRes(): string
    {
        return $this->ID_res;
    }

    /**
     * @param string $ID_res
     * @return respuesta
     */
    public function setIDRes(string $ID_res): respuesta
    {
        $this->ID_res = $ID_res;
        return $this;
    }


}
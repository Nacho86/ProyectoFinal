<?php

class comentario
{
	public $num_art;
	public $num_usu;
	public $tex_com;
	public $fecha;
	public $ID_com;

    
    public function __construct($num_art=" ", $num_usu=" ", $tex_com=" ", $fecha=" ", $ID_com=" ")
    {
        $this->num_art = $num_art;
        $this->num_usu = $num_usu;
        $this->tex_com = $tex_com;
        $this->fecha = $fecha;
        $this->ID_com = $ID_com;
    }

    /**
     * @return string
     */
    public function getNumArt(): string
    {
        return $this->num_art;
    }

    /**
     * @param string $num_art
     * @return comentario
     */
    public function setNumArt(string $num_art): comentario
    {
        $this->num_art = $num_art;
        return $this;
    }

    /**
     * @return string
     */
    public function getNumUsu(): string
    {
        return $this->num_usu;
    }

    /**
     * @param string $num_usu
     * @return comentario
     */
    public function setNumUsu(string $num_usu): comentario
    {
        $this->num_usu = $num_usu;
        return $this;
    }

    /**
     * @return string
     */
    public function getTexCom(): string
    {
        return $this->tex_com;
    }

    /**
     * @param string $tex_com
     * @return comentario
     */
    public function setTexCom(string $tex_com): comentario
    {
        $this->tex_com = $tex_com;
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
     * @return comentario
     */
    public function setFecha(string $fecha): comentario
    {
        $this->fecha = $fecha;
        return $this;
    }

    /**
     * @return string
     */
    public function getIDCom(): string
    {
        return $this->ID_com;
    }

    /**
     * @param string $ID_com
     * @return comentario
     */
    public function setIDCom(string $ID_com): comentario
    {
        $this->ID_com = $ID_com;
        return $this;
    }


}
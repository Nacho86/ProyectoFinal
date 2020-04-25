<?php

class usuario
{
	public $nombre;
	public $correo;
	public $passw;
	public $num_Usuario;
	public $tipo;
    public $usu_Activo;

	public function __construct($nombre=" ",$correo=" ",$passw=" ",$num_Usuario=" ",$tipo="U", $usu_Activo="1")
	{
		$this->nombre=$nombre;
		$this->correo=$correo;
        $this->passw=$passw;
        $this->num_Usuario=$num_Usuario;
        $this->tipo=$tipo;
        $this->usu_Activo=$usu_Activo;
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
     * @return usuario
     */
    public function setNombre(string $nombre): usuario
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
     * @return usuario
     */
    public function setCorreo(string $correo): usuario
    {
        $this->correo = $correo;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassw(): string
    {
        return $this->passw;
    }

    /**
     * @param string $passw
     * @return usuario
     */
    public function setPassw(string $passw): usuario
    {
        $this->passw = $passw;
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
     * @return usuario
     */
    public function setNumUsuario(string $num_Usuario): usuario
    {
        $this->num_Usuario = $num_Usuario;
        return $this;
    }

    /**
     * @return string
     */
    public function getTipo(): string
    {
        return $this->tipo;
    }

    /**
     * @param string $tipo
     * @return usuario
     */
    public function setTipo(string $tipo): usuario
    {
        $this->tipo = $tipo;
        return $this;
    }
    /**
     * @return string
     */
    public function getUsu_Activo(): string
    {
        return $this->Usu_Activo;
    }

    /**
     * @param string $Usu_Activo
     * @return usuario
     */
    public function setUsu_Activo(string $Usu_Activo): usuario
    {
        $this->Usu_Activo = $Usu_Activo;
        return $this;
    }
}
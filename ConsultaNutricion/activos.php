<?php

class activos
{
    private $nombre;
    private $correo;
    private $passw;
    private $num_Usuario;
    private $tipo;
    private $usu_Activo;
    private $foto;
    private $telefono;
    private $fecha_nacimiento;
    private $direccion;
    private $DNI;
    private $ID_paciente;
    private $paciente_Activo;

    public function __construct($nombre=" ", $correo=" ", $passw=" ", $num_Usuario=" ", $tipo=" ", $usu_Activo=" ", $foto=" ", $telefono=" ", $fecha_nacimiento=" ", $direccion=" ", $DNI=" ", $ID_paciente=" ", $paciente_Activo=" ")
    {
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->passw = $passw;
        $this->num_Usuario = $num_Usuario;
        $this->tipo = $tipo;
        $this->usu_Activo = $usu_Activo;
        $this->foto = $foto;
        $this->telefono = $telefono;
        $this->fecha_nacimiento = $fecha_nacimiento;
        $this->direccion = $direccion;
        $this->DNI = $DNI;
        $this->ID_paciente = $ID_paciente;
        $this->paciente_Activo = $paciente_Activo;
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
     * @return activos
     */
    public function setNombre(string $nombre): activos
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
     * @return activos
     */
    public function setCorreo(string $correo): activos
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
     * @return activos
     */
    public function setPassw(string $passw): activos
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
     * @return activos
     */
    public function setNumUsuario(string $num_Usuario): activos
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
     * @return activos
     */
    public function setTipo(string $tipo): activos
    {
        $this->tipo = $tipo;
        return $this;
    }

    /**
     * @return string
     */
    public function getUsuActivo(): string
    {
        return $this->usu_Activo;
    }

    /**
     * @param string $usu_Activo
     * @return activos
     */
    public function setUsuActivo(string $usu_Activo): activos
    {
        $this->usu_Activo = $usu_Activo;
        return $this;
    }

    /**
     * @return string
     */
    public function getFoto(): string
    {
        return $this->foto;
    }

    /**
     * @param string $foto
     * @return activos
     */
    public function setFoto(string $foto): activos
    {
        $this->foto = $foto;
        return $this;
    }

    /**
     * @return string
     */
    public function getTelefono(): string
    {
        return $this->telefono;
    }

    /**
     * @param string $telefono
     * @return activos
     */
    public function setTelefono(string $telefono): activos
    {
        $this->telefono = $telefono;
        return $this;
    }

    /**
     * @return string
     */
    public function getFechaNacimiento(): string
    {
        return $this->fecha_nacimiento;
    }

    /**
     * @param string $fecha_nacimiento
     * @return activos
     */
    public function setFechaNacimiento(string $fecha_nacimiento): activos
    {
        $this->fecha_nacimiento = $fecha_nacimiento;
        return $this;
    }

    /**
     * @return string
     */
    public function getDireccion(): string
    {
        return $this->direccion;
    }

    /**
     * @param string $direccion
     * @return activos
     */
    public function setDireccion(string $direccion): activos
    {
        $this->direccion = $direccion;
        return $this;
    }

    /**
     * @return string
     */
    public function getDNI(): string
    {
        return $this->DNI;
    }

    /**
     * @param string $DNI
     * @return activos
     */
    public function setDNI(string $DNI): activos
    {
        $this->DNI = $DNI;
        return $this;
    }

    /**
     * @return string
     */
    public function getIDPaciente(): string
    {
        return $this->ID_paciente;
    }

    /**
     * @param string $ID_paciente
     * @return activos
     */
    public function setIDPaciente(string $ID_paciente): activos
    {
        $this->ID_paciente = $ID_paciente;
        return $this;
    }

    /**
     * @return string
     */
    public function getPacienteActivo(): string
    {
        return $this->paciente_Activo;
    }

    /**
     * @param string $paciente_Activo
     * @return activos
     */
    public function setPacienteActivo(string $paciente_Activo): activos
    {
        $this->paciente_Activo = $paciente_Activo;
        return $this;
    }


}

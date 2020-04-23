<?php

class paciente
{
    public $foto;
    public $telefono;
    public $fecha_nacimiento;
    public $direccion;
    public $DNI;
    public $ID_paciente;


    public function __construct($foto=" ", $telefono=" ", $fecha_nacimiento=" ", $direccion=" ", $DNI=" ", $ID_paciente=" ")
    {
        $this->foto = $foto;
        $this->telefono = $telefono;
        $this->fecha_nacimiento = $fecha_nacimiento;
        $this->direccion = $direccion;
        $this->DNI = $DNI;
        $this->ID_paciente = $ID_paciente;
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
     * @return paciente
     */
    public function setFoto(string $foto): paciente
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
     * @return paciente
     */
    public function setTelefono(string $telefono): paciente
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
     * @return paciente
     */
    public function setFechaNacimiento(string $fecha_nacimiento): paciente
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
     * @return paciente
     */
    public function setDireccion(string $direccion): paciente
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
     * @return paciente
     */
    public function setDNI(string $DNI): paciente
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
     * @return paciente
     */
    public function setIDPaciente(string $ID_paciente): paciente
    {
        $this->ID_paciente = $ID_paciente;
        return $this;
    }



}
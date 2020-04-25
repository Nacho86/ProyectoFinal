<?php 

class revision
{
    private $fecha;
    private $indice_cor;
    private $grasa_cor;
    private $masa_mag;
    private $peso;
    private $agua;
    private $observaciones;
    private $ID_paciente;
    private $ID_revision;

    
    public function __construct($fecha=" ", $indice_cor=" ", $grasa_cor=" ", $masa_mag=" ", $peso=" ", $agua=" ", $observaciones=" ", $ID_paciente=" ", $ID_revision=" ")
    {
        $this->fecha = $fecha;
        $this->indice_cor = $indice_cor;
        $this->grasa_cor = $grasa_cor;
        $this->masa_mag = $masa_mag;
        $this->peso = $peso;
        $this->agua = $agua;
        $this->observaciones = $observaciones;
        $this->ID_paciente = $ID_paciente;
        $this->ID_revision = $ID_revision;
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
     * @return revision
     */
    public function setFecha(string $fecha): revision
    {
        $this->fecha = $fecha;
        return $this;
    }

    /**
     * @return string
     */
    public function getIndiceCor(): string
    {
        return $this->indice_cor;
    }

    /**
     * @param string $indice_cor
     * @return revision
     */
    public function setIndiceCor(string $indice_cor): revision
    {
        $this->indice_cor = $indice_cor;
        return $this;
    }

    /**
     * @return string
     */
    public function getGrasaCor(): string
    {
        return $this->grasa_cor;
    }

    /**
     * @param string $grasa_cor
     * @return revision
     */
    public function setGrasaCor(string $grasa_cor): revision
    {
        $this->grasa_cor = $grasa_cor;
        return $this;
    }

    /**
     * @return string
     */
    public function getMasaMag(): string
    {
        return $this->masa_mag;
    }

    /**
     * @param string $masa_mag
     * @return revision
     */
    public function setMasaMag(string $masa_mag): revision
    {
        $this->masa_mag = $masa_mag;
        return $this;
    }

    /**
     * @return string
     */
    public function getPeso(): string
    {
        return $this->peso;
    }

    /**
     * @param string $peso
     * @return revision
     */
    public function setPeso(string $peso): revision
    {
        $this->peso = $peso;
        return $this;
    }

    /**
     * @return string
     */
    public function getAgua(): string
    {
        return $this->agua;
    }

    /**
     * @param string $agua
     * @return revision
     */
    public function setAgua(string $agua): revision
    {
        $this->agua = $agua;
        return $this;
    }

    /**
     * @return string
     */
    public function getObservaciones(): string
    {
        return $this->observaciones;
    }

    /**
     * @param string $observaciones
     * @return revision
     */
    public function setObservaciones(string $observaciones): revision
    {
        $this->observaciones = $observaciones;
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
     * @return revision
     */
    public function setIDPaciente(string $ID_paciente): revision
    {
        $this->ID_paciente = $ID_paciente;
        return $this;
    }

    /**
     * @return string
     */
    public function getIDRevision(): string
    {
        return $this->ID_revision;
    }

    /**
     * @param string $ID_revision
     * @return revision
     */
    public function setIDRevision(string $ID_revision): revision
    {
        $this->ID_revision = $ID_revision;
        return $this;
    }


}
<?php

class cita
{
	private $ID_usu;
	private $fecha;
	private $duracion;
    private $reserva;
	private $pago;

	public function __construct($ID_usu=" ",$fecha=" ",$duracion=" ",$reserva=" ",$pago="")
	{
		$this->ID_usu=$ID_usu;
		$this->fecha=$fecha;
		$this->duracion=$duracion;
		$this->pago=$pago;

	}

    /**
     * @return string
     */
    public function getIDUsu(): string
    {
        return $this->ID_usu;
    }

    /**
     * @param string $ID_usu
     * @return cita
     */
    public function setIDUsu(string $ID_usu): cita
    {
        $this->ID_usu = $ID_usu;
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

    /**
     * @return string
     */
    public function getDuracion(): string
    {
        return $this->duracion;
    }

    /**
     * @param string $duracion
     * @return cita
     */
    public function setDuracion(string $duracion): cita
    {
        $this->duracion = $duracion;
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
    public function getPago(): string
    {
        return $this->pago;
    }

    /**
     * @param string $pago
     * @return cita
     */
    public function setPago(string $pago): cita
    {
        $this->pago = $pago;
        return $this;
    }
}
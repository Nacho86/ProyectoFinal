<?php

class articulo
{
	private $titulo;
	private $resumen;
	private $imagen;
	private $contenido;
	private $fecha;
	private $cat1;
	private $cat2;
	private $ID_art;

	public function __construct($titulo=" ",$resumen=" ",$imagen=" ",$contenido=" ",$fecha=" ",$cat1=" ",$cat2=" ",$ID_art=" ")
	{
		$this->titulo=$titulo;
		$this->resumen=$resumen;
		$this->imagen=$imagen;
		$this->contenido=$contenido;
		$this->fecha=$fecha;
		$this->cat1=$cat1;
		$this->cat2=$cat2;
		$this->ID_art=$ID_art;
	}

/**
 * @return string
 */
public function getTitulo(): string
{
    return $this->titulo;
}/**
 * @param string $titulo
 * @return articulo
 */
public function setTitulo(string $titulo): articulo
{
    $this->titulo = $titulo;
    return $this;
}/**
 * @return string
 */
public function getResumen(): string
{
    return $this->resumen;
}/**
 * @param string $resumen
 * @return articulo
 */
public function setResumen(string $resumen): articulo
{
    $this->resumen = $resumen;
    return $this;
}/**
 * @return string
 */
public function getImagen(): string
{
    return $this->imagen;
}/**
 * @param string $imagen
 * @return articulo
 */
public function setImagen(string $imagen): articulo
{
    $this->imagen = $imagen;
    return $this;
}/**
 * @return string
 */
public function getContenido(): string
{
    return $this->contenido;
}/**
 * @param string $contenido
 * @return articulo
 */
public function setContenido(string $contenido): articulo
{
    $this->contenido = $contenido;
    return $this;
}/**
 * @return string
 */
public function getFecha(): string
{
    return $this->fecha;
}/**
 * @param string $fecha
 * @return articulo
 */
public function setFecha(string $fecha): articulo
{
    $this->fecha = $fecha;
    return $this;
}/**
 * @return string
 */
public function getCat1(): string
{
    return $this->cat1;
}/**
 * @param string $cat1
 * @return articulo
 */
public function setCat1(string $cat1): articulo
{
    $this->cat1 = $cat1;
    return $this;
}/**
 * @return string
 */
public function getCat2(): string
{
    return $this->cat2;
}/**
 * @param string $cat2
 * @return articulo
 */
public function setCat2(string $cat2): articulo
{
    $this->cat2 = $cat2;
    return $this;
}/**
 * @return string
 */
public function getIDArt(): string
{
    return $this->ID_art;
}/**
 * @param string $ID_art
 * @return articulo
 */
public function setIDArt(string $ID_art): articulo
{
    $this->ID_art = $ID_art;
    return $this;
}
}
<?php

class Pokemon
{
    private $numero_pokedex;
    private $nombre;
    private $tipo;
    private $descripcion;

    public function __construct($numero_pokedex, $nombre, $tipo, $descripcion)
    {
        $this->numero_pokedex = $numero_pokedex;
        $this->nombre = $nombre;
        $this->tipo = $tipo;
        $this->descripcion = $descripcion;
    }

    // Getters
    public function getNumeroPokedex() {
        return $this->numero_pokedex;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    // Setters
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

}
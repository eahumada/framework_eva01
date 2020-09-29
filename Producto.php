<?php

class Producto{

    private $id;
    private $codigo;
    private $categoria;
    private $sucursal;
    private $descripcion;
    private $cantidad;
    private $precio;

    function __construct($id,$codigo,$categoria,$sucursal,$descripcion,$cantidad,$precio) {
        $this->id=$id;
        $this->codigo=$codigo;
        $this->categoria=$categoria;
        $this->sucursal=$sucursal;
        $this->descripcion=$descripcion;
        $this->cantidad=$cantidad;
        $this->precio=$precio;
    }

    function getId() {
        return $this->id;
    }

    function getCodigo() {
        return $this->codigo;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getSucursal() {
        return $this->sucursal;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getCantidad() {
        return $this->cantidad;
    }

    function getPrecio() {
        return $this->precio;
    }

}

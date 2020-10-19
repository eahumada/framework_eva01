<?php

require_once "model/bd.php"; // copiar el codigo de la clase en el codigo actual.

class bodega_crud
{

    public function leer_producto($id) // parametros de la funcion.
    {
        $item = array('id_producto'=>'1',
        'codigo'=>'COD001',
        'nombre'=>'TECLADO GAMER',
        'id_categoria'=>1,
        'nombre_categoria'=>1,
        'id_sucursal'=>1,
        'nombre_sucursal'=>1,
        'cantidad'=>20,
        'precio'=>200,
        'estado'=>'X');
        $items = [$item];
        return $items;
    }

    public function desactivar_producto($id) // parametros de la funcion.
    {
        return 1;
    }

    public function eliminar_producto($id) // parametros de la funcion.
    {
        return 1;
    }

    public function insertar_producto($producto) // parametros de la funcion.
    {
        return 1;
    }

    public function update_producto($producto) // parametros de la funcion.
    {
        return 1;
    }    

    public function buscar_codigo($codigo)
    {
        return $this->leer_producto(1);
    }

    public function buscar_nombre($nombre)
    {
        return $this->leer_producto(1);
    }

    public function buscar_sucursal($nombre)
    {
        return $this->leer_producto(1);
    }

    public function listar_productos()
    {
        return $this->leer_producto(1);

    }

    public function listar_sucursales()
    {
        return [];
    }

    public function listar_categorias()
    {
        return [];
    }
}

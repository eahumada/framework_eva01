<?php

require_once "model/bodega.php";
require_once 'model/producto.php';

Class update_controller {
    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo = new stdClass();
        $this->modelo->criterio = "";
        $this->modelo->query = "";
        $this->modelo->producto  = new Producto();
        $this->modelo->mensaje = "";
    }

    public function inicio(){

        $bodega_crud =  new bodega_crud();

        $categorias = $bodega_crud->listar_categorias();
        $sucursales = $bodega_crud->listar_sucursales();

        if(!empty($_GET['id'])){
            $this->modelo->mensaje = 'Debe ingresar codigo';
            $id = $_GET['id'];
            $productos = $bodega_crud->leer_producto($id);
            foreach($productos as $row) {
                $id_producto=$row['id_producto'];
                $codigo=$row['codigo'];
                $nombre=$row['nombre'];
                $id_categoria=$row['id_categoria'];
                $id_sucursal=$row['id_sucursal'];
                $descripcion=$row['descripcion'];
                $cantidad=$row['cantidad'];
                $precio=$row['precio'];                    

                $producto  =new Producto();
                $producto->init(
                    $id_producto,
                    $codigo,
                    $nombre,
                    $id_categoria,
                    $id_sucursal,
                    $descripcion,
                    $cantidad,
                    $precio               
                );

                $this->modelo->producto=$producto;
                
            }
        }


        require_once "view/update/principal.php";
    }

    public function grabar() {
        
        if(empty($_POST['codigo'])){
            $this->modelo->mensaje = 'Debe ingresar codigo';
        }else if(empty ($_POST['categoria'])){
            $this->modelo->mensaje = 'Debe ingresar la categoria';
        }else if(empty($_POST['sucursal'])){
            $this->modelo->mensaje =  'Debe ingresar la sucursal';
        }else if(empty($_POST['nombre'])){
            $this->modelo->mensaje =  'Debe ingresar nombre';
        }else if(empty($_POST['descripcion'])){
            $this->modelo->mensaje =  'Debe ingresar la descripcion';
        }else if(empty($_POST['cantidad'])){
            $this->modelo->mensaje =  'Debe ingresar la cantidad';
        }else if(empty($_POST['precio'])){
            $this->modelo->mensaje =  'Debe ingresar el precio';
        }else{
        
            $id=0;
            $codigo=$_POST['codigo'];
            $nombre=$_POST['nombre'];
            $id_categoria=$_POST['categoria'];
            $id_sucursal=$_POST['sucursal'];
            $descripcion=$_POST['descripcion'];
            $cantidad=$_POST['cantidad'];
            $precio=$_POST['precio'];
            
            $producto = new producto();
            
            $producto->init($id,$codigo,$nombre,$id_categoria,$id_sucursal,$descripcion,$cantidad,$precio);
         
            $mensaje = "";
        
            $bodega_crud =  new bodega_crud();
        
            $filas = $bodega_crud->insertar_producto($producto);
        
            $mensaje .=  "<br>Insertados # $filas productos";

            $this->modelo->mensaje = $mensaje;
            
            require_once "view/update/grabar.php";

        }
    }
}
<?php
require_once 'Producto.php';

if(empty($_POST['id'])){
    echo 'Debe ingresar id';
}else if(empty($_POST['codigo'])){
    echo 'Debe ingresar codigo';
}else if(empty ($_POST['categoria'])){
    echo 'Debe ingresar la categoria';
}else if(empty($_POST['sucursal'])){
    echo 'Debe ingresar la sucursal';
}else if(empty($_POST['descripcion'])){
    echo 'Debe ingresar la descripcion';
}else if(empty($_POST['cantidad'])){
    echo 'Debe ingresar la cantidad';
}else if(empty($_POST['precio'])){
    echo 'Debe ingresar el precio';
}else{

    $id=$_POST['id'];
    $codigo=$_POST['codigo'];
    $categoria=$_POST['categoria'];
    $sucursal=$_POST['sucursal'];
    $descripcion=$_POST['descripcion'];
    $cantidad=$_POST['cantidad'];
    $precio=$_POST['precio'];
    
    $producto = new Producto($id,$codigo,$categoria,$sucursal,$descripcion,$cantidad,$precio);
 
    echo "<h1>Datos Ingresados:</h1>";

    echo "<br>ID:".$producto->getId();
    echo "<br>CODIGO:".$producto->getCodigo();
    echo "<br>CATEGORIA:".$producto->getCategoria();
    echo "<br>SUCURSAL:".$producto->getSucursal();
    echo "<br>DESCRIPCION:".$producto->getDescripcion();
    echo "<br>CANTIDAD:".$producto->getCantidad();
    echo "<br>PRECIO:".$producto->getPrecio();
    
}

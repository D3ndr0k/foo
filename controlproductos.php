<?php

include "config.php";
session_start();

if(!empty($_POST["submit"])){
  if (empty($_POST["codigo"]) or empty($_POST["nombre"]) or empty($_POST["descripcion"]) or empty($_POST["fechavencimiento"])or empty($_POST["precio"])or empty($_POST["marca"])){
    echo "<div class='alerta'> Completa todos los campos </div>";
  }else{

    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    $codigo = $_POST["codigo"];
    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];
    $fechavencimiento = $_POST["fechavencimiento"];
    $precio = $_POST["precio"];
    $marca = $_POST["marca"];
    $stock = $_POST["stock"];
    
    $sql=$conn->query("insert into productos(codigo,nombre,descripcion,fechavencimiento,precio,marca,imagen,stock) values('$codigo','$nombre','$descripcion','$fechavencimiento','$precio','$marca','$imagen','$stock')");
   if ($sql==1) {
    echo 'registrado';
   }else{
     echo 'error';
   }
 
  }

  }


?>
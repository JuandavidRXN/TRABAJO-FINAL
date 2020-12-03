<?php
include("Basedatos.php");
if(isset($_POST["boton"])){
    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $cedula=$_POST["cedula"];
    $descripcion=$_POST["descripcion"];
    $foto=$_POST["foto"];
    //echo($nombre."-".$apellido."-".$cedula."-".$descripcion);
    $operationBD=new BaseDatos();
     $consultaSQL="INSERT INTO usuarios(nombre,apellido,cedula,descripcion,foto) VALUES ('$nombre','$apellido','$cedula','$descripcion','$foto')";
  
   $operationBD->agregarDatos($consultaSQL);
  
}
?>
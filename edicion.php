<?php
    include("Basedatos.php");
if(isset($_POST["botonu"])){
    $id=$_GET["id"];
    
    $nombre=$_POST["nombreu"];
    $descripcion=$_POST["descripcionu"];

    $operationBD=new BaseDatos();
    
    $consultaSQL="UPDATE usuarios SET nombre='$nombre',descripcion='$descripcion' where codigousuario ='$id'";

    $operationBD->actualizarDatos($consultaSQL);
}

?>
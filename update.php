<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];
$mensaje=$_POST['mensaje'];

$sql="UPDATE form SET  nombre='$nombre',telefono='$telefono',email='$email',mensaje='$mensaje' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: admin.php");
    }
?>
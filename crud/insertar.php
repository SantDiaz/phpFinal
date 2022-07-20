<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];
$mensaje=$_POST['mensaje'];

$sql="INSERT INTO form VALUES('$id','$nombre','$telefono','$email', '$mensaje')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: alumno.php");
    
}else {
}
?>
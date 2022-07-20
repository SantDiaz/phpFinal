<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];
$mensaje=$_POST['mensaje'];

$consulta="INSERT INTO form VALUES('$id','$nombre','$telefono','$email', '$mensaje')";
$query= mysqli_query($con,$consulta);

if($query){
    Header("Location: admin.php");
    
}else {
}
?>
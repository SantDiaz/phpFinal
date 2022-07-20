<?php 
include( 'conexion.php ');
$USUARIO=$_POST['usuario'];
$PASSWORD=$_POST['password'];
session_start();
// $_SESSION['usuario']=$USUARIO
// $consulta = "SELECT * FROM login WHERE user='$USUARIO'  ";
// $res = mysqli_query($consulta);
// $num=$res->num_rows;

// if ($num>0) {

// }else{
//     echo "ESTE USUARIO NO EXISTE";
// }

$conexion=mysqli_connect( "localhost","root","","iiee") or die ("ERROR".mysql_error());
$consulta = "SELECT * FROM login WHERE user='$USUARIO' and password='$PASSWORD'  ";
$res = mysqli_query($conexion, $consulta);
$filas= mysqli_num_rows($res);

if($filas){
    echo "funciona";
    header("location: index.php");
}else{
    include('acercade.html');
    echo "nofunciona";
    ?>
    <?php
}

mysqli_fre_result($res);
mysqli_close($conexion);

?>
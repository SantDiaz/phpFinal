<?php
function conectar(){
    $user="root";
    $pass="";
    $host="localhost";
    $bd="iiee";
    
    $conexion=mysqli_connect($host,$user,$pass,$bd) or die ("ERROR".mysql_error());
    $con=$conexion;
    mysqli_select_db($con,$bd);

    return $con;

    if($con){
            echo "SI";
    }else{
            echo "NO";
    }
}

// $conexion=mysqli_connect( "localhots","root","","iiee", );
?>

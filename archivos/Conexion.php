<?php

$hostname='127.0.0.1';
$database='imss';
$username='root'; 
$password='';


$conexion=mysqli_connect($hostname,$username,$password,$database);

if ($conexion->connect_errno) { 
	echo "Lo sentimos, el sitio web está experimentando problemas";
}
?>
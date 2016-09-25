<?php 
session_start()
include_once ('includes/database.ini')
// datos para la coneccion a mysql 
$name=$_POST['nombre'];
$user=$_POST['usuario'];
$password=$_POST['password'];
$repassword=$_POST['repassword'];
$email=$_POST['email'];
//llamando funciones
$conexion=mysql_connect('SERVER,USER,PASSWORD') or die ('Imposible de conectar al servidor');
mysql_select_db ('NAMEBDD') or die ('Error seleccionando la base de datos');
$datos= "INSERT INTO usuarios(name,username,password,email) VALUES ('$name','$user','$password','$email')";
mysql_query($datos) or die('No se ha podido enviar los datos');
mysql_close($conexion);
?>
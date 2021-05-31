<?php

$usuario =  
$contraseña = 
$baseDatos = 

$sql = "INSERT INTO Datos (nombre, apellido, edad, fechaNacimiento, email) VALUES ($_POST["nombre"], $_POST["apellido"], $_POST["edad"], $_POST["fechaNacimiento"], $_POST["email"])";



if($_POST){

    
    $conexion = new mysqli('localhost', '$usuario', '$contraseña', '$baseDatos');



    



}




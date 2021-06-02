<?php

if($_POST){

    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $edad = $_POST["edad"];
    $fechaNacimiento = $_POST["fechaNacimiento"];
    $email = $_POST["email"];
    
    $host = 'localhost';
    $usuario = 'root';
    $pwd = '';
    $BD = 'test';
    
     
    $conexion = new mysqli('$host', '$usuario', '$pwd', '$BD');

    $sql = "INSERT INTO datos(nombre, apellido, edad, fechaNacimiento, email) VALUES ('$nombre', '$apellido', '$edad', '$fechaNacimiento', '$email')";
    
    <if($conexion->query($sql)){
    
    echo "Registro exitoso.";
    
    
    }else echo "Fallo al registrar datos.";
    
    
    }



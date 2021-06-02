<?php

<?php

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$edad = $_POST["edad"];
$fechaNacimiento = $_POST["fechaNacimiento"];
$email = $_POST["email"];




if(comprobarCamposCompletos($nombre, $apellido, $edad, $fechaNacimiento, $email) && validarEdad($edad) && validarNombreApellido($nombre, $apellido)) {

$host = 'localhost';
$usuario = 'root';
$pwd = '';
$BD = 'test';

 
$conexion = new mysqli($host, $usuario, $pwd, $BD);

$sql = "INSERT INTO datos(nombre, apellido, edad, fechaNacimiento, email) VALUES ('$nombre', '$apellido', '$edad', '$fechaNacimiento', '$email')";

if($conexion->query($sql)){

echo "Persona agregada correctamente";


}else echo "Fallo al registrar datos.";





}else echo "error";





function comprobarCamposCompletos ($nombre, $apellido, $edad, $fechaNacimiento, $email){

if($nombre !== "" && $apellido !== "" && $edad !== "" && $fechaNacimiento !== "" && $email){

return TRUE;

}



}



function validarNombreApellido($nombre, $apellido){

return ($nombre==$apellido?FALSE:TRUE);

}


function validarEdad($edad){

return is_numeric($edad);


}


<?php
include('conexion.php');

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$genero_id = $_POST['genero'];
$profesion_id = $_POST['profesion'];

$sql = "INSERT INTO usuarios (nombre, apellido, edad, genero_id, profesion_id) 
        VALUES ('$nombre', '$apellido', '$edad', '$genero_id', '$profesion_id')";

if ($conn->query($sql) === TRUE) {
    echo "Usuario registrado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

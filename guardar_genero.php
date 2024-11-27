<?php
include('conexion.php');

$genero_nombre = $_POST['genero_nombre'];

$sql = "INSERT INTO generos (nombre) VALUES ('$genero_nombre')";

if ($conn->query($sql) === TRUE) {
    echo "Género agregado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
    
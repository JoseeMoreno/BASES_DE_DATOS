<?php
include('conexion.php');

$profesion_nombre = $_POST['profesion_nombre'];

$sql = "INSERT INTO profesiones (nombre) VALUES ('$profesion_nombre')";

if ($conn->query($sql) === TRUE) {
    echo "Profesión agregada correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

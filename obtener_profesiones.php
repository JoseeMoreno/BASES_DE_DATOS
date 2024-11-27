<?php
include('conexion.php');

$sql = "SELECT * FROM profesiones";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo "<option value='" . $row['id'] . "'>" . $row['nombre'] . "</option>";
}

$conn->close();
?>

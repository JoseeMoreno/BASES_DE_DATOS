<?php
include('conexion.php');

$sql = "SELECT u.id, u.nombre, u.apellido, u.edad, g.nombre AS genero, p.nombre AS profesion 
        FROM usuarios u
        JOIN generos g ON u.genero_id = g.id
        JOIN profesiones p ON u.profesion_id = p.id";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<span style='margin-right: 20px;'>Nombre: " . $row["nombre"] . "</span>";
        echo "<span style='margin-right: 20px;'>Apellido: " . $row["apellido"] . "</span>";
        echo "<span style='margin-right: 20px;'>Edad: " . $row["edad"] . "</span>";
        echo "<span style='margin-right: 20px;'>Género: " . $row["genero"] . "</span>";
        echo "<span style='margin-right: 20px;'>Profesión: " . $row["profesion"] . "</span>";
        
        echo "<button class='delete-btn' data-id='" . $row['id'] . "'>Eliminar</button><br><br>";  
    }
} else {
    echo "No hay registros";
}

$conn->close();
?>

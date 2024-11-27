<?php
include('conexion.php');

if (isset($_POST['id'])) {
    $user_id = $_POST['id'];

    $sql = "DELETE FROM usuarios WHERE id = $user_id";

    if ($conn->query($sql) === TRUE) {
        echo "Usuario eliminado correctamente";
    } else {
        echo "Error al eliminar el usuario: " . $conn->error;
    }

    $conn->close();
}
?>

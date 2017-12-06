<?php
include 'connection.php';

$sql = "DELETE FROM MARCA WHERE id_marca='".$_GET["id"]."'";

if ($conn->query($sql) === TRUE) {
    echo "Marca apagada com sucesso.";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
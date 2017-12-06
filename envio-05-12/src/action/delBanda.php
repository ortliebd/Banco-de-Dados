<?php
include 'connection.php';

$sql = "DELETE FROM BANDA WHERE id_banda='".$_GET["id"]."'";

if ($conn->query($sql) === TRUE) {
    echo "Banda apagada com sucesso.";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
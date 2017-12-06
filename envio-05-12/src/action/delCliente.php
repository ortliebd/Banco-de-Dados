<?php
include 'connection.php';

$sql = "DELETE FROM CLIENTE WHERE cpf='".$_GET["cpf"]."'";

if ($conn->query($sql) === TRUE) {
    echo "Cliente apagado com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<?php
include 'connection.php';

$sql = "INSERT INTO CLIENTE(cpf, nome, telefone) VALUES($_GET[cpf], '$_GET[nome]', '$_GET[telefone]')";

if ($conn->query($sql) === TRUE) {
    echo "Cliente inserido com sucesso.";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
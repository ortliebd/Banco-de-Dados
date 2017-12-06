<?php
include 'connection.php';

$sql = "INSERT INTO BANDA(nome_banda, fk_cliente) VALUES('$_GET[nome]', $_GET[cliente])";

if ($conn->query($sql) === TRUE) {
    echo "Banda inserida com sucesso.";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
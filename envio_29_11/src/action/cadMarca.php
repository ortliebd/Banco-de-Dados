<?php
include 'connection.php';

$sql = "INSERT INTO MARCA(nome_marca) VALUES('$_GET[marca]')";

if ($conn->query($sql) === TRUE) {
    echo "Marca inserida com sucesso.";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<?php
include 'openConnection.php';

$sql = "INSERT INTO MARCA(nome_marca) VALUES('$_POST[marca]')";

if ($conn->query($sql) === TRUE) {
    echo "deu bão";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
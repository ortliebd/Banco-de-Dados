<?php

include 'connection.php';

$sql = "INSERT INTO CAT_RECURSO(nome_cat_recurso) VALUES('$_GET[categoria]')";

if ($conn->query($sql) === TRUE) {
    echo "Categoria inserida com sucesso.";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
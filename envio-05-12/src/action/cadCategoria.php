<?php

include 'connection.php';

$sql = "INSERT INTO CAT_PRODUTO(nome_cat_produto) VALUES('$_GET[categoria]')";

if ($conn->query($sql) === TRUE) {
    echo "Categoria inserida com sucesso.";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
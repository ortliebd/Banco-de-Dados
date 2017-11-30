<?php
include 'connection.php';

$sql = "UPDATE CAT_PRODUTO SET nome_cat_produto = '$_GET[catProd]' WHERE id_cat_produto = $_GET[idCat]";

if ($conn->query($sql) === TRUE) {
    echo "Registro alterado com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
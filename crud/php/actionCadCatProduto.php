<?php
include 'openConnection.php';

$sql = "INSERT INTO CAT_PRODUTO(nome_cat_produto)
VALUES('$_POST[catProd]')";

if ($conn->query($sql) === TRUE) {
    echo "deu bão";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

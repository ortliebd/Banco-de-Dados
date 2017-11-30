<?php
include 'connection.php';

$sql = "INSERT INTO PRODUTO(id_produto, nome_produto, preco_compra, preco_venda, qtd_produto, fk_marca, fk_cat_produto) VALUES($_GET[codBarra], '$_GET[desc]', '$_GET[precoCompra]', '$_GET[precoVenda]', '$_GET[qtd]', $_GET[marca], $_GET[categoria])";

if ($conn->query($sql) === TRUE) {
    echo "Produto inserido com sucesso.";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
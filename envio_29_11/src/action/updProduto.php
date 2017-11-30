<?php
include 'connection.php';
   
$sql = "UPDATE PRODUTO SET nome_produto = '$_GET[desc]', preco_compra = '$_GET[precoCompra]', preco_venda = '$_GET[precoVenda]', qtd_produto = '$_GET[qtd]', fk_marca = $_GET[marca], fk_cat_produto = $_GET[categoria] WHERE id_produto = $_GET[id]";
   
if ($conn->query($sql) === TRUE) {
    echo "Produto alterado com sucesso.";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

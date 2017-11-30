<?php
include '../action/connection.php';

$sql = "SELECT P.id_produto, P.nome_produto, P.preco_compra, P.preco_venda, P.qtd_produto, C.nome_cat_produto
FROM PRODUTO P, CAT_PRODUTO C
WHERE id_produto = 1
OR nome_produto = '1'
OR preco_compra = '1'
OR preco_venda = '1'
OR qtd_produto = 1";
$result = $conn->query($sql);

echo "<div class='container'>";
echo "<table>";
echo "<tr>";
echo "<th>Código de barras</th>";
echo "<th>Descrição</th>";
echo "<th>Preço de compra</th>";
echo "<th>Preço de venda</th>";
echo "<th>Quantidade</th>";
echo "<th>Marca</th>";
echo "<th>Categoria</th>";
echo "</tr>";

while($row = mysqli_fetch_array($result)) {
	$id = $row['id_produto'];
	$desc = $row['nome_produto'];
    $preco_compra = $row['preco_compra'];
    $preco_venda = $row['preco_venda'];
    $qtd = $row['qtd_produto'];
    $marca = $row[''];
    $cat = $row['nome_cat_produto'];
    
	echo "<tr>";
    echo "<td><label id='id' value='$id'>".$id."</td>";
    echo "<td><label id='desc' value='$desc'>".$desc."</td>";
    echo "<td><label id='precoCompra' value='$preco_compra'>".$preco_compra."</td>";
    echo "<td><label id='precoVenda' value='$preco_venda'>".$preco_venda."</td>";
    echo "<td><label id='qtd' value='$qtd'>".$qtd."</td>";
    $sql_marca = "SELECT nome_marca FROM MARCA WHERE id_marca=$marca";
    $result_marca = $conn->query($sql_marca);
    $row_marca = mysqli_fetch_array($result_marca);
    echo "<td><label id='marca' value='$row_marca[nome_marca]'>".$row_marca[nome_marca]."</td>";
    echo "<td><label id='cat' value='$row[nome_cat_produto]'>".$cat[nome_cat_produto]."</td>";
    echo "<td><input type='button' onclick='submitDelProduto($id, 0)' value='excluir'>";
    echo "<input type='submit' onclick='loadUpdProduto($id)' value='alterar'></td>";
    echo "</tr>";
    
}


echo "</table>";
echo "</div>";

$conn->close();    
?>
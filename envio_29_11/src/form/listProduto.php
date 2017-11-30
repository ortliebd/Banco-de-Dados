<?php
include '../action/connection.php';
$sqlProd = "SELECT * FROM PRODUTO";
$resultProd = $conn->query($sqlProd);

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

while($row = mysqli_fetch_array($resultProd)) {
	$id = $row['id_produto'];
	$desc = $row['nome_produto'];
    $preco_compra = $row['preco_compra'];
    $preco_venda = $row['preco_venda'];
    $qtd = $row['qtd_produto'];
    $marca = $row['fk_marca'];
    $cat = $row['fk_cat_produto'];
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
    $sql_categoria = "SELECT nome_cat_produto FROM CAT_PRODUTO WHERE id_cat_produto=$cat";
    $result_cat = $conn->query($sql_categoria);
    $row_cat = mysqli_fetch_array($result_cat);
    echo "<td><label id='cat' value='$row_cat[nome_cat_produto]'>".$row_cat[nome_cat_produto]."</td>";
    echo "<td><input type='button' onclick='submitDelProduto($id, 0)' value='excluir'>";
    echo "<input type='submit' onclick='loadUpdProduto($id)' value='alterar'></td>";
    echo "</tr>";
    
}
echo "</table>";
echo "</div>";

$conn->close();
?>
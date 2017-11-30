<?php
include '../action/connection.php';

$sql = "SELECT * FROM CAT_PRODUTO WHERE nome_cat_produto = '$_GET[cat]'";
$result = $conn->query($sql);

echo "<div class='container'>";
echo "<table>";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>Categoria</th>";
echo "</tr>";

while($row = mysqli_fetch_array($result)) {
	$id_cat = $row['id_cat_produto'];
	$nome_cat = $row['nome_cat_produto'];
	echo "<tr>";
	echo "<td><label id='idCat' name='idCat' value='$id_cat'>".$id_cat."</td>";
	echo "<td><label id='catProd' name='catProd' value='$nome_cat'>".$nome_cat."</td>";
	echo "<td><input type='button' onclick='submitDelCategoria($id_cat, 1)' value='excluir'>";
    echo "<input type='submit' onclick='loadUpdCategoria($id_cat)' value='alterar'></td>";
	echo "</tr>";
}
echo "</table>";
echo "</div>";

$conn->close();    
?>
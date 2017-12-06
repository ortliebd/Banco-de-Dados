<?php
include '../action/connection.php';

$sql = "SELECT * FROM MARCA WHERE nome_marca = '$_GET[marca]'";
$result = $conn->query($sql);

echo "<div class='container'>";
echo "<table>";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>Categoria</th>";
echo "</tr>";

while($row = mysqli_fetch_array($result)) {
	$id_marca = $row['id_marca'];
	$nome_marca = $row['nome_marca'];
	echo "<tr>";
	echo "<td><label id='idMarca' value='$id_marca'>".$id_marca."</td>";
	echo "<td><label id='marca' value='$nome_marca'>".$nome_marca."</td>";
	echo "<td><input type='button' onclick='submitDelMarca($id_marca, 1)' value='excluir'>";
    echo "<input type='submit' onclick='loadUpdMarca($id_marca)' value='alterar'></td>";
	echo "</tr>";
}
echo "</table>";
echo "</div>";

$conn->close();    
?>
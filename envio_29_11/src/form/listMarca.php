<?php
include '../action/connection.php';

$sql = "SELECT * FROM MARCA";
$result = $conn->query($sql);

echo "<div class='container'>";
echo "<table>";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>Marca</th>";
echo "</tr>";

while($row = mysqli_fetch_array($result)) {
	$id_marca = $row['id_marca'];
	$nome_marca = $row['nome_marca'];
	echo "<tr>";
    echo "<td><label id='idMarca' name='idMarca' value='$id_marca'>".$id_marca."</td>";
    echo "<td><label id='marca' name='marca' value='$nome_marca'>".$nome_marca."</td>";
    echo "<td><input type='button' onclick='submitDelMarca($id_marca)' value='excluir'>";
    echo "<input type='submit' onclick='loadUpdMarca($id_marca)' value='alterar'></td>";
    echo "</tr>";
}
echo "</table>";
echo "</div>";

$conn->close();
?>
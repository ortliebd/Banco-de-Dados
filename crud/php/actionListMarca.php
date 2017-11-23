<!DOCTYPE html>
<html>
  <body>
    <div class="container">
      <?php
      include 'openConnection.php';
$sql = "SELECT * FROM MARCA";
$result = $conn->query($sql);

echo "<table>
	<tr>
	  <th>Id</th>
	  <th>Marca</th>
	</tr>";
while($row = mysqli_fetch_array($result)) {
	$id_marca = $row['id_marca'];
	$nome_marca = $row['nome_marca'];
	echo "<tr>";
    echo "<td><label id='idMarca' name='idMarca' value='$id_marca'>".$id_marca."</td>";
    echo "<td><label id='marca' name='marca' value='$nome_marca'>".$nome_marca."</td>";
    echo "<td><input type='button' onclick='loadDelMarca($id_marca)' value='excluir'>
            <input type='submit' onclick='loadUpdMarca($id_marca)' value='alterar'></td>";
        echo "</tr>";
}
echo "</table>";
$conn->close();
?>
</div>
</body>
</html>

<div class="container">
    <?php
          include 'openConnection.php';
$sql = "SELECT * FROM CAT_PRODUTO";
$result = $conn->query($sql);

echo "<table>
<tr>
<th>Id</th>
<th>Categoria</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
	$id_cat = $row['id_cat_produto'];
	$nome_cat = $row['nome_cat_produto'];
	echo "<tr>";
	echo "<td><label id='idCat' name='idCat' value='$id_cat'>".$id_cat."</td>";
	echo "<td><label id='catProd' name='catProd' value='$nome_cat'>".$nome_cat."</td>";
	echo "<td><input type='button' 
                onclick='loadDelCatProd($id_cat)' value='excluir'>
               <input type='submit' 
                onclick='loadUpdCatProd($id_cat)'
                value='alterar'></td>";
	echo "</tr>";
    }
    echo "</table>";
    $conn->close();
    ?>
</div>
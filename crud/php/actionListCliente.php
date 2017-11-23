<div class="container">
<?php
session_start();
include 'openConnection.php';
$sql = "SELECT * FROM CLIENTE";
$result = $conn->query($sql);

echo "<table>
	<tr>
	  <th>Id</th>
	  <th>Marca</th>
	</tr>";
while($row = mysqli_fetch_array($result)) {
	$cpf = $row['cpf'];
	$nome = $row['nome'];
    $telefone = $row['telefone'];
    $_SESSION["cpf"] =  $cpf;
    $_SESSION["nome"] =  $nome;
    $_SESSION["telefone"] =  $telefone;
	echo "<tr>";
    echo "<td><label id='cpf' name='cpf' value='$cpf'>".$cpf."</td>";
    echo "<td><label id='nome' name='nome' value='$nome'>".$nome."</td>";
    echo "<td><label id='telefone' name='telefone' value='$telefone'>".$telefone."</td>";
    echo "<td><input type='button' onclick='loadDelCliente($cpf)' value='excluir'>";
    echo "<input type='submit' onclick='loadUpdCliente()' value='alterar'></td>";
    echo "</tr>";
    
}
echo "</table>";
$conn->close();
?>
</div>

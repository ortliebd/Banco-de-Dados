<?php
include '../action/connection.php';

$q = $_GET[tag];

$sql = "SELECT * FROM CLIENTE  WHERE cpf = '$q' OR nome = '$q' OR telefone = '$q'";
$result = $conn->query($sql);

echo "<div class='container'>";
echo "<table>";
echo "<tr>";
echo "<th>CPF</th>";
echo "<th>Nome</th>";
echo "<th>Telefone</th>";
echo "</tr>";

while($row = mysqli_fetch_array($result)) {
	$cpf = $row['cpf'];
	$nome = $row['nome'];
    $telefone = $row['telefone'];
	echo "<tr>";
	echo "<td><label id='cpf' value='$cpf'>".$cpf."</td>";
	echo "<td><label id='nome' value='$nome'>".$nome."</td>";
    echo "<td><label id='telefone' value='$telefone'>".$telefone."</td>";
	echo "<td><input type='button' onclick='submitDelCliente($cpf, 0)' value='excluir'>";
    echo "<input type='submit' onclick='loadUpdCliente($cpf)' value='alterar'></td>";
	echo "</tr>";
}
echo "</table>";
echo "</div>";

$conn->close();    
?>
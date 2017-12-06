<?php
include '../action/connection.php';
$sql = "SELECT * FROM CLIENTE";
$result = $conn->query($sql);

echo "<div class='container'>";
echo "<table>";
echo "<tr>";
echo "<th>CPF</th>";
echo "<th>Cliente</th>";
echo "<th>Telefone</th>";
echo "</tr>";

while($row = mysqli_fetch_array($result)) {
	$cpf = $row['cpf'];
	$nome = $row['nome'];
    $telefone = $row['telefone'];
	echo "<tr>";
    echo "<td><label id='cpf' name='cpf' value='$cpf'>".$cpf."</td>";
    echo "<td><label id='nome' name='nome' value='$nome'>".$nome."</td>";
    echo "<td><label id='telefone' name='telefone' value='$telefone'>".$telefone."</td>";
    echo "<td><input type='button' onclick='submitDelCliente($cpf)' value='excluir'>";
    echo "<input type='submit' onclick='loadUpdCliente($cpf)' value='alterar'></td>";
    echo "</tr>";
    
}
echo "</table>";
echo "</div>";

$conn->close();
?>
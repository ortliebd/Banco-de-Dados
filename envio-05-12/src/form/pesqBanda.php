<?php
include '../action/connection.php';

$q = $_GET[tag];

$sql = "
 SELECT id_banda, nome_banda, fk_cliente
 FROM BANDA 
 WHERE id_banda = '$q'
	OR nome_banda = '$q'
    OR fk_cliente IN (SELECT C.cpf FROM CLIENTE C, BANDA B WHERE C.cpf = B.fk_cliente AND C.nome = '$q')
    OR fk_cliente = '$q'
";

$result = $conn->query($sql);

echo "<div class='container'>";
echo "<table>";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>Nome</th>";
echo "<th>CPF</th>";
echo "<th>Cliente</th>";
echo "</tr>";

while($row = mysqli_fetch_array($result)) {
	$id = $row['id_banda'];
	$nome = $row['nome_banda'];
    $cliente = $row['fk_cliente'];    
	echo "<tr>";
    echo "<td><label id='id' value='$id'>".$id."</td>";
    echo "<td><label id='nome' value='$nome'>".$nome."</td>";
    echo "<td><label id='cpf' value='$cliente'>".$cliente."</td>";
    $sql_cliente = "SELECT nome FROM CLIENTE WHERE cpf = $cliente";
    $result_cliente = $conn->query($sql_cliente);
    $row_cliente = mysqli_fetch_array($result_cliente);
    echo "<td><label id='cliente' value='$row_cliente[nome]'>".$row_cliente[nome]."</td>";
    echo "<td><input type='button' onclick='submitDelBanda($id, 1)' value='excluir'>";
    echo "<input type='submit' onclick='loadUpdBanda($id)' value='alterar'></td>";
    echo "</tr>";
    
}

echo "</table>";
echo "</div>";

$conn->close();    
?>
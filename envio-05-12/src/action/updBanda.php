<?php
include 'connection.php';
   
$sql = "UPDATE BANDA SET nome_banda = '$_GET[nome]', fk_cliente = '$_GET[cliente]' WHERE id_banda = $_GET[id]";
   
if ($conn->query($sql) === TRUE) {
    echo "Banda alterada com sucesso.";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

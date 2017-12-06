<?php
include 'connection.php';
   
$sql = "UPDATE CLIENTE SET nome = '$_GET[nome]', telefone = '$_GET[telefone]' WHERE cpf = $_GET[cpf]";
   
if ($conn->query($sql) === TRUE) {
    echo "Cliente alterado com sucesso.";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<?php
include 'connection.php';
   
$sql = "UPDATE MARCA SET nome_marca = '$_GET[marca]' WHERE id_marca = $_GET[id]";
   
if ($conn->query($sql) === TRUE) {
    echo "Marca alterada com sucesso.";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

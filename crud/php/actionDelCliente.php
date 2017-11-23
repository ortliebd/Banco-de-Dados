<?php
include 'openConnection.php';

$q = intval($_GET['q']);
$sql = "DELETE FROM CLIENTE WHERE cpf='".$q."'";

if ($conn->query($sql) === TRUE) {
    echo "Registro apagado com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
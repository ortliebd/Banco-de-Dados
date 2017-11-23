<?php
include 'openConnection.php';

$q = intval($_GET['q']);
$sql = "DELETE FROM CAT_PRODUTO WHERE id_cat_produto='".$q."'";

if ($conn->query($sql) === TRUE) {
    echo "Registro apagado com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
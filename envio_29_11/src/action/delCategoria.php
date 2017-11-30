<?php
include 'connection.php';

$sql = "DELETE FROM CAT_PRODUTO WHERE id_cat_produto='".$_GET["id"]."'";

if ($conn->query($sql) === TRUE) {
    echo "Categoria apagada com sucesso.";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
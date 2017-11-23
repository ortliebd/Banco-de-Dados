<div class="div">

<?php
include 'openConnection.php';

echo $_POST[catProd];

$q = intval($_GET['q']);
echo $q;
$sql = "UPDATE CAT_PRODUTO
        SET nome_cat_produto = '$_POST[catProd]'
        WHERE id_cat_produto = $q";

if ($conn->query($sql) === TRUE) {
    echo "Registro inserido com sucesso sqn!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

</div>
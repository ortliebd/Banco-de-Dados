<?php
include 'connection.php';

$sql = "INSERT INTO RECEITA(fk_cat_recurso, fk_cliente, valor, recebido_em, parcelas, fk_ap_receita) VALUES($_GET[recurso], $_GET[cliente], $_GET[valor], '$_GET[data]', $_GET[parcelas], $_GET[aplicacao])";

if ($conn->query($sql) === TRUE) {
    echo "Receita inserida com sucesso.";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
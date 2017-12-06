<?php
include 'connection.php';

$sql = "INSERT INTO DESPESA(valor, pago_em, parcelas, fk_cat_recurso) VALUES($_GET[valor], '$_GET[data]', $_GET[parcelas], $_GET[recurso])";

if ($conn->query($sql) === TRUE) {
    echo "Despesa inserida com sucesso.";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
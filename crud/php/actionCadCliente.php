<!DOCTYPE html>
<html>
<body>

<?php
include 'openConnection.php';

$sql = "INSERT INTO CLIENTE(cpf, nome, telefone) VALUES($_POST[cpf], '$_POST[nome]', '$_POST[telefone]')";

if ($conn->query($sql) === TRUE) {
    echo "deu bão";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

</body>
</html>
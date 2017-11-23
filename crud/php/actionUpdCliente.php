<?php
   include 'openConnection.php';
   
   $sql = "UPDATE CLIENTE
           SET nome = '$_POST[nome]', telefone = '$_POST[telefone]'
           WHERE cpf = $_POST[cpf]";
   
   if ($conn->query($sql) === TRUE) {
echo "Registro inserido com sucesso sqn!";
} else {
echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<?php
   include 'openConnection.php';
   
   echo $_POST[catProd];
   
   $q = intval($_GET['q']);
   echo $q;
   $sql = "UPDATE MARCA
           SET nome_marca = '$_POST[marca]'
           WHERE id_marca = $q";
   
   if ($conn->query($sql) === TRUE) {
echo "Registro inserido com sucesso sqn!";
} else {
echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

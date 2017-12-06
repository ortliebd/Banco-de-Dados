<?php
include 'connection.php';

$hora = $_GET[horaInicio];
$duracao=$_GET[duracao];
$data = $_GET[dataInicio];
$meses = $_GET[meses];
$banda = $_GET[banda];

echo $hora;
echo $duracao;
echo $data;
echo $meses;

$sql = "INSERT INTO HORARIO(hora, dia, fk_banda) VALUES($hora, $data, $banda)";

if ($conn->query($sql) === TRUE) {
    echo "Banda inserida com sucesso.";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<?php

setlocale(LC_MONETARY, 'pt_BR.utf-8');

include '../action/connection.php';
$sqlReceita = "SELECT * FROM RECEITA";
$resultReceita = $conn->query($sqlReceita);
$valorRecebidoTotal = 0;
$valorFaltanteTotal = 0;

echo "<div class='container'>";
echo "<table>";
echo "<tr>";
echo "<th>Valor total</th>";
echo "<th>Data entrada</th>";
echo "<th>Parcelas</th>";
echo "<th>Valor recebido</th>";
echo "<th>Valor faltante</th>";
echo "<th>Categoria</th>";
echo "</tr>";

while($rowReceita = mysqli_fetch_array($resultReceita)) {
	$valor = (int)$rowReceita['valor'];
    $data = $rowReceita['recebido_em'];
    $str_recebido = str_replace("/", " ", $data);
    $str_hoje = date("d m y");
    $data_recebido = sscanf($str_recebido, "%d %d %d", $dia_r, $mes_r, $ano_r);
    $data_hoje = sscanf($str_hoje, "%d %d %d", $dia_h, $mes_h, $ano_h);
    $parcelas = (int)$rowReceita['parcelas'];
    if ($parcelas != 0) {
        $valorRecebido = ($valor / $parcelas) * ((($ano_h - $ano_r) * 12) + ($mes_h - $mes_r));

    } else {
        $valorRecebido = $valor;
    }
    $valorRecebidoTotal += $valorRecebido;
    $valorFaltante = $valor - $valorRecebido;
    $valorFaltanteTotal += $valorFaltante;
    $categoria = $rowReceita['fk_cat_recurso'];
	echo "<tr>";
    echo "<td><label id='valor' value='$valor'>".money_format('%n', $valor)."</td>";
    echo "<td><label id='data' value='$data'>".$data."</td>";
    echo "<td><label id='parcelas' value='$parcelas'>".$parcelas."</td>";
    echo "<td><label id='valorRecebido' value='$valorRecebido'>".money_format('%n', $valorRecebido)."</td>";
    echo "<td><label id='valorFatante' value='$valorFaltante'>".money_format('%n', $valorFaltante)."</td>";
    $sqlRecurso = "SELECT nome_cat_recurso FROM CAT_RECURSO WHERE id_cat_recurso = $categoria";
    $resultRecurso = $conn->query($sqlRecurso);
    $rowRecurso = mysqli_fetch_array($resultRecurso);    
    echo "<td><label id='categoria' value='$rowRecurso[nome_cat_recurso]''>".$rowRecurso[nome_cat_recurso]."</td>";
    echo "</tr>";    
}

$sqlValorTotal = "SELECT SUM(valor) AS valor FROM RECEITA";
$resultTotal = $conn->query($sqlValorTotal);
$rowValor = mysqli_fetch_array($resultTotal);

echo "<tr>";
echo "<th>".money_format('%n', $rowValor[valor])."</th>";
echo "<th></th>";
echo "<th></th>";
echo "<th>".money_format('%n', $valorRecebidoTotal)."</th>";
echo "<th>".money_format('%n', $valorFaltante)."</th>";
echo "<th></th>";
echo "<th>Total</th>";
echo "</tr>";

echo "</table>";
echo "</div>";

$conn->close();
?>
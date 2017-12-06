<?php

setlocale(LC_MONETARY, 'pt_BR.utf-8');

include '../action/connection.php';
$sqlReceita = "SELECT * FROM RECEITA";
$resultReceita = $conn->query($sqlReceita);
$valorRecebidoTotal = 0;
$valorFaltanteTotalC = 0;

echo "<div class='container'>";
echo "<table>";

echo "<tr><th class='thb'>Entradas</th></tr>";

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
    $valorFaltanteTotalC += $valorFaltante;
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
$rowValorCredito = mysqli_fetch_array($resultTotal);
echo "<tr>";
echo "<th class='thr'>".money_format('%n', $rowValorCredito[valor])."</th>";
echo "<th class='thr'></th>";
echo "<th class='thr'></th>";
echo "<th class='thr'>".money_format('%n', $valorRecebidoTotal)."</th>";
echo "<th class='thr'>".money_format('%n', $valorFaltanteTotalC)."</th>";
echo "<th class='thr'></th>";
echo "<th class='thr'>Total</th>";
echo "</tr>";

echo "<tr><th class='thw'></th></tr>";
echo "<tr><th class='thb'>Saídas</th></tr>";

$sqlDespesa = "SELECT * FROM DESPESA";
$resultDespesa = $conn->query($sqlDespesa);
$valorPagoTotal = 0;
$valorFaltanteTotalD= 0;
echo "<tr>";
echo "<th>Valor total</th>";
echo "<th>Data saída</th>";
echo "<th>Parcelas</th>";
echo "<th>Valor pago</th>";
echo "<th>Valor faltante</th>";
echo "<th>Categoria</th>";
echo "</tr>";

$valorFaltante = 0;
$valorFaltanteD = 0;
while($rowDespesa = mysqli_fetch_array($resultDespesa)) {
	$valor = (int)$rowDespesa['valor'];
    $data = $rowDespesa['pago_em'];
    $str_pago = str_replace("/", " ", $data);
    $str_hoje = date("d m y");
    $data_pago = sscanf($str_pago, "%d %d %d", $dia_r, $mes_r, $ano_r);
    $data_hoje = sscanf($str_hoje, "%d %d %d", $dia_h, $mes_h, $ano_h);
    $parcelas = (int)$rowDespesa['parcelas'];
    if ($parcelas != 0) {
        $valorPago = ($valor / $parcelas) * ((($ano_h - $ano_r) * 12) + ($mes_h - $mes_r));
    } else {
        $valorPago = $valor;
    }
    if ($valorPago >= $valor) {
        $valorFatante = 0;
    } else {
        $valorFaltante = $valor - $valorPago;
    }
    $valorPagoTotal += $valorPago;
    $valorFaltanteTotalD += $valorFaltante;
    $categoria = $rowDespesa['fk_cat_recurso'];
	echo "<tr>";
    echo "<td><label id='valor' value='$valor'>".money_format('%n', $valor)."</td>";
    echo "<td><label id='data' value='$data'>".$data."</td>";
    echo "<td><label id='parcelas' value='$parcelas'>".$parcelas."</td>";
    echo "<td><label id='valorRecebido' value='$valorPago'>".money_format('%n', $valorPago)."</td>";
    echo "<td><label id='valorFatante' value='$valorFaltante'>".money_format('%n', $valorFaltante)."</td>";
    $sqlRecurso = "SELECT nome_cat_recurso FROM CAT_RECURSO WHERE id_cat_recurso = $categoria";
    $resultRecurso = $conn->query($sqlRecurso);
    $rowRecurso = mysqli_fetch_array($resultRecurso);    
    echo "<td><label id='categoria' value='$rowRecurso[nome_cat_recurso]''>".$rowRecurso[nome_cat_recurso]."</td>";
    echo "</tr>";    
}
$sqlValorTotal = "SELECT SUM(valor) AS valor FROM DESPESA";
$resultTotal = $conn->query($sqlValorTotal);
$rowValorDebito = mysqli_fetch_array($resultTotal);
echo "<tr>";
echo "<th class='thr'>".money_format('%n', $rowValorDebito[valor])."</th>";
echo "<th class='thr'></th>";
echo "<th class='thr'></th>";
echo "<th class='thr'>".money_format('%n', $valorPagoTotal)."</th>";
echo "<th class='thr'>".money_format('%n', $valorFaltanteTotalD)."</th>";
echo "<th class='thr'></th>";
echo "<th class='thr'>Total</th>";
echo "</tr>";
echo "<tr><th class='thw'></th></tr>";
echo "<tr>";
echo "<th class='thb'>Renda líquida</th>";
echo "<th class='thb'>Lançamentos futuros</th>";
echo "<th class='thb'>Renda líquida futura</th>";
echo "</tr>";

echo "<tr>";
echo "<th class='thr'>".money_format('%n', $valorRecebidoTotal - $valorPagoTotal)."</th>";
echo "<th class='thr'>".money_format('%n', $valorFaltanteTotalC - $valorFaltanteTotalD)."</th>";
echo "<th class='thr'>".money_format('%n', $valorRecebidoTotal - $valorPagoTotal + $valorFaltanteTotalC - $valorFaltanteTotalD)."</th>";
echo "<th class='thr'></th>";
echo "<th class='thr'></th>";
echo "<th class='thr'></th>";
echo "<th class='thr'>Total</th>";
echo "</tr>";

echo "</table>";
echo "</div>";

$conn->close();
?>
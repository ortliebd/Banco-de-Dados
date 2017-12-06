<?php
include "../action/connection.php";
$sqlCliente = "SELECT * FROM CLIENTE";
$resultCliente = $conn->query($sqlCliente);

$sqlRecurso = "SELECT * FROM CAT_RECURSO";
$resultRecurso = $conn->query($sqlRecurso);

$sqlAplicacao = "SELECT * FROM CAT_APLICACAO";
$resultAplicacao = $conn->query($sqlAplicacao);
?>
<div class="container">
  <form action="#" method="post">
    <div class="row">
      <div class="col-25">
        <label>Cliente</label>
      </div>
      <div class="col-75">
	<select id="cliente">
          <option value=''>Selecione um cliente:</option>          
        <?php 
           while($rowCliente = mysqli_fetch_array($resultCliente)) {
               $cpf = $rowCliente['cpf'];
               $nome = $rowCliente['nome'];
               echo "<option value='$cpf'>$nome</option>";
           }
        ?>
	</select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>Recurso</label>
      </div>
      <div class="col-75">
	<select id="recurso">
          <option value=''>Selecione um recurso:</option>          
        <?php 
           while($rowRecurso = mysqli_fetch_array($resultRecurso)) {
               $idRecurso = $rowRecurso['id_cat_recurso'];
               $nomeRecurso = $rowRecurso['nome_cat_recurso'];
               echo "<option value='$idRecurso'>$nomeRecurso</option>";
           }
        ?>
	</select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>Valor</label>
      </div>
      <div class="col-75">
	<input type="text" id="valor" placeholder="99.99">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>Data recebimento</label>
      </div>
      <div class="col-75">
	<input type="text" id="data" placeholder="dd/mm/aa">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>Parcelas</label>
      </div>
      <div class="col-75">
	<input type="text" id="parcelas">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>Aplicação</label>
      </div>
      <div class="col-75">
	<select id="aplicacao">
          <option value=''>Selecione uma aplicação: </option>          
        <?php 
           while($rowAplicacao = mysqli_fetch_array($resultAplicacao)) {
               $idAplicacao = $rowAplicacao['id_ap_receita'];
               $nomeAplicacao = $rowAplicacao['nome_aplicacao'];
               echo "<option value='$idAplicacao'>$nomeAplicacao</option>";
           }
        ?>
	</select>
      </div>
    </div>
    <div class="row">
      <input type="submit"  onclick="submitReceita()" value="Cadastrar">
      <input type="button" value="Limpar">
    </div>
  </form>
</div>



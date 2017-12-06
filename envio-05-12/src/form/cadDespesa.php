<?php
include "../action/connection.php";
$sqlRecurso = "SELECT * FROM CAT_RECURSO";
$resultRecurso = $conn->query($sqlRecurso);
?>
<div class="container">
  <form action="#" method="post">
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
        <label>Data pagamento</label>
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
      <input type="submit"  onclick="submitDespesa()" value="Cadastrar">
      <input type="button" value="Limpar">
    </div>
  </form>
</div>
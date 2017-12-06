<?php
include "../action/connection.php";
$sql = "SELECT * FROM BANDA";
$result = $conn->query($sql);
?>
<div class="container">
  <form action="#" method="post">
    <div class="row">
      <div class="col-25">
        <label>Horário do início</label>
      </div>
      <div class="col-75">
	<input type="text" id="horaInicio" required placeholder="hh:mm">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>Duração</label>
      </div>
      <div class="col-75">
	<input type="text" id="duracao" required placeholder="hh:mm">
      </div>
    </div>    
    <div class="row">
      <div class="col-25">
        <label>Data do início</label>
      </div>
      <div class="col-75">
	<input type="text" id="dataInicio" required placeholder="dd/mm/aaaa">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>Reservar por</label>
      </div>
      <div class="col-75">
	<input type="text" id="meses" required placeholder="Nº de meses">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>Banda</label>
      </div>
      <div class="col-75">
	<select id="banda">
          <option value=''>Selecione uma banda:</option>          
        <?php 
           while($row = mysqli_fetch_array($result)) {
               $id = $row['id_banda'];
               $nome = $row['nome_banda'];
               echo "<option value='$id'>$nome</option>";
           }
        ?>
	</select>
      </div>
    </div>
    <div class="row">
      <input type="submit"  onclick="submitHorario()" value="Cadastrar">
      <input type="button" value="Limpar">
    </div>
  </form>
</div>

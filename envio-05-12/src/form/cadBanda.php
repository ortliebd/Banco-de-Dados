<?php
include "../action/connection.php";
$sqlCliente = "SELECT * FROM CLIENTE";
$resultCliente = $conn->query($sqlCliente);
?>
<div class="container">
  <form action="#" method="post">
    <div class="row">
      <div class="col-25">
        <label>Nome</label>
      </div>
      <div class="col-75">
	<input type="text" id="nome" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>Cliente</label>
      </div>
      <div class="col-75">
	<select id="cliente">
          <option value=''>Selecione um cliente:</option>          
        <?php 
           while($row = mysqli_fetch_array($resultCliente)) {
               $cpf = $row['cpf'];
               $nome = $row['nome'];
               echo "<option value='$cpf'>$nome</option>";
           }
        ?>
	</select>
      </div>
    </div>
    <div class="row">
      <input type="submit"  onclick="submitBanda()" value="Cadastrar">
      <input type="button" value="Limpar">
    </div>
  </form>
</div>


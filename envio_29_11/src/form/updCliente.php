<?php
include '../action/connection.php';

$sql = "SELECT * FROM CLIENTE WHERE cpf=$_GET[cpf]";
$result = $conn->query($sql);

$row = mysqli_fetch_array($result);
?>

<div class="container">
  <form action="#" method="post">
    <div class="row">
      <div class="col-25">
	<label>CPF</label>
      </div>
      <div class="col-75">
	<input type="text" id="cpf" name="cpf" value="<?php echo $row[cpf];?>" disabled>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
	<label>Nome</label>
      </div>
      <div class="col-75">
	<input type="text" id="nome" name="nome" value="<?php echo $row[nome];?>" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
	<label>Telefone</label>
      </div>
      <div class="col-75">
	<input type="text" id="telefone" name="telefone" value="<?php echo $row[telefone];?>" required>
      </div>
    </div>
    <div class="row">
    <input type="submit" onclick="submitUpdCliente()" value="Alterar">
    <input type="button" onclick="clearForm()" value="Limpar">
    </div>
  </form>
</div>




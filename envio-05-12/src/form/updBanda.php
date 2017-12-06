<?php
include '../action/connection.php';

$sql = "SELECT * FROM BANDA WHERE id_banda=$_GET[id]";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);

?>

<div class="container">
  <form action="#" method="post">
    <div class="row">
      <div class="col-25">
	<label>Id</label>
      </div>
      <div class="col-75">
	<input type="text" id="id" value="<?php echo $row[id_banda];?>" disabled>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
	<label>Nome</label>
      </div>
      <div class="col-75">
	<input type="text" id="nome" value="<?php echo $row[nome_banda];?>" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>Cliente</label>
      </div>
      <div class="col-75">
	<select id="cliente">
          <option value=''>Selecione a categoria:</option>          
          <?php
	  $sql_cliente = "SELECT * FROM CLIENTE";
	  $result_cliente = $conn->query($sql_cliente);

while($row_cliente = mysqli_fetch_array($result_cliente)) {
              $cpf = $row_cliente['cpf'];
              $nome = $row_cliente['nome'];
              echo "<option value='$cpf'>$nome</option>";
          }
          ?>
	</select>
      </div>
    </div>
    <div class="row">
      <input type="submit" onclick="submitUpdBanda(0)" value="Alterar">
      <input type="button" onclick="clearForm()" value="Limpar">
    </div>
  </form>
</div>




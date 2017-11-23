<?php
session_start();
?>
<html>
  <body>
    <div class="container">
      <form action="php/actionUpdCliente.php" method="post" id="form" target="_blank">
	<div class="row">
	  <div class="col-25">
	    <label>CPF</label>
	  </div>
	  <div class="col-75">
	    <input type="text" id="cpf" name="cpf" value="<?php echo $_SESSION[cpf];?>" required>
	  </div>
	</div>
	<div class="row">
	  <div class="col-25">
	    <label>Nome</label>
	  </div>
	  <div class="col-75">
	    <input type="text" id="nome" name="nome" value="<?php echo $_SESSION[nome];?>" required>
	  </div>
	</div>
	<div class="row">
	  <div class="col-25">
	    <label>Telefone</label>
	  </div>
	  <div class="col-75">
	    <input type="text" id="telefone" name="telefone" value="<?php echo $_SESSION[telefone];?>" required>
	  </div>
	</div>
	  <input type="submit" value="Alterar">
	  <input type="button" onclick="clearForm()" value="Limpar">
        </div>
      </form>
    </div>
  <?php session_unset(); session_destroy(); ?>
  </body>
</html>

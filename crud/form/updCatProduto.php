<html>
  <body>
    <div class="container">
     <form	action="<?php echo "php/actionUpdCatProduto.php?q=".$_GET['q']."'" ; ?>"
        method="post"
		id="form" target="_blank">
	<div class="row">
	  <div class="col-25">
	    <label>Categoria</label>
	  </div>
	  <div class="col-75">
	    <input type="text" id="catProd" name="catProd" required>
	  </div>
	</div>
	<div class="row">
	  <input type="submit" value="alterar">
	  <input type="button" onclick="clearForm()" value="Limpar">
	</div>
      </form>
    </div>
  </body>
</html>

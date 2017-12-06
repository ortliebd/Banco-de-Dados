<div class="container">
  <form action="#" method="post">
    <div class="row">
      <div class="col-25">
	<label>Categoria</label>
      </div>
      <div class="col-75">
	<input type="text" id="catProd" name="catProd" required>
      </div>
    </div>
    <div class="row">
      <input type="submit" <?php echo "onclick='submitUpdCategoria($_GET[id], 1)'";?> value="Alterar">
      <input type="button" onclick="clearForm()" value="Limpar">
    </div>
  </form>
</div>
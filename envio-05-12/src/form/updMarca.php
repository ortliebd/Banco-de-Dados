<div class="container">
  <form action="#" method="post">
    <div class="row">
      <div class="col-25">
	<label>Marca</label>
      </div>
      <div class="col-75">
	<input type="text" id="marca" name="marca" required>
      </div>
    </div>
    <div class="row">
      <input type="submit" <?php echo "onclick='submitUpdMarca($_GET[id])'";?> value="Alterar">
      <input type="button" onclick="clearForm()" value="Limpar">
    </div>
  </form>
</div>

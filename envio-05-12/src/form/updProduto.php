<?php
include '../action/connection.php';

$sql = "SELECT * FROM PRODUTO WHERE id_produto=$_GET[id]";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);

$sqlCat = "SELECT * FROM CAT_PRODUTO";
$resultCat = $conn->query($sqlCat);

$sqlMarca = "SELECT * FROM MARCA";
$resultMarca = $conn->query($sqlMarca);
?>

<div class="container">
  <form action="#" method="post">
    <div class="row">
      <div class="col-25">
	<label>Código de barras</label>
      </div>
      <div class="col-75">
	<input type="text" id="id" value="<?php echo $row[id_produto];?>" disabled>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
	<label>Descrição</label>
      </div>
      <div class="col-75">
	<input type="text" id="desc" value="<?php echo $row[nome_produto];?>" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
	<label>Preço de compra</label>
      </div>
      <div class="col-75">
	<input type="text" id="precoCompra" value="<?php echo $row[preco_compra];?>" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
	<label>Preço para venda</label>
      </div>
      <div class="col-75">
	<input type="text" id="precoVenda" value="<?php echo $row[preco_venda];?>" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
	<label>Quantidade em estoque</label>
      </div>
      <div class="col-75">
	<input type="text" id="qtd" value="<?php echo $row[qtd_produto];?>" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>Categoria</label>
      </div>
      <div class="col-75">
	<select id="categoria">
          <option value=''>Selecione a categoria:</option>          
        <?php 
           while($row = mysqli_fetch_array($resultCat)) {
               $id_cat = $row['id_cat_produto'];
               $nome_cat = $row['nome_cat_produto'];
               echo "<option value='$id_cat'>$nome_cat</option>";
           }
        ?>
	</select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>Marca</label>
      </div>
      <div class="col-75">
	<select id="marca">
          <option value=''>Selecione a marca:</option>          
        <?php 
           while($row = mysqli_fetch_array($resultMarca)) {
               $id_marca = $row['id_marca'];
               $nome_marca = $row['nome_marca'];
               echo "<option value='$id_marca'>$nome_marca</option>";
           }
        ?>
	</select>
      </div>
    </div>
    <div class="row">
    <input type="submit" onclick="submitUpdProduto(0)" value="Alterar">
    <input type="button" onclick="clearForm()" value="Limpar">
    </div>
  </form>
</div>




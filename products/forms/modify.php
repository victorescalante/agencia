<div class="bg-white pa3">
  <form action="update.php" method="POST">
   <input type="hidden" name="id" value="<?php echo $product->id ?>">
    <div class="form-group">
      <label for="name">Nombre del Equipo</label>
      <input name="name" value="<?php echo $product->name ?>" type="text" class="form-control" id="name" placeholder="Nombre del Equipo">
    </div>
    <div class="form-group">
      <label for="brand">Marca</label>
      <input name="brand" value="<?php echo $product->brand ?>" type="text" class="form-control" id="brand" placeholder="Marca">
    </div>
    <div class="form-group">
      <label for="code">Código</label>
      <input name="code" value="<?php echo $product->brand ?>" type="text" class="form-control" id="code" placeholder="Código">
    </div>
    <div class="form-group">
      <label for="agency">Agencia</label>
      <select class="form-control" id="agency" name = "agency">
        <option value="">Agencia</option>
        <option value="continental_metepec" <?= ($product->agency == "continental_metepec") ? "selected" : "" ?>>Continental Metepec</option>
        <option value="hyundai" <?= ($product->agency == "hyundai") ? "selected" : "" ?>>Hyundai</option>
        <option value="mitsubishi" <?= ($product->agency == "mitsubishi") ? "selected" : "" ?>>Mitsubishi</option>
      </select>
    </div>

    <button type="submit" class="btn btn-primary" name="button">Guardar</button>

  </form>

</div>

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
      <input name="code" value="<?php echo $product->code ?>" type="text" class="form-control" id="code" placeholder="Código">
    </div>
    <div class="form-group">
      <label for="agency">Agencia</label>
      <select class="form-control" id="agency" name = "agency" required>
        <option value="">Selecciona una Agencia</option>
        <option value="continental_metepec" <?= ($product->agency == "continental_metepec") ? "selected" : "" ?>>Continental Metepec</option>
        <option value="hyundai" <?= ($product->agency == "hyundai") ? "selected" : "" ?>>Hyundai</option>
        <option value="mitsubishi" <?= ($product->agency == "mitsubishi") ? "selected" : "" ?>>Mitsubishi</option>
      </select>
    </div>

    <div class="form-group">
      <label for="category">Categoría</label>
      <select class="form-control" id="category" name = "category" required>
        <option value="">selecciona una categoría</option>
        <?php
        include('../../classes/models.php');
        $categories = Categories::all();
        foreach ($categories as $category) { ?>
          <option value="<?php echo $category->id ?>" <?= ($product->category_id == $category->id) ? 'selected' : '' ?>><?php echo $category->name ?></option>
        <?php } ?>
      </select>
    </div>

    <button type="submit" class="btn btn-primary" name="button">Actualizar producto</button>

  </form>

</div>

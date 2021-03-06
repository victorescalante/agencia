<div class="bg-white pa3">

    <div class="form-group">
      <label for="name">Nombre del Equipo</label>
      <input name="name" type="text" class="form-control" id="name" placeholder="Nombre del Equipo">
    </div>
    <div class="form-group">
      <label for="code">Código</label>
      <input name="code" type="text" class="form-control" id="code" placeholder="Código del equipo">
    </div>
    <div class="form-group">
      <label for="brand">Marca</label>
      <input name="brand" type="text" class="form-control" id="brand" placeholder="Marca">
    </div>
    <div class="form-group">
      <label for="agency">Agencia</label>
      <select class="form-control" id="agency" name = "agency" required>
        <option value="">selecciona una agencia</option>
        <option value="continental_metepec">Continental Metepec</option>
        <option value="hyundai">Hyundai</option>
        <option value="mitsubishi">Mitsubishi</option>
      </select>
    </div>
    <div class="form-group">
      <label for="category">Categoría</label>
      <select class="form-control" id="category" name = "category" required>
        <option value="">selecciona una categoría</option>
        <?php
        include('../classes/models.php');
        $categories = Categories::all();
        foreach ($categories as $category) { ?>
          <option value="<?php echo $category->id ?>"><?php echo $category->name ?></option>
        <?php } ?>
      </select>
    </div>
</div>

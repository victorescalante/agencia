<form action="update.php" method="POST">
 <input type="hidden" name="id" value="<?php echo $description->id ?>">
  <div class="form-group">
    <label for="name">Nombre del Equipo</label>
    <input name="name" value="<?php echo $description->name ?>" type="text" class="form-control" id="name" placeholder="Nombre del Equipo">
  </div>
  <div class="form-group">
    <label for="brand">Marca</label>
    <input name="brand" value="<?php echo $description->brand ?>" type="text" class="form-control" id="brand" placeholder="Marca">
  </div>
  <div class="form-group">
    <label for="agency">Agencia</label>
    <select class="form-control" id="state" name = "state">
      <option value="">Agencia</option>
      <option value="continental_metepec">Continental Metepec</option>
      <option value="hyundai">Hyundai</option>
      <option value="mitsubishi">Mitsubishi</option>
    </select>
  </div>

  <button type="submit" class="btn btn-primary" name="button">Guardar</button>

</form>

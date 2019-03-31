<form action="save.php" method="POST">

  <div class="form-group">
    <label for="name">Nombre del Equipo</label>
    <input name="name" type="text" class="form-control" id="name" placeholder="Nombre del Equipo">
  </div>
  <div class="form-group">
    <label for="brand">Marca</label>
    <input name="brand" type="text" class="form-control" id="brand" placeholder="Marca">
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

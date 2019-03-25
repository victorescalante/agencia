<form action="save.php" method="POST">

  <div class="form-group">
    <label for="problem">Problema</label>
    <input name="problem" type="text" class="form-control" id="problem" placeholder="Problema">
  </div>
  <div class="form-group">
    <label for="solution">Solución</label>
    <input name="solution" type="text" class="form-control" id="solution" placeholder="Solución">
  </div>
  <div class="form-group">
    <label for="state">Estado</label>
    <select class="form-control" id="state" name = "state">
      <option value=""></option>
      <option value="funcional">Funcional</option>
      <option value="dañado">Dañado</option>
      <option value="descompuesto">Descompuesto</option>
    </select>
  </div>

  <button type="submit" class="btn btn-primary" name="button">Guardar</button>

</form>

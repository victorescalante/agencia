<form action="update.php" method="POST">
  <input type="hidden" name="id" value="<?php echo $fail->id ?>">
  <div class="form-group">
    <label for="problem">Problema</label>
    <input name="problem" value="<?php echo $fail->problem ?>" type="text" class="form-control" id="problem" placeholder="Problema">
  </div>
  <div class="form-group">
    <label for="solution">Solución</label>
    <input name="solution" value="<?php echo $fail->solution ?>" type="text" class="form-control" id="solution" placeholder="Solución">
  </div>
  <div class="form-group">
    <label for="state">Estado</label>
    <select class="form-control" id="state" name = "state">
      <option value=""></option>
      <option value="funcional" <?= ($fail->state == "funcional") ? "selected" : "" ?> >Funcional</option>
      <option value="dañado" <?= ($fail->state == "dañado") ? "selected" : "" ?> >Dañado</option>
      <option value="descompuesto" <?= ($fail->state == "descompuesto") ? "selected" : "" ?>>Descompuesto</option>
    </select>
  </div>

  <button type="submit" class="btn btn-primary" name="button">Actualizar</button>

</form>

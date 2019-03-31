<form action="update.php" method="POST">
  <input type="hidden" name="id" value="<?php echo $provider->id ?>">
  <div class="form-group">
    <label for="name">Nombre</label>
    <input name="name" value="<?php echo $provider->name ?>" type="text" class="form-control" id="name" placeholder="Nombre">
  </div>
  <div class="form-group">
    <label for="phone">Teléfono</label>
    <input name="phone" value="<?php echo $provider->phone ?>"type="text" class="form-control" id="phone" placeholder="Teléfono">
  </div>
  <div class="form-group">
    <label for="email">Correo</label>
    <input name="email" value="<?php echo $provider->email ?>" type="email" class="form-control" id="email" placeholder="Correo">
  </div>
  <div class="form-group">
    <label for="polize">Poliza</label>
    <select class="form-control" id="polize" name="polize">
      <option value=""></option>
      <option value="Si">Si</option>
      <option value="No">No</option>
    </select>
  </div>
  <div class="form-group">
    <label for="expired_at">Fecha de Expiración</label>
    <input name="expired_at" type="text" value="<?php echo $provider->expired_at ?>" class="form-control" id="expired_at" placeholder="Fecha de Expiración">
  </div>

  <button type="submit" class="btn btn-primary" name="button">Guardar proveedor</button>

</form>

<div class="bg-white pa3">
 <input type="hidden" name="id" value="<?php echo $category->id ?>">
  <div class="form-group">
    <label for="name">Nombre del Equipo</label>
    <input name="name" value="<?php echo $category->name ?>" type="text" class="form-control" id="name" placeholder="Nombre del Equipo">
  </div>
  <button type="submit" class="btn btn-primary" name="button">Actualizar</button>
</div>

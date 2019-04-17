<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="style.css" type="text/css">
    <meta charset="utf-8">
    <title></title>
    <?php include('../page/headers.php') ?>
    <img src="../picture/logo.png" width="300" height="100">
  </head>
  <body>
    <div class="pt5">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="pv3">
              <a class="btn btn-secondary" href="index.php">Regresar</a>
            </div>
          </div>
        </div>
        <form action="save.php" method="post">
          <div class="row bg-white">
            <div class="col-sm-8">
              <?php include('forms/create.php'); ?>
              <div class="pa3">
                <button type="submit" class="btn btn-primary" name="button">Guardar</button>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="pa3">
                  <p>Selecciona las propiedades a verificar del producto</p>
                  <?php
                  include('../classes/models.php');
                    $properties = Properties::all();
                    foreach ($properties as $property) {
                  ?>

                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="properties[]" value="<?php echo $property->id ?>" id="<?php echo $property->id ?>">
                    <label class="custom-control-label" for="<?php echo $property->id ?>"><?php echo $property->name ?></label>
                  </div>

                <?php } ?>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>

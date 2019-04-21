<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="style.css" type="text/css">
    <meta charset="utf-8">
    <title></title>
    <?php include('../page/headers.php') ?>
  </head>
  <body>
    <div class="pt5">
      <div class="container">
        <?php include('../page/nav.php') ?>
        <div class="row">
          <div class="col-sm-12">
            <div class="pv3">
              <a class="btn btn-secondary" href="index.php">Regresar</a>
            </div>
          </div>
        </div>
        <form action="save.php" method="post">
          <div class="row ">
            <div class="col-sm-8 bg-white">
              <?php include('forms/create.php'); ?>
              <div class="pa3">
                <button type="submit" class="btn btn-primary" name="button">Guardar producto</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>

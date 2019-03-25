<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php include('../page/headers.php') ?>
  </head>
  <body>
    <div class="pt5">
      <div class="container">
        <div class="col-sm-12 tr pa3">
          <a class="btn btn-primary" href="create.php">Registrar Proveedor</a>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Telefono</th>
                  <th scope="col">Correo</th>
                  <th scope="col">Poliza</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  include '../Classes/models.php';
                  $providers = Providers::all();

                  foreach ($providers as $provider) {
                    ?>
                    <tr>
                      <th scope="row"><?php echo $provider->id ?></th>
                      <td><?php echo $provider->name ?></td>
                      <td><?php echo $provider->phone ?></td>
                      <td><?php echo $provider->email ?></td>
                    </tr>
                    <?php
                  }
                 ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

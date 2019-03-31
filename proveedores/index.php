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
        <a class="btn btn-secondary" href="../description/index.php">Inicio</a>
        <div class="col-sm-12 tr pa3">
          <a class="btn btn-primary" href="create.php">Registrar Proveedor</a>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <table class="table"style="color:#FDFEFE">
              <thead>
                <tr class="table-active">
                  <th scope="col">#</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Telefono</th>
                  <th scope="col">Correo</th>
                  <th scope="col">Poliza</th>
                  <th scope="col">Expira</th>
                  <th scope="col">Acciones</th>
                </tr>
              </thead>
              <tbody class="table-active">
                <?php
                  include '../Classes/models.php';
                  $providers = Providers::all();

                  foreach ($providers as $provider) {
                    ?>
                    <tr>
                      <th scope="row" style="color:#FDFEFE"><?php echo $provider->id ?></th>
                      <td style="color:#FDFEFE"><?php echo $provider->name ?></td>
                      <td style="color:#FDFEFE"><?php echo $provider->phone ?></td>
                      <td style="color:#FDFEFE"><?php echo $provider->email ?></td>
                      <td style="color:#FDFEFE"><?php echo $provider->polize  ?></td>
                      <td style="color:#FDFEFE"><?php echo $provider->expired_at ?></td>
                      <td>
                        <a class="btn btn-danger" href="delete.php?id=<?php echo $provider->id ?>">Borrar</a>
                        <a class="btn btn-secondary" href="modify.php?id=<?php echo $provider->id ?>">Modificar</a>
                      </td>
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

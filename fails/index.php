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
        <div class="row">
          <div class="col-sm-12 tr pa3">
            <a class="btn btn-primary" href="create.php">Crear Falla</a>
          </div>
          <div class="col-sm-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Fecha</th>
                  <th scope="col">Problema</th>
                  <th scope="col">Soluciòn</th>
                  <th scope="col">Estado</th>
                  <th scope="col">Acciones</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  include '../Classes/models.php';
                  $fails = Fails::sql("Select * from :table order by id desc");

                  foreach ($fails as $fail) {
                    ?>
                    <tr>
                      <th scope="row"><?php echo $fail->id ?></th>
                      <td><?php echo $fail->date ?></td>
                      <td><?php echo $fail->problem ?></td>
                      <td><?php echo $fail->solution ?></td>
                      <td><?php echo $fail->state ?></td>
                      <td>
                        <a class="btn btn-danger" href="delete.php?id=<?php echo $fail->id ?>">Borrar</a>
                        <a class="btn btn-secondary" href="modify.php?id=<?php echo $fail->id ?>">Modificar</a>
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

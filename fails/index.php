<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title></title>
    <?php include('../page/headers.php') ?>
    <img src="../picture/logo.png" width="300" height="100">
  </head>
  <body>
    <div class="pt5">
      <div class="container">
        <a class="btn btn-secondary" href="../products/index.php">Inicio</a>
        <div class="row">
          <div class="col-sm-8 pa3">
            <form action="index.php" method="GET">
              <div class="form-group">
                <input class="form-control" type="text" name="search" placeholder="Buscar">
              </div>
            </form>
          </div>
          <div class="col-sm-4 tr pa3">
            <a class="btn btn-primary" href="create.php">Reportar Falla</a>
          </div>
          <div class="col-sm-12">
            <table class="table" style="color:#FDFEFE">
              <thead>
                <tr class="table-active">
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
                  include '../classes/models.php';

                  if (!empty($_GET['search'])) {
                    $query = "Select * from :table where problem like '%".$_GET['search']."%' order by id desc";
                    $fails = Fails::sql($query);
                  }else{
                    $fails = Fails::sql("Select * from :table order by id desc");
                  }

                  foreach ($fails as $fail) {
                    ?>
                    <tr class="table-active">
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

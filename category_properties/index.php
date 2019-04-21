<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Lista De Equipos</title>
    <?php include('../page/headers.php') ?>
    <img src="../picture/logo.png" width="300" height="100">
  </head>
  <body>
    <div class="pt-7">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 pv3 ">
            <a class="btn btn-success float-right ml-3" href="create.php">Crear categoria</a>
            <a class="btn btn-info float-right " href="../products/">Listado de productos</a>
          </div>
          <div class="col-sm-12">
            <div class="pv3 bg-white">
                <table class="table">
                  <tbody>
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre de la categoría</th>
                        <th scope="col">Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        include '../classes/models.php';
                        $categories = Categories::all();
                        foreach ($categories as $category) {
                       ?>
                        <tr>
                          <th scope="row"><?php echo $category->id ?></th>
                          <td><?php echo $category->name ?></td>
                          <td>
                            <a class="btn btn-primary" href="modify.php?id=<?php echo $category->id ?>">Editar Categoría</a>
                            <a class="btn btn-danger" href="delete.php?id=<?php echo $category->id ?>">Eliminar Categoría</a>
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
    </div>
  </body>
</html>

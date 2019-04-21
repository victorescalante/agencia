<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Lista De Equipos</title>
    <?php include('../page/headers.php') ?>
  </head>
  <body>
    <?php // include('../page/nav.php') ?>
    <div class="pt-7">
      <div class="container bg-white">
        <?php include('../page/nav.php') ?>
        <div class="row">
          <div class="col-sm-12 pv3">
            <a class="btn btn-success float-right " href="create.php">Agregar producto</a>
            <a class="btn btn-primary float-right mr-3" href="../category_properties/">Categorías</a>
          </div>
          <div class="col-sm-12">
            <h3>Inventario</h3>
          </div>
          <div class="col-sm-12">
            <div class="pv3">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Código</th>
                      <th scope="col">Nombre Del Equipo</th>
                      <th scope="col">Marca</th>
                      <th scope="col">Agencia</th>
                      <th scope="col">Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      include '../classes/models.php';
                      $products = Products::all();
                      foreach ($products as $product) {
                     ?>
                      <tr>
                        <th scope="row"><?php echo $product->id ?></th>
                        <td><?php echo $product->code ?></td>
                        <td><?php echo $product->name ?></td>
                        <td><?php echo $product->brand ?></td>
                        <td class="ttu"><?php echo $product->agency ?></td>
                        <td>
                          <a class="btn btn-primary" href="modify.php?id=<?php echo $product->id ?>">Editar Producto</a>
                          <a class="btn btn-secondary" href="../revision/index.php?product_id=<?php echo $product->id ?>">Revisión de Producto</a>
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

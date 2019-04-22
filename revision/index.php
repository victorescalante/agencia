<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="style.css" type="text/css">
    <meta charset="utf-8">
    <title>Revisiones</title>
    <?php include('../page/headers.php') ?>
  </head>
  <body>
   <div class="pt5">
     <div class="container">
       <?php include('../page/nav.php');
              include '../classes/models.php';
              $product = Products::retrieveByPK($_GET['product_id']);
      ?>
       <div class="col-sm-12">
         <h2>Revisiones de <?php echo $product->name ?></h2>
       </div>
       <div class="col-sm-12 pa3">
         <a class="btn btn-secondary" href="../products/">Productos</a>
         <a class="btn btn-secondary" href="../category_properties/">Categorías</a>
       </div>
       <div class="col-sm-12 tr pa3">
         <a class="btn btn-success" href="create.php?product_id=<?php echo $_GET['product_id'] ?>">Nueva Revisión</a>
       </div>
       <div class="row">
         <div class="col-sm-12">
           <table class="table">
             <thead>
               <tr>
                 <th scope="col">#</th>
                 <th scope="col">Día De Revisión</th>
                 <th scope="col">Comentario</th>
                 <th scope="col">Acciones</th>
                </tr>
             </thead>
             <tbody>
               <?php
               $revisions = Revisions::sql("select * from :table where product_id = ".$_GET['product_id']);
               foreach ($revisions as $revision) {
                ?>
               <tr>
                 <td><?php echo $revision->id ?></td>
                 <td><?php echo $revision->date_revision ?></td>
                 <td><?php echo $revision->comment ?></td>
                 <td>
                  <a href="modify.php?product_id=<?php echo $_GET['product_id'] ?>&revision_id=<?php echo $revision->id ?>">Editar</a>
                 </td>
               </tr>
               <?php } ?>
             </tbody>
           </table>
         </div>
       </div>
     </div>
   </div>
  </body>
</html>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="style.css" type="text/css">
    <meta charset="utf-8">
    <?php include('../page/headers.php') ?>
    <img src="../picture/logo.png" width="300" height="100">
    <title></title>
  </head>
  <body>
   <div class="pt5">
     <div class="container">
       <div class="row">
         <div class="col-sm-12">
           <div class="pv3">
             <a class="btn btn-secondary" href="index.php?product_id=<?php echo $_GET['product_id'] ?>">Regresar</a>
           </div>
         </div>
       </div>
       <div class="row">
         <div class="col-sm-8">
          <form class="" action="save.php" method="post">
            <input type="hidden" name="product_id" value="<?php echo $_GET['product_id'] ?>">
            <div class="form-group">
              <label for="">Comentario</label>
              <input class="form-control" type="text" name="comment" placeholder="Agrega un comentario">
            </div>
            <?php
              include '../classes/models.php';
              $product_properties = Product_Properties::sql("select * from :table where product_id=".$_GET['product_id']);

              $id_properties = [];
              foreach ($product_properties as $property) {
                $id_properties[] = $property->property_id;
              }

              foreach ($id_properties as $id_property ) {
                $property = Properties::sql("select * from :table where id=".$id_property." limit 1");
                ?>
                 <div class="form-group">
                   <label for=""><?php echo $property[0]->name ?></label>
                   <input type="text" class="form-control" id="" name="properties[<?php echo $property[0]->id ?>]" placeholder="<?php echo $property[0]->name ?>">
                 </div>
                <?php
              }
             ?>
            <button class="btn btn-primary" type="submit" name="button">Agregar reporte</button>
          </form>
         </div>
       </div>
     </div>
   </div>
  </body>
</html>

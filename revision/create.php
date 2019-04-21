<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="style.css" type="text/css">
    <meta charset="utf-8">
    <?php include('../page/headers.php') ?>
    <title></title>
  </head>
  <body>
   <div class="pt5">
     <div class="container">
       <?php include('../page/nav.php') ?>
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
              <textarea name="comment" class="form-control"></textarea>
            </div>
            <?php
              include '../classes/models.php';
              $product = Products::retrieveByPK($_GET['product_id']);
              $category_properties = Property_Category::sql('select * from :table where category_id = '.$product->category_id);
              // var_dump($category_properties);

              foreach ($category_properties as $property ) {
                $property = Properties::retrieveByPK($property->property_id);
                ?>
                 <div class="form-group">
                   <label for=""><?php echo $property->name ?></label>
                   <input type="text" class="form-control" id="" name="properties[<?php echo $property->id ?>]" placeholder="<?php echo $property->name ?>">
                 </div>
                <?php
              }
             ?>
            <button class="btn btn-success" type="submit" name="button">Agregar reporte</button>
          </form>
         </div>
       </div>
     </div>
   </div>
  </body>
</html>

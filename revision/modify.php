
<?php
  include '../Classes/models.php';
  $revision = Revisions::retrieveByPK($_GET['revision_id']);

 ?>
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
           <p class="f3 b">Actualización de revisión</p>
           <p>La ultima actualización se realizo el dia <?php echo $revision->date_updated ?></p>
          <form class="" action="update.php" method="post">
            <input type="hidden" name="product_id" value="<?php echo $_GET['product_id'] ?>">
            <input type="hidden" name="revision_id" value="<?php echo $_GET['revision_id'] ?>">
            <div class="form-group">
              <label for="">Comentario</label>
              <input class="form-control" type="text" name="comment" value="<?php echo $revision->comment ?>" placeholder="Agrega un comentario">
            </div>
            <?php
              $product_properties = Product_Properties::sql("select * from :table where product_id=".$_GET['product_id']);

              $id_properties = [];
              foreach ($product_properties as $property) {
                $id_properties[] = $property->property_id;
              }

              foreach ($id_properties as $id_property ) {
                $property = Properties::sql("select * from :table where id=".$id_property);
                $value_property = Product_Revision::sql("select property_value from :table where property_id=".$property[0]->id." and revision_id=".$revision->id);
                ?>
                 <div class="form-group">
                   <label for=""><?php echo $property[0]->name ?></label>
                   <input type="text" class="form-control" id="" name="properties[<?php echo $property[0]->id ?>]" value="<?= (!empty($value_property[0]->property_value)) ? $value_property[0]->property_value : '' ?>"  placeholder="<?php echo $property[0]->name ?>">
                 </div>
                <?php
              }
             ?>
            <button class="btn btn-primary" type="submit" name="button">Actualizar reporte</button>
          </form>
         </div>
       </div>
     </div>
   </div>
  </body>
</html>

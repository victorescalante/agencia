<?php
  include('../classes/models.php');

  $category_id = $_GET['id'];

  $category = Categories::retrieveByPK($category_id);

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="style.css" type="text/css">
    <meta charset="utf-8">
    <title></title>
    <?php include('../page/headers.php') ?>
  </head>
  <body>
   <div class="pt5">
     <div class="container">
       <form action="update.php" method="POST">
         <div class="row">
           <div class="col-sm-12">
             <div class="pv3">
               <a href="index.php" class="btn btn-secondary">Regresar</a>
             </div>
           </div>
         </div>
         <div class="row">
             <div class="col-sm-6">
               <?php include('forms/modify.php') ?>
             </div>
             <div class="col-sm-6 bg-white" style="height:500px; overflow:hidden;">
               <div class="pv3" style="height:500px; overflow:scroll;">
                   <p>Selecciona las propiedades de esta categoría</p>
                   <?php
                     $properties = Properties::all();
                     $property_categories = Property_Category::sql("select *
                     from :table where category_id=".$category_id);

                     $check_properties  = [];
                     foreach ($property_categories as $property) {
                       $check_properties[] = $property->property_id;
                     }
                     // var_dump($check_properties);
                     foreach ($properties as $property) {
                   ?>

                   <div class="custom-control custom-checkbox">
                     <input type="checkbox" class="custom-control-input"
                     name="properties[]" value="<?php echo $property->id ?>"
                     id="<?php echo $property->id ?>" <?=
                     in_array($property->id,$check_properties) ? 'checked' : ''?>
                     >
                     <label class="custom-control-label" for="<?php
                     echo $property->id ?>"><?php echo $property->name ?></label>
                   </div>

                 <?php } ?>
               </div>
             </div>
         </div>
       </form>
     </div>
   </div>
  </body>
</html>

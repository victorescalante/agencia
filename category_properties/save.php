<?php
  include('../classes/models.php');

  $name = $_POST['name'];
  
  $category = new Categories();
  $category->name = $name;
  $category->save();

  if(!empty($_POST['properties'])){
    foreach ($_POST['properties'] as $property) {
      $category_properties = new Property_Category();
      $category_properties->category_id = $category->id;
      $category_properties->property_id = $property;
      $category_properties->save();
    }
  }

  header('location:index.php');
 ?>

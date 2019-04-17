<?php
  include('../clasess/models.php');

  $name = $_POST['name'];
  $brand = $_POST['brand'];
  $agency = $_POST['agency'];
  $code = $_POST['code'];

  $product = new Products();
  $product->name = $name;
  $product->brand = $brand;
  $product->agency = $agency;
  $product->code = $code;
  $product->save();

  if(!empty($_POST['properties'])){
    foreach ($_POST['properties'] as $property) {
      $product_property = new Product_Properties();
      $product_property->product_id = $product->id;
      $product_property->property_id = $property;
      $product_property->save();
    }
  }

  header('location:index.php');
 ?>

<?php
  include('../classes/models.php');

  $name = $_POST['name'];
  $brand = $_POST['brand'];
  $agency = $_POST['agency'];
  $code = $_POST['code'];
  $category = $_POST['category'];

  $product = new Products();
  $product->name = $name;
  $product->brand = $brand;
  $product->agency = $agency;
  $product->code = $code;
  $product->category_id = $category;
  $product->save();

  header('location:modify.php?id='.$product->id);
 ?>

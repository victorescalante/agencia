<?php
  include ('../classes/models.php');

  $product_id = $_POST['id'];

  $product = Products::retrieveByPK($product_id);

  $name = $_POST['name'];
  $brand = $_POST['brand'];
  $agency = $_POST['agency'];
  $code = $_POST['code'];
  $category = $_POST['category'];

  $product->name = $name;
  $product->brand = $brand;
  $product->agency = $agency;
  $product->code = $code;
  $product->category_id = $category;
  $product->save();

  header('location:index.php');
 ?>

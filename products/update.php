<?php
  include ('../classes/models.php');

  $product_id = $_POST['id'];

  $product = Products::retrieveByPK($product_id);

  $name = $_POST['name'];
  $brand = $_POST['brand'];
  $agency = $_POST['agency'];
  $code = $_POST['code'];

  $product->name = $name;
  $product->brand = $brand;
  $product->agency = $agency;
  $product->code = $code;
  $product->save();

  header('location:index.php');
 ?>

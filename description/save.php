<?php
  include('../Classes/models.php');

  $name = $_POST['name'];
  $brand = $_POST['brand'];
  $agency = $_POST['agency'];

  $description = new Descriptions();
  $description->name = $name;
  $description->brand = $brand;
  $description->agency = $agency;
  $description->save();

  header('location:index.php');
 ?>

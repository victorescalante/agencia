<?php
  include ('../Classes/models.php');

  $description_id = $_POST['id'];

  $description = Descriptions::retrieveByPK($description_id);

  $name = $_POST['name'];
  $brand = $_POST['brand'];
  $agency = $_POST['agency'];

  $description->name = $name;
  $description->brand = $brand;
  $description->agency = $agency;
  $description->save();

  header('location:index.php');
 ?>

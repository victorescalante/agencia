<?php
  include('../clasess/models.php');


  $problem = $_POST['problem'];
  $solution = $_POST['solution'];
  $state = $_POST['state'];

  $fails = new Fails();
  $fails->date = date('Y-m-d h:i:s');
  $fails->problem = $problem;
  $fails->solution = $solution;
  $fails->state = $state;
  $fails->save();

  header('location:index.php');
 ?>

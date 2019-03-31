<?php

  include('../classes/models.php');

  $fail_id = $_POST['id'];

  $fail = Fails::retrieveByPK($fail_id);

  $problem = $_POST['problem'];
  $solution = $_POST['solution'];
  $state = $_POST['state'];


  $fail->problem = $problem;
  $fail->solution = $solution;
  $fail->state = $state;
  $fail->save();

  header('location:index.php');
 ?>

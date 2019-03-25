<?php
  include('../classes/models.php');

  $fail_id = $_GET['id'];

  $fail = Fails::retrieveByPK($fail_id);
  $fail->delete();

  header('location:index.php');
 ?>

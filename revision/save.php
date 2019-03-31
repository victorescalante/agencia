<?php
  include('../Classes/models.php');

  $problem = $_POST['problem'];


  $revision = new Revisions();
  $revision->problem = $problem;
  $revision->ok = '1';
  $revision->save();

  header('location:create.php');
 ?>

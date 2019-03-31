<?php
  include('../Classes/models.php');

  $revision_id = $_POST['id'];

  $revision = Revisions::retrieveByPK($revision_id);

  $problem = $_POST['problem'];

  $revision->problem = $problem;
  $revisions->save();

  header('location:create.php');

  $
 ?>

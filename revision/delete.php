<?php
  include('../clasess/models.php');

  $revision_id = $_GET['id'];

  $revision = Revisions::retrieveByPK($revision_id);
  $revision->delete();

  header('location:create.php');
 ?>

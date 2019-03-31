<?php
  include('../classes/models.php');

  $provider_id = $_GET['id'];

  $provider = Providers::retrieveByPK($provider_id);
  $provider->delete();

  header('location:index.php');
 ?>

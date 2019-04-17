<?php

  include('../classes/models.php');

  $provider_id = $_POST['id'];

  $provider = Providers::retrieveByPK($provider_id);

  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $expired_at = $_POST['expired_at'];
  $polize = $_POST['polize'];


  $provider->name = $name;
  $provider->phone = $phone;
  $provider->email = $email;
  $provider->expired_at = $expired_at;
  $provider->polize = $polize;
  $provider->save();

  header('location:index.php');
 ?>

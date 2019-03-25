<?php

include('../Classes/models.php');


$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];


$provider = new Providers();
$provider->name = $name;
$provider->phone = $phone;
$provider->email = $email;
$provider->save();

header('location:index.php');

 ?>

<?php

include('../Classes/models.php');


$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$expired_at = $_POST['expired_at'];
$polize = $_POST['polize'];

$provider = new Providers();
$provider->name = $name;
$provider->phone = $phone;
$provider->email = $email;
$provider->expired_at = $expired_at;
$provider->poloze = $polize;
$provider->save();

header('location:index.php');

 ?>

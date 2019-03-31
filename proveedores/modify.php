<?php
  include('../classes/models.php');

  $provider_id = $_GET['id'];

  $provider = Providers::retrieveByPK($provider_id);

 ?>


 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <link rel="stylesheet" href="style.css" type="text/css">
     <meta charset="utf-8">
     <title></title>
     <?php include('../page/headers.php') ?>
     <img src="../picture/logo.png" width="300" height="100">
   </head>
   <body>
     <div class="pt5">
       <div class="container">
         <div class="row">
           <div class="col-sm-12">
             <div class="pv3">
               <a class="btn btn-secondary" href="index.php">Regresar</a>
             </div>
           </div>
         </div>
         <div class="row">
           <div class="col-sm-8">
             <?php include('forms/modify.php'); ?>
           </div>
           <div class="col-sm-4"></div>
         </div>
       </div>
     </div>
   </body>
 </html>

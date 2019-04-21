<?php
  include('../classes/models.php');

  $product_id = $_GET['id'];

  $product = Products::retrieveByPK($product_id);

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="style.css" type="text/css">
    <meta charset="utf-8">
    <title></title>
    <?php include('../page/headers.php') ?>
    <script src="../libraries/qrcode.min.js" type="text/javascript"></script>
    <style media="screen">
      #qrcode img{
        margin:0px auto;
      }
    </style>
  </head>
  <body>
   <div class="pt5">
     <div class="container">
       <?php include('../page/nav.php') ?>
         <div class="row">
           <div class="col-sm-12">
             <div class="pv3">
               <a href="index.php" class="btn btn-secondary">Ir a productos</a>
             </div>
           </div>
         </div>
       <div class="row">
         <div class="col-sm-8">
           <?php include('forms/modify.php') ?>
         </div>
         <div class="col-sm-4 bg-white">
           <div class="pa4">
             <p class="tc b">Código de producto generado</p>
             <div id="qrcode"></div>
           </div>
         </div>
       </div>
     </div>
   </div>
    <script type="text/javascript">
      new QRCode(document.getElementById("qrcode"), "<?php echo $product->code ?>");
    </script>
  </body>
</html>

<?php
  include('../classes/models.php');

  $code = $_GET['code'];

  $product = Products::retrieveByCode($code, SimpleOrm::FETCH_ONE);

  if ($product) {
    // var_dump($product);
    header('Location: index.php?product_id='.$product->id);
  }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>No encontrado</title>
  </head>
  <body>
    <h1>El producto no se ha encontrado</h1>
  </body>
</html>

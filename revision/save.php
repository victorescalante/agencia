<?php
  include('../classes/models.php');

  $comment = $_POST['comment'];
  $product_id = $_POST['product_id'];


  $revision = new Revisions();
  $revision->comment = $comment;
  $revision->product_id = $product_id;
  $revision->date_revision = date("Y-m-d H:i:s");
  $revision->date_updated = date("Y-m-d H:i:s");
  $revision->save();

  $product = Products::retrieveByPK($product_id);
  $category_properties = Property_Category::sql('select * from :table where category_id = '.$product->category_id);
  // var_dump($category_properties);

  foreach ($category_properties as  $property) {
    $product_revision = new Product_Revision();
    $product_revision->property_id = $property->property_id;
    $product_revision->property_value = $_POST['properties'][$property->property_id];
    $product_revision->revision_id = $revision->id;
    $product_revision->save();
  }


  header('location:index.php?product_id='.$product_id);
 ?>

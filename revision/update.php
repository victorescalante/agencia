<?php
include('../Classes/models.php');

$comment = $_POST['comment'];
$product_id = $_POST['product_id'];
$revision_id = $_POST['revision_id'];


$revision = Revisions::retrieveByPK($revision_id);
$revision->comment = $comment;
$revision->date_updated = date("Y-m-d H:i:s");
$revision->save();

$product_properties = Product_Properties::sql("select * from :table where product_id=".$product_id);

foreach ($product_properties as  $property) {
  $product_revision = Product_Revision::sql("select * from :table where revision_id=".$revision->id." and property_id=".$property->property_id);;
  if (count($product_revision) > 0) {
    $product_revision[0]->property_value = $_POST['properties'][$property->property_id];
    $product_revision[0]->save();
  }else{
    $product_revision = new Product_Revision();
    $product_revision->property_id = $property->property_id;
    $product_revision->property_value = $_POST['properties'][$property->property_id];
    $product_revision->revision_id = $revision_id;
    $product_revision->save();
  }
}


header('location:index.php?product_id='.$product_id);

 ?>

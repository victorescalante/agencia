<?php
  include('../classes/models.php');

  $category_id = $_GET['id'];
  $sql = 'select * from :table where category_id = '.$category_id;
  //echo $sql;
  $collection_category_property = Property_Category::sql($sql);

  foreach ($collection_category_property as $relation) {
    $relation->delete();
  }
  $category = Categories::retrieveByPK($category_id);
  $category->delete();

  header('location:index.php');
 ?>

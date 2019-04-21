<?php
  include ('../classes/models.php');

  $category_id = $_POST['id'];

  $category = Categories::retrieveByPK($category_id);

  $name = $_POST['name'];

  $category->name = $name;
  $category->save();

  if(!empty($_POST['properties'])){

    $property_categories = Property_Category::sql("select *
    from :table where category_id=".$category->id);

    if ($property_categories) {
      foreach ($property_categories as $property) {
        $property->delete();
      }
    }

    foreach ($_POST['properties'] as $property) {
      $category_properties = new Property_Category();
      $category_properties->category_id = $category->id;
      $category_properties->property_id = $property;
      $category_properties->save();
    }
  }


  header('location:index.php');
 ?>

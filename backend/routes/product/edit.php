<?php

  $product = $_POST['name'];

  // back-end check product content
  if (!isset($product) || empty($product) || $product==' ' || $product=='' ) {
      $response = "Los datos del producto no son correctos!";
  } else {
      // initialize object
      include_once '../../controllers/ProductController.php';
      $response = ProductController::edit($_POST);
  }

  echo "<br>".$response."<br>";

?>

<?php
// include database and object files
require_once('../../config/database.php');
require_once("../../models/Product.php");

class ProductController
{

  // all products
  public function all()
  {
      //  :(
  }

  // delete products
  public function delete()
  {

  }

  // edit products
  public function edit()
  {

  }

  // create products
  public function create(_post[])
  {
    $newProduct = new Product;

    $newProduct->code = $code;
    $newProduct->category = $category;
    $newProduct->name = $name;
    $newProduct->quantity = $quantity;
    $newProduct->price = $price;

    $newProduct->save();

  }

}
?>

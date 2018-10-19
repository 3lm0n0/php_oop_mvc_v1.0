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
  public static function create($POST)
  {
    //
    $newProduct = new Product($POST['code'],$POST['category'],$POST['name'],$POST['quantity'],$POST['price']);
    //
    $code = $newProduct->getCode();
    $category = $newProduct->getCategory();
    $name = $newProduct->getName();
    $quantity = $newProduct->getQuantity();
    $price = $newProduct->getPrice();

    // instantiate database and product object
    $database = new Database();
    $tableName = $database->DB_TABLE_PROUDCTS;
    $db = $database->db;
        // armo la query
        $query = "INSERT INTO"
                    .$tableName."(code,category,name,quantity,price)
                  VALUES
                    (".$code.",'".$category."','".$name."',".$quantity.",".$price.")";

        // prepare query statement
        $stmt = $db->prepare($query);
        // execute query
        $stmt->execute();
        //
        if ($stmt === TRUE) {
            echo "<br> El producto fue creado exitosamente! <br>";
        } else {
            echo "<br> Error: " . $query . "<br>";
        }
        // return "El producto fue creado exitosamente!";
        // return print_r($stmt);
  }

}
?>

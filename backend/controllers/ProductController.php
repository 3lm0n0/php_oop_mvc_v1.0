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
  public static function delete($post)
  {
    //
    $newProduct = new Product($post['code'],$post['category'],$post['name'],$post['quantity'],$post['price']);
    //
    $code = intval($newProduct->getCode());
    // echo gettype($code), "\n";
    $category = $newProduct->getCategory();
    // echo gettype($category), "\n";
    $name = $newProduct->getName();
    // echo gettype($name), "\n";
    $quantity = intval($newProduct->getQuantity());
    // echo gettype($quantity), "\n";
    $price = floatval($newProduct->getPrice());
    // echo gettype($price), "\n";
    // timestamps
    $updated_at = date("Y-m-d H:i:s");
    $created_at = date("Y-m-d H:i:s");

    // instantiate database and product object
    $database = new Database();
    $tableName = $database->DB_TABLE_PROUDCTS;
    $db = $database->db;
            // select query
            $query = "SELECT * FROM $tableName
                      WHERE code = $code AND category = '".$category."' AND name = '".$name."' AND quantity = $quantity AND price = $price";
            // prepare query statement
            $stmt = $db->prepare($query);
            // execute query
            $stmt->execute();
            // echo "stmt ".print_r($stmt), "\n";
            $num = $stmt->rowCount();
            // check query result
            if($num==1){
                $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                $id = $stmt->fetchAll()[0]['id'];
                // delete query
                $query = "DELETE FROM ".$tableName." WHERE id=$id";
                $stmt = $db->prepare($query);
                $result = $stmt->execute();
                if ($result === TRUE) {
                    echo "El producto ha sido borrado!";
                } else {
                    echo "Error: " . $query . "<br>";
                }
            } else {
                echo "No ha sido posible eliminar el producto de la base de datos.";
            }
  }

  // edit products
  public static function edit($post)
  {
    //
    $newProduct = new Product($post['code'],$post['category'],$post['name'],$post['quantity'],$post['price']);
    //
    $code = intval($newProduct->getCode());
    // echo gettype($code), "\n";
    $category = $newProduct->getCategory();
    // echo gettype($category), "\n";
    $name = $newProduct->getName();
    // echo gettype($name), "\n";
    $quantity = intval($newProduct->getQuantity());
    // echo gettype($quantity), "\n";
    $price = floatval($newProduct->getPrice());
    // echo gettype($price), "\n";
    // timestamps
    $updated_at = date("Y-m-d H:i:s");
    $created_at = date("Y-m-d H:i:s");

    // instantiate database and product object
    $database = new Database();
    $tableName = $database->DB_TABLE_PROUDCTS;
    $db = $database->db;
        // select query
        $query = "SELECT * FROM $tableName
                  WHERE (code = $code AND category = '".$category."' AND name = '".$name."' AND quantity = $quantity) OR
                        (code = $code AND category = '".$category."' AND name = '".$name."' AND price = $price) OR
                        (code = $code AND category = '".$category."' AND quantity = $quantity AND price = $price) OR
                        (code = $code AND name = '".$name."' AND quantity = $quantity AND price = $price) OR
                        (category = '".$category."' AND name = '".$name."' AND quantity = $quantity AND price = $price)";
        // prepare query statement
        $stmt = $db->prepare($query);
        // execute query
        $stmt->execute();

        $num = $stmt->rowCount();
    // check query result
    if($num==1) {
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $id = $stmt->fetchAll()[0]['id'];
          // update query
          $query = "UPDATE $tableName
                       SET code = $code,
                           category = '".$category."',
                           name = '".$name."',
                           quantity = $quantity,
                           price = $price
                       WHERE id = $id";
         $stmt = $db->prepare($query);
         $result = $stmt->execute();
         if ($result === TRUE) {
             echo "Product editado exitosamente!";
         } else {
             echo "Error: " . $query . "<br>";
         }
    } else {
         echo "No ha sido posible editar el producto.";
    }

  }

  // create products
  public static function create($post)
  {
    //
    $newProduct = new Product($post['code'],$post['category'],$post['name'],$post['quantity'],$post['price']);
    //
    $code = intval($newProduct->getCode());
    // echo gettype($code), "\n";
    $category = $newProduct->getCategory();
    // echo gettype($category), "\n";
    $name = $newProduct->getName();
    // echo gettype($name), "\n";
    $quantity = intval($newProduct->getQuantity());
    // echo gettype($quantity), "\n";
    $price = floatval($newProduct->getPrice());
    // echo gettype($price), "\n";
    // timestamps
    $updated_at = date("Y-m-d H:i:s");
    $created_at = date("Y-m-d H:i:s");

    // instantiate database and product object
    $database = new Database();
    $tableName = $database->DB_TABLE_PROUDCTS;
    $db = $database->db;
        // armo la query
        $query = "INSERT INTO ".$tableName."(code,category,name,quantity,price)
                  VALUES(".$code.",'".$category."','".$name."',".$quantity.",".$price.")";

        // prepare query statement
        $stmt = $db->prepare($query);
        // execute query
        $stmt->execute();
    // corroboro el resultado de la ejecucion de la query.
    if ($stmt === TRUE) {
        $response = "<br> El producto fue creado exitosamente! <br>";
    } else {
        $response = "<br> Error: " . print_r($stmt) . "<br>";
    }
    return $response;
  }

}
?>

<?php
// include database and object files
require_once('../config/database.php');
// require_once("../../models/Product.php");
//
// class ProductController
// {

  //all products
  // public function index()
  //
  // {
    // require_once("../../views/product/all.php");
    // instantiate database and product object
    $database = new Database();
    // select all query
    $query = "SELECT
                p.id, p.code, p.category, p.name, p.quantity,  p.price
              FROM
                " . $database->DB_TABLE_PROUDCTS . " p ";
    // prepare query statement
    $stmt = $database->db->prepare($query);
    // execute query
    $stmt->execute();

    $num = $stmt->rowCount();
    // print_r($num);
    if ($num>0) {
        // products array
        $products_arr=array();
        $products_arr["records"]=array();

        // retrieve our table contents
        // fetch() is faster than fetchAll()
        // http://stackoverflow.com/questions/2770630/pdofetchall-vs-pdofetch-in-a-loop
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            // extract row
            // this will make $row['name'] to
            // just $name only
            extract($row);

            $product_item=array(
                "id" => $id,
                "code" => $code,
                "category" => $category,
                "name" => $name,
                "quantity" => $quantity,
                "price" => $price
            );
            array_push($products_arr["records"], $product_item);
        }
        $response = $products_arr;
        // print_r($response);
    } else {
        $response = array("message" => "No products found.");
    }

    // response
    // return $response;
    // print_r(json_encode($response));
    echo json_encode($response);
  // }


// }
?>

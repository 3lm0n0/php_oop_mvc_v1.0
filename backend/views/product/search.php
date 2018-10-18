<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// This function will run within each post array including multi-dimensional arrays
function ExtendedAddslash(&$params)
{
    foreach ($params as &$var) {
        // check if $var is an array. If yes, it will start another ExtendedAddslash() function to loop to each key inside.
        is_array($var) ? ExtendedAddslash($var) : $var=addslashes($var);
    }
}

// Initialize ExtendedAddslash() function for every $_POST variable
ExtendedAddslash($_POST);
// echo(print_r( $_POST )."<br>");
// $id = $_POST['id'];
$product = $_POST['product'];
$status = $_POST['status'];
// back-end check product content
if (isset($product) && !empty($product) && $product && $product!==' ') {
    // include database and object files
    include_once '../config/database.php';

    // instantiate database and product object
    $database = new Database();
    $db = $database->getConnection();

    // initialize object
    include_once '../objects/product.php';
    $obj_product = new Product($db);

    // query products
    $stmt = $obj_product->save($product,$status);
    // $num = $stmt->rowCount();
} else {
    echo "Debes ingresar el nombre del Producto.";
}

?>

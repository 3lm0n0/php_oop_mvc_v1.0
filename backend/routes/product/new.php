<?php
// required headers
// header("Access-Control-Allow-Origin: *");
// header("Content-Type: application/json; charset=UTF-8");

// // This function will run within each post array including multi-dimensional arrays
// function ExtendedAddslash(&$params)
// {
//     foreach ($params as &$var) {
//         // check if $var is an array. If yes, it will start another ExtendedAddslash() function to loop to each key inside.
//         is_array($var) ? ExtendedAddslash($var) : $var=addslashes($var);
//     }
// }
//
// // Initialize ExtendedAddslash() function for every $_POST variable
// ExtendedAddslash($_POST);
// echo(print_r( $_POST )."<br>");
// $id = $_POST['id'];
// echo("POST == ".print_r($_POST));
$product = $_POST['name'];

// back-end check product content
if (!isset($product) || empty($product) || $product==' ') {
    $response = "Lo siento, no fue posible crear el producto!";
} else {
    // initialize object
    include_once '../../controllers/ProductController.php';
    $response = ProductController::create($_POST);
}

echo "<br>".$response."<br>";
?>

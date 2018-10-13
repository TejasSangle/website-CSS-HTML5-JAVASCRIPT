<?php
if(!empty($_GET["action"])) {
$productId = isset($_GET['id']) ? htmlspecialchars($_GET['id']) : '';
$quantity = isset($_POST['quantity']) ? htmlspecialchars($_POST['quantity']) : '';
switch($_GET["action"]) {
case "add":
if(!empty($quantity)) {
$stmt = $conn->prepare("SELECT * FROM products where id= ?");
$stmt->bind_param('i',$productId);
$stmt->execute();
$productDetails = $stmt->get_result()->fetch_object();
$itemArray = array($productDetails->id=>array('product_title'=>$productDetails->product_title, 'id'=>$productDetails->id, 'quantity'=>$quantity, 'price'=>$productDetails->price));
if(!empty($_SESSION["cart_item"])) {
if(in_array($productDetails->id,array_keys($_SESSION["cart_item"]))) {
foreach($_SESSION["cart_item"] as $k => $v) {
if($productDetails->id == $k) {
if(empty($_SESSION["cart_item"][$k]["quantity"])) {
$_SESSION["cart_item"][$k]["quantity"] = 0;
}
$_SESSION["cart_item"][$k]["quantity"] += $quantity;
}
}
} else {
$_SESSION["cart_item"] = $_SESSION["cart_item"] + $itemArray;
}
} else {
$_SESSION["cart_item"] = $itemArray;
}
}
break;
case "remove":
if(!empty($_SESSION["cart_item"])) {
foreach($_SESSION["cart_item"] as $k => $v) {
if($productId == $v['id'])
unset($_SESSION["cart_item"][$k]);
}
}
break;
case "empty":
unset($_SESSION["cart_item"]);
break;
}
}
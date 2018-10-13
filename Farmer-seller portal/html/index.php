<?php
session_start();
include_once 'connection.php';
include_once 'product-action.php';
include_once 'cart.php';

$stmt = $conn->prepare("SELECT * FROM products ORDER BY id ASC");
$stmt->execute();
$products = $stmt->get_result();
echo '<table style="border: 1px solid #ddd;"><tr>';
if (!empty($products)) {
foreach($products as $product){
?>
<td style="border: 1px solid #ddd;">
<form method="post" action="index.php?action=add&id=<?php echo $product['id']; ?>">
<div class="product-image"><img src="images/<?php echo $product['image']; ?>" width="200" height="200"></div>
<div><strong><?php echo $product["product_title"]; ?></strong></div>
<div class="product-price"><?php echo "$".$product["price"]; ?></div>
<div><input type="text" name="quantity" value="1" size="2" /><input type="submit" value="Add to cart" /></div>
</form>
</td>
<?php }}

echo '</tr></table>';
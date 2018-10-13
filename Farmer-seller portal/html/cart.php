<?php
if(!empty($_SESSION["cart_item"])){
$item_total = 0;
?>
<a href="index.php?action=empty"><input type="button" value="Empty Cart"></a>
<table cellpadding="10" cellspacing="1">
<tbody>
<tr>
<th><strong>Name</strong></th>
<th><strong>Quantity</strong></th>
<th><strong>Price</strong></th>
<th><strong>Action</strong></th>
</tr>
<?php
foreach ($_SESSION["cart_item"] as $item){
?>
<tr>
<td><strong><?php echo $item["product_title"]; ?></strong></td>
<td><?php echo $item["quantity"]; ?></td>
<td><?php echo "$".$item["price"]; ?></td>
<td><a href="index.php?action=remove&id=<?php echo $item["id"]; ?>" class="btnRemoveAction">Remove Item</a></td>
</tr>
<?php
$item_total += ($item["price"]*$item["quantity"]);
}
?>

<tr>
<td colspan="3" align=right><strong>Total:</strong> <?php echo "$".$item_total; ?></td>
</tr>
</tbody>
</table>
<?php
}
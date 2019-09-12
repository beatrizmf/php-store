<?php
if(isset($data["result"])) {
  echo "<br/>";
  echo "<p>" . $data["result"] ? "success" : "fail" . "</p>"; 
  echo "<br/>";
  echo "<br/>";
}
?>

<table border="1">
  <tr>
    <th>id</th>
    <th>name</th>
    <th>price sale</th>
    <th>price purchase</th>
    <th>quantity</th>
    <th>-</th>
  </tr>
  <?php foreach ($data["products"] as $product) : ?>
    <?php // $data["priceProductDAO"]->query() ?>
    <tr>
      <form method="post" action="<?= BASE_URL . '/price-products' ?>">
        <input hidden name="tb_product_id" value="<?= $product->getId(); ?>" />  
        <td><?= $product->getId(); ?></td>
        <td><?= $product->getName(); ?></td>
        <td><input name="price_sale" value="<?= $product->getPrice() ? $product->getPrice() : ""; ?>"></td>
        <td><input name="price_purchase" /></td>
        <td><input name="quantity" /></td>
        <td><button type="submit">Save</button></td>
      </form>
    </tr>
  <?php endforeach; ?>
</table>
<br />
<a href="<?= BASE_URL . '/products' ?>">products</a>
<?php
if(isset($data["message"])) {
  echo "<br/>";
  echo "<p>" . $data["message"] ? "success" : "fail" . "</p>"; 
  echo "<br/>";
  echo "<br/>";
}
?>

<form method="post" action="<?= BASE_URL . '/new-product' ?>">
  <label for="name">name</label>
  <input name="name" />

  <label for="price_sale">price sale</label>
  <input name="price_sale" />
  
  <label for="price_purchase">price purchase</label>
  <input name="price_purchase" />
  
  <label for="quantity">quantity</label>
  <input name="quantity" />
  
  <button type="submit">Save</button>
</form>

<br />

<a href="<?= BASE_URL . '/products' ?>">products</a>
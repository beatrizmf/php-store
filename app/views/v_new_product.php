<?php
if(isset($data["result"])) {
  echo "<br/>";
  echo "<p>" . $data["result"] ? "success" : "fail" . "</p>"; 
  echo "<br/>";
  echo "<br/>";
}
?>

<form method="post" action="<?= BASE_URL . '/new-product' ?>">
  <label for="name">Name</label>
  <input name="name" />
  <button type="submit">Save</button>
</form>

<br />

<a href="<?= BASE_URL . '/products' ?>">products</a>
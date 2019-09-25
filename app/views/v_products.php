<?php
if(isset($data["message"])) {
  echo "<br/>";
  echo "<p>" . $data["message"] . "</p>"; 
  echo "<br/>";
  echo "<br/>";
}
?>

<?php if (!empty($data["products"])) : ?>
  <h1>products</h1>
  <table border="1">
    <tr>
      <th>name</th>
      <th>price</th>
      <th>quantify</th>
      <th>-</th>
    </tr>
    <?php foreach ($data["products"] as $product) : ?>
      <tr>
        <td><?= $product->getName(); ?></td>
        <td><?= $product->getPrice() ? $product->getPrice() : "not set"; ?></td>
        <td><?= $product->getQuantify() ? $product->getQuantify() : "not set"; ?></td>
        <td><a href="<?= BASE_URL . '/add-to-cart/?id=' . $product->getId();  ?>">add to card</a></td>
        <!-- <td><a href="<?//= BASE_URL . "/product/?id=" . $product->getId() ?>">See more</a></td> -->
      </tr>
    <?php endforeach; ?>
  </table>
<?php endif; ?>
<br />
<!-- <a href="<?//= BASE_URL ?>/new-product">new product</a> -->
<!-- <br /><br /> -->
<a href="<?= BASE_URL ?>/home">home</a>
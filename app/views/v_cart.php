<h1>cart</h1>

<?php if (!empty($data["cart"])) : ?>
  <table border="1">
    <tr>
      <th>name</th>
      <th>price</th>
      <th>quantity</th>
      <th>-</th>
    </tr>
    <?php foreach ($data["cart"] as $product) : ?>
      <tr>
        <td><?= $product->getName(); ?></td>
        <td><?= $product->getPrice() ? $product->getPrice() : "not set"; ?></td>
        <td><input name="quantity" value="1" type="number" min="1" max="<?= $product->getQuantity(); ?>" disabled /></td>
        <td><a href="<?= BASE_URL . '/remove-from-cart/?id=' . $product->getId(); ?>">remove item</td>
      </tr>
    <?php endforeach; ?>
  </table>
  <p>Total: R$ <?= $data["totalPrice"] ?></p>
  <br />
  <a href="<?= BASE_URL ?>/close-cart">check out</a>

<?php else : ?>
  <p>empty cart</p>
<?php endif; ?>
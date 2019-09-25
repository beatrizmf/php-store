<?php if (!empty($data["cart"])) : ?>
  <h1>cart</h1>
  <table border="1">
    <tr>
      <th>name</th>
      <th>price</th>
      <th>-</th>
    </tr>
    <?php foreach ($data["cart"] as $product) : ?>
    <?php
      ?>
      <tr>
        <td><?= $product->getName(); ?></td>
        <td><?= $product->getPrice() ? $product->getPrice() : "not set"; ?></td>
        <td><a href="<?= BASE_URL . '/remove-from-cart/?id=' . $product->getId(); ?>">remove item</td>
      </tr>
    <?php endforeach; ?>
  </table>
  <p>Total: R$ <?= $data["totalPrice"] ?></p>

<?php else : ?>
  <p>empty cart</p>
<?php endif; ?>
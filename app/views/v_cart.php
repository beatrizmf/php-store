<?php if (!empty($data["cart"])) : ?>
  <h1>cart</h1>
  <table border="1">
    <tr>
      <th>name</th>
      <th>price</th>
    </tr>
    <?php foreach ($data["cart"] as $product) : ?>
    <?php
      ?>
      <tr>
        <td><?= $product->getName(); ?></td>
        <td><?= $product->getPrice() ? $product->getPrice() : "not set"; ?></td>
      </tr>
    <?php endforeach; ?>
  </table>
  <p>Total: R$ <?= $data["totalPrice"] ?></p>

<?php else : ?>
  <p>empty cart</p>
<?php endif; ?>
<?php if (!empty($data["products"])) : ?>
  <h1>products</h1>
  <table border="1">
    <tr>
      <th>name</th>
      <th>price</th>
      <th>quantify</th>
      <th>🛒</th>
    </tr>
    <?php foreach ($data["products"] as $product) : ?>
    <?php $urlAddToCart = BASE_URL . "/add-to-cart/?id=" . $product->getId(); ?>
      <tr>
        <td><?= $product->getName(); ?></td>
        <td><?= $product->getPrice() ? $product->getPrice() : "not set"; ?></td>
        <td><?= $product->getQuantity() ? $product->getQuantity() : "0"; ?></td>
        <td>
          <?=
                (($product->getQuantity()) > 0)
                  ? "<a href='$urlAddToCart'>add to cart</a></td>"
                  : "unavailable"
              ?>
        </td>
        <!-- <td><a href="<?//= BASE_URL . "/product/?id=" . $product->getId() ?>">See more</a></td> -->
      </tr>
    <?php endforeach; ?>
  </table>
<?php endif; ?>
<table border="1">
  <tr>
    <th>id</th>
    <th>name</th>
    <th>-</th>
  </tr>
  <?php foreach ($data["products"] as $product) : ?>
    <tr>
      <td><?= $product->getId(); ?></td>
      <td><?= $product->getName(); ?></td>
      <td><a href="<?= BASE_URL . "/product/?id=" . $product->getId() ?>">See more</a></td>
    </tr>
  <?php endforeach; ?>
</table>
<br />
<a href="<?= BASE_URL ?>">home</a>
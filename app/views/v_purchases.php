<?php

if (!empty($data["sales"])) : ?>
  <h1>purchases</h1>
  <table>
    <tr>
      <th>name</th>
      <th>price</th>
      <th>quantify</th>
      <th>date</th>
    </tr>

  <?php foreach($data["sales"] as $sale) : ?>
    <tr>
      <td><?= $sale["name"] ?></td>
      <td><?= $sale["price_sale"] ?></td>
      <td><?= $sale["quantity"] ?></td>
      <td><?= $sale["date"] ?></td>
    </tr>
  <?php endforeach; ?>
<?php else : ?>
   <p>no purchases yet</p>
<?php endif; ?>
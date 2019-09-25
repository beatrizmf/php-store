<html>
<head>
  <title>Store</title>
  <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/styles.css" />
</head>
<body>
  <nav>
    <ul>
      <li><a href="<?= BASE_URL ?>">Home</a></li>
      <li><a href="<?= BASE_URL ?>/products">Products</a></li>
      <li><a href="<?= BASE_URL ?>/cart">Cart</a></li>
      <li><a href="<?= BASE_URL ?>/logout">Logout</a></li>
    </ul>
  </nav>
  <?php
  require_once PATH_APP . "/views/" . $data["view"] . ".php";
  ?>
</body>
</html>
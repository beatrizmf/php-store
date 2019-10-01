<html>

<head>
  <title>Store</title>
  <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/styles.css" />
</head>

<body>
  <nav>
    <ul>
      <li><a href="<?= BASE_URL ?>">Home</a></li>
      <li><a href="<?= BASE_URL ?>/new-product">New Product[Admin]</a></li>
      <li><a href="<?= BASE_URL ?>/products">Products</a></li>
      <li><a href="<?= BASE_URL ?>/cart">Cart</a></li>
      <li><a href="<?= BASE_URL ?>/purchases">Purchases</a></li>
      <li><a href="<?= BASE_URL ?>/sign-out">Logout</a></li>
    </ul>
  </nav>
  <div>
    <?php
    if (isset($_SESSION["message"])) {
      echo "<p>" . $_SESSION["message"] . "</p>";
    }
    require_once PATH_APP . "/views/" . $data["view"] . ".php";
    ?>
  </div>
</body>

</html>
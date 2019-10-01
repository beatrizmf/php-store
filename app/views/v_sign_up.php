<html>

<head>
  <title>Store Sign Up</title>
  <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/styles.css" />
</head>

<body>
  <div>
    <h1>Sign Up</h1>
    <?php
    if (isset($_SESSION["message"])) {
      echo "<p>" . $_SESSION["message"] . "</p>";
    }
    ?>
    <form action="<?= BASE_URL ?>/sign-up" method="POST">
      <input type="text" name="name" autofocus placeholder="name">
      <input type="text" name="username" placeholder="username">
      <input type="password" name="password" placeholder="password">
      <button type="submit">Sing Up</button>
    </form>
    <a href="<?= BASE_URL ?>/sign-in">Sing In</a>
  </div>
</body>
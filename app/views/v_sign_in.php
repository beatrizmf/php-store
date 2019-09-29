<html>

<head>
  <title>Store Sign In</title>
</head>

<body>
  <h1>Sign In</h1>
  <?php
  if (isset($_SESSION["message"])) {
    echo "<p>" . $_SESSION["message"] . "</p>";
  }
  ?>
  <form action="<?= BASE_URL ?>/sign-in" method="POST">
    <input type="text" name="username" autofocus placeholder="username">
    <input type="password" name="password" placeholder="password">
    <button type="submit">Sing In</button>
  </form>
  <a href="<?= BASE_URL ?>/sign-up">Sing Up</a>
</body>
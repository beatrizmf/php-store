<html>
<head>
  <title>Store Login</title>
</head>
  <body>
    <h1>login</h1>
    <?php 
      if(isset($_SESSION["message"])){
        echo "<p>" . $_SESSION["message"] . "</p>";
      }
    ?>
    <form action="<?= BASE_URL ?>/login" method="POST">
      <input type="text" name="user" autofocus placeholder="user">
      <input type="password" name="password" placeholder="password">
      <button type="submit">Sing In</button>
    </form>
  </body>
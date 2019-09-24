<form action="<?= BASE_URL ?>/login" method="POST">
  <input type="text" name="user" autofocus placeholder="user">
  <input type="password" name="password" placeholder="password">
  <button type="submit">Sing In</button>
  <?php echo isset($_SESSION["error"]) ? $_SESSION["error"] : "" ?>
</form>
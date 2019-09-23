<?php
if(isset($data["message"])) {
  echo "<br/>";
  echo "<p>" . $data["message"] ."</p>"; 
  echo "<br/>";
  echo "<br/>";
}
?>

<p>
<?= $data['product']->getName(); ?>
 ->
R$ <?= $data['product']->getPrice(); ?>
 ->
Quantify <?= $data['product']->getQuantify(); ?>
</p>

<a href="<?= BASE_URL . '/products' ?>">back</a>
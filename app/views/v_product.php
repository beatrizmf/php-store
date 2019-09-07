<p>
id: <?= $data['product']->getId(); ?> 
/ 
<?= $data['product']->getName(); ?>
/
R$ <?= $data['product']->getPrice(); ?>
</p>

<a href="<?= BASE_URL . '/products' ?>">back</a>
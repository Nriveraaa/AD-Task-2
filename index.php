<?php
require_once('utils/fruits.utils.php');
require_once('components/productCard.component.php');

$fruits = getFruits();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Fruit Shop</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h1>Fruit Shop</h1>
    <div class="container">
        <?php foreach ($fruits as $fruit): ?>
            <?php echo renderProductCard($fruit); ?>
        <?php endforeach; ?>
    </div>
</body>
</html>

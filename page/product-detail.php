<?php
require_once('../utils/fruits.utils.php');
$fruits = getFruits();
$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
$fruit = $fruits[$id];
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $fruit['name']; ?> - Details</title>
    <link rel="stylesheet" href="assets/css/detail.css">
</head>
<body>
    <div class="detail-container">
        <img src="../assets/img/<?php echo $fruit['img']; ?>" alt="<?php echo $fruit['name']; ?>">
        <div class="info">
            <!--fruit name-->
            <h1><?php echo $fruit['name']; ?></h1>
            <!--fruit description-->
            <p><?php echo $fruit['desc']; ?></p>
            <!--fruit price-->
            <h2>₱<?php echo number_format($fruit['price'], 2); ?></h2>
            <!--link back to the main page-->
            <a href="../index.php">⬅ Back to shop</a>
        </div>
    </div>
</body>
</html>
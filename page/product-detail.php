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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Blurred background image -->
    <div class="background"></div>

    <!-- Content wrapper -->
    <div class="detail-container">
        <!-- Fruit Image -->
        <div class="image-section">
            <img src="../assets/img/<?php echo $fruit['img']; ?>" alt="<?php echo $fruit['name']; ?>">
        </div>

        <!-- Fruit Info -->
        <div class="info">
            <h1><?php echo $fruit['name']; ?></h1>
            <p><?php echo $fruit['desc2']; ?></p>
            <h2>₱<?php echo number_format($fruit['price'], 2); ?></h2>
            <a href="../index.php">Back to shop</a>
        </div>
    </div>
</body>
</html>

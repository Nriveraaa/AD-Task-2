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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="detail-container">
        <div class="detail-image-wrapper">
             <img src="../assets/img/<?php echo $fruit['img']; ?>" alt="<?php echo $fruit['name']; ?>">
             <img src="leaf.png" alt="Mango Leaf" class="leaf-graphic">
        </div>
        <div class="info">
            <h1><?php echo $fruit['name']; ?></h1>
            <p>
                <?php
                // Detailed descriptions for each fruit
                if ($fruit['name'] === 'Apple') {
                    echo "Our apples are crisp and refreshing, with a satisfyingly firm texture and a naturally sweet flavor.  We offer a variety of types, each with its own unique characteristics.  Enjoy them fresh, bake them into pies, or use them to make delicious cider.";
                } elseif ($fruit['name'] === 'Banana') {
                    echo "Our bananas are sweet and creamy, a perfect snack for any time of day.  They're known for their smooth texture and rich potassium content.  Enjoy them on their own, in smoothies, or baked into bread.";
                } elseif ($fruit['name'] === 'Orange') {
                    echo "Our oranges are bursting with juicy, citrusy flavor.  They're an excellent source of vitamin C and are perfect for a refreshing snack or a glass of freshly squeezed juice.  The vibrant color and tangy aroma are sure to brighten your day.";
                } elseif ($fruit['name'] === 'Mango') {
                    echo "Indulge in the tropical sweetness of our mangoes.  Grown in the Philippines, our mangoes are prized for their exceptional sweetness, smooth, creamy texture, and vibrant flavor.  Each bite is a taste of sunshine.";
                } elseif ($fruit['name'] === 'Grapes') {
                    echo "Our grapes are sweet, succulent, and bursting with flavor.  Enjoy them fresh off the vine, or use them to make delicious jams and jellies.  We offer both seeded and seedless varieties.";
                } elseif ($fruit['name'] === 'Pineapple') {
                    echo "Our pineapples are a tropical delight, with a sweet and tangy flavor and a juicy, fibrous texture.  Enjoy them fresh, grilled, or in your favorite tropical drinks. Their vibrant flavor is a reminder of sunny days.";
                } elseif ($fruit['name'] === 'Watermelon') {
                    echo "Our watermelons are the perfect summertime treat, with their refreshing, juicy flesh and sweet flavor.  They're a hydrating and delicious way to cool down on a hot day.  Enjoy them sliced, cubed, or blended into a refreshing juice.";
                } elseif ($fruit['name'] === 'Strawberry') {
                    echo "Our strawberries are sweet, juicy, and bursting with vibrant red color.  They're perfect for snacking, desserts, or adding a touch of sweetness to your breakfast.  Their delicate flavor is a true taste of summer.";
                } elseif ($fruit['name'] === 'Blueberry') {
                    echo "Our blueberries are small but mighty, packed with antioxidants and intense flavor.  Enjoy them fresh, in muffins, or blended into smoothies.  Their slightly tart and sweet taste is a delight.";
                } elseif ($fruit['name'] === 'Papaya') {
                    echo "Our papayas are a tropical delicacy, with a smooth, buttery texture and a sweet, musky flavor.  Enjoy them fresh, in salads, or as a healthy and delicious dessert.  They are also known for their digestive benefits.";
                } else {
                    echo "This is a delicious fruit."; // Default description
                }
                ?>
            </p>
            <h2>₱<?php echo number_format($fruit['price'], 2); ?></h2>
            <a href="../index.php">⬅ Back to shop</a>
        </div>
    </div>
</body>
</html>

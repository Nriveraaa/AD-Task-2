<?php
function renderProductCard($fruit) {
    return "
    <div class='product'>
        <img src='assets/img/{$fruit['img']}' alt='{$fruit['name']}' />
        <h3>{$fruit['name']}</h3>
        <p>{$fruit['desc']}</p>
        <p>₱" . number_format($fruit['price'], 2) . "</p>
        <a href='page/product-detail.php?id={$fruit['id']}'>View</a>
    </div>
    ";
}
?>

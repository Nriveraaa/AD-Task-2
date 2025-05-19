<?php
require_once('../utils/fruits.utils.php');
$fruits = getFruits();
$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
$fruit = $fruits[$id];
?>


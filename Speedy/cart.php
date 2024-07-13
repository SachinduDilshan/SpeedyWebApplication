<?php
session_start();

// Check if the product details are provided
if (isset($_POST['product_name']) && isset($_POST['product_price'])) {
    // Get the product details from the form
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];

    // Initialize the shopping cart in the session if it doesn't exist
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // Add the product to the cart
    $product = [
        'name' => $product_name,
        'price' => $product_price
    ];
    $_SESSION['cart'][] = $product;

    // Redirect back to the store page
    header('Location: store.php');
    exit();
} else {
    // Redirect to the store page if product details are missing
    header('Location: store.php');
    exit();
}
?>

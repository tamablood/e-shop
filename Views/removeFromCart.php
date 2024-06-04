<?php
session_start();

// Log the received data
error_log("Received POST data: " . print_r($_POST, true));

// Function to remove a product from the cart
function removeProductFromCart($productId) {
    if(isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $key => $product) {
            if ($product['id'] == $productId) {
                unset($_SESSION['cart'][$key]);
                return true;
            }
        }
    }
    return false;
}

// Handle remove product request
if(isset($_POST['removeProductId'])) {
    $removed = removeProductFromCart($_POST['removeProductId']);
    if($removed) {
        echo json_encode(array('success' => true, 'message' => 'Product removed from cart.'));
        exit;
    } else {
        echo json_encode(array('success' => false, 'message' => 'Failed to remove product from cart.'));
        exit;
    }
} else {
    echo json_encode(array('success' => false, 'message' => 'No product ID received.'));
    exit;
}
?>

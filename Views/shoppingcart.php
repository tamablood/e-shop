<?php
session_start();

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
}

// Retrieve cart items from the session
$cartItems = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Shopping Cart</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<style>
    body {
        padding: 20px;
        background-color: #f8f9fa;
    }
    .cart-container {
        background-color: #fff;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }
    .cart-item {
        border-bottom: 1px solid #dee2e6;
        padding: 10px 0;
    }
    .cart-item:last-child {
        border-bottom: none;
    }
    .remove-btn {
        font-size: 14px;
    }
    .continue-shopping-btn {
        margin-top: 20px;
    }
</style>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="cart-container">
                <h2 class="mb-4">Shopping Cart</h2>
                <?php if (!empty($cartItems)): ?>
                    <ul class="list-unstyled">
                    <?php foreach ($cartItems as $item): ?>
                        <li class="cart-item">
                            <?php echo $item['nom']; ?> - $<?php echo $item['prix']; ?>
                            <button class="btn btn-sm btn-danger ml-2 remove-btn" data-product-id="<?php echo $item['id']; ?>">Remove</button>
                        </li>
                    <?php endforeach; ?>
                    </ul>
                <?php else: ?>
                    <p>Your shopping cart is empty.</p>
                <?php endif; ?>
                <a href="index.php" class="btn btn-primary continue-shopping-btn">Continue Shopping</a>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function(){
    $('.remove-btn').click(function(){
        var productId = $(this).data('product-id');

        // Send AJAX request to remove product from cart
        $.ajax({
            type: "POST",
            url: "removeFromCart.php",
            data: { 
                removeProductId: productId
            },
            success: function(response){
                // Reload the page or update the cart contents
                if(response.success) {
                    alert(response.message);
                    location.reload(); // Reload the page to update cart contents
                } else {
                    alert(response.message);
                }
            },
            error: function(){
                alert('Error removing product from cart!');
            }
        });
    });
});
</script>
</body>
</html>

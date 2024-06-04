<?php
session_start();


if(isset($_POST['productId']) && isset($_POST['productName']) && isset($_POST['productPrice'])) {
    $productId = $_POST['productId'];
    $productName = $_POST['productName'];
    $productPrice = $_POST['productPrice'];
    
    $_SESSION['cart'][] = array(
        'id' => $productId,
        'nom' => $productName, 
        'prix' => $productPrice 
    );
    
   
    echo json_encode(array('success' => true, 'message' => 'Product added to cart successfully.'));
} else {
    
    echo json_encode(array('success' => false, 'message' => 'Product information not received.'));
}
?>

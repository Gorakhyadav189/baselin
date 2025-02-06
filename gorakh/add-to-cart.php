<?php
session_start();

if (isset($_POST['product_id']) && !empty($_POST['product_id'])) {
    $id = $_POST['product_id'];
    $response=[];

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    if (in_array($id, $_SESSION['cart'])) {
        $response['success'] = true;
        $response['message'] = "Product already added to cart";
        echo json_encode($response);
    } else {

        $_SESSION['cart'][] = $id;
        // echo json_encode(['status' => 'success', 'message' => 'Product added to cart']);
        $response['success'] = true;
        $response['message'] = "Product added to cart";
        echo json_encode($response);
    }
} else {
    // echo json_encode(['status' => 'error', 'message' => 'Invalid product ID']);
    $response['success'] = false;
    $response['message'] = "Product added to cart";
    echo json_encode($response);
}
?>


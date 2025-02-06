<?php
session_start();
include "conn.php";

if (empty($_SESSION['email'])) {
    header('location:login.php');
    exit();
}

$array = [];
if (isset($_POST['product_id'])) {
    $response = [];
    $p_id = $_POST['product_id'];
    $u_mail = $_POST['usermail'];

    // Fetch user ID based on email
    $sql = "SELECT * FROM user WHERE email='$u_mail'";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);

    if ($data) {
        $userid = $data['id'];

        // Check if the user already has a wishlist entry
        $fsql = "SELECT * FROM wishlist WHERE userid=$userid";
        $result = mysqli_query($conn, $fsql);
        $row = mysqli_fetch_assoc($result);

        if ($row) {
            // User already has a wishlist entry
            $product_data = $row['product_id'];
            $product_array = json_decode($product_data, true); // Decode JSON to array

            // Ensure that product_array['p_id'] is an array
            if (!isset($product_array['p_id']) || !is_array($product_array['p_id'])) {
                $product_array['p_id'] = []; // Initialize as an empty array if not set
            }

            // Check if the product ID is already in the wishlist
            if (!in_array($p_id, $product_array['p_id'])) {
                // Append the new product ID to the array
                $product_array['p_id'][] = $p_id;

                // Encode the updated array back to JSON
                $product_datas = json_encode($product_array);

                // Update the wishlist entry in the database
                $usql = "UPDATE wishlist SET product_id='$product_datas' WHERE userid=$userid";
                $update_result = mysqli_query($conn, $usql);

                if ($update_result) {
                    $response['success'] = true;
                    $response['message'] = "Product added to wishlist.";
                } else {
                    $response['success'] = false;
                    $response['message'] = "Failed to update wishlist.";
                }
            } else {
                $response['success'] = true;
                $response['message'] = "Product already in wishlist.";
            }
        } else {
            // User does not have a wishlist entry, create a new one
            $json_data = json_encode(["p_id" => [$p_id]]); // Create a new array with the product ID

            $isql = "INSERT INTO wishlist (product_id, userid) VALUES ('$json_data', $userid)";
            $insert_result = mysqli_query($conn, $isql);

            if ($insert_result) {
                $response['success'] = true;
                $response['message'] = "Product added to wishlist.";
            } else {
                $response['success'] = false;
                $response['message'] = "Failed to add product to wishlist.";
            }
        }
    } else {
        $response['success'] = false;
        $response['message'] = "User  not found.";
    }

    echo json_encode($response);
}
?>
<?php
include "../conn.php";


if (isset($_POST['pname'])) {
    $response = [];
    $id = $_POST['id'];
    $pname = $_POST['pname'];
    $des = $_POST['des'];
    $stock = $_POST['stock'];
    $sqr = $_POST['sqr'];
    $product_price = $_POST['product_price'];
    $image = $_FILES['image'];


    foreach ($image['name'] as $key => $value) {
        $targetDir = "../uploads/";
        $fileName = basename($image['name'][$key]);
        $targetFilePath = $targetDir . $fileName;

        if (move_uploaded_file($image["tmp_name"][$key], $targetFilePath)) {

            $imagePath = $targetFilePath;
            
        } else {
            // echo "Sorry, there was an error uploading your file.<br>";
        }
    }

    $sql = "update `add product` set pname='$pname',des='$des' ,stock='$stock',sqr='$sqr',price='$product_price', image='$imagePath' where id=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $response['success'] = true;
        $response['message'] = "product  Updated ";
        echo json_encode($response);
    } else {
        $response['success'] = false;
        $response['message'] = "Something went wrong ";
        echo json_encode($response);
    }
}

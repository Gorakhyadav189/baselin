<?php
include "../conn.php";

if (isset($_POST['pname'])) {
    $pname = $_POST['pname'];
    $des = $_POST['des'];
    $stock = $_POST['stock'];
    $sqr = $_POST['sqr'];
    $product_price = $_POST['product_price'];
    $image = $_FILES['image'];

    $response = [];

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

    // echo "<pre>";
    // print_r($imagePath);


    $fsql = "select * from `add product` where sqr='$sqr'";
    $fresult = mysqli_query($conn, $fsql);
    $row = mysqli_num_rows($fresult);
    if ($row > 0) {
        $response['success'] = true;
        $response['message'] = "product already  exists ";

        echo json_encode($response);

        exit;
    } 
    else {





        $sql = "insert into `add product` (pname,des,stock,sqr,product_price,image)values('$pname','$des', '$stock','$sqr','$product_price','$imagePath')";
        $result = mysqli_query($conn, $sql);
        if ($result) {

            $response['success'] = true;
            $response['message'] = "product added successfuly ";

            echo json_encode($response);
        } else {
            $response['success'] = false;
            $response['message'] = "Something went Wrong!!..";

            echo json_encode($response);
        }
    }
}

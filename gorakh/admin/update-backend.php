<?php
include "../conn.php";
if (isset($_POST['first_name'])) {

    $response = [];

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $dob = $_POST['dob'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $image = $_FILES['image'];
    $target_dir = "../uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        //  echo "The file " . basename($_FILES["image"]["name"]) . " has been uploaded.";
    } else {
        //echo "Sorry, there was an error uploading your file.";
    }

    $image = basename($_FILES["image"]["name"], ""); // used to store the filename in a variable


    if ($image == "" && $password == "") {

        $sql = "update user set first_name='$first_name',last_name='$last_name',email='$email',dob='$dob',city='$city',phone='$phone' where role='admin'";
        $result = mysqli_query($conn, $sql);
        if ($result) {


            $response['success'] = true;
            $response['message'] = "Admin Profile Updated ";

            echo json_encode($response);
        } else {
            $response['success'] = false;
            $response['message'] = "Something went Wrong!!..";

            echo json_encode($response);
        }
    } else if ($password == "") {

        $sql = "update user set first_name='$first_name',last_name='$last_name',email='$email',dob='$dob',city='$city',phone='$phone',image='$image' where role='admin'";
        $result = mysqli_query($conn, $sql);
        if ($result) {


            $response['success'] = true;
            $response['message'] = "Admin Profile Updated ";

            echo json_encode($response);
        } else {
            $response['success'] = false;
            $response['message'] = "Something went Wrong!!..";

            echo json_encode($response);
        }
    } else if ($image == "") {

        $sql = "update user set first_name='$first_name',last_name='$last_name',email='$email',password='$password',dob='$dob',city='$city',phone='$phone' where role='admin'";
        $result = mysqli_query($conn, $sql);
        if ($result) {


            $response['success'] = true;
            $response['message'] = "Admin Profile Updated ";

            echo json_encode($response);
        } else {
            $response['success'] = false;
            $response['message'] = "Something went Wrong!!..";

            echo json_encode($response);
        }
    } else {


        $password = md5($_POST['password']);




        $sql = "update user set first_name='$first_name',last_name='$last_name',email='$email',password='$password',dob='$dob',city='$city',phone='$phone',image='$image' where role='admin'";
        $result = mysqli_query($conn, $sql);
        if ($result) {


            $response['success'] = true;
            $response['message'] = "Admin Profile Updated ";

            echo json_encode($response);
        } else {
            $response['success'] = false;
            $response['message'] = "Something went Wrong!!..";

            echo json_encode($response);
        }
    }
}

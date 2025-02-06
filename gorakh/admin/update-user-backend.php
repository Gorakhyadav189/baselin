<?php
include "../conn.php";



if (isset($_POST['first_name'])) {
   
    $response = [];

    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $dob = $_POST['dob'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];





    $sql = "update user set first_name='$first_name',last_name='$last_name',dob='$dob',city='$city',phone='$phone' where id = $id";
    $result = mysqli_query($conn, $sql);
    if ($result) {


        $response['success'] = true;
        $response['message'] = "User Profile Updated ";

        echo json_encode($response);
    } else {
        $response['success'] = false;
        $response['message'] = "Something went Wrong!!..";

        echo json_encode($response);
    }
}

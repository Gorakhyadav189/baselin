<?php
include "conn.php";

if (isset($_POST['first_name'])) {

    $response = [];

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $dob = $_POST['dob'];
    $city = $_POST['ucity'];
    $phone = $_POST['phone'];
    $role="user";

    $bsql = "select * from user where email='$email'";
    $bresult = mysqli_query($conn, $bsql);
    $row = mysqli_num_rows($bresult);
    if ($row > 0) {
        $response['success'] = false;
        $response['message'] = "user already exist";
        echo json_encode($response);
    } else {

        $sql = "insert into user(first_name,last_name,email,password,dob,city,phone,role)values('$first_name','$last_name','$email','$password','$dob','$city','$phone','user')";
        $result = mysqli_query($conn, $sql);

        if ($result) {

            $response['success'] = true;
            $response['message'] = "user inserted";

            echo json_encode($response);
        } else {
            $response['success'] = false;
            $response['message'] = "Something went Wrong!!..";

            echo json_encode($response);
        }
    }
}

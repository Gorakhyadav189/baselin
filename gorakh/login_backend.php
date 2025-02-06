<?php
session_start();
include "conn.php";

if (isset($_POST['email'])) {

    $response = [];

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $password = md5($password); 

    $sql = "select * from user where email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    $row = mysqli_num_rows($result);



    $data = mysqli_fetch_assoc($result);

    if ($row == 1) {

        if ($data['role'] == 'admin') {
            $_SESSION['email'] = $email;
            $response['success'] = true;
            $response['message'] = "Login Successfull";
            $response['redirect_to'] = "/gorakh/admin/dashboard.php";
            // $rol['role'] = "admin";

            //session set email
            echo json_encode($response);
        } else if ($data['role'] == 'user') {
            $_SESSION['email'] = $email;
            $response['success'] = true;
            $response['message'] = "Login Successfull";
            $response['redirect_to'] = "/gorakh/user/userdashboard.php";
            echo json_encode($response);
        } 
    }else {

        $response['success'] = false;
        $response['message'] = "Please fill valid email and password";
        echo json_encode($response);
    }
}

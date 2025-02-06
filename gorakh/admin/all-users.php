<?php
// session_start();

include_once("../conn.php");
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"
        content="IE=edge">
    <meta name="viewport"
        content="width=device-width, 
                   initial-scale=1.0">
                   <!-- <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" /> -->
    <title>All Users</title>
   

</head>

<body>
   
    <!-- for header part -->
    <?php include('header.php'); ?>

    <div class="main-container">
        <?php include('sidebar.php'); ?>
        <table id="" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>UserID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>DOB</th>
                    <th>City</th>
                    <th>Phone</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                <?php

                $sql = "select * from user";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $first_name = $row['first_name'];
                        $last_name = $row['last_name'];
                        $email = $row['email'];
                        $password = $row['password'];
                        $dob = $row['dob'];
                        $city = $row['city'];
                        $phone = $row['phone'];
                        $role = $row['role'];
                        echo '
                 <tr>
                <td>' . $id . '</td>
                <td>' . $first_name . '</td>
                <td>' . $last_name . '</td>
                <td>' . $email . '</td>
                <td>' . $password . '</td>
                <td>' . $dob . '</td>
                <td>' . $city . '</td>
                <td>' . $phone . '</td>
                <td>' . $role . '</td>
                <td>
<a href="update-user.php? updateid=' . $id . '" class="btn btn-danger">update</a>
<a href="delete-user.php?deletid=' . $id . '">delete</a>
                </td>
               
            </tr>
                ';
                    }
                }


                ?>

            </tbody>
        </table>
    </div>

    <script src="./adminjq.js"></script>
</body>

</html>
<script>
        /* Initialization of datatables */
        $(document).ready(function() {
            $('table.display').DataTable();
        });
    </script>
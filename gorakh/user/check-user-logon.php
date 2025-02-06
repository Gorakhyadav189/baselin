<?php
include "../conn.php";
include "../check_logon.php";

 if(!empty($_SESSION['email'])){

    $email = $_SESSION['email'];

    $sql= " SELECT * FROM `user` WHERE `email` = '$email'";
     
     $result=mysqli_query($conn,$sql);
    
     $row=mysqli_fetch_assoc($result);
    if($row['role']=='admin'){


        // echo'<script>alert(" yoy are Admin You ")</script>';
    
         header("location:/gorakh/admin/dashboard.php");
        

    }
    else if($row['role']=='user'){
        //  header("location:/gorakh/user/userdashboard.php");

    }


}




?>

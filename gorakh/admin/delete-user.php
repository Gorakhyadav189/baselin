<?php
include "../conn.php";
// include "all-user.php"


$id=$_GET['deletid'];


if(isset($_GET['deletid']));
{
    $sql=" DELETE FROM `user` WHERE id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        header("location:all-users.php");
    }
}




?>
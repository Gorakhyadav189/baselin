<?php
include "conn.php";


$id = $_GET['deletid'];
// echo $id;

if (isset($_GET['deletid'])) {



    $sql = "delete from wishlist where product_id =$id ";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "deleted";
    }
    else{
        echo"not deleted";
    }
   
}

?>

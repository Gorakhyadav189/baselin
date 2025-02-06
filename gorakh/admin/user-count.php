<?php

include "../conn.php";


$sql="select * from user where role='user'";
$result=mysqli_query($conn,$sql);
if($result){
    $rowcount=mysqli_num_rows($result);
    $_SESSION['usercount']=$rowcount;
  
}


?>
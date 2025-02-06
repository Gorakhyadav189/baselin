<?php
include "check_logon.php";
include "conn.php";
$sql = " select * from user where email='Mayankbaseline@gmail.com'";
$result = mysqli_query($conn, $sql);

while ($data = mysqli_fetch_assoc($result)) {
    
?>
<img src=
"http://localhost/gorakh/uploads/<?php echo $data['image']; ?>">


<?php
}
?>



<?php
$sql = "select * from user where role='admin'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$first_name = $row['first_name'];
$last_name = $row['last_name'];
$email = $row['email'];
$password = $row['password'];
$dob = $row['dob'];
$city = $row['city'];
$phone = $row['phone'];

if (isset($_POST['update'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $dob = $_POST['dob'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];

 

    $sql = "update user set first_name='$first_name',last_name='$last_name',email='$email',password='$password',dob='$dob',city='$city',phone='$phone' where role='admin'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('location:admin_dashbord.php');
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>update Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .main {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            padding: 20px;
            width: 300px;
        }

        .main h2 {
            color: #4caf50;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        select {
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        button[type="submit"] {
            padding: 15px;
            border-radius: 10px;
            border: none;
            background-color: #4caf50;
            color: white;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <div class="main">
        <h2>update your profile<?php  echo( "   " . $_SESSION['email']);?></h2>
        <form method="post" action="">
            <label for="first">First Name:</label>
            <input type="text" id="first" name="first_name" value="<?php echo ("$first_name"); ?>" required />


            <label for="last">Last Name:</label>
            <input type="text" id="last" name="last_name" value="<?php echo ("$last_name"); ?>" required />

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo ("$email"); ?>" required />

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" value="<?php echo ("$password"); ?>" required />
            <label for="dob">Dob:</label>
            <input type="date" id="dob" name="dob" value="<?php echo ("$dob"); ?>" required />

            <label for="city">City:</label>
            <input type="text" id="city" name="city" value="<?php echo ("$city"); ?>" required />

            <label for="email">phone:</label>
            <input type="text" id="phone" name="phone" value="<?php echo ("$phone"); ?>" required />


            <button type="submit" name="update">update</button>
        </form>
    </div>
</body>

</html>
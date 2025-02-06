<?php

include "../conn.php";
$sql = "select * from user where role='admin'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$first_name = $row['first_name'];
$last_name = $row['last_name'];
$email = $row['email'];

$dob = $row['dob'];
$city = $row['city'];
$phone = $row['phone'];

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
    <title>Admin-update</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet"
        href="adminstyle.css">
    <!-- <link rel="stylesheet" 
          href="responsive.css"> -->
</head>
<style>
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
        background-color:#3f0097;
        color: white;
        cursor: pointer;
        width: 100%;
        font-size: 16px;
    }
</style>

<body>

    <!-- for header part -->
    <?php include('header.php'); ?>

    <div class="main-container">
        <?php include('sidebar.php'); ?>
        <div class="main">



            <h2>update your profile</h2>
            <!-- <?php echo ("   " . $_SESSION['email']); ?> -->

            <form method="post" enctype="multipart/form-data" id="update-form" action="">
                <label for="first">First Name:</label>
                <input type="text" id="first" name="first_name" value="<?php echo $first_name; ?>">
                <p class="fnameerror" style="color: red;"></p>


                <label for="last">Last Name:</label>
                <input type="text" id="last" name="last_name" value="<?php echo $last_name; ?>" />
                <p class="lnameerror" style="color: red;"></p>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo $email; ?>" />
                <p class="emailerror" style="color: red;"></p>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" />
                <p class="passworderror" style="color: red;"></p>

                <label for="dob">Dob:</label>
                <input type="date" id="dob" name="dob" value="<?php echo $dob; ?>" />
                <p class="doberror" style="color: red;"></p>

                <label for="city">City:</label>
                <input type="text" id="city" name="city" value="<?php echo $city; ?>" />
                <p class="cityerror" style="color: red;"></p>

                <label for="email">phone:</label>
                <input type="text" id="phone" name="phone" value="<?php echo $phone; ?>" />
                <p class="phoneerror" style="color: red;"></p>

                <label for="image">image</label>
                <input type="file" id="image" name="image" />

                <button type="submit" class="update_profile" name="update">update</button>
            </form>


        </div>
    </div>

    <script src="./adminjq.js"></script>

    <script>
        $('#phone').on("input", function() {
            $(this).val($(this).val().replace(/[^0-9]/g, ""));
        });

        jQuery(".update_profile").click(function() {

            event.preventDefault();



            var first_name = $('#first').val();
            var last_name = $('#last').val();
            var email = $('#email').val();
            var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

            var dob = $('#dob').val();
            var city = $('#city').val();
            var phone = $('#phone').val();
            var phoneRegx = /^[0-9]+$/;


            if (first_name == "") {
                $(".fnameerror").html("please enter name");

            } else if (last_name == "") {
                $(".fnameerror").html("");
                $(".lnameerror").html("please enter last name");

            } else if (email == "") {
                $(".fnameerror").html("");
                $(".lnameerror").html("");
                $(".emailerror").html("please enter last name");

            } else if (!emailReg.test(email)) {
                $(".fnameerror").html("");
                $(".lnameerror").html("");
                $(".emailerror").html("please enter a valid email");


            } else if (dob == "") {
                $(".fnameerror").html("");
                $(".lnameerror").html("");
                $(".emailerror").html("");
              
                $(".doberror").html(" plese enter your dob");

            } else if (city == "") {
                $(".fnameerror").html("");
                $(".lnameerror").html("");
                $(".emailerror").html("");
                
                $(".doberror").html("");
                $(".cityerror").html("plese fill city name");

            } else if (phone == "") {
                $(".fnameerror").html("");
                $(".lnameerror").html("");
                $(".emailerror").html("");
              
                $(".doberror").html("");
                $(".cityerror").html("");
                $(".phoneerror").html("please enter you phone");

            } else if (!phoneRegx.test(phone)) {
                $(".fnameerror").html("");
                $(".lnameerror").html("");
                $(".emailerror").html("");
             
                $(".doberror").html("");
                $(".cityerror").html("");
                $(".phoneerror").html("please enter vcalid phone");

            } else if (phone.length < 10 || phone.length > 10) {
                $(".fnameerror").html("");
                $(".lnameerror").html("");
                $(".emailerror").html("");
            
                $(".doberror").html("");
                $(".cityerror").html("");
                $(".phoneerror").html("please enter only 10 digit phone");

            } else {
                $(".fnameerror").html("");
                $(".lnameerror").html("");
                $(".emailerror").html("");
        
                $(".doberror").html("");
                $(".cityerror").html("");
                $(".phoneerror").html("");

                // var form = $('#update-form');
                // var actionUrl = form.attr('action');

                // var formData = new FormData(this);
                let myform = document.getElementById("update-form");
                let fd = new FormData(myform);
                $.ajax({
                    url: "update-backend.php",
                    data: fd,
                    cache: false,
                    processData: false,
                    contentType: false,
                    type: 'POST',
                    success: function(response) {
                        var data = $.parseJSON(response);
                        if (data.success == true) {
                            alert(data.message);
                            window.location.href = 'dashboard.php';
                        } else if (data.success == false) {
                            alert(data.message);

                        }

                    }
                });




            }









        });
    </script>
</body>

</html>
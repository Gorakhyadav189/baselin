<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form id="register-form" class="form-signin" method="post" name='register-form' action="">

            <h2 class="form-signin-heading" style="text-align: center;">Please Register </h2>
            <label for="">First name</label>
            <input type="text" class="form-control" id="firstname" name="first_name" placeholder="Enter Name" />
            <p class="first_name_error" style="color:red"></p>

            <label for="">last_name</label>
            <input type="text" class="form-control" id="ulname" name="last_name" placeholder="Enter Name" />
            <p class="last_name_error" style="color:red"></p>
            <label for="">email</label>
            <input type="email" class="form-control" id="uemail" name="email" placeholder="Email" />
            <p class="uemail_error" style="color:red"></p>

            <label for="">password</label>
            <input type="password" class="form-control" id="upassword" name="password" placeholder="Password" />
            <p class="upassword_error" style="color:red"></p>



            <label for="">Dob</label>
            <input type="date" class="form-control" id="udob" name="dob" placeholder="D/O/B" />
            <p class="udob_error" style="color:red"></p>

            <label for="">city</label>
            <input type="text" class="form-control" id="ucity" name="ucity" placeholder="Address" />
            <p class="ucity_error" style="color:red"></p>

            <label for="">phone</label>
            <input type="phone" class="form-control" id="uphone" name="phone" placeholder="Enter your phone number " />
            <p class="uphone_error" style="color:red"></p>


            <button class="btn btn-lg btn-primary btn-block submit_form" type="submit" name="submit">Submit </button>
        </form>
    </div>
    <script>
        $('#uphone').on("input", function() {
            $(this).val($(this).val().replace(/[^0-9]/g, ""));
        });
        
        jQuery(".submit_form").click(function() {

            event.preventDefault();




            var firstname = $('#firstname').val();
            var lname = $('#ulname').val();
            var uemail = $('#uemail').val();
            var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            var upassword = $('#upassword').val();
            var udob = $('#udob').val();
            var ucity = $('#ucity').val();
            var phone = $('#uphone').val();
            var phoneRegx = /^[0-9]+$/;
            var dobnew = new Date(udob);
            var today = new Date();
            var age = today.getFullYear() - dobnew.getFullYear();
            var monthdiff = today.getMonth() - dobnew.getMonth();
            if (monthdiff < 0 || (monthdiff === 0 && today.getDate() < dobnew.getDate())) {
                age;
            }



            // check first name validation
            if (firstname == '') {

                $('.first_name_error').html('Please Enter your First name');

            } else if (lname == '') {

                $('.first_name_error').html('');
                $('.last_name_error').html('Please Enter last Name');

            } else if (uemail == '') {

                $('.first_name_error').html('');
                $('.last_name_error').html('');
                $('.uemail_error').html('Please Enter your Email');


            } else if (!emailReg.test(uemail)) {

                $('.first_name_error').html('');
                $('.last_name_error').html('');
                $('.uemail_error').html('Please Enter valid Email');


            } else if (upassword == '') {

                $('.first_name_error').html('');
                $('.last_name_error').html('');
                $('.uemail_error').html('');
                $('.upassword_error').html('Please Enter your password');


            } else if (upassword.length < 8) {

                $('.first_name_error').html('');
                $('.last_name_error').html('');
                $('.uemail_error').html('');
                $('.upassword_error').html('Password Must be 8 charcater long');


            } else if (udob == '') {

                $('.first_name_error').html('');
                $('.last_name_error').html('');
                $('.uemail_error').html('');
                $('.upassword_error').html('');
                $('.udob_error').html('Please Enter your dob');

            }
            // else if (dobnew) {

            //     if(age < 18){

            //         $('.first_name_error').html('');
            //         $('.last_name_error').html('');
            //         $('.uemail_error').html('');
            //         $('.upassword_error').html('');
            //         $('.udob_error').html('');

            //         //$('.udob_error').html('your age is less than 18');

            //     }



            // } 
            else if (ucity == '') {

                $('.first_name_error').html('');
                $('.last_name_error').html('');
                $('.uemail_error').html('');
                $('.upassword_error').html('');
                $('.udob_error').html('');
                $('.ucity_error').html('Please Enter your city');


            } else if (phone == '') {

                $('.first_name_error').html('');
                $('.last_name_error').html('');
                $('.uemail_error').html('');
                $('.upassword_error').html('');
                $('.udob_error').html('');
                $('.ucity_error').html('');
                $('.uphone_error').html('Please Enter your phone number');


            } else if (phone.length < 10 || phone.length > 10) {



                $('.first_name_error').html('');
                $('.last_name_error').html('');
                $('.uemail_error').html('');
                $('.upassword_error').html('');
                $('.udob_error').html('');
                $('.ucity_error').html('');
                $('.uphone_error').html('Please Enter valid 10 digit phone number');


            } else if (!phoneRegx.test(phone)) {

                $('.first_name_error').html('');
                $('.last_name_error').html('');
                $('.uemail_error').html('');
                $('.upassword_error').html('');
                $('.udob_error').html('');
                $('.ucity_error').html('');
                $('.uphone_error').html('Please Enter your valid number ');


            } else {



                $('.first_name_error').html('');
                $('.last_name_error').html('');
                $('.uemail_error').html('');
                $('.upassword_error').html('');
                $('.udob_error').html('');
                $('.ucity_error').html('');
                $('.uphone_error').html('');

                var form = $('#register-form');
                var actionUrl = form.attr('action');

                $.ajax({
                    type: "POST",
                    url: 'signup_backend.php',
                    data: form.serialize(),
                    success: function(response) {
                        var data = $.parseJSON(response);
                        if (data.success == true) {
                            alert(data.message);
                            window.location.href = '/gorakh/login.php';
                        } else if (data.success == false) {
                            alert(data.message);

                        }

                    },
                    error: function(response) {

                        console.log('An error occurred.');
                        console.log(response);
                    },
                });






            }








        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
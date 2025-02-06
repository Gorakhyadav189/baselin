
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>

  <?php
  if(isset($_GET['msg']) && $_GET['msg']=='Must_login'){

   echo 'Please Login First To Add Products Into Your Wishlist';


  }
  
  ?>
  <div class="wrapper">
    <form class="form-signin" id="login-form" method="post" action="">
      <h2 class="form-signin-heading">Please login</h2>
      <input type="text" class="form-control" name="email" id="uemail" placeholder="Email Address">
      <p class="uemail_error" style="color:red;"></p>
      <input type="password" class="form-control" name="password" id="upassword" placeholder="Password">
      <p class="upassword_error" style="color:red;"></p>

      <button class="btn btn-lg btn-primary btn-block submit_login" type="submit" name="submit">Login</button>


      <p>please signup here<a href="signup.php">Click_Here</a></p>

      <p class="success_message" style="color:green;"></p>
      <p class="return_messages" style="color:red;"></p>
    </form>
  </div>
  <script>
    jQuery('.submit_login').click(function() {

      event.preventDefault();
      var useremail = $('#uemail').val().trim();
      var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
      var userpassword = $('#upassword').val().trim();



      if (useremail === "") {
        $('.uemail_error').html("please enter your mail");
      } else if (!emailReg.test(useremail)) {
        $('.uemail_error').html("");
        $('.uemail_error').html("enter valid email");

      } else if (userpassword === "") {
        $('.uemail_error').html("");
        $('.upassword_error').html("enter password");

      } else if (userpassword.length < 8) {
        $('.uemail_error').html("");
        $('.upassword_error').html("enter a valid password");

      } else {
        $('.uemail_error').html("");
        $('.upassword_error').html(" ");
        var form = $('#login-form');
        var actionUrl = form.attr('action');

        $.ajax({
          type: "POST",
          url: 'login_backend.php',
          data: form.serialize(), // serializes the form's elements.
          success: function(response) {
            var data = $.parseJSON(response);

            console.log(data);
            if (data.success == true) {
              
              $('.return_messages').text('');

              $('.success_message').html("Login successfull, Redirectring you...");

              setTimeout(function () {

                 window.location.href = data.redirect_to;

              }, 3000);

              
            }else{

             $('.return_messages').text(data.message);

            }
            
          }
        });

      }

    });
  </script>

</body>

</html>
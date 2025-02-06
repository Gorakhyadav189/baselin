// $(document).ready(function () {

//   $('#vrm').submit(function (e) {
//     e.preventDefault();
//     var first_name = $('#uname').val();
//     var email = $('#email').val();
//     var password = $('#password').val();
//     var dob = $('#udob').val();
//     var address = $('#uaddress').val();



//     $(".error").remove();

//     if (first_name.length < 1) {
//       $('#first_name').after('<span class="error">This field is required</span>');
//     }
//     if (email.length < 1) {
//       $('#email').after('<span class="error">This field is required</span>');
//     } else {
//       var regEx = /^[A-Z0-9][A-Z0-9._%+-]{0,63}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/;
//       var validEmail = regEx.test(email);
//       if (!validEmail) {
//         $('#email').after('<span class="error">Enter a valid email</span>');
//       }
//     }
//     if (password.length < 8) {
//       $('#password').after('<span class="error">Password must be at least 8 characters long</span>');
//     }
//     if (dob.length < 1) {
//       $('#udob').after('<span class="error">Password must be at least 8 characters long</span>');
//     }
//     if (address.length < 1) {
//       $('#udob').after('<span class="error">Password must be at least 8 characters long</span>');
//     }
//   });


// });


// Wait for the DOM to be ready
$(function() {
  
  $("form[id='registration']").validate({
 
    rules: {
      
      firstname: "required",
      lastname: "required",
      email: {
        required: true,
        
        email: true
      },
      password: {
        required: true,
        minlength: 5
      },
      udob: "required",
      uaddress: "required"
    },
  
    messages: {
      firstname: "Please enter your firstnamee",
      lastname: "Please enter your lastname",
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      email: "Please enter a valid email address",
      udob: " dob is required",
      uaddress: "address is required"
    },
  
    submitHandler: function(form) {
      form.submit();
    }
  });
});
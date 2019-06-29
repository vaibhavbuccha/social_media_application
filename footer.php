

<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.js"></script>
<script>
$(document).ready(function(){
    $('#signup').validate({
        rules:{
            full_name:{
                required: true,
                minlength: 3,
            },
            email:{
                required: true,
                email: true,
            },
            password:{
                required: true,
                minlength:8,
            },
            password_con:{
                required: true,
                minlength: 8,
                equalTo: "#password",
            },
            DOB:{
                required: true,
            },
            gender:{
                required: true,
            },
            Phone:{
                required: true,
                minlength: 10,
                maxlength:10,
                number:true,
            },
            country:{
                required: true,
            },
            pic:{
                required: true,
            }
        },
        messages:{
            full_name:{
                required: "Full Name is required",
                minlength: "the minimum length of Full Name must be 3"
            },
            email:{
                required: "Email is required",
                email : "Please Enter a valid email address"
            },
            password:{
                required: "password is required",
                minlength: "password should be minimum 8 characters"
            },
            password_con:{
                required: "password confirmation is required",
                minlength: "minimum password length is 8",
                equalTo: "please enter valid password"
            },
            DOB:{
                required: "dateof birth is required"
            },
            gender:{
                required:  "gender is required"
            },
            Phone:{
                required: "phone number is required",
                minlength: "enter valid phone number",
                maxlength: "enter valid phone number",
                number: "phone no contain only number"
            },
            country:{
                required: "country is required"
            },
            pic:{
                required : "profile picture is required "
            }
        },
        errorPlacement:function(error,element){
            if(element.attr("type") == 'radio'){
                error.appendTo(element.next().next('#err'));
            }
            else{
                error.insertAfter(element);
            }
        },
        submitHandler: function(form){
            form.submit();
        }
    });
});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $(function(){
        $('#email').on('keyup',function(){
            var email = $(this).val();
            var $input = $(this);
            // console.log(email);
            if(email){
                $.ajax({
                    url: 'check.php',
                    method: 'POST',
                    data: {email: email},
                    success:function(response){
                        response = JSON.parse(response);

                        if(response.status == "success"){
                            $input.css('border','solid 2px red');
                                $('#status').text('sorry username already taken');
                        }else{
                            $input.css('border','solid 2px green');
                                $('#status').text('');      
                        }
                        console.log(response);      
                    }
                });
            }
        });
    });
</script>
</body>

</html>
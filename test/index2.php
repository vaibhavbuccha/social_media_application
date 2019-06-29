<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .container{
            padding-top: 100px;
        }
        .form-control{
            border:solid 2px #2196f3;
        }
        #status{
            color:red;
            padding-top:5px;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-3 col-md-offset-3 ">
                <div class="form-group">
                    <input type="text" id="username" class="form-control" placeholder="Username">
                </div>
            </div>
            <div class="col-md-3">
                <p id="status"></p>
            </div>
        </div>
        
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>

        $(function(){
            $("#username").on('keyup',function(){
               var username = $(this).val();
               var $input = $(this);
            //    console.log(this) 
             if(username){
                    $.ajax({
                        url: 'check.php',
                        method: 'get',
                        data: {username: username},
                        success: function(response){

                            response = $.parseJSON(response);

                            if(response.status == 'success'){
                                $input.css('border','solid 2px red');
                                $('#status').text('sorry username already taken');
                            }else{
                                $input.css('border','solid 2px green');
                                $('#status').text('')
                            }
                            console.info(response);
                        }
                    });
}
            });
        });

</script>
</body>
</html>
<?php

include_once "session.php";
include_once "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/welcome.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <title>Friends</title>
    <style>
        #add{
            width: 600px;
            height:600px;
            background: #f0f0f0;
            border-radius:5px;
            border:solid #99ccff;
            position: relative;
            left:350px;
        }
        .pannel{
            width: 500px;
            margin-left:50px;
            padding: 15px;
            border:1px dotted grey;
            margin-top:10px;
            border-radius: 5px;
        }
        .pannel:hover{
            background: #3399ff;
        }
        .btn-outline-dark{
            border: 0px solid white;
        }
        
    </style>
</head>
<body>
    <div id="add">
    
        <div>
            <span><button onclick="back()" class="btn btn-outline-dark"><i class="fa fa-mail-reply" style="font-size:24px"></i></button></span>
                <span style="background:black;color:white;padding:10px;border: 1px doubled white;margin-left:180px;border-radius:20px;" align="center">Suggested Frinds</span>
        </div>

        <?php
        $user = $_SESSION['user'];

        $select_user = "SELECT * FROM friend_req WHERE sender_name='$user'";
        $run = mysqli_query($con,$select_user);
        $user_array = [];
        $i=0;
        while($rsecord = mysqli_fetch_assoc($run)){
            array_push($user_array,$rsecord['reciver_name']);
        }
        // $users = implode(",",$user_array);
        
    //  echo $user_array[1];
        // $sql = " SELECT * FROM user us LEFT JOIN friend_req fr ON fr.reciver_name = us.username where fr.status != 'accepted' ";
        $sql = "SELECT username,image FROM user WHERE  username != '$user' AND username Not In(select reciver_name from friend_req where sender_name='$user')";
        $query = mysqli_query($con,$sql);
        $i=$i+1;
        while($row = mysqli_fetch_assoc($query)){
        $reciver = $row['username'];
        $sender = $_SESSION['user'];
        ?>
        <div class="pannel">
        <span> <img src="<?php echo $row['image']; ?>" width="32px" height="32px"></span>&nbsp;
           <span><?php echo $row['username']; ?></span>&nbsp;
           <span style="float:right;"><button class="btn btn-success" onclick="addfriend('<?php echo $reciver; ?>','<?php echo $sender; ?>')" >Add Friend</button></span>
        </div>
        <?php } ?>
    </div>
    
    <script>
    function back(){
       window.location="welcome.php";
    }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/friend.js"></script>
</body>
</html>
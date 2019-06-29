<?php



if(!empty($_POST['email'])){
    $email = $_POST['email'];

    include_once 'connection.php';
    // $con = mysqli_connect("localhost","root","","blog");

    $sql = "SELECT * FROM user WHERE email='$email' ";
    
    $result = mysqli_query($con,$sql);

    if(mysqli_num_rows($result)){
       

        echo json_encode(['status'=>'success']);
    }
    else{
        echo json_encode(['status'=>'error']);
    }
}


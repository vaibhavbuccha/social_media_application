<?php


if(!empty($_GET['username'])){
    $username = $_GET['username'];


    $con = mysqli_connect("localhost","root","","blog");

    $sql = "SELECT * FROM user WHERE email='$username' ";
    
    $result = mysqli_query($con,$sql);

    if(mysqli_num_rows($result)){
        $row = mysqli_fetch_assoc($result);

        echo json_encode(['status'=>'success']);
    }
    else{
        echo json_encode(['status'=>'error']);
    }
}


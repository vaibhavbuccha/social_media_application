<?php
$con = mysqli_connect("localhost","root","","blog");
// echo "helo";

if(isset($_POST['accept'])){
    $user = $_POST['user'];
    $sender = $_POST['sender'];
    $status = "accepted";

    $update = "UPDATE friend_req SET status='$status' WHERE reciver_name='$user' AND sender_name='$sender'  ";
    $update1 = "UPDATE friend_req SET status='$status' WHERE sender_name='$user' AND reciver_name ='$sender'";
    mysqli_query($con,$update);
    mysqli_query($con,$update1);
}


if(isset($_POST['reject'])){
    $user = $_POST['user'];
    $sender = $_POST['sender'];
    $status = "pending";

    $delete = "DELETE FROM friend_req WHERE reciver_name='$user' AND sender_name='$sender' ";
    $delete1 = "DELETE FROM friend_req WHERE sender_name='$user' AND reciver_name='$sender'";
    mysqli_query($con,$delete);
    mysqli_query($con,$delete1);
}
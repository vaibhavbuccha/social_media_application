<?php

$sender = $_POST['sender'];
$reciver = $_POST['reciver'];

// echo $sender ." ".$reciver;
// exit();
$status = "pending";
$status1 = "requested";

$con = mysqli_connect("localhost","root","","blog");
$insert = "INSERT INTO friend_req(sender_name,reciver_name,status) VALUES ('$sender','$reciver','$status')";
$insert2 ="INSERT INTO friend_req(sender_name,reciver_name,status) VALUES ('$reciver','$sender','$status1')";
mysqli_query($con,$insert);
mysqli_query($con,$insert2);



?>

<?php


include "connection.php";


// if(isset($_POST['dislike'])){
//     $postid = $_POST['postid'];
//     $user=$_POST['username'];
//     $dislike = "dislike";
//     $check_dislike = "SELECT * FROM like_dislike WHERE username='$user' AND post_id='$postid' AND like_dislike='$dislike' ";
//     $get_res = mysqli_query($con,$check_dislike);
//     if(mysqli_num_rows($get_res)){
//         echo '<script>alert("You Already Dis-Liked The Post!");</script>';
//     }else{
//         $find_row = "SELECT * FROM like_dislike WHERE username='$user' AND post_id='$postid'  ";
//         $get_row = mysqli_query($find_row);
//         if(mysqli_num_rows($get_row)){
//             $update  = "UPDATE like_dislike SET like_dislike='$dislike' WHERE username='$user' AND post_id='$postid'  ";
//             mysqli_query($con,$update);
//         }else{
//             $dislike_insert = "INSERT INTO like_dislike(username,post_id,like_dislike) VALUES ('$user','$postid','$dislike') ";
//             mysqli_query($con,$dislike_insert);
//         }
//     }
// }



if(isset($_POST['dislike'])){
    $postid = $_POST['postid'];
    $user=$_POST['username'];
    $dislike = "dislike";
    $check_user = "SELECT * FROM like_dislike WHERE username='$user' AND post_id='$postid' ";
    $get_user = mysqli_query($con,$check_user);
    if(mysqli_num_rows($get_user)>0){
        $update = "UPDATE like_dislike SET like_dislike='$dislike' WHERE username='$user' AND post_id='$postid' ";
        mysqli_query($con,$update);
    }else{
        $insert = "INSERT INTO like_dislike(username,post_id,like_dislike) VALUES ('$user','$postid','$dislike') ";
        mysqli_query($con,$insert);
    }
    $like = "like";
    $all_likes = "SELECT * FROM like_dislike WHERE post_id='$postid' AND like_dislike='$like'  ";
    $get_likes = mysqli_query($con,$all_likes);
    $like =  mysqli_num_rows($get_likes);
    $dislike = "dislike";
    $all_dislikes = "SELECT * FROM like_dislike WHERE  post_id='$postid' AND like_dislike='$dislike'  ";
    $get_dislikes = mysqli_query($con,$all_dislikes);
    $dislike = mysqli_num_rows($get_dislikes);

    $data = array("like"=>$like,"dislike"=>$dislike);
    echo json_encode($data);
}






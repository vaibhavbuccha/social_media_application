<?php

include "connection.php";
// if(isset($_POST['like'])){
//     $id = $_POST['postid'];
//     $user = $_POST['username'];
//     // echo '<script>alert("'.$user.'")</script>';
//     $like= "INSERT INTO like_dislike(username,post_id) VALUES ('$user','$id')";
//     $check_like = "SELECT * FROM like_dislike WHERE username='$user' AND post_id='$id'  ";
//     $check_result = mysqli_query($con,$check_like);
//     if(!mysqli_num_rows($check_result)){
//       mysqli_query($con,$like);
//       echo "<script>
//                 document.getElementById('like').textContent='Like';
//             </script>";
//     }
//     else{
//         echo '<script>
//         document.getElementById("like").style.background-color="Dislike";
//     </script>';
//         $unlike = "DELETE FROM like_dislike WHERE username='$user' AND post_id='$id' ";
//         mysqli_query($con,$unlike);
//     }
// }








// if(isset($_POST['like'])){
//     $postid = $_POST['postid'];
//     $user=$_POST['username'];
//     $like = "like";
//     $check_like = "SELECT * FROM like_dislike WHERE username='$user' AND post_id='$postid' AND like_dislike='$like' ";
//     $get_res = mysqli_query($con,$check_like);
//     if(mysqli_num_rows($get_res)){
//         echo '<script>alert("You Already Liked The Post!");</script>';
//     }else{
//         $find_row = "SELECT * FROM like_dislike WHERE username='$user' AND post_id='$postid'  ";
//         $get_row = mysqli_query($find_row);
//         if(mysqli_num_rows($get_row)){
//             $update  = "UPDATE like_dislike SET like_dislike='$like' WHERE username='$user' AND post_id='$postid'  ";
//             mysqli_query($con,$update);
//         }else{
//             $like_insert = "INSERT INTO like_dislike(username,post_id,like_dislike) VALUES ('$user','$postid','$like') ";
//             mysqli_query($con,$like_insert);
//         }
//     }
// }


if(isset($_POST['like'])){
    $postid = $_POST['postid'];
    $user=$_POST['username'];
    $like = "like";
    $check_user = "SELECT * FROM like_dislike WHERE username='$user' AND post_id='$postid' ";
    $get_user = mysqli_query($con,$check_user);
    if(mysqli_num_rows($get_user)>0){
        $update = "UPDATE like_dislike SET like_dislike='$like' WHERE username='$user' AND post_id='$postid' ";
        mysqli_query($con,$update);
    }else{
        $insert = "INSERT INTO like_dislike(username,post_id,like_dislike) VALUES ('$user','$postid','$like') ";
        mysqli_query($con,$insert);
    }
    // echo mysqli_num_rows($get_user);
    $all_likes = "SELECT * FROM like_dislike WHERE post_id='$postid' AND like_dislike='$like'  ";
    $get_likes = mysqli_query($con,$all_likes);
    $like =  mysqli_num_rows($get_likes);
    $dislike = "dislike";
    $all_dislikes = "SELECT * FROM like_dislike WHERE post_id='$postid' AND like_dislike='$dislike'  ";
    $get_dislikes = mysqli_query($con,$all_dislikes);
    $dislike = mysqli_num_rows($get_dislikes);

    $data = array("like"=>$like,"dislike"=>$dislike);
    echo json_encode($data);
}







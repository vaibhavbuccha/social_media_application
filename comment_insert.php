<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <title>Document</title>
    <style>
    .comment_box{
        width: 600px;
        height: 200px;
        border: 1px solid #99AAAB;
        margin-bottom: 30px;
        padding: 10px;
        border-radius: 20px;
        overflow: scroll;
    }
    .comment{
        width: 95%;
        border-radius: 10px;
        background:#f0f0f0;
        color: #2B2B52;
        margin-bottom:2px;
        border: 1px solid #99AAAB;
        padding: 3px;
    }
    .comment:nth-child(odd){
        background: white;
        color:black;
    }
    .comment-box{
        width: 400px;
        height: 30px;
        border-radius: 5px;
        margin-bottom: 25px;
    }
    .c-btn{
        margin-bottom: 25px;
    }
    </style>
</head>
<body>
<?php
$con = mysqli_connect("localhost","root","","blog");

$comment = $_POST['comment'];
$postid = $_POST['postid'];
$user = $_POST['user'];

$insert_com = "INSERT INTO comment(username,post_id,comment) VALUES ('$user','$postid','$comment')";
mysqli_query($con,$insert_com);
// header("location:comment.php");


?>
<div class="comment_box">
        <?php 
            $fetch_last = "SELECT * FROM comment where post_id ='$postid' order by id desc ";
            $get_last = mysqli_query($con,$fetch_last);
            while($row = mysqli_fetch_array($get_last)){
       ?>
            <div class="comment">
                <?php echo "<i><u><b>".$row['username']."</b></u></i>&nbsp;&nbsp;".$row['comment']; ?>
            </div>               
         <?php
            }
        ?>
    </div>
    <div>
    
        <input type="text" class="btn btn-outline-dark comment-box" id="com_con" name="comment_content" placeholder="#Write Your Comment Here!!"> &nbsp;&nbsp;
        <input type="submit"  class="btn btn-dark c-btn" onclick="comment_insert('<?php echo $user; ?>','<?php echo $post_id ?>')" value="Comment">
    
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/post.js"></script>
</body>
</html>

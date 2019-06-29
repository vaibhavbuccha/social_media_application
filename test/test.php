<!-- 
    like unlike

    <form action="#" method="get">
                <button type="submit" name="like" id="like" value="<?php echo $row['id']; ?>" style="padding:5px 20px;color:white; background=#044F67; border-radius:5px;">like</button>
                <button  type="button" class="btn btn-primary" onclick="abc(<?php echo $row['id'];?>);" style="float:right;" data-toggle="modal" name="comment_show"  data-target=".bd-example-modal-lg">Comment</button>
            </form>

 -->


 <!-- 

 <?php

if(isset($_GET['like'])){
    $id = $_GET['like'];
    $user = $_SESSION['user'];
    // echo '<script>alert("'.$user.'")</script>';
    $like= "INSERT INTO like_dislike(username,post_id) VALUES ('$user','$id')";
    $check_like = "SELECT * FROM like_dislike WHERE username='$user' AND post_id='$id'  ";
    $check_result = mysqli_query($con,$check_like);
    if(!mysqli_num_rows($check_result)){
      mysqli_query($con,$like);
      echo "<script>
                document.getElementById('like').textContent='Like';
            </script>";
    }
    else{
        echo '<script>
        document.getElementById("like").style.background-color="Dislike";
    </script>';
        $unlike = "DELETE FROM like_dislike WHERE username='$user' AND post_id='$id' ";
        mysqli_query($con,$unlike);
    }
}

?>

<?php

if(isset($_POST['comment_post'])){
    $user = $_SESSION['user'];
    $id = $_POST['id_post'];
    $comment = $_POST['comment'];
    $comment_insert = "INSERT INTO comment(username,post_id,comment) VALUES ('$user','$id','$comment')";
    if(mysqli_query($con,$comment_insert)){
        header("location:welcome.php");

    }
}

?>

           
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
            
    <div class="modal-content">
          <div style="width:800px; height:400px; background-color: white; border-radius: 10px; padding:30px;">
                <div style="font-size: 20px; color: #0A3D62;">
                    Comment 
                    <hr>
                </div>
                <div class="container" style="border: 1px solid #47535E; width: 100%; height: 200px; border-radius: 15px;overflow: scroll;">
                   
                <?php
                  
                  $fetch_comment = "SELECT * FROM comment ";
                  $comment_result = mysqli_query($con,$fetch_comment);
                  while($comment_row = mysqli_fetch_array($comment_result)){
                 ?>

                 
                      <div style="background:#DAE0E2; color: black; padding: 2px 10px; border-radius:10px;">
                          <div><i><u><?php echo $comment_row['username']; ?></u></i> &nbsp;&nbsp;  <?php echo $comment_row['comment']; ?></div>
                      </div><br>
                 <?php } ?>
              </div><br>
              <form action="#" method="Post">
                  <input type="text" style="display:none;" name="id_post" id="id"  value="">
                  <textarea name="comment" id="" cols="70" placeholder="#Put Your Comment Here!" rows="1"></textarea>
                  <button type="submit" style="float:right;" class="btn btn-dark" name="comment_post" >Comment</button>
              </form>
        </div>      
  </div>
</div>
</div>
         
          <!-- <button class="btn btn-danger">Dislike</button> -->

          
          
      </div>
     
 
  -->


























<!-- 

function like(post_id,username){
    $.ajax({
        url: 'likedislike.php',
        type: 'post',
        data: {
            'like':1,
            'postid':post_id,
            'username':username
        },
        success: function(data) {
          //called when successful
         $('#like'+postid).attr('value','dislike');
        // alert("getting data");
        },
        error: function(e) {
          //called when there is an error
          //console.log(e.message);
        }
      });
}

// function dislike(post_id,username){
//   $.ajax({
//       url: 'dislike.php',
//       type: 'post',
//       data: {
//           'dislike':1,
//           'postid':post_id,
//           'username':username
//       },
//       success: function(data) {
//         //called when successful
//        $('#like'+postid).attr('value','dislike');
//       // alert("getting data");
//       },
//       error: function(e) {
//         //called when there is an error
//         //console.log(e.message);
//       }
//     });
// }


 -->


























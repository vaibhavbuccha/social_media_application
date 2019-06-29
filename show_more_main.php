<?php
if(!empty($_POST["id"])){

    // Include the database configuration file
    include 'connection.php';
    include "session.php";
    
    // Count all records except already displayed
    $query = $con->query("SELECT COUNT(*) as num_rows FROM post WHERE id < ".$_POST['id']." ORDER BY id DESC");
    $row = $query->fetch_assoc();
    $totalRowCount = $row['num_rows'];
    
    $showLimit = 2;
    
    // Get records from the database
    $query = $con->query("SELECT * FROM post WHERE id < ".$_POST['id']." ORDER BY id DESC LIMIT $showLimit");
    date_default_timezone_set('Asia/Kolkata');  
                    function facebook_time_ago($timestamp)  
                        {  
                            $time_ago = strtotime($timestamp);  
                            $current_time = time();  
                            $time_difference = $current_time - $time_ago;  
                            $seconds = $time_difference;  
                            $minutes      = round($seconds / 60 );           // value 60 is seconds  
                            $hours           = round($seconds / 3600);           //value 3600 is 60 minutes * 60 sec  
                            $days          = round($seconds / 86400);          //86400 = 24 * 60 * 60;  
                            $weeks          = round($seconds / 604800);          // 7*24*60*60;  
                            $months          = round($seconds / 2629440);     //((365+365+365+365+366)/5/12)*24*60*60  
                            $years          = round($seconds / 31553280);     //(365+365+365+365+366)/5 * 24 * 60 * 60  
                            if($seconds <= 60)  
                            {  
                            return "Just Now";  
                        }  
                            else if($minutes <=60)  
                            {  
                            if($minutes==1)  
                                {  
                            return "one minute ago";  
                            }  
                            else  
                                {  
                            return "$minutes minutes ago";  
                            }  
                        }  
                            else if($hours <=24)  
                            {  
                            if($hours==1)  
                                {  
                            return "an hour ago";  
                            }  
                                else  
                                {  
                            return "$hours hrs ago";  
                            }  
                        }  
                            else if($days <= 7)  
                            {  
                            if($days==1)  
                                {  
                            return "yesterday";  
                            }  
                                else  
                                {  
                            return "$days days ago";  
                            }  
                        }  
                            else if($weeks <= 4.3) //4.3 == 52/12  
                            {  
                            if($weeks==1)  
                                {  
                            return "a week ago";  
                            }  
                                else  
                                {  
                            return "$weeks weeks ago";  
                            }  
                        }  
                            else if($months <=12)  
                            {  
                            if($months==1)  
                                {  
                            return "a month ago";  
                            }  
                                else  
                                {  
                            return "$months months ago";  
                            }  
                        }  
                            else  
                            {  
                            if($years==1)  
                                {  
                            return "one year ago";  
                            }  
                                else  
                                {  
                            return "$years years ago";  
                            }  
                        }  
                        }  
    if($query->num_rows > 0){ 
        while($row = mysqli_fetch_assoc($query)){
            $sql1="select * from like_dislike where post_id='".$row['id']."' and like_dislike='like'";
            $result1=mysqli_query($con,$sql1);
            $num_of_like=mysqli_num_rows($result1);
            $sql2="select * from like_dislike where post_id='".$row['id']."' and like_dislike='dislike'";
            $result2=mysqli_query($con,$sql2);
            $num_of_dislike=mysqli_num_rows($result2);
           $username = $row['username'];
           $get_img = "SELECT * FROM user WHERE username='$username'";
           $runn = mysqli_query($con,$get_img);
           $user_image = mysqli_fetch_array($runn);
           $date = $row['date'];

           // time conversion
           

           $date =facebook_time_ago($date); ;
       ?>
     <div class="jumbotron">
    <div class="bg-primary post-head">
        <div class="post_admin text-light"><img src="<?php echo $user_image['image'] ;?>" class="tag-pic" width="32px" height="32px" >&nbsp;<?php echo $row['username']; ?>&nbsp;<span style="float:right;"><?php echo $date ; ?></span><div>
    </div>
</div>
<div class="bg-light text-center post-content">
    <?php echo $row['content']; ?>
</div>
<div class="bg-light text-center post-content">
    <?php
    $image = $row['images'];
    $image = explode('/',$image);
    // print_r($image);
    $total_img = count($image);
    $width = 850 / ($total_img-1);
    $height= 300;
    // echo $width;
    for($i=0;$i<$total_img-1;$i++){
        ?>
        <img src="<?php echo "image/".$image[$i]; ?>" width="<?php echo $width."px";?>" height="<?php echo $height."px";?>">
        <?php
    }

    ?>
</div>
</div>
<!-- like /dislike -->

<div class="form-group">
    <?php 
        // $user = $_SESSION['user'];
        // $postid =$row['id'];
        // $check_like = "SELECT * FROM like_dislike WHERE username='user' AND post_id='$postid' ";
        // $find_re = mysqli_query($con,$check_like);
        // if($find_re){
    ?>
    <button type="button" name="like_btn" class='btn btn-light' id="Like<?php echo $row['id'];?>" onclick="like( <?php echo $row['id'];?>,'<?php echo $_SESSION['user'];?>' );"><i style="font-size: 24px; color: #1a75ff;" class="fas fa-thumbs-up"></i> &nbsp;<span id="show_like<?php echo $row['id'];?>" ><?php echo $num_of_like; ?></span></button>
        <?php
        // }else{
    ?>
    <button type="button" name="dislike_btn" class='btn btn-light' value="Dislike" id="dislike<?php echo $row['id'];?>" onclick="dislike( <?php echo $row['id'];?>,'<?php echo $_SESSION['user'];?>' );"><i style="font-size: 24px;color:#ff0066;" class="fas fa-thumbs-down"> &nbsp;</i><span id="show_dislike<?php echo $row['id'];?>" ><?php echo $num_of_dislike; ?></span></button>
    <?php 
    // } 
    ?>
    <!-- Extra large modal -->
    <!-- <button onclick="comment(<?php #echo $row['id']; ?>)" class="btn btn-primary"> comment </button>
    <div id="com_view"></div> -->
    
    <button style="float:right;"  onclick="comment(<?php echo $row['id']; ?>)" type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i>Comment</i></button>

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="container-fluid" style="padding:10px;font-size:20px;letter-spacing:4px; background:#EAF0F1;"><b>Comment <br> <hr> </b></div>
                <div align="center" id="com_view" style="background:#EAF0F1;"  >
                
                </div>

            </div>
        </div>
    </div>
    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Comment</button>

    <div class="modal fade bd-example-modal-lg"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" >
        <div class="modal-content" >
            <div style="padding:20px; color: #758AA2;font-size: 20px;" class="container-fluid"><b>Comment</b> <br><hr></div>
            
            <div style="width: 500px;height: 200px; border: 1px solid #535C68;" class="container">

            </div>
        </div>
    </div>
    </div> -->
</div>

<!-- <button class="btn btn-danger">Dislike</button> -->

</div>
<?php
    $post_id=$row['id'];
}  ?>
    <?php } ?>
    <div align="center" style="padding:10px;"  class="bg-light">
    <?php if($totalRowCount > $showLimit){ ?>
         <button class="btn btn-info show_more" onclick="showmore(<?=$post_id?>)">Show More</button>
    <?php } ?>
    </div>
<?php
    }

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
<script src="js/post.js" ></script>
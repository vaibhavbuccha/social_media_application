function like(post_id,username){
    $.ajax({
        url: 'like.php',
        type: 'post',
        data: {
            'like':1,
            'postid':post_id,
            'username':username
        },
        success: function(data) {
          // $("#show_like"+post_id).html(data);
          // 
          var json = $.parseJSON(data);
          document.getElementById('show_like'+post_id).textContent=json.like;
          document.getElementById('show_dislike'+post_id).textContent=json.dislike;
          // $("#show_dislike"+post_id).html(total_dislike-1);
        //  $('#like'+postid).attr('value','dislike');
        // alert("getting data");
        },
        error: function(e) {
        }
      });
}


function comment(id){
  // alert(id);
  $.ajax({
    url: 'comment.php',
    type: 'post',
    data: {
      post_id : id
    },
    success:function(data){
      // document.getElementById('')
      document.getElementById('com_view').innerHTML = data;
    }
  })
}

function comment_insert(username,post_id){
  var comment = document.getElementById('com_con').value;
    $.ajax({
      url:'comment_insert.php',
      type :'post',
      data :{
        user : username,
        postid:post_id,
        comment:comment
      },
      success:function(data){
        document.getElementById('com_view').innerHTML = data;
      }
    })
}

function dislike(post_id,username){
  $.ajax({
      url: 'dislike.php',
      type: 'post',
      data: {
          'dislike':1,
          'postid':post_id,
          'username':username
      },
      success: function(data) {
        var json = $.parseJSON(data);
          document.getElementById('show_like'+post_id).textContent=json.like;
          document.getElementById('show_dislike'+post_id).textContent=json.dislike;
        // $("#show_like"+post_id).html(total_like-1);
        //called when successful
      //  $('#like'+postid).attr('value','dislike');
      // alert("getting data");
      },
      error: function(e) {
        //called when there is an error
        //console.log(e.message);
      }
    });
}

$(document).ready(function(){
    $(document).on('click','.show_more',function(){
        var ID = $(this).attr('id');
        $('.show_more').hide();
        $('.loding').show();
        $.ajax({
            type:'POST',
            url:'ajax_more-without-design.php',
            data:'id='+ID,
            success:function(html){
                $('#show_more_main'+ID).remove();
                $('.postList').append(html);
            }
        });
    });
});

function addfriend(reciver,sender){
    // alert(reciver +" "+sender);
    setInterval(function(){
           location.reload();     
    },100);
    $.ajax({
        url: 'addfriend.php',
        type: 'post',
        data:{
            reciver : reciver,
            sender:sender
        },
        success:function(data){
            
        }
    });
}


function accept(user,sender){
    // alert(user+ " "+ sender);
    setInterval(function(){
        location.reload();
    },100);
    $.ajax({
       
        url:'handle_req.php',
        type: 'post',
        data:{
        accept:1,
        user : user,
        sender:sender},
        success: function(data){
            console.log(data);
        }
    })
}



function reject(user,sender){
    // alert(user+ " "+ sender);
    setInterval(function(){
        location.reload();
    },100);
    $.ajax({
       
        url:'handle_req.php',
        type: 'post',
        data:{
        reject:1,
        user : user,
        sender:sender},
        success: function(data){
            console.log(data);
        }
    })
}
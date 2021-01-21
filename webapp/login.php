<?php include 'header.php'; ?>

<html>
<head>
<title>User Login</title>
</head>
<body>

<form name="frmUser" method="POST" action="loginCheck.php">
      <label><b>Username</b></b></label>
      <input type="text" placeholder="username" name="username">
      
      <label><b>Password</b></label>
      <input type="password" placeholder="password" name="password">
      
      <button type="submit" class="loginbtn" name="subButton" id="subButton">Login</button>
</form>
<script>
    $(document).ready(function(){
        $("#subButton").click(function(){
            var username = $("#username").val().trim();
            var password = $("#password").val().trim();
    
            if( username != "" && password != "" ){
                $.ajax({
                    url:'loginCheck.php',
                    type:'post',
                    data:{username:username,password:password},
                    success:function(response){
                        var msg = "";
                        if(response == 1){
                            window.location = "index.php";
                        }else{
                            msg = "Invalid username and password!";
                        }
                        $("#message").html(msg);

                    }
                });
            } else {
                <?php ?>
            }
        });
    });
</script>

      

<?php include 'footer.php';?>
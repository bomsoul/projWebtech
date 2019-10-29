<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheet/loginstyle.css">
    <title>Document</title>


    <style>
    


.container {
    -webkit-border-radius: 10px 60px 10px 10px;
    border-radius: 50px 50px 50px 50px;
    background: #fff;
    padding: 100px;
    width: 90%;
    max-width: 1100px;
    bottom: -130px;
    position: relative;
    -webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
    box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
    text-align: center;
  }
  
  h1{
    right: -670px;
    font-size: 30px;
    font-weight: bold;
    -webkit-border-radius: 10px 60px 10px 10px;
    border-radius: 150px 150px 150px 150px;
    background: #fff;
    padding: 100px;
    width: 90%;
    max-width: 200px;
    bottom: -80px;
    position: relative;
    padding: 10px;
    -webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
    box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
    text-align: center;
  }
    </style>
</head>
<body>

<!------ Include the above in your HEAD tag ---------->
    <div class="wrapper fadeInDown">
    <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <br><br><br><br>
    <div class="fadeIn first">
        <i class="fas fa-user-circle user" style="font-size:700%;color:#FFFFF"></i>
    </div>

    <!-- Login Form -->
    <form method="post">
    
      <input type="text" id="username" class="fadeIn second" name="username" placeholder="Username">
      <span><i class="fas fa-user cust" aria-hidden="true"></i> </span>
      
      <input type="password" id="password" class="fadeIn third" name="password" id = "password" placeholder="Password">
      <span><i class="fas fa-lock cust" aria-hidden="true"></i></span>
      <br><br>
      <input type="submit" class="fadeIn fourth" value="Log In" name="login">
      <input type="button" onclick = "window.location = '<?php echo $loginURL?>';" value = "Login with Google">
    </form>

    <!-- Remind Passowrd -->
  
  </div>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>
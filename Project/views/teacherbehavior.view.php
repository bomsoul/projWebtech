

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Home behavior</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="./stylesheet/teachermanagestyle.css">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <script src="main.js"></script>
    <style>
    img {
        border-radius: 50%;
    }

    #status{
      right: 50px;
    }
</style>
    

</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">
    <img src="https://upload.wikimedia.org/wikipedia/commons/6/67/KU_SubLogo.png" alt="KU logo" id="logo"style="width:50px;">
  </a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="teachermanage.php"><span><i class="fas fa-chalkboard"></i> จัดการรายวิชาที่สอน</span></a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="teacherbehavior.php"><span><i class="fas fa-chalkboard"></i> จัดการพฤติกรรมผู้เรียน</span></a>
    </li>
    <li> <label align="right" id = "status"class="text">  Logged in as: <?php echo $_SESSION['givenName'] ?></label><img style="width: 5%;" src="<?php echo $_SESSION['picture'] ?>"></li> 
    <a href="teacher_logout.php">
    <button class="btn btn-outline-danger" id = "logout"><i class="fa fa-circle-o-notch"></i></span>Logout</span></button> 
    </a>  
  
    
  </ul>
 
</nav>


<span style="font-weight:bold" id = "obj">จัดการรายวิชาที่สอน </span>
<div class="form-group">
  <form action="get" class="btn_row">
  <div class="col-md-3 col-sm-3 col-xs-6"> <a href="teacheraddbehavior.php" class="btn btn-sm animated-button sandy-three" id = "btn1">บันทึกพฤติกรรม</a> </div>
  <div class="col-md-3 col-sm-3 col-xs-6"> <a href="teachereditbehavior.php" class="btn btn-sm animated-button sandy-three" id = "btn4">แก้ไขพฤติกรรม</a> </div>
  <div class="col-md-3 col-sm-3 col-xs-6"> <a href="teachercheckbehavior.php" class="btn btn-sm animated-button sandy-three" id = "btn4">ดูพฤติกรรมนักเรียน</a> </div>
  </form>
</div>



</body>
</html>
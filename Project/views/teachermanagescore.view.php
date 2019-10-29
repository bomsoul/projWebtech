
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Teacher Manage score</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="./stylesheet/teachermanagestyle.css">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <script src="main.js"></script>
    <style>
    img {
        border-radius: 50%;
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
    <li class="nav-item">
      <a class="nav-link" href="teacherbehavior.php"><span><i class="fas fa-chalkboard"></i> จัดการพฤติกรรมผู้เรียน</span></a>
      
    </li>
    <li> <label id = "status"class="text">Logged in as: <?php echo $_SESSION['givenName'] ?></label><img style="width: 5%;" src="<?php echo $_SESSION['picture'] ?>"></li>
    
    <a href="teacher_logout.php">
    <button class="btn btn-outline-danger" id = "logout"><i class="fa fa-circle-o-notch"></i></span>Logout</span></button> 
    </a>
  </ul>
</nav>
<div class="container">
        <span style="font-weight:bold" id = "obj">เพิ่มคะแนนผู้เรียน </span>
        <form action="teachermanagescore.php" method="post" enctype="multipart/form-data">
            <label for="" value="">Select CSV file to upload:</label>
            <input type="file" name="file" id="file">
            <br>
            <input type="submit" class="btn btn-outline-success"id="submitscore" value="Upload CSV" name="submitscore">
        </form>
    </div>

<div class="container">
    <span style="font-weight:bold" id = "obj">เพิ่มเกรดผู้เรียน </span>
    <form action="teachermanagegrade.php" method="post" enctype="multipart/form-data">
        <label for="" value="">Select CSV file to upload:</label>
        <input type="file" name="file" id="file">
        <br>
        <input type="submit" class="btn btn-outline-success"id="submitgrade" value="Upload CSV" name="submitgrade">
    </form>
</div>


</div>



<a href="teachermanage.php">Back</a>

</body>
</html>
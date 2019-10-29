
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Teacher add behavior</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="./stylesheet/teachermanagestyle.css">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <script src="main.js"></script>
    
    

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
    <li class="nav-item ">
      <a class="nav-link" href="teacherbehavior.php"><span><i class="fas fa-chalkboard"></i> จัดการพฤติกรรมผู้เรียน</span></a>
    </li>
    <li>
    <img style="width: 5%;" src="<?php echo $_SESSION['picture'] ?>"><label id = "status"class="text">Logged in as: <?php echo $_SESSION['givenName'] ?></label>
    </li>
  
  
    <a href="teacher_logout.php">
    <button class="btn btn-outline-danger" id = "logout"><i class="fa fa-circle-o-notch"></i></span>Logout</span></button> 
    </a>
  </ul>
</nav>

<span style="font-weight:bold" id = "obj">บันทึกพฤติกรรม </span>
  <div class="container">
    <form action="teacheraddsubject.php" method="post">
      <div class="form-group col-4" >
        <label>พฤติกรรมในห้อง</label>
        <input type="text" name="binfo" id="id" class="form-control form-control-lg" placeholder="กรอกพฤติกรรม" required="required">
      </div>
      <div class="form-group col-4">
        <label>สุขภาพ/โรคประจำตัว</label>
        <input type="text" name="health"  id="name" class="form-control form-control-lg" placeholder="กรอกข้อมูล" required="required">
      </div>
      <br>
      <div class="form-group col-3">
        <label>คะแนนพฤติกรรม</label>
        <select name ="bscore">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
      </div>
        <br>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
    <a href="teachermanage.php">Back</a>
  </div>
</body>
</html>
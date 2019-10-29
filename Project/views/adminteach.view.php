<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Add Teacher Info</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="./stylesheet/adminteachstyle.css">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
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
          <a class="nav-link" href="adminsub.php"><span><i class="fas fa-chalkboard"></i> เพิ่มรายวิชา</span></a>
        </li>
      
        <li class="nav-item">
          <a class="nav-link active" href="adminteach.php"><span><i class="fas fa-graduation-cap"></i>  เพิ่มอาจารย์</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="adminstudent.php"><span><i class="fas fa-user-graduate"></i> เพิ่มนักเรียน</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="adminpass.php"><span><i class="fas fa-key"></i> เปลี่ยนรหัสผ่าน</span></a>
        </li>
        <a href="./index.php">
          <button class="btn btn-outline-danger" id = "logout"><i class="fa fa-circle-o-notch"></i></span>Logout</span></button> 
        </a>
      </ul>
    </nav>
    <div class="container">
      <span style="font-weight:bold" id = "obj">เพิ่มอาจารย์ </span>
      <form method="post" action="adminteach.php">
        <div class="form-group">
          <label for="info" id = "code-label"><span class="badge badge-dark">รหัสอาจารย์</span></label>
          <input type="text" class="form-control" id="code" name="code" required="required">
          <label for="info" id = "name-label"><span class="badge badge-dark">ชื่ออาจารย์</span></label>
          <input type="text" class="form-control" id="name" name="name" required="required">
          <label for="info" id = "faculty-label"><span class="badge badge-dark">คณะ</span></label>
          <input type="text" class="form-control" id="faculty" name ="faculty" required="required">
          <label for="info" id = "department-label"><span class="badge badge-dark">ภาควิชา</span></label>
          <input type="text" class="form-control" id="department" name="department" required="required">
          <label for="info" id = "email-label"><span class="badge badge-dark">Email</span></label>
          <input type="text" class="form-control" id="email" name="mail" required="required">
          <input type="submit" class="btn btn-outline-success"id="submitinfo" value="Submit" name="submitinfo">

        </div>
      </form>
      </div>
</body>
</html>
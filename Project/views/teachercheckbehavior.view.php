
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Check behavior</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="./stylesheet/teachermanagestyle.css">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
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


<span style="font-weight:bold" id = "obj">ดูพฤติกรรมผู้เรียน </span>
<div class="container"> 
    <br><br>
    <legend align="center"> Student Behavior</legend>
    <form action="teachercheckbehavior.php" method='post'>
        <label for="" id= 'class-label' >Select Class</label>
        <?php echo '<select name="class">'; ?>
          <?php foreach ($data as $data=>$row) :?>
            <option value="<?= $row->sbj_id.','.$row->sec_id?>"><?=$row->sbj_id."  ".$row->sbj_name."   sec: ".$row->sec_id ?></option>
          <?php endforeach;?>
        <?php echo '</selcet>'?>
        <input type="submit" name="submitinfo" value="submit">
    </form>
    <div class="table-responsive">  
    <table id="city_data" class="table table-striped table-bordered">  

        <thead>
            <tr>
                <td>Student ID</td>
                <td>Student Name</td>
                <td>Behavior Score</td>
            </tr>
        </thead>
        <tbody>

        <tbody>
                <?php foreach ($student as $student=>$row) :?>
                  <tr>
                    <td><?= $row->std_id?></td>
                    <td><?= $row->name?></td>
                    <td><?= $row->bhv_score?></td>
                  </tr>
                <?php endforeach;?>
            </tbody>

</tbody>
</table>



<a href="teacherbehavior.php"><button>Back</button></a>





</div>

</body>
</html>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Delete Student</title>
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
    <legend align="center"> Subject Database</legend>
    <form action="teacherdeletestudent.php" method='post'>
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
                <th>Delete</th>
                <th>Student ID</th>
                <th>Student Name</th>
                <th>Section</th>
            </tr>
          </thead>
            <tbody>
                <?php foreach ($student as $data=>$row) :?>
                  <tr>
                    <form action="teacherdeletestudent.php" method="post">
                    <td><input type="submit" name="confirm" value="Delete"></td>
                    <td name="d"><input type="hidden" name="td_1" value ="<?= $row->std_id?>"><?= $row->std_id?></td>
                    <td name="d"> <input type="hidden" name="td_2"value="<?= $row->sbj_id?>"><?= $row->name?></td>
                    <td name="d"><input type="hidden" name="td_3" value="<?= $row->sec_id?>"><?= $row->sec_id?></td>
                    </form>
                  </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
  </div>



<a href="teachermanage.php"><button>Back</button></a>
</body>
</html>
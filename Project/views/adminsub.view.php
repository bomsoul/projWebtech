<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Add Student Info</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="./stylesheet/adminsubstyle.css">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<div class="container register">
      <div class="row">
          <div class="col-md-3 register-left">
              <div class="sit-up">
                <div class="spin">
                <img src="https://img.icons8.com/color/210/000000/settings.png">
                </div>
              </div>
              <h3>Welcome Admin </h3>
              <p>Here is all you can do</p>
              <a href="./index.php">
                <button id = "logout" >Logout</button> 
              </a>
          </div>
          <div class="col-md-9 register-right">
              <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                  <li class="nav-item">
                      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#course-menu" role="tab" aria-controls="home" aria-selected="true">Course</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#teacher-menu" role="tab" aria-controls="profile" aria-selected="false">Teacher</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#student-menu" role="tab" aria-controls="profile" aria-selected="false">Student</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#password-menu" role="tab" aria-controls="profile" aria-selected="false">Password</a>
                  </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="course-menu" role="tabpanel" aria-labelledby="home-tab">
                      <h3 class="register-heading">Add Subject Course</h3>
                      <form action="adminsub.php" method="post" target="iframe_target">
                      <iframe id="iframe_target" name="iframe_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
                      <div class="row register-form">
                          <div class="col-md-6">
                              <div class="form-group">
                              <label for="info" id = "name-label">ชื่อรายวิชา <b style="color:red">*</b></label><br>
                              <?php echo '<select name="subject-id" id="subject-id" class="form-control">' ; ?>
                                  <?php foreach($subject as  $data=>$row) :?>
                                  <option value="<?= $row->sbj_id?>"><?= $row->sbj_id."  ".$row->sbj_name?></option>
                                  <?php endforeach;?>
                                <?php echo '</select>'?>
                              </div>
                              <div class="form-group">
                                <label for="info" id = "prerequisite-label">Prerequisite <b style="color:red">*</b></label>
                                <input type="text" class="form-control" id="prerequisite" name="prerequisite" placeholder="prerequisite">
                              </div>
                              <div class="form-group">
                                <label for="info" id = "credits-label">Section <b style="color:red">*</b></label>
                                <input type="text" class="form-control" id="credits" name="section" required="required" placeholder="section">
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                              <label for="teacher" id = "teacher-label">Teacher <b style="color:red">*</b></label><br>
                              <?php echo '<select name="teacher" id="teacher" class="form-control">' ; ?>
                                <?php foreach($tname as  $data=>$row) :?>
                                <option value="<?= $row->t_id?>"><?= $row->name?></option>
                                <?php endforeach;?>
                              <?php echo '</select>'?>
                              </div>
                              <div class="form-group">
                                  <label for=""></label>
                                  <label for=""></label>
                              </div>
                              <div class="form-group">
                                  <label for=""></label>
                                  <label for=""></label>
                              </div>
                              <div class="form-group">
                                  <label for=""></label>
                                  <label for=""></label>
                                  <label for=""></label>
                                  <label for=""></label>
                              </div>
                              <input type="submit" class="btnRegister"  id="submitinfo" name="buttoninfo" value="Add Course"/>
                          </div>
                      </form>
                      </div>
                  </div>
                  <div class="tab-pane fade show" id="teacher-menu" role="tabpanel" aria-labelledby="profile-tab">
                      <h3  class="register-heading">Add Teacher</h3>
                      <form action="adminsub.php" method="post" target="iframe_target2">
                      <iframe id="iframe_target2" name="iframe_target2" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
                      <div class="row register-form">
                          <div class="col-md-6">
                              <div class="form-group">
                                <label for="info" id = "code-label">รหัสอาจารย์ <b style="color:red">*</b></label><br>
                                <input type="text" class="form-control" id="teacher-code" name="teacher-code" required="required" placeholder="Teacher ID">
                              </div>
                              <div class="form-group">
                                <label for="info" id = "name-label">ชื่ออาจารย์ <b style="color:red">*</b></label>
                                <input type="text" class="form-control" id="tname" name="tname" required="required" placeholder="Teacher name">
                              </div>
                              <div class="form-group">
                                <label for="info" id = "faculty-label">คณะ <b style="color:red">*</b></label>
                                <input type="text" class="form-control" id="faculty" name ="faculty" required="required" placeholder="Faculty">
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                <label for="info" id = "department-label">ภาควิชา <b style="color:red">*</b></label>
                                <input type="text" class="form-control" id="department" name="department" required="required" placeholder="Department">
                              </div>
                              <div class="form-group">
                                <label for="info" id = "email-label">Email <b style="color:red">*</b></label>
                                <input type="text" class="form-control" id="email" name="mail" required="required" placeholder="Email">
                              </div>
                              <div class="form-group">
                                  <label for=""></label>
                                  <label for=""></label>
                              </div>
                              <input type="submit" class="btnRegister" id="submitinfo1" value="Add Teacher" name="submitinfo1">
                          </div>
                      </form>
                      </div>
                  </div>
                  <div class="tab-pane fade show" id="student-menu" role="tabpanel" aria-labelledby="profile-tab">
                    <h3  class="register-heading">Add Student</h3>
                    <form action="adminsub.php" method="post" target="iframe_target3" enctype="multipart/form-data">
                    <iframe id="iframe_target3" name="iframe_target3" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
                      <div class="row register-form">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="" value="">Select CSV file to upload:</label>
                              <input type="file" name="file" id="file">
                            </div>
                            <div class="form-group">
                              <label for=""></label>
                              <label for=""></label>
                            </div>
                            <div class="form-group">
                              <label for=""></label>
                              <label for=""></label>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                                <label for=""></label>
                                <label for=""></label>
                            </div>
                            <div class="form-group">
                                <label for=""></label>
                                <label for=""></label>
                            </div>
                            <div class="form-group">
                                <label for=""></label>
                                <label for=""></label>
                            </div>
                            <div class="form-group">
                                <label for=""></label>
                                <label for=""></label>
                            </div>
                            <div class="form-group">
                                <label for=""></label>
                                <label for=""></label>
                            </div>
                            <input type="submit" class="btnRegister" id="submit" value="Upload CSV" name="submit">
                          </div>
                        </form>
                      </div>
                    </div>
                    <div class="tab-pane fade show" id="password-menu" role="tabpanel" aria-labelledby="profile-tab">
                    <h3  class="register-heading">Change Password</h3>
                    <form action="adminsub.php" method="post" target="iframe_target4">
                    <iframe id="iframe_target4" name="iframe_target4" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
                    <div class="row register-form">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="info" id = "oldp-label">รหัสผ่านเดิม <b style="color:red">*</b></label>
                            <input type="password" class="form-control" id="oldp"  name ="oldp" required="required" placeholder="Old Password">
                          </div>
                          <div class="form-group">
                            <label for="info" id = "newp-label">รหัสผ่านใหม่ <b style="color:red">*</b></label>
                            <input type="password" class="form-control" id="newp" name="newp" placeholder="New Password" required="required" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">  
                          </div>
                          <div class="form-group">
                            <label for="info" id = "newp2-label">Re-type รหัสผ่านใหม่ <b style="color:red">*</b></label>
                            <input type="password" class="form-control" id="newp2" name="newp2" required="required"placeholder="Re-Enter New Password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">  
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                                <label for=""></label>
                                <label for=""></label>
                            </div>
                            <div class="form-group">
                                <label for=""></label>
                                <label for=""></label>
                            </div>
                            <div class="form-group">
                                <label for=""></label>
                                <label for=""></label>
                            </div>
                            <div class="form-group">
                                <label for=""></label>
                                <label for=""></label>
                            </div>
                            <div class="form-group">
                                <label for=""></label>
                                <label for=""></label>
                            </div>
                            <input type="submit" class="btnRegister"id="submitinfo2" name="submitinfo2" value="Change Password">
                        </div>
                    </form>
                    </div>
                </div>
              </div>
          </div>
      </div>
  </div>
</body>
</html>
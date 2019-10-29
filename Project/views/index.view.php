<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheet/indexstyle.css">
    

    <title>Document</title>
    <style>

.container{
    background:rgba(0,0,0,0.3);
    font-weight:bold;
    color:white;
}


.student,.teacher,.admin{
  opacity: 0.67;
  filter: alpha(opacity=50); /* For IE8 and earlier */
}

.student:hover,.teacher:hover,.admin:hover {
  opacity: 3.0;
  filter: alpha(opacity=1050); /* For IE8 and earlier */
}

.student,.teacher,.admin{
    font-size: 2em
   
}
.swing {
    animation: swing ease-in-out 1s infinite alternate;
    transform-origin: center -20px;
    float:left;
    box-shadow: 5px 5px 10px rgba(0,0,0,0.5);
    
}
.swing img {
    border: 5px solid #f8f8f8;
    display: block;
}
.swing:after{
    content: '';
    position: absolute;  
    width: 20px; height: 20px;  
    border: 1px solid #999;
    top: -10px; left: 50%;
    z-index: 0;
    border-bottom: none;
    border-right: none;
    transform: rotate(45deg);
}
/* nail */
.swing:before{
    content: '';
    position: absolute;
    width: 5px; height: 5px;
    top: -14px;left: 54%;
    z-index: 5;
    border-radius: 50% 50%;
    background: #000;
}
 
@keyframes swing {
    0% { transform: rotate(3deg); }
    100% { transform: rotate(-3deg); }
}
    
body {      
            
            height:100%;
            background-attachment:fixed;
            padding:0px;
            margin:0px;
            background-image: url('53519628_565063137307474_5713219716806344704_n.jpg');
            /*Change this url to your panorama image*/
            background-repeat:no-repeat;
            background-position:0%;
            background-size: 3000px 900px;
        
            animation-name:backgroundanimation;
            animation-duration:0s;
            animation-timing-function:linear;
            animation-delay:0s;
            animation-iteration-count:infinite;
            animation-direction:alternate;
            animation-play-state:running;

            /* Safari and Chrome: */
            -webkit-animation-name:backgroundanimation;
            -webkit-animation-duration:10s;
            -webkit-animation-timing-function:linear;
            -webkit-animation-delay:0s;
            -webkit-animation-iteration-count:infinite;
            -webkit-animation-direction:alternate;
            -webkit-animation-play-state:running;
            
        }
        @keyframes backgroundanimation {
            from {background-position:0%;}
            to {background-position:100%}
        }

        @-moz-keyframes backgroundanimation {
            from {background-position:0%;}
            to {background-position:100%}
        }

        @-webkit-keyframes backgroundanimation {
            from {background-position:0%;}
            to {background-position:100%}
        }

        @-o-keyframes backgroundanimation {
            from {background-position:0%;}
            to {background-position:100%}
        }
             
    </style>
</head>
<body>
<figure class="swing">
<img src="http://pannomena.com/images/screen/co-16_kasetsart_university.jpg" width="150">
</figure>  

    <div class="container">
        <div class="row">
        <div id="panorama"></div>
            <div class="col-4 student"><a href="student_login.php" ><img src="https://img.icons8.com/color/210/000000/user-male-skin-type-4.png"></a><br>Student</div>
            
            <div class="col-4 teacher"><a href="teacher_login.php" ><img src="https://img.icons8.com/color/210/000000/google-classroom.png"></i></a><br>Teacher</div>
            <div class="col-4 admin"><a href="admin_login.php" ><img src="https://img.icons8.com/color/210/000000/settings.png"></a><br>Admin</div>
        </div>
    </div>
</body>
</html>


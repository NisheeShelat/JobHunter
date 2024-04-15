<?php
session_start();
include('connection.php');
if(!isset($_SESSION['username'])){
    header("location: index.php");
}
$email= $_SESSION['email'];
$usertype=$_SESSION['usertype'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Job Hunting-Jobs</title>
      
       <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.carousel.css">
     <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
 <link href="css/bootstrap.min.css" rel="stylesheet">
     
       <script src="https://kit.fontawesome.com/a076d05399.js"></script>
      
  </head>
    <style>

        .navbar-custom {
  background-color: #ffffff;
/*  border-color: #eeeeee;*/
  background-image: -webkit-gradient(linear, left 0%, left 100%, from(#ffffff), to(#ffffff));
  background-image: -webkit-linear-gradient(top, #ffffff, 0%, #ffffff, 100%);
  background-image: -moz-linear-gradient(top, #ffffff 0%, #ffffff 100%);
  background-image: linear-gradient(to bottom, #ffffff 0%, #ffffff 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff', endColorstr='#ffffffff', GradientType=0);
            font-family: Helvetica, sans-serif;
          font-size: 14px;
          
}
.navbar-custom .navbar-brand {
  color: #080707;
}
.navbar-custom .navbar-brand:hover,
.navbar-custom .navbar-brand:focus {
  color: #000000;
  background-color:#F9EED5;
}
.navbar-custom .navbar-text {
  color: #080707;
}
.navbar-custom .navbar-nav > li > a {
  color: #080707;
}
.navbar-custom .navbar-nav > li > a:hover,
.navbar-custom .navbar-nav > li > a:focus {
  color: #080707;
  background-color: transparent;
}
.navbar-custom .navbar-nav > .active > a,
.navbar-custom .navbar-nav > .active > a:hover,
.navbar-custom .navbar-nav > .active > a:focus {
  color: #080707;
  background-color: #F9EED5;
  background-image: -webkit-gradient(linear, left 0%, left 100%, from(#F9EED5), to(#ffffff));
  background-image: -webkit-linear-gradient(top, #F9EED5, 0%, #ffffff, 100%);
  background-image: -moz-linear-gradient(top, #F9EED5 0%, #ffffff 100%);
  background-image: linear-gradient(to bottom, #F9EED5 0%, #ffffff 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffeeeeee', endColorstr='#ffffffff', GradientType=0);
}
.navbar-custom .navbar-nav > .disabled > a,
.navbar-custom .navbar-nav > .disabled > a:hover,
.navbar-custom .navbar-nav > .disabled > a:focus {
  color: #cccccc;
  background-color: transparent;
}
.navbar-custom .navbar-toggle {
  border-color: #dddddd;
}
.navbar-custom .navbar-toggle:hover,
.navbar-custom .navbar-toggle:focus {
  background-color: #dddddd;
}
.navbar-custom .navbar-toggle .icon-bar {
  background-color: #cccccc;
}
.navbar-custom .navbar-collapse,
.navbar-custom .navbar-form {
/*  border-color: #ededed;*/
}
.navbar-custom .navbar-nav > .dropdown > a:hover .caret,
.navbar-custom .navbar-nav > .dropdown > a:focus .caret {
  border-top-color: #080707;
  border-bottom-color: #080707;
}
.navbar-custom .navbar-nav > .open > a,
.navbar-custom .navbar-nav > .open > a:hover,
.navbar-custom .navbar-nav > .open > a:focus {
  background-color: #eeeeee;
  color: #080707;
}
.navbar-custom .navbar-nav > .open > a .caret,
.navbar-custom .navbar-nav > .open > a:hover .caret,
.navbar-custom .navbar-nav > .open > a:focus .caret {
  border-top-color: #080707;
  border-bottom-color: #080707;
}
.navbar-custom .navbar-nav > .dropdown > a .caret {
  border-top-color: #080707;
  border-bottom-color: #080707;
}
@media (max-width: 767) {
  .navbar-custom .navbar-nav .open .dropdown-menu > li > a {
    color: #080707;
  }
  .navbar-custom .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-custom .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #080707;
    background-color: transparent;
  }
  .navbar-custom .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-custom .navbar-nav .open .dropdown-menu > .active > a:hover,
  .navbar-custom .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #080707;
    background-color: #eeeeee;
  }
  .navbar-custom .navbar-nav .open .dropdown-menu > .disabled > a,
  .navbar-custom .navbar-nav .open .dropdown-menu > .disabled > a:hover,
  .navbar-custom .navbar-nav .open .dropdown-menu > .disabled > a:focus {
    color: #cccccc;
    background-color: transparent;
  }
}
.navbar-custom .navbar-link {
  color: #080707;
}
.navbar-custom .navbar-link:hover {
  color: #080707;
}
        
 .navbar-brand{
            display: inline;
             
            }
.left{
            float: left;
             margin-top:20px;
            font-size: 20px;
            margin-right: 5px;
        }
        .see{
            color: black;
            background: red;
            margin-top:100px;
        }
        .hello{
            background: white;
            border:1px solid #EDEDF1;
            margin-bottom: 50px;
            border-radius: 10px;
            padding-left: 50px;
            padding-right: 50px;
            padding-bottom: 30px;
            width: 48%;
            color: black;
            float:left;
            margin-right: 20px;
            
        }
        .applicant{
            background-color: #F9EED5;
            border:1px solid black;
            border-radius: 3px;
            height: 40px;
            width:130px;
        }
        
/*
        .job{
            background-color: #F9EED5;
            color: black;
            padding: 20px;
            margin-left: 50px;
            margin-right: 50px;
            border: 1px solid #F9EED5;
            border-radius: 10px;
            height: 100%;
            display: none;
            order:1;
            float: left;
        }
*/
        .mytabs{

        margin-left:20px;
            margin-right: 20px;
        }
        .mytabs input[type="radio"]{
            display: none;
         }
        .mytabs label{

            padding: 25px;
            background: white;
            font-weight: bold;
            }
         .mytabs .job{
            width: 100%;
            padding: 20px;
            background: #F9EED5;
            order:1;
            display: none;
            float: left;
            
        }
        .mytabs input[type="radio"]:checked +label + .job{
            display: block;
        }
        .mytabs input[type="radio"]:checked +label {
            background:#F9EED5;
        }
    </style>
    <body>
    <!--Navigation Bar-->  
      <nav role="navigation" class="navbar navbar-custom navbar">
    <div class="container-fluid">
        <div class="navbar-header">
<!--            <div class="navbar-brand" >-->
          <a class="navbar-brand" href="#" >
         <img src="suitcase.png" alt="" width="30" height="30" > 
         </a>
            <div class="left"><b>Job Hunter</b></div>
<!--                </div>-->
            <button type="button" class="navbar-toggle" data-target="#navbarCollapse" data-toggle="collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse" id="navbarCollapse">
            <ul class="nav navbar-nav">
                <li ><a href="mainpageloggedin.php"><span class="glyphicon glyphicon-home"></span> HOME</a></li>
                <?php
                if($usertype=="employee"){
                    echo "<li><a href='resume.php'><span class='glyphicon glyphicon-user'></span> Resume</a></li>";
                    echo"<li><a href='showresume.php'><span class='glyphicon glyphicon-pencil'></span> Show Resume</a></li>";
                    echo "<li class='active'><a href='employeejob.php'><span class='glyphicon glyphicon-search'></span> Jobs</a></li>";
                    echo"<li><a href='contactus.php'><span class='glyphicon glyphicon-map-marker'></span> CONTACT US</a></li>";
                }
                else if($usertype=="employer"){
                    echo "<li ><a href='job.php'><span class='glyphicon glyphicon-plus-sign'></span> Job</a></li>";
                    echo"<li><a href='showresume.php'><span class='glyphicon glyphicon-pencil'></span> Show Job</a></li>";
                    echo"<li><a href='contactus.php'><span class='glyphicon glyphicon-map-marker'></span> CONTACT US</a></li>";
                }
                
                else{
                    echo"<li>Nothing</li>";
                }
                ?>
                 </ul>
            
             <ul class="nav navbar-nav navbar-right">
                      <li><a href="#">Logged in as <b><?php echo $_SESSION['username']?></b></a></li>
                    <li><a href="index.php?logout=1">Log out</a></li>
                  </ul>
           
        </div>
    </div>
    </nav>
        <div class="mytabs">
            <input type="radio" id="tab1" name="mytabs" checked="checked">
             <label for="tab1">SEE JOBS POSTED</label>
        <div class="job">
            
            
              <h2 style="margin-bottom:20px;"> SEE JOBS POSTED</h2>
             
              <?php
              include('connection.php');
              $sql1 = "SELECT * FROM `job` WHERE job_id NOT IN (SELECT job_id FROM `apply` WHERE applicant_id='$email')";
              $result = mysqli_query($link, $sql1);
               if ($result->num_rows> 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo'<div class="hello">';
                        echo "<br><h2>".$row["companyname"].  "</h2> <h3><i>  " .$row["category"]."</i></h3><h4><i>" .$row["position"]."</i></h4><br><p>".$row["description"]."</p><br><h5> <b>Type: </b>".$row["type"]."</h5><br><h5><b>Availability:</b>".$row["availability"]."</h5><br><h5><b><span class='glyphicon glyphicon-map-marker'></span>   </b>".$row["loc"]."</h5><br><h5><b> <span class='glyphicon glyphicon-usd'>  </span>  </b>".$row["salary"]."</h5><br><h5><b><span class='glyphicon glyphicon-briefcase'>  </span>   </b>".$row["experience"]."</h5><br><form method='post'><input type='text' name='id' value='".$row['job_id']."' class='sr-only'> </input><input type='submit' name='Apply' value='Apply' class='applicant'></button></form>";
                        echo'</div>';
                        }
                    }
                        
                    
                         if(isset($_POST['Apply'])){
                            $jobid=$_POST['id'];
                            $sql="INSERT INTO apply(`job_id`,`applicant_id`,`status`) VALUES ('$jobid','$email','pending')";
                            $result = mysqli_query($link, $sql);
                        }  
              ?>
                </div>
           
            <input type="radio" id="tab2" name="mytabs" >
          <label for="tab2">SEE APPLIED JOB</label>
        <div class="job">
            <h2 style="margin-bottom:20px;"> SEE APPLIED JOBS</h2>
             <?php
              include('connection.php');
              $sql1 = "SELECT * FROM `job` WHERE job_id IN (SELECT job_id FROM `apply` WHERE applicant_id='$email')";
              $sql2="SELECT status FROM `apply` WHERE job_id IN(SELECT job_id FROM `apply` WHERE applicant_id='$email')";
              $result = mysqli_query($link, $sql1);
             $result2=mysqli_query($link, $sql2);
            $row1=$result2->fetch_assoc();
               if ($result->num_rows> 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo'<div class="hello">';
                        echo "<br><h2>".$row["companyname"].  "</h2> <h3><i>  " .$row["category"]."</i></h3><h4><i>" .$row["position"]."</i></h4><br><p>".$row["description"]."</p><br><h5> <b>Type: </b>".$row["type"]."</h5><br><h5><b>Availability:</b>".$row["availability"]."</h5><br><h5><b><span class='glyphicon glyphicon-map-marker'></span>   </b>".$row["loc"]."</h5><br><h5><b> <span class='glyphicon glyphicon-usd'>  </span>  </b>".$row["salary"]."</h5><br><h5><b><span class='glyphicon glyphicon-briefcase'>  </span>   </b>".$row["experience"]."</h5><br><h5><b> Status:</b>".$row1["status"]."</h5>";
                        echo'</div>';
                        }
                    }
            ?>
        </div>
            </div>
                
          
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>
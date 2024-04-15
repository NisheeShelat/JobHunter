
<?php
session_start();
include('connection.php');
$email=$_SESSION['email'];
//if(!isset($_SESSION['user_id'])){
//    header("location: index.php");
//}
$sql = "SELECT * FROM personaldetail WHERE email='$email'";
$result = mysqli_query($link, $sql);

$count = mysqli_num_rows($result);

if($count == 1){
    $row = mysqli_fetch_array($result, MYSQL_ASSOC); 
    $fname=$row['fname'];
    $lname=$row['lname'];
    $email=$row['email'];
    $dob=$row['dob'];
    $mobile=$row['mobile'];
    $city=$row['city'];
    $postalcode=$row['postalcode'];
    $country=$row['country'];
    $level=$row['level'];
    $field=$row['field'];
    $college=$row['college'];
    $year=$row['year'];
    $workexperience=$row['workexperience'];
    $workdescription=$row['workdescription'];
     
}else{
    echo "There was an error retrieving the username and email from the database";   
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
          <style>

        .navbar-custom {
  background-color: #ffffff;
  border-color: #eeeeee;
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
  border-color: #ededed;
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
              .container{
                  margin-top: 50px;
              }
      </style>
    </head>
    
    <body>
             <nav role="navigation" class="navbar navbar-custom navbar-fixed-top">
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
                <li><a href='resume.php'><span class='glyphicon glyphicon-user'></span> Resume</a></li>
                <li class="active"><a href='showresume.php'><span class='glyphicon glyphicon-pencil'></span> Show Resume</a>
               
            </ul>
             <ul class="nav navbar-nav navbar-right">
                      <li><a href="#">Logged in as <b><?php echo $_SESSION['username']?></b></a></li>
                    <li><a href="index.php?logout=1">Log out</a></li>
                  </ul>
           
        </div>
    </div>
    </nav>
         <div class="container" id="container">
          <div class="row">
              <div class="col-md-offset-3 col-md-6">

                  <h2>Resume:</h2>
                  <div class="table-responsive">
                      <table class="table table-hover table-bordered">
                          <tr data-target="#" data-toggle="modal">
                              <td>First name</td>
                              <td><?php echo $fname; ?></td>
                          </tr>
                          <tr data-target="#" data-toggle="modal">
                              <td>Email</td>
                              <td><?php echo $email ?></td>
                          </tr>
                          <tr data-target="#" data-toggle="modal">
                              <td>Date of Birth</td>
                              <td><?php echo $dob ?></td>
                          </tr>
                           <tr data-target="#" data-toggle="modal">
                              <td>Phone Number</td>
                              <td><?php echo $mobile ?></td>
                          </tr>
                          <tr data-target="#" data-toggle="modal">
                              <td>City</td>
                              <td><?php echo $city ?></td>
                          </tr>
                          <tr data-target="#" data-toggle="modal">
                              <td>Postal Code</td>
                              <td><?php echo $postalcode ?></td>
                          </tr>
                          <tr data-target="#" data-toggle="modal">
                              <td>Country</td>
                              <td><?php echo $country ?></td>
                          </tr>
                          <tr data-target="#" data-toggle="modal">
                              <td>Level</td>
                              <td><?php echo $level ?></td>
                          </tr>
                          <tr data-target="#" data-toggle="modal">
                              <td>Field</td>
                              <td><?php echo $field ?></td>
                          </tr>
                          <tr data-target="#" data-toggle="modal">
                              <td>College</td>
                              <td><?php echo $college ?></td>
                          </tr>
                          <tr data-target="#" data-toggle="modal">
                              <td>Year of Completion</td>
                              <td><?php echo $year ?></td>
                          </tr>
                          <tr data-target="#" data-toggle="modal">
                              <td>Work Experience</td>
                              <td><?php echo $workexperience ?></td>
                          </tr>
                          <tr data-target="#" data-toggle="modal">
                              <td>Work Description</td>
                              <td><?php echo $workdescription ?></td>
                          </tr>
                          
                        
                      </table>
                  
                  </div>
              
              </div>
          </div>
      </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
        </body>
</html>
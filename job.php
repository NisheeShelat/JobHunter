<?php
include("connection.php");
session_start();
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
    <title>Job Hunting-Home</title>
      
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
        .mytabs{
            display: flex;
            flex-wrap: wrap;
            max-width: 100%;
            margin: 0px auto;
            padding: 25px;
        }
        .mytabs input[type="radio"]{
            display: none;
         }
        .mytabs label{

            padding: 25px;
            background: white;
            font-weight: bold;
            }
        .col-25 label{
            background: #F9EED5;
/*              padding: 12px 12px 12px 0;*/
              
              margin-left: 20px;
        }
        .col-75 input, select, textarea {
            width: 80%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
/*              margin-left: 10px;*/
              
}
     .form-group label {
	display: inline-block;
/*	margin-bottom: 5px;*/
}   
        .col-25 {
  float: left;
  width: 25%;
/*  margin-top: 6px;*/
              text-align: center;
              font-size: 18px;
              
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.form-group:after {
  content: "";
  display: table;
  clear: both;
}
        .mytabs .tab{
            width: 100%;
            padding: 20px;
            background: #F9EED5;
            order:1;
            display: none;
            float: left;
            
        }
        .mytabs .tab .h2{
            font-size: 3em;
        }
        .mytabs input[type="radio"]:checked +label + .tab{
            display: block;
        }
        .mytabs input[type="radio"]:checked +label {
            background:#F9EED5;
        }
        .submit{
            background: white;
            border: 1px solid #EDEDF1;
            border-radius: 5px;
            height: 40px;
            width:150px;
            margin-left: 600px;
            
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
            float: left;
            
            margin-right: 20px;
        }
        .applicant{
            background-color: #F9EED5;
            border:1px solid black;
            border-radius: 3px;
            height: 40px;
            width:130px;
            position: absolute;
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
                    echo"<li><a href='contactus.php'><span class='glyphicon glyphicon-map-marker'></span> CONTACT US</a></li>";
                }
                else if($usertype=="employer"){
                    echo "<li class='active'><a href='job.php'><span class='glyphicon glyphicon-plus-sign'></span> Job</a></li>";
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
          <label for="tab1">POST A JOB</label>
          <div class="tab">
              <h2> POST A JOB</h2>
              <form method="post" id="job">
                   <div class="form-group">
                        <div class="col-25">
                        <label for="companyname">Company Name:</label>
                        </div>
                        <div class="col-75">
                        <input type="text" id="companyname" name="companyname" placeholder="Your Company Name" required>
                        </div>
                    </div>
                  <div class="form-group">
                        <div class="col-25">
                        <label for="category">Job Category:</label>
                        </div>
                        <div class="col-75">
                        <select id="category" name="category" required>
                            
                       <option value="other">Other</option>
                            <option value="Accounting & Finance">Accounting & Finance</option>
                            <option value="Administrative">Administrative</option>
                            <option value="Technology">Technology</option>
                            <option value="Creative & Marketing">Creative & Marketing</option>
                            <option value="Legal">Legal</option>
                             
                            </select>
                        </div>
                    </div>
                  <div class="form-group">
                        <div class="col-25">
                        <label for="position">Job Position:</label>
                        </div>
                        <div class="col-75">
                        <input type="text" id="position" name="position" placeholder="Job Posiiton" required>
                        </div>
                    </div>
                   <div class="form-group">
                        <div class="col-25">
                        <label for="description">Job Description:</label>
                        </div>
                        <div class="col-75">
                <textarea id="description" name="description" rows="4" cols="50" placeholder="Write Job Description here..."></textarea>
                           
                            
                        </div>
                    </div>
                  <div class="form-group">
                        <div class="col-25">
                        <label for="availability">Job Availibilty:</label>
                        </div>
                        <div class="col-75">
                        <input type="number" id="availability" name="availability" min="1" max="50" value="1" required>
                        </div>
                    </div>
                  <div class="form-group">
                        <div class="col-25">
                        <label for="type">Job Type:</label>
                        </div>
                        <div class="col-75">
                            <select id="type" name="type" required>
                            
                       <option value="other">Other</option>
                            <option value="Internship">Internship</option>
                            <option value="Permanent">Permanent</option>
                            <option value="Temporary">Temporary</option>
                            <option value="Fresher">Fresher</option>
                            <option value="Part-time">Part-time</option>
                             
                            </select>
                        </div>
                    </div>
                  <div class="form-group">
                        <div class="col-25">
                        <label for="loc">Job Location:</label>
                        </div>
                        <div class="col-75">
                            <select id="loc" name="loc" required>
                            
                       <option value="Any">Any</option>
                            <option value="Work From Home">Work From Home</option>
                            <option value="On Site">On Site</option>
                            
                             
                            </select>
                        </div>
                    </div>
                  <div class="form-group">
                        <div class="col-25">
                        <label for="salary">Salary Range:</label>
                        </div>
                        <div class="col-75">
                            <select id="salary" name="salary" required>
                            
                       <option value="Based on your performance">Based on your performance</option>
                            <option value="less than 5000">less than 5000</option>
                            <option value="more than 5000">more than 5000</option>
                            
                             
                            </select>
                        </div>
                    </div>
                  <div class="form-group">
                        <div class="col-25">
                        <label for="experience">Experience:</label>
                        </div>
                        <div class="col-75">
                            <select id="experience" name="experience" required>
                            
                       <option value="">0-2 years</option>
                            <option value="2-4 years">2-4 years</option>
                            <option value="4-6 years">4-6 years</option>
                            <option value="6-8 years">6-8 years</option>
                            <option value="8-10 years">8-10 years</option>
                            
                             
                            </select>
                        </div>
                    </div>
                  
                 
                  <input class="submit" type="submit" value="SUBMIT" name="submit">
              </form>
          </div>
           <?php
        //<!--Start session-->
        session_start();
        include('connection.php');
        if(isset($_POST["submit"]))
{
   
//        $fname = mysqli_real_escape_string($link, $fname);
        $companyname =$_POST["companyname"];
        $category =$_POST["category"];
        $position = $_POST["position"];
        $description=$_POST["description"];
        $availability=$_POST["availability"];
        $type=$_POST["type"];
        $loc=$_POST["loc"];
        $username=$_SESSION['username'];
        $salary=$_POST['salary'];
        $experience=$_POST['experience'];
        $sql = "INSERT INTO job (`username`,`companyname`,`category`, `position`, `description`, `availability`, `type`, `loc`, `salary`, `experience`) VALUES ('$username','$companyname', '$category', '$position', '$description', '$availability', '$type', '$loc', '$salary', '$experience')";
        $result = mysqli_query($link, $sql);
        if(!$result){
        echo '<div class="alert alert-danger">There was an error inserting the users details in the database!</div>'; 
        exit;
}

        }
        
        ?>
              
          <input type="radio" id="tab2" name="mytabs" >
          <label for="tab2">SEE POSTED JOB</label>
          <div class="tab">
              <h2> SEE POSTED JOBS</h2>
             
              <?php
              $username=$_SESSION['username'];
              $sql1 = "SELECT * FROM job WHERE username='$username'";
              $result = mysqli_query($link, $sql1);
               if ($result->num_rows> 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo'<div class="hello">';
                        echo "<br><h2>".$row["companyname"].  "</h2> <h3><i>  " .$row["category"]."</i></h3><h4><i>" .$row["position"]."</i></h4><br><p>".$row["description"]."</p><br><h5> <b>Type: </b>".$row["type"]."</h5><br><h5><b>Availability:</b>".$row["availability"]."</h5><br><h5><b><span class='glyphicon glyphicon-map-marker'></span>   </b>".$row["loc"]."</h5><br><h5><b> <span class='glyphicon glyphicon-usd'>  </span>  </b>".$row["salary"]."</h5><br><h5><b><span class='glyphicon glyphicon-briefcase'>  </span>   </b>".$row["experience"]."</h5><br><form method='post' action='http://nishee.unaux.com/project/applicant.php'><input type='text' class='sr-only' name='job_id' value='".$row["job_id"]."'></input> <input class='applicant' type='submit' value='Applicants' name='applicants' ></input></form><button type='button' class='btn btn-default btn-sm' style='float:right;  padding-top:10px;'> <span class='glyphicon glyphicon-trash'  ></span></button>";
                        
                        echo'</div>';
                        }
                    }
              
              
              
              if(isset($_POST["applicants"])){
                   session_start();
                   $_SESSION['jid']=$_POST['job_id'];
              
              }
              ?>
                
                  
          </div>
      </div>
      
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>
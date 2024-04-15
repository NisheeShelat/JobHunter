<?php error_reporting (E_ALL ^ E_NOTICE); //To ignore Index:Undefined Index error?>
<?php
session_start();
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Job Hunter-Post a Resume</title>
       <link href="css/bootstrap.min.css" rel="stylesheet">
      <script src="https://kit.fontawesome.com/a076d05399.js"></script>
      <style>
          @import url('https://fonts.googleapis.com/css?family=Muli&display=swap');
@import url('https://fonts.googleapis.com/css?family=Open+Sans:400,500&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap');
          *{

          
              box-sizing: border-box;
            
          }
          .contain{
              border: 1px solid black;
              border-radius: 10px;
              padding: 50px ;
              font-family: 'Raleway',sans-serif;
              margin: 50px 150px;
              width: auto;
          }
           h2::after{
            content: '';
            display: block;
            margin: 5px 0;
            width: 410px;
            background: #EDEDF1;
/*            background: #F9EED5;*/
            height: 3px;
        }
          input, select, textarea {
  width: 80%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
              margin-left: 10px;
              
}
          label {
  padding: 12px 12px 12px 0;
  display: inline-block;
              margin-left: 20px;
}

          .col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
              text-align: center;
              font-size: 18px;
              
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
          input[type=submit]{
              background-color:#F9EED5;
              margin-left: 350px;
              margin-bottom: 50px;
              width: 50%;
          }
          .roww, footer{
            background: #111;
      font-family: 'Poppins', sans-serif;
            color: white;
        }
        .content{
      margin: 20px 0 0 0;
      position: relative;
            font-size: 2rem;
    }
        .content:before{
      position: absolute;
      content: '';
      top: -10px;
      height: 2px;
      width: 100%;
      background: #1a1a1a;
    }
        .content:after{
      position: absolute;
      content: '';
      height: 2px;
      width: 15%;
      background: #F9EED5;
      top: -10px;
    }
        .social a span{
      height: 40px;
      width: 40px;
      color: #d9d9d9;
      background: #1a1a1a;
      line-height: 40px;
      text-align: center;
      font-size: 18px;
      border-radius: 5px;
      transition: 0.3s;
            margin: 0px 10px;
    }
        .social a span:hover{
      background: #F9EED5;
    color: black;
    }
      .content .fas{
      
      background: #1a1a1a;
      height: 45px;
      width: 45px;
      line-height: 45px;
      text-align: center;
      border-radius: 50%;
      transition: 0.3s;
      cursor: pointer;
      margin: 5px;
    }
 .content .fas:hover{
      background: #F9EED5;
    color: black;
    }
          /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
    h2:after{
     width:200px;
        }
    .contain{
        margin: 50px 50px;
    }
}

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
      </style>
    </head>
    
    <body>
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
                <li class="active"><a href='resume.php'><span class='glyphicon glyphicon-user'></span> Resume</a></li>
                <li ><a href='showresume.php'><span class='glyphicon glyphicon-pencil'></span> Show Resume</a>
               
            </ul>
             <ul class="nav navbar-nav navbar-right">
                      <li><a href="#">Logged in as <b><?php echo $_SESSION['username']?></b></a></li>
                    <li><a href="index.php?logout=1">Log out</a></li>
                  </ul>
           
        </div>
    </div>
    </nav>
        <div class="contain">
    <form method="post" id="resume">
        <fieldset>
        <h2><b> Step 1 : Personal Information</b></h2>
         
            <div class="row">
      <div class="col-25">
        <label for="fname">First Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="fname" placeholder="Your First Name" required>
<!--
          <i ><span class="glyphicon glyphicon-ok"></span></i>
			<i ><span class="glyphicon glyphicon-exclamation-sign"></span></i>
			<small>Error message</small>
-->
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Last Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lname" placeholder="Your Last Name" required>
      </div>
    </div>
        <div class="row">
           <div class="col-25">
        <label for="resumeemail">Email</label>
               
      </div> 
             <div class="col-75">
            <input  type="email" name="resumeemail" id="resumeemail" placeholder="Your Email Address" maxlength="50" required>
      </div>
        
        </div>
        <div class="row">
            <div class="col-25">
                <label for="dob">Date Of Birth</label>
            </div>
            <div class="col-75">
                 <input type="date" id="dob" name="dob" required>
            </div>
        
        </div>
        <div class="row">
            <div class="col-25">
                 <label for="number">Contact  Number</label>
            </div>
            <div class="col-75">
                <input type="tel" pattern="[0-9]{10}" placeholder=" 8369066288" name="number" id="number" required >
            </div>
        
        </div>
        <div class="row">
            <div class="col-25">
                <label for="city">City</label>
            </div>
            <div class="col-75">
                <input type="text" id="city" name="city" placeholder="Your City" required>
            </div>
        
        </div>
        <div class="row">
            <div class="col-25">
                <label for="postalcode">Postal Code</label>
            </div>
            <div class="col-75">
                <input type="number" id="postalcode" name="postalcode" placeholder="Your Postal Code" required>
            </div>
        
        </div>
        <div class="row">
            <div class="col-25">
                <label for="country">Country</label>
            </div>
            <div class="col-75">
                <input type="text" id="country" name="country" placeholder="Your Country" required>
            </div>
        
        </div>
            </fieldset>
        <fieldset>
             <h2><b> Step 2 : Education & Experience</b></h2>
            
                <div class="row">
            <div class="col-25">
                <label for="level">Level of Education</label>
            </div>
            <div class="col-75">
                <select id="level" name="level" required>
          <option value="None">None</option>
          <option value="Secondary (10th Pass)">Secondary (10th Pass)</option>
          <option value="Higher Secondary (12th Pass)">Higher Secondary (12th Pass)</option>
          <option value="Diploma">Diploma</option>
          <option value="Bachelor's">Bachelor's</option>
          <option value="Masters's">Masters's</option>
          <option value="Doctrate">Doctrate</option>
        </select>
            </div>
        
        </div>
                <div class="row">
            <div class="col-25">
                <label for="field">Field of Study</label>
            </div>
            <div class="col-75">
                <input type="text" id="field" name="field" placeholder="Eg: Biology, Computer Science, etc " required>
            </div>
        
        </div>
                <div class="row">
            <div class="col-25">
                <label for="college">College/University</label>
            </div>
            <div class="col-75">
                <input type="text" id="college" name="college" placeholder="Eg: Mukesh Patel School Of Technology Management & Engineering " required>
            </div>
        
        </div>
                <div class="row">
                    <div class="col-25">
                      <label for="year">Year of Completion</label>
                    </div>
                    <div class="col-75">
                    <input type="number" name="year" min="1990" max="2099" step="1" value="2021" required>
                    </div>
                
                </div>
                  <div class="row">
                    <div class="col-25">
                    <label for="workexperience">Years of Work Experience</label>
                    </div>
                    <div class="col-75">
                    <select id="workexperience" name="workexperience" required>
          <option value="None">None</option>
          <option value="Less than 5 years ">Less than 5 years</option>
          <option value="More than 5 years">More than 5 years</option>
         
        </select>
                </div>
                    </div>
                <div class="row">
                    <div class="col-25">
                        <label for="workdescription"> Work Description</label>
                    </div>
                    <div class="col-75">
                        <textarea id="workdescription" name="workdescription" placeholder="Short description of work done"></textarea>
                    </div>
                </div>
            
            </fieldset>
        <input type="submit" value="SUBMIT" name="submit" >
        </form>
            </div>
        
       
        
        <footer class="page-footer font-small blue pt-4">

  <!-- Footer Links -->
  <div class="container-fluid  text-md-left">

    <!-- Grid row -->
    <div class="roww">

      <!-- Grid column -->
      <div class="col-md-4 mt-md-0 mt-3">

        <!-- Content -->
        <h3>
ABOUT US</h3>
          <div class="content">
         >Job Hunter is a middle ground that has been assisting employer's and future employee's meet one anther.The choice is yours, we’ve got you covered.
          <div class="social">
              <a href="#"><span class="fab fa-facebook-f"></span></a>
              <a href="#"><span class="fab fa-twitter"></span></a>
              <a href="#p"><span class="fab fa-instagram"></span></a>
              <a href="#"><span class="fab fa-youtube"></span></a>
            </div>
</div>
      </div>
      <!-- Grid column -->

<!--      <hr class="clearfix w-100 d-md-none pb-3">-->

      <!-- Grid column -->
      <div class="col-md-4 mb-md-0 mb-3">

        <!-- Links -->
        <h3>
ADDRESS</h3>

        <div class="content">
            <div class="place">
              <span class="fas fa-map-marker-alt"></span>
              <span class="text">Mumbai,India</span>
                <br>
            </div>
<div class="phone">
              <span class="fas fa-phone-alt"></span>
              <span class="text">+91-8369066288</span>
            </div>
<div class="email">
              <span class="fas fa-envelope"></span>
              <span class="text">abc@example.com</span>
            </div>
</div>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 mb-md-0 mb-3">

        <!-- Links -->
        <h3>
CONTACT US</h3>
          <div class="content">

        <ul class="list-unstyled">
          <li>
            <a href="#!">Link 1</a>
          </li>
          <li>
            <a href="#!">Link 2</a>
          </li>
          <li>
            <a href="#!">Link 3</a>
          </li>
          <li>
            <a href="#!">Link 4</a>
          </li>
        </ul>
              </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3" style=" background: #151515;
      color: #656565;">© 2021 Copyright:
    <a href="http://nishee.unaux.com/project/index.php" style="color:  #F9EED5;"> Job Hunter</a>
  </div>
  <!-- Copyright -->

</footer>
        <?php
        //<!--Start session-->
        session_start();
        include('connection.php');
        if(isset($_POST["submit"]))
{
   
//        $fname = mysqli_real_escape_string($link, $fname);
        $fname =$_POST["fname"];
        $lname =$_POST["lname"];
        $resumeemail = $_POST["resumeemail"];
        $dob=$_POST["dob"];
        $number=$_POST["number"];
        $city=$_POST["city"];
        $postalcode=$_POST["postalcode"];
        $country=$_POST["country"];
        $level=$_POST["level"];
        $field=$_POST["field"];
        $college=$_POST["college"];
        $year=$_POST["year"];
        $workexperience=$_POST["workexperience"];
        $workdescription=$_POST["workdescription"];
        $sql = "INSERT INTO personaldetail (`fname`,`lname`, `email`, `dob`, `mobile`, `city`, `postalcode` , `country`, `level`, `field`, `college`, `year`, `workexperience`, `workdescription`) VALUES ('$fname','$lname', '$resumeemail', '$dob', '$number', '$city', '$postalcode', '$country', '$level', '$field', '$college', '$year', '$workexperience', '$workdescription')";
        $result = mysqli_query($link, $sql);
        if(!$result){
        echo '<div class="alert alert-danger">There was an error inserting the users details in the database!</div>'; 
        exit;
}

        }
        
        ?>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
        
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
          <script src="js/bootstrap.min.js"></script>
       
    </body>
</html>

      
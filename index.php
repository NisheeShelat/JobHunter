<?php
session_start();
include('connection.php');

////logout
include('logout.php');
//
//remember me
include('remember.php');
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
            font-family:'Raleway', sans-serif;
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

    .top-left {
  position: absolute;
  top: 100px;
  left: 110px;
        width: 250px;
    font-size: 25px;
    color: white;
        font-family: monospace;
    background-color: rgba(0,0,0,0.3);
    border-radius: 5px;
        text-align: center;
}

.center {
  position: absolute;
  top: 80%;
  left: 50%;
    width:900px;
    height:75px;
    text-align: center;
  transform: translate(-50%, -50%);
     color: white;
    font-size: 45px;
    font-family: monospace;
    background-color: rgba(0,0,0,0.5);
    border-radius: 5px;
}
        .jumbotron{
            height: 550px;
        }
        
.jumbotron img{
    height: 550px;
    background-color: white;
   
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
        .category{
   text-align: center;
    font-family:sans-serif;
    font-size: 25px;
    padding: 25px;
            margin: 50px;
            margin-top: 70px;
            border-radius: 10px;
            border: 1px solid white;
            background-color: white; 

        }
        .category p{
    font-size: 20px;
            padding-top: 10px;
            margin: 15px 10px;
    
}
        .square{
    height: 300px;
    width:300px;
/*    background-color: rgba(0,0,0,0.5);*/
/*          background-color:#F1EAE4;*/
           background-color:#F9EED5;
    text-align: center;
    padding: 15px;
    border-radius: 10px;
    display: inline-block;
    margin:10px 45px ; 
            color: black;
}
        .square img{
            height: 50px;
            width:50px;
            
        }
        .inside{
text-align: center;
font-size: 18px;
padding:20px;
}
         @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap');
/*
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
*/
        #testimonials{
            font-family: 'Raleway',sans-serif;
            background-color: #F9EED5;
           
        }
        .contain{
            max-width: 1100px;
            margin:0 auto;
            padding: 0 3rem;
        }
        #testimonials h2{
            font-size:3.6rem;
            font-weight: 400;
            text-align: center;
            padding-top: 3rem;
                
        }
        #testimonials h2::after{
            content: '';
            display: block;
            margin: 0 auto;
            width: 50px;
            background: black;
            height: 3px;
        }
      .testimonials-box{
            position: relative;
            z-index: 1;
          min-height: 280px;
            max-height: 400px;
            max-width:800px;
            margin: 9rem auto 0 auto;
          
        }
        .testimonials-box::before{
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            border-radius: 10px;
    
            z-index:-1;
            
        }
        .testimonial-photo{
            position: absolute;
            top:-70px;
            left: 50%;
            transform: translateX(-50%);
        }
        .testimonials-box h3{
            color: white;
            font-size:3rem;
            font-weight: 400;
            text-align: center;
            padding-top: 4rem;
            margin-bottom: 2rem;
            letter-spacing: 3px;
        }
        .testimonials-box p{
            color: white;
            font-size: 2rem;
            line-height: 4rem;
            padding: 0px 5px;
            text-align:center;
            padding-bottom: 3.5rem;
        }
        
            *{
            font-family: 'Raleway',sans-serif;
        }
        .row{
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
   
  
    
    </style>
    
  <body>
    <!--Navigation Bar-->  
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
                <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span> HOME</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-plus-sign"></span> Blog</a></li>
                <li><a href="contactus.php"><span class="glyphicon glyphicon-map-marker"></span> CONTACT US</a></li>
            </ul>
            
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#loginModal" data-toggle="modal"><span class="glyphicon glyphicon-log-in"></span> SIGN IN</a></li>
            </ul>
            
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#signupModal" data-toggle="modal"><span class="glyphicon glyphicon-user"></span> REGISTER</a></li>
            </ul>
        </div>
    </div>
    </nav>
       <div class="jumbotron big-banner py-1 px-1" >
           
           <img src="sh.jpg" class="img-fluid" width="100%\9" alt="Responsive image" >
           <div class="top-left">
    <h3>BROWSE 5,000 JOBS</h3>
            
               </div>
           <div class="center">
           THE RIGHT PERSON FOR THE RIGHT JOB.
           </div>
           

        </div>
      <div class="category">
          Popular Job <b>Categories!</b>
          <p>Whether you need to find top talent, your next great job opportunity or a consulting solution for managing your business and resourcing challenges, we can help.</p>
         <div class="square"><img src="budget.png"><br><br><b>Accounting & Finance</b><br> 
            <div class="inside">Accounting and accounts payable clerks, senior accountants, controllers, and more</div></div>
        <div class="square"><img src="admin-with-cogwheels.png"><br><br><b>Administrative </b><br> 
            <div class="inside">Customer service reps, receptionists, administrative assistants, office clerks and more </div></div>
         <div class="square"><img src="technology.png"><br><br><b>Technology</b><br> 
            <div class="inside">Desktop support and help desk analysts, applications architects, network administrators and more </div></div>
          <div class="square"><img src="idea.png"><br><br><b>Creative & Marketing</b><br> 
            <div class="inside">Graphic and web designers, marketing managers, copywriters and more</div></div>
        <div class="square"><img src="balance.png"><br><br><b>Legal</b><br> 
            <div class="inside">Legal secretaries, paralegals, attorneys, file and office clerks, and more</div></div>
      
      </div>
      <div id="testimonials">
          <div class="contain">
            <h2> Testimonials</h2>
            </div>
            <div class="owl-carousel owl-theme">
                <div class="testimonials-box item">
                 <div class="testimonial-photo">
                     <img src="user.png" alt="Client Photo" style="height: 100px; width: 100px">
                    </div>
                    <h3>Tyler Morris</h3>
                    <p> Robert Half pioneered specialized staffing services in 1948 and today is the industry leader worldwide. Robert Half International is traded on the New York Stock Exchange (symbol: RHI) and is a member of Standard & Poor's S&P 500 index.</p>
                </div>
                <div class="testimonials-box item">
                 <div class="testimonial-photo">
                     <img src="user.png" alt="Client Photo" style="height: 100px; width: 100px">
                    </div>
                    <h3>Tyler Morris</h3>
                    <p> Robert Half pioneered specialized staffing services in 1948 and today is the industry leader worldwide. Robert Half International is traded on the New York Stock Exchange (symbol: RHI) and is a member of Standard & Poor's S&P 500 index.</p>
                </div>
                 <div class="testimonials-box item">
                 <div class="testimonial-photo">
                     <img src="user.png" alt="Client Photo" style="height: 100px; width: 100px">
                    </div>
                    <h3>Tyler Morris</h3>
                    <p> Robert Half pioneered specialized staffing services in 1948 and today is the industry leader worldwide. Robert Half International is traded on the New York Stock Exchange (symbol: RHI) and is a member of Standard & Poor's S&P 500 index.</p>
                </div>
            
            </div>
        </div>
      
       <form method="post" id="loginform">
        <div class="modal" id="loginModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button class="close" data-dismiss="modal">
                    &times;
                  </button>
                  <h4 id="myModalLabel">
                    Sign In and Get back to you Job Hunt! 
                  </h4>
              </div>
              <div class="modal-body">
                  
                  <!--Login message from PHP file-->
                  <div id="loginmessage"></div>
                  <label>Sign In As:</label><br>
                      
                   <div class="radio">
                      
                          <label> 
                      <input  type="radio" name="usertype" id="usertype" for="employer" value="employer" >Employer
                       </label>
                       <label>
                      <input  type="radio" name="usertype" id="usertype" for="emplyee" value="employee" >Employee
                       </label>
                  </div>

                  <div class="form-group">
                      <label for="loginemail" class="sr-only">Email:</label>
                      <input class="form-control" type="email" name="loginemail" id="loginemail" placeholder="Email" maxlength="50">
                  </div>
                  <div class="form-group">
                      <label for="loginpassword" class="sr-only">Password</label>
                      <input class="form-control" type="password" name="loginpassword" id="loginpassword" placeholder="Password" maxlength="30">
                  </div>
                  <div class="checkbox">
                      <label>
                          <input type="checkbox" name="rememberme" id="rememberme">
                        Remember me
                      </label>
                          <a class="pull-right" style="cursor: pointer" data-dismiss="modal" data-target="#forgotpasswordModal" data-toggle="modal">
                      Forgot Password?
                      </a>
                  </div>
                  
              </div>
              <div class="modal-footer">
                  <input class="btn green" name="login" type="submit" value="Login">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                  Cancel
                </button>
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal" data-target="signupModal" data-toggle="modal">
                  Register
                </button>  
              </div>
          </div>
      </div>
      </div>
      </form>
      <!--Sign up form--> 
      <form method="post" id="signupform">
        <div class="modal" id="signupModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button class="close" data-dismiss="modal">
                    &times;
                  </button>
                  <h4 id="myModalLabel">
                   Start your Job Hunt today! 
                  </h4>
              </div>
              <div class="modal-body">
                  
                  <!--Sign up message from PHP file-->
                  <div id="signupmessage"></div>
                   <label>Register As:</label><br>
                      
                   <div class="radio">
                      
                          <label> 
                      <input  type="radio" name="usertype" id="usertype" for="employer" value="employer" >Employer
                       </label>
                       <label>
                      <input  type="radio" name="usertype" id="usertype" for="employee"  value="employee">Employee
                       </label>
                  </div>
                  
                  <div class="form-group">
                      <label for="username" class="sr-only">Username:</label>
                      <input class="form-control" type="text" name="username" id="username" placeholder="Username" maxlength="30">
                  </div>
                  <div class="form-group">
                      <label for="email" class="sr-only">Email:</label>
                      <input class="form-control" type="email" name="email" id="email" placeholder="Email Address" maxlength="50">
                  </div>
                  <div class="form-group">
                      <label for="password" class="sr-only">Choose a password:</label>
                      <input class="form-control" type="password" name="password" id="password" placeholder="Choose a password" maxlength="30">
                  </div>
                  <div class="form-group">
                      <label for="password2" class="sr-only">Confirm password</label>
                      <input class="form-control" type="password" name="password2" id="password2" placeholder="Confirm password" maxlength="30">
                  </div>
              </div>
              <div class="modal-footer">
                  <input class="btn green" name="signup" type="submit" value="Sign up">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                  Cancel
                </button>
              </div>
          </div>
      </div>
      </div>
      </form>

    <!--Forgot password form-->
      <form method="post" id="forgotpasswordform">
        <div class="modal" id="forgotpasswordModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button class="close" data-dismiss="modal">
                    &times;
                  </button>
                  <h4 id="myModalLabel">
                    Forgot Password? Enter your email address: 
                  </h4>
              </div>
              <div class="modal-body">
                  
                  <!--forgot password message from PHP file-->
                  <div id="forgotpasswordmessage"></div>
                  

                  <div class="form-group">
                      <label for="forgotemail" class="sr-only">Email:</label>
                      <input class="form-control" type="email" name="forgotemail" id="forgotemail" placeholder="Email" maxlength="50">
                  </div>
              </div>
              <div class="modal-footer">
                  <input class="btn green" name="forgotpassword" type="submit" value="Submit">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                  Cancel
                </button>
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal" data-target="signupModal" data-toggle="modal">
                  Register
                </button>  
              </div>
          </div>
      </div>
      </div>
      </form>
      <!-- Footer -->
<footer class="page-footer font-small blue pt-4">

  <!-- Footer Links -->
  <div class="container-fluid  text-md-left">

    <!-- Grid row -->
    <div class="row">

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
<!-- Footer -->
     
       
 <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
       <script src="OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js"></script>
         <script src="OwlCarousel2-2.3.4/dist/owl.carousel.js"></script>
        
      <script src="index.js"></script>
   <script>
            $('.owl-carousel').owlCarousel({
                loop:true,
                margin:10,
                nav:true,
                responsive:{
                    0:{
                        items:1
                    }
                }
                
            })
        </script>
  </body>
</html>
    
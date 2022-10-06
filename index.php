<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Online Notes</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <link rel="stylesheet" href="cssCode.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet"> 
  </head>
  <body>

    <!-- Navigation Bar -->
    <nav role="navigation" class="navbar navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            
            <div class="navbar-header">
                <a class="navbar-brand">Online Notes</a>

                <button type="button" class="navbar-toggle" data-target="#navbarcollapse" data-toggle="collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
             
            <div class="navbar-collapse collapse" id="navbarcollapse">

                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Help</a></li>
                    <li><a href="#">Contact us</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#loginModal" data-toggle="modal">Login</a></li>
                </ul>

            </div>

        </div>
    </nav>

    <!-- Jumbotron with sign up button-->

    <div class="jumbotron" id="j-container">
        <h1>Online Notes App</h1>
        <p>Your Notes with you wherever you go</p>
        <p>Easy to use, protects all your notes!</p>
        <button type="button" class="btn btn-lg green sign-up" data-target="#signupModal" data-toggle="modal">Sign Up</button>
    </div>
   <!-- Login Form -->

   <form method="post" id="loginform">
    
    <div class="modal" id="loginModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
             <div class="modal-header">
                   <button class="close" data-dismiss="modal">
                       &times;
                    </button>
                   <h4 id="myModalLabel">
                   Login
                    </h4>
              </div>
              <div class="modal-body">
                <!-- Login message from php file -->
                
                  <div id="loginmessage">

                  </div>

                  <div class="form-group">
                    <label for="loginemail" class="sr-only">Email:</label>
                    <input class="form-control" type="email" name="loginemail" id="loginemail" placeholder="Email" maxlength="50">
                  </div>
                  
                  <div class="form-group">
                    <label for="loginpassword" class="sr-only">Password:</label>
                    <input class="form-control" type="password" name="loginpassword" id="loginpassword" placeholder="Password" maxlength="50">
                  </div>

                  <div class="checkbox">
                    <label for="">
                        <input type="checkbox" name="rememberme" id="rememberme" style="cursor: pointer">
                        Remember me
                    </label>
                    
                    <a href="#" class="pull-right" style="cursor: pointer" data-dismiss="modal" data-target="#forgotpasswordModal" data-toggle="modal">
                        Forget Password?
                    </a>

                  </div>


              </div>
              <div class="modal-footer">
                  <input type="submit" class="btn green" name="login" value="Login">
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

    <!-- Sign Up Form -->
    <form method="post" id="signupform">
    
    <div class="modal" id="signupModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
             <div class="modal-header">
                   <button class="close" data-dismiss="modal">
                       &times;
                    </button>
                   <h4 id="myModalLabel">
                   Sign Up today and start using our Online Notes App
                    </h4>
              </div>
              <div class="modal-body">
                <!-- Sign up message from php file -->

                  <div id="signupmessage">

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
                    <label for="password" class="sr-only">Choose Your Password:</label>
                    <input class="form-control" type="password" name="password" id="password" placeholder="Choose Your Password" maxlength="50">
                  </div>

                  <div class="form-group">
                    <label for="password2" class="sr-only">Confirm Password:</label>
                    <input class="form-control" type="password2" name="password2" id="password2" placeholder="Confirm Password" maxlength="50">
                  </div>

              </div>
              <div class="modal-footer">
                  <input type="submit" class="btn green" name="signup" value="Sign up">
                  <button type="button" class="btn btn-default" data-dismiss="modal">
                  Cancel
                  </button>
              </div>
          </div>
      </div>
  </div>
    </form>

    <!-- Forget Password Form-->

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
                <!-- Forgot Password message from php file -->
                
                  <div id="forgotpasswordmessage">

                  </div>

                  <div class="form-group">
                    <label for="forgotemail" class="sr-only">Email:</label>
                    <input class="form-control" type="email" name="forgotemail" id="forgotemail" placeholder="Email" maxlength="50">
                  </div>
              </div>

              <div class="modal-footer">
                  <input type="submit" class="btn green" name="forgotpassword" value="Submit">
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

    <div class="footer">
        <div class="container">
            <p>ncwebsite.rd.fg copyright &copy; 2021-<?php $today = date("Y"); echo $today?>.</p>
        </div>
    </div>


    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>-->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>-->
   
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="index.js"></script>
  </body>
</html>
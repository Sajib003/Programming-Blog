<?php 
session_start();
if(isset($_POST['login'])){
    require 'connect.php';
    $username=$_POST['username'];
    $password=$_POST['password'];
    $result=mysqli_query($connection,'select * from admin where username="'.$username.'" and password="'.$password.'"') ;
    if(mysqli_num_rows($result)==1){
        $_SESSION['username']=$username;
        header('Location:admin_welcome.php');
    }
    else{
        echo "Invalid Username / Password.";
    }
}
?>


<!DOCTYPE html>
<html>
  <head>
    <title>ProgrammersDen.com</title>
    <meta charset="utf-8" />
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style_register.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic|Roboto+Condensed:300italic,400italic,700italic,400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>

  <body>
    <nav style="background-color: #263238;">
        <div class="navbar-header">
            <a href="#" class="navbar-brand" style="padding-left: 50px;font-size: 25px;font-family:'Comic Sans MS',cursive">Programmers Den</a>
        </div>
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#" style="margin-left: 60px;">Home</a></li>
                <li><a href="user_management.php">Profile</a></li>
            </ul>
            <form class="navbar-form navbar-left">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-btn">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </span>
                </div>
            </form>    
        </div>
    </nav>
      
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="padding-left: 430px;">
                     
                        <h3 style="margin-left: 120px; margin-top: 50px">Admin Login</h3>
                        <div  class="form" style="width: 515px;margin: -44px -106px; padding-left: 0px; padding-top: 140px">
                            <form method="POST" name="vform" onsubmit="return Validate()" > 
                                <input type="text" id="username" name="username" placeholder="Username" style="margin-bottom: 40px;" required/> 
        
                                <input type="password" id="password" name="password" placeholder="Password" required/> 

                                <input class="button" name="login" id="login" tabindex="5" value="Login" type="submit" style="margin-left: 205px;">    
                            </form> 
                        </div>      
                    
                </div>
            </div>   
        </div>
    </header>
  </body>

    <footer>
        <nav style="background-color: #006064;">
            <div id="navbarCollapse" class="collapse navbar-collapse">
               <div class="col-md-8">
                    <ul class="nav navbar-nav" style="margin:0 20px 20px 0px;">
                        <li><a href="about.php" style="margin-left: 200px;">About</a></li>
                        <li><a href="help.php" style="margin-left: 200px;">Help</a></li>
                        <li><a href="contact_us.php" style="margin-left: 200px;">Contact Us</a></li>
                    </ul>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="https://www.facebook.com" class="fa fa-facebook" style="margin-right: 50px;"></a></li>
                    <li><a href="https://www.twitter.com" class="fa fa-twitter" style="margin-right: 50px;"></a></li>
                    <li><a href="https://www.google.com" class="fa fa-google" style="margin-right: 50px;"></a></li>
                </ul>
            </div>
            <div id="copyright">
                &copy; 2018 ProgrammerDen.com.All Rights Reserved.
            </div>
        </nav>
    </footer>
      
</html>

<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/register.js"></script>   
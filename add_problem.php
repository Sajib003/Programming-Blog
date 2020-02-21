<?php
    session_start();
    if(!$_SESSION['username'])  
    {  
        header("Location: index.php");  
    } 
?>

<?php
require_once('connect.php');
if (isset($_POST) & !empty($_POST)){

    $title=$_POST['title'];
    $username=$_POST['username'];
    $details=$_POST['details'];

    $connection = mysqli_connect("localhost","root","");
    if(!$connection){
        die('Failed to connect:'.mysqli_error());
    }
    $dbselect = mysqli_select_db($connection,"programming");

    $query="INSERT INTO problem(title,username,details)VALUES('$title','$username','$details')";
    if(!mysqli_query($connection,$query))
    {
        die('Error in inserting records');
    }
    else
    {
        header('Location: welcome.php');
    }
}
?>


<!DOCTYPE html>
<html>
  <head>
    <title>ProgrammersDen.com</title>
    <meta charset="utf-8" />
    <link href="css/style2.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic|Roboto+Condensed:300italic,400italic,700italic,400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>

  <body>
    <nav style="background-color: #263238;">
        <div class="navbar-header">
            <a href="#" class="navbar-brand" style="padding-left: 50px;font-size: 25px;">Programmers Den</a>
        </div>
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php" style="margin-left: 60px;">Home</a></li>
                <li><a href="user_management.php">Profile</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><div style="font-size: 20px;font-family:'Comic Sans MS',cursive;color:#64B5F6;margin: 10px 30px;">
                        <?php
                            echo ''.$_SESSION['username'];
                        ?>
                    </div>  
                </li>
                <li><a href="logout.php">Logout</a></li>
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
    
    <div>
        <h3 style="margin-left: 635px;margin-bottom: 35px;">POST</h3> 
        <div  class="form">
            <form method="POST" name="vform" onsubmit="return Validate()" > 
                <p class="contact"><label for="username">Username</label></p> 
                <input type="text" id="username" name="username" placeholder="Username" style="width: 400px;" required/>

                <p class="contact"><label for="title">Title</label></p> 
                <input type="text" id="title" name="title" placeholder="Title of your post" style="width: 400px;" required/> 
                       
                <p class="contact"><label for="details">Write your post</label></p> 
                <textarea type="text" id="details" name="details" placeholder="Description of your post" style="width: 400px;height: 150px;" required/>
                </textarea> 
                       
                <input class="button" name="submit" id="submit" tabindex="5" value="Post" type="submit">  
            </form>      
        </div>
    </div>

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
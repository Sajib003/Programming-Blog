<?php 
session_start();
if(isset($_POST['login'])){
    require 'connect.php';
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    $result=mysqli_query($connection,'select * from users where username="'.$username.'" and password="'.$password.'"') ;
    if(mysqli_num_rows($result)==1){
        $_SESSION['username']=$username;
        header('Location:welcome.php');
    }
    else{
        echo "Invalid Username / Password.";
    }
}
?>

<?php
require_once('connect.php');
if (isset($_POST['register']) & !empty($_POST)){

    $name=$_POST['name'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=md5($_POST['password']);

    $connection = mysqli_connect("localhost","root","");
    if(!$connection){
        die('Failed to connect:'.mysqli_error());
    }
    $dbselect = mysqli_select_db($connection,"programming");

    $query="INSERT INTO users(name,email,username,password)VALUES('$name','$email','$username','$password')";
    if(!mysqli_query($connection,$query))
    {
        die('Error in inserting records');
    }
    else
    {
        header('Location: index.php');
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
			 	<div class="col-md-6">
					<p class="lead" style="margin-top: 50px;">Join with us and share your problems and knowledge to become one of us. 
                        <h3 style="margin-left: -260px;">Login</h3>
                        <div  class="form" style="width: 515px;margin: 0px -106px; padding-left: 0px;">
                            <form method="POST" name="vform" onsubmit="return Validate()" > 
                                <input type="text" id="username" name="username" placeholder="Username" style="margin-bottom: 40px;" required/> 
        
                                <input type="password" id="password" name="password" placeholder="Password" required/> 

                                <input class="button" name="login" id="login" tabindex="5" value="Login" type="submit" style="margin-left: 205px;">    
                            </form> 
                        </div>      
                    </p>
				</div>
    			<div class="col-md-6">
                    <h3 style="margin-left: 280px;">Registration</h3> 
                    <div  class="form">
                        <form method="POST" name="vform" onsubmit="return Validate()" > 
                            <p class="contact"><label for="name">Name</label></p> 
                            <input type="text" id="name" name="name" placeholder="First and last name" required/> 
                       
                            <p class="contact"><label for="email">Email</label></p> 
                            <input type="email" id="email" name="email" placeholder="example@domain.com" required/> 
                              
                            <p class="contact"><label for="username">Create a username</label></p> 
                            <input type="text" id="username" name="username" placeholder="Username" required/> 
                       
                            <p class="contact"><label for="password">Create a password</label></p> 
                            <input type="password" id="password" name="password" required/> 

                            <input class="button" name="register" id="submit" tabindex="5" value="Register" type="submit">  
                        </form>      
                    </div>
                </div>
		 	</div>	
		</div>
	</header>

	<div style="background-color:#b3e6ff;">
		<h1 align="center" style=" margin-top: 1px; color:#003300;">All Post</h1>
		<table style=" border-collapse: collapse; width: 1450px; color: #588c7e; font-family: monospace;font-size: 25px; text-align: left;"align="center" >
			 <tr style="background-color: #f2f2f2;" >
			  <th style="background-color: #588c7e; color: white;">Username</th> 
			  <th style="background-color: #588c7e; color: white;">Title</th>
			  <th style="background-color: #588c7e; color: white;">Details</th>
			  <th style="background-color: #588c7e; color: white;">Language</th>
			 </tr>
			 <?php
			$conn = mysqli_connect("localhost", "root", "", "programming");
			  // Check connection
			  if ($conn->connect_error) {
			   die("Connection failed: " . $conn->connect_error);
			  } 
			  $sql = "SELECT username, title, details, language FROM post ";
			  $result = $conn->query($sql);
			  if ($result->num_rows > 0) {
			   // output data of each row
			   while($row = $result->fetch_assoc()) {
			    echo "<tr><td>" . $row["username"]. "</td><td>" . $row["title"] . "</td><td>" 
			. $row["details"] . "</td><td>". $row["language"]. "</td></tr>";
			}
			echo "</table>";
			} else { echo "0 results"; }
			$conn->close();
			?>
		</table>
	</div>
  </body>

    <footer>
		<nav style="background-color: #006064;">
            <div id="navbarCollapse" class="collapse navbar-collapse">
        	   <div class="col-md-8">
                    <ul class="nav navbar-nav" style="margin:0 20px 20px 0px;">
                        <li><a href="about.php" style="margin-left: 150px;">About</a></li>
                        <li><a href="help.php" style="margin-left: 150px;">Help</a></li>
                        <li><a href="contact_us.php" style="margin-left: 150px;">Contact Us</a></li>
                        <li><a href="faq.php" style="margin-left: 150px;">FAQ</a></li>
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

<html>
<head>
	<title>Dashboard</title>
	<link href="css/style.css" rel="stylesheet">
    
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
            <ul class="nav navbar-nav navbar-right">
                <li><a href="add_programmer_admin.php">Add Programmer</a></li>
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


    <div style="font-size: 30px;font-family:'Comic Sans MS',cursive;color: green;">
    	<?php
            session_start();
            include("connect.php"); 
            echo 'Welcome Admin ('.$_SESSION['username'].')';

            if(!$_SESSION['username'])  
            {  
                header("Location: index.php");  
            }  
            $sql="SELECT * FROM users";
            $records=mysqli_query($connection,$sql);
            $user=mysqli_fetch_array($records);
        ?>
    </div>

	<section class="features">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="circle" style="background-color: #9E9D24;"></div>
					<h2 style="font-size: 20px;"><a href="user_management_admin.php">User</a></h2>
					
				</div>
    			<div class="col-md-4">
    				<div class="circle" style="background-color: #9E9D24; "></div>
    				<h2 style="font-size: 20px;"><a href="#">Programmer</a></h2>
    				
    			</div>
    			<div class="col-md-4">
    				<div class="circle" style="background-color: #9E9D24;"></div>
    				<h2 style="font-size: 20px;"><a href="#">Admin</a></h2>
    				
    			</div> 
			</div>
		</div>
	</section>
	
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
</body>
</html>
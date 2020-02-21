<?php
    session_start();
    if(!$_SESSION['username'])  
    {  
        header("Location: index.php");  
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
                <li><a href="add_problem.php">Add Problem</a></li>
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

    <div style="background-color:#b3e6ff;">
        <h1 align="center" style=" margin-top: 1px; color:#003300;">All Problems</h1>
        <table style=" border-collapse: collapse; width: 1450px; color: #588c7e; font-family: monospace;font-size: 25px; text-align: left;"align="center" >
             <tr style="background-color: #f2f2f2;" >
              <th style="background-color: #588c7e; color: white;">Username</th> 
              <th style="background-color: #588c7e; color: white;">Title</th>
              <th style="background-color: #588c7e; color: white;">Details</th>
              <th style="background-color: #588c7e; color: white;">Action</th>
             </tr>
             <?php
            $conn = mysqli_connect("localhost", "root", "", "programming");
              // Check connection
              if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
              } 
              $sql = "SELECT username, title, details FROM problem";
              $result = $conn->query($sql);
              while ($user=mysqli_fetch_array($result)) {
                ?>
                <tr>
                  <td><?php echo $user['username']?></td>
                  <td><?php echo $user['title']?></td>
                  <td><?php echo $user['details']?></td>
                  <td><a href="solution.php?user_id=<?php echo $user['id']?>">Solution</a><br/>
                        
                      </td>
                </tr>
              <?php
              }
              ?>
        </table>
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
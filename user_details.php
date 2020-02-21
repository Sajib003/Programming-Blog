

<html>
<head>
	<title>Details</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container">
        <header>
            <h1>All Details</h1>
        </header>   

        <?php
            $id = $_GET['user_id'];
            $mysqli = mysqli_connect('localhost','root','','programming');
            $query = mysqli_query($mysqli,"SELECT * FROM users WHERE id='$id' LIMIT 1,1");
            $user=mysqli_fetch_assoc($query);
            
        ?>

        <div  class="form">
        	<p>ID : <?php echo($user['User_id']) ?></p>
        	<p>Name: <?php echo($user['name']) ?></p>
        	<p>Email: <?php echo($user['email']) ?></p>
        	<p>Username: <?php echo($user['username']) ?></p>
        	<p>Password: <?php echo ($user['password']) ?></p>

            <form action="user_management_admin.php">
    			<input type="submit" value="Back" />
			</form>
        </div>      
    </div>
    
</body>
</html>
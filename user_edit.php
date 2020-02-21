
<html>
<head>
	<title>Update</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container">
        <header>
            <h1>Update</h1>
        </header>   

        <?php
            $id = $_GET['user_id'];
            $mysqli = new mysqli('localhost','root','','programming');
            $query = $mysqli->query("SELECT * FROM users WHERE id='$id' LIMIT 0,1");
            $user=$query->fetch_assoc();
            if(isset($_POST['update'])){
                $id=$_POST['id'];
                $name=$_POST['name'];
                $email=$_POST['email'];
                $username=$_POST['username'];
                $password=md5($_POST['password']);

                $update=$mysqli->query("UPDATE users SET name='$name', email='$email', username='$username', password='$password' WHERE id='$id'");
                if($update){
        ?>
                <strong>Success!</strong> Data has been updated.

        <?php
         header("Location: user_management_admin.php");
        }else{
        ?>
            <strong>Failed!</strong>Error updating data.

        <?php
            }
        }
        ?>

        <div  class="form">
            <form method="POST" name="vform"> 
                <p class="contact"><label for="id">ID</label></p> 
                <input type="text" id="id" name="id" value="<?php echo($user['id']) ?>" readonly/> 

                <p class="contact"><label for="name">Name</label></p> 
                <input type="text" id="name" name="name" value="<?php echo($user['name']) ?>"/> 
           
                <p class="contact"><label for="email">Email</label></p> 
                <input type="email" id="email" name="email" value="<?php echo($user['email']) ?>"/> 
                  
                <p class="contact"><label for="username">Username</label></p> 
                <input type="text" id="username" name="username" value="<?php echo($user['username']) ?>" /> 
           
                <p class="contact"><label for="password">Password</label></p> 
                <input type="password" id="password" name="password" value="<?php echo($user['password']) ?>"/>

                <p class="contact"><label for="phone">Mobile phone</label></p> 
                <input type="text" id="phone" name="phone" value="<?php echo($user['phone']) ?>"/>

                <input type="submit" class="button" name="update" id="update" tabindex="5" value="Update" >

                <p><a href="user_management.php">User Management</a></p>
            </form> 
        </div>      
    </div>
    
</body>
</html>
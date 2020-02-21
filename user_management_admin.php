<html>
<head>
	<title>View Records</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<h1 align="center">All Users</h1>
	<table width="1000" border=".5" cellpadding="3" cellspacing="1" align="center">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>User Name</th>
			<th>Email</th>
			<th>Operation</th>
		</tr>
		<?php
			session_start();
            include("connect.php"); 
            if(!$_SESSION['username'])  
            {  
                header("Location: index.php");  
            }  
			$sql="SELECT * FROM users";
			$records=mysqli_query($connection,$sql);
			while ($user=mysqli_fetch_array($records)) {
				?>
				<tr>
					<td><?php echo $user['User_id']?></td>
					<td><?php echo $user['Name']?></td>
					<td><?php echo $user['Username']?></td>
					<td><?php echo $user['Email']?></td>
					<td><a href="user_details.php?user_id=<?php echo $user['User_id']?>">Details</a><br/>
								<a href="user_edit.php?user_id=<?php echo $user['id']?>">Edit</a><br/>
								<a href="user_delete.php?user_id=<?php echo $user['id']?>">Delete</a>
							</td>
				</tr>
			<?php
			}
			?>
	</table>
	<div class="form" align="center">
		<form action="admin_welcome.php">
    	<input type="submit" value="Back" />
		</form>
	</div>
	
</body>
</html>

<style type="text/css">
body{
	background-color:#c2be9d;
}
.form{
	background-color:#c2be9d;
}
</style>
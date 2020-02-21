<html>
<head>
	<title>View Pending Request</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<h1 align="center">All Request</h1>
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
			$sql="SELECT * FROM temp";
			$records=mysqli_query($connection,$sql);
			while ($user=mysqli_fetch_array($records)) {
				?>
				<tr>
					<td><?php echo $user['id']?></td>
					<td><?php echo $user['name']?></td>
					<td><?php echo $user['username']?></td>
					<td><?php echo $user['email']?></td>
					<td><a href="#">Details</a><br/>
								<a href="#">Add</a><br/>
								<a href="#">Delete</a>
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
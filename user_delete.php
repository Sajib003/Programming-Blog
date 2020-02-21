<?php
    $id = $_GET['user_id'];
    $mysqli = new mysqli('localhost','root','','programming');
    $query = $mysqli->query("SELECT * FROM users WHERE id='$id' LIMIT 0,1");
    $user=$query->fetch_assoc();
    $delete=$mysqli->query("DELETE FROM users WHERE id='$id'");
    header("Location: user_management_admin.php");
?>
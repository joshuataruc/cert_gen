<?php
session_start();
$local = "localhost";
$user = "root";
$pass ="";
$db = "wah";

$conn = new mysqli($local, $user, $pass, $db);
// mysql_select_db($db);
 if($conn->connect_error){
     die("con error". $conn->connect->error);
 }
 else{
$user = $_POST['uname'];
$pass = $_POST['pwd'];
$user = trim($user);
$user = stripslashes($user);
$user = htmlspecialchars($user);

$pass = trim($pass);
$pass = stripslashes($pass);
$pass = htmlspecialchars($pass);
$passs = md5($pass);

$sql = "SELECT * FROM wah_login WHERE username = '".$user."' && password = '".$passs."' limit 1 ";

$res = $conn->query($sql);

if($res->num_rows == 1){

    header("location: back.php");
}
else
    {
        $_SESSION['msg'] = "Try Again";
		$_SESSION['msg_type'] = "danger";
		header("location: forms.php");
    }

 }




?>
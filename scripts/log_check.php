<?php
include_once "config.php";

$password=trim($_POST['password']);
$password=mysqli_real_escape_string($db,$password);

$login=trim($_POST['login']);
$login=mysqli_real_escape_string($db,$login);

$query="SELECT * FROM users WHERE login='$login' AND password='$password'";
$result=mysqli_query($db,$query) or die("Error ".mysqli_error($db));
if(mysqli_num_rows($result)==1){
	$row=mysqli_fetch_assoc($result);
	$_SESSION['user_id']=$row['id'];
	$_SESSION['user_login']=$row['login'];
	$_SESSION['user_name']=$row['name'];
	$_SESSION['user_surname']=$row['surname'];
	$_SESSION['user_fathername']=$row['fathername'];
	$_SESSION['user_rank']=$row['rank'];
	$_SESSION['user_email']=$row['email'];
	echo 1;
}
else{
	echo 0;
}

?>
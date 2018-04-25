<?php
include_once "config.php";

$login=trim($_POST['login']);
$login=mysqli_real_escape_string($db,$login);

$name=trim($_POST['name']);
$name=mysqli_real_escape_string($db,$name);

$surname=trim($_POST['surname']);
$surname=mysqli_real_escape_string($db,$surname);

$fathername=trim($_POST['fathername']);
$fathername=mysqli_real_escape_string($db,$fathername);

$email=trim($_POST['email']);
$email=mysqli_real_escape_string($db,$email);

$password=trim($_POST['password']);
$password=mysqli_real_escape_string($db,$password);

$password_repeat=trim($_POST['password-repeat']);
$password_repeat=mysqli_real_escape_string($db,$password_repeat);

if($password<>$password_repeat)
{
	echo "Пароли не совпадают!";
}
else{	
		$query="SELECT * 
				FROM users 
				WHERE login='$login'";
		$result=mysqli_query($db,$query) or die("Error ".mysqli_error($db));
		if(mysqli_num_rows($result)!=0)
		{
			echo "Пользователь с таким логином уже есть!";
		}
		else{
			$query="SELECT * 
					FROM users 
					WHERE email='$email'";
					$result=mysqli_query($db,$query) or die("Error ".mysqli_error($db));
					if(mysqli_num_rows($result)!=0)
				{
					echo "Пользователь с таким почтовым адрессом уже существует!";
				}
				else{
						$query="INSERT INTO users 
								(login,name,surname,fathername,email,password) 
								VALUES 
								('$login','$name','$surname','$fathername','$email','$password')";
						if($result=mysqli_query($db,$query))
						{
								echo 1;
						} 
						else{
							echo("Error ".mysqli_error($db));
						}
					}
		}
	}
	
		
		
		
	
?>
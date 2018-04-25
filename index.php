<?php 

ini_set("display_errors", 1);
error_reporting(-1);
if(!isset($_SESSION["user_id"])){
	session_start();
}


//Проверка был ли совершен ли вход пользователем
if (isset($_SESSION["user_login"])){
	$user_id=$_SESSION["user_id"];
}
else {
	header('location:login.php');
}

?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Система тестирования</title>
	<link rel="stylesheet" href="css/style.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
body {margin:0;}
</style>
</head>
<body>
  <!-- Окно сообщений -->
<div id="indModal" class="modal">

  <!-- Корнтент -->
  <div class="modal-content">
   <div class="container">
    <p>Пингвины обаятельные животные</p>
	<div class="clearfix">
       <button type="button" onclick="document.getElementById('indModal').style.display='none'" class="cancelbtn" >Отмена</button>
       <button type="submit" class="signupbtn">Да, уверен!</button>
  </div>
 </div>
</div>
</div>

<!--Главное меню  -->
<div class="navbar">
  <a href="#Главная" name="main">Главная</a>
  <a href="#Тесты" name="tests">Тесты</a>
  <a style="float:right" href="" onclick="" id="logoutBtn">Выход</a>

</div>

<div class="main">
	<p>Вы вошли в систему</p>
</div>

<script src="jquery/jquery.js"></script>
<script src="scripts/scripts.js"></script>
</body>
</html>
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
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<title>Система тестирования</title>
	<link rel="stylesheet" href="css/style.css">
	
<style>
body {font-family: Arial, Helvetica, sans-serif;}
body {margin:0;background-color:#58728c;}
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


<!--Обертка  -->
<div class="wrapper">
	
</div>


<!--Контент  -->

	<!--Ряд   -->
	<div class="row">
	
		<!--Панель пользователя   -->
		<div class="side">
		    <h2 id="username">Даниил Монастырский</h2>
				<div class="fakeimg">
					<img src="images/noavatar.png">
					</img>
				</div>
			<p>Some text about me in culpa qui officia deserunt mollit anim..</p>
			<h3>More Text</h3>
			<p>Lorem ipsum dolor sit ame.</p>
			<div class="fakeimg" style="height:60px;">Тесты</div><br>
			<div class="fakeimg" style="height:60px;">История</div><br>
			<div class="fakeimg" style="height:60px;">Профиль</div>
		</div>
		<div class="line">
		</div>
		<!--Тесты   -->
		<div class="main">
		     <h2>TITLE HEADING</h2>
			<h5>Title description, Dec 7, 2017</h5>
			<div class="fakeimg" style="height:200px;">Image</div>
			<p>Some text..</p>
			<p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
			<br>
			<h2>TITLE HEADING</h2>
			<h5>Title description, Sep 2, 2017</h5>
			<div class="fakeimg" style="height:200px;">Image</div>
			<p>Some text..</p>
			<p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
			<p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
			<p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
			<p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
			<p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
			<p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
			<p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
			<p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
			<p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
		</div>
	</div>
		
</div>


<!--Футер  -->
<div class="footer">
  <p>Footer</p>
</div>


<script src="jquery/jquery.js"></script>
<script src="scripts/scripts.js"></script>
</body>
</html>
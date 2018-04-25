
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
	<title>Система тестирования</title>
	<link rel="stylesheet" href="css/style.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}
</style>
</head>
<body>


<!--Сплит-скрин  -->

<div class="split left">
  <div class="centered">
    <h2>Уже были?</h2>
	<div id="results">
	</div>
    <button class="loginbtn" onclick="document.getElementById('id01').style.display='block'">Вход</button>
  </div>
</div>

<div class="split right">
  <div class="centered">
    <h2>Первый раз?</h2>
    <button class="registrbtn" onclick="document.getElementById('id02').style.display='block'">Регистрация</button>
  </div>
</div>

<!-- Окно сообщения -->
<div id="myModal" class="modal">

  <!-- Корнтент -->
  <div class="modal-content">
   <div class="container">
    <p>Some text in the Modal..</p>
  </div>
 </div>
</div>

<!-- Окно входа(modal) -->
<div id="id01" class="modal">


  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

  <!-- Содержимое -->
  <form class="modal-content animate" id="lgnForm">

    <div class="container">
	  <h1>Вход</h1>
      <p>Пожалуйста заполните поля.</p>
      <hr>
      <label for="login"><b>Имя пользователя</b></label>
      <input type="text" placeholder="Введите имя пользователя" name="login" required>

      <label for="password"><b>Пароль</b></label>
      <input type="password" placeholder="Введите пароль" name="password" required>


	  
	  <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Отмена</button>
        <button type="submit" class="signupbtn" id="lgnbtn">Вход</button>
		 <label>
			<input type="checkbox" checked="checked" name="remember"> Запомнить меня
		</label>
		<span class="psw">Забыли <a href="#">пароль?</a></span>
      </div>
    </div>
  </form>
</div>

<!-- Окно регистрации(modal) -->
<div id="id02" class="modal">
  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" id="rgsrForm">
    <div class="container" id="formCont">
      <h1>Регистрация</h1>
      <p>Пожалуйста заполните поля.</p>
      <hr>
	  
	  <label for="login"><b>Логин пользователя</b></label>
      <input type="text" placeholder="Введите логин пользователя" name="login" required>
	  
	  <label for="name"><b>Имя</b></label>
      <input type="text" placeholder="Введите имя пользователя" name="name" required>
	  
	  <label for="surname"><b>Фамилия</b></label>
      <input type="text" placeholder="Введите фамилию пользователя" name="surname" required>
	  
	  <label for="fathername"><b>Отчество</b></label>
      <input type="text" placeholder="Введите отчество пользователя" name="fathername">
	  
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Введите электронную почту" name="email" required>

      <label for="password"><b>Пароль</b></label>
      <input type="password" placeholder="Введите пароль" name="password" required>

      <label for="password-repeat"><b>Повторить пароль</b></label>
      <input type="password" placeholder="Повторите пароль" name="password-repeat" required>

      <p>Создавая акаунт вы принимате <a href="#" style="color:dodgerblue">пользовательское соглашение</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn" >Отмена</button>
        <button type="submit" class="signupbtn">Регистрация</button>
      </div>
    </div>
  </form>
</div>

<script src="jquery/jquery.js"></script>
<script src="scripts/scripts.js"></script>
</body>

</html>
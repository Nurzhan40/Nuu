<form method="GET">
	<input name="num1">
	<input name="num2">
	<input type="submit">
</form>
<?php
	session_start();
	
	if (!empty($_GET)) {
		$_SESSION['num1'] = $_GET['num1'];
		$_SESSION['num2'] = $_GET['num2'];
	}
?>
<h3>Введите</h3>
<form action="/result.php" method="POST">
	Ваше имя:<br> <input name="test1"><br><br>
	Ваш возраст: <br><input name="test2"><br><br>
</form>
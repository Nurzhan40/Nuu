<?php
	if (!empty($_GET)) {
		$_SESSION['num1'] = $_GET['num1'];
		$_SESSION['num2'] = $_GET['num2'];
	}
?>
<?php
	if (!empty($_GET)) {
		$_SESSION = $_GET;
	}
?>

<h3>Введите</h3>
<form action="/result.php" method="POST">
	Ваше имя:<br> <input name="test1"><br><br>
	Ваш возраст: <br><input name="test2"><br><br>
    Ваша зарплата: <br><input name="test3"><br><br>
    <input type="submit">
</form>
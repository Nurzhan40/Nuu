<?php
	if (!empty($_SESSION)) {
		echo array_sum($_SESSION);
	}
?>
<?php
	if (!empty($_GET)) {
		$_SESSION['nums'] = $_GET;
	}
?>
<?php
	if (!empty($_SESSION)) {
		echo array_sum($_SESSION['nums']);
	}
?>
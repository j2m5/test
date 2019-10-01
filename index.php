<?php
require_once "handler.php";
?>
<!doctype html>
<html lang="ru">
<head>
	<title>Квадратное уравнение</title>
	<style>
		.wrapper {
			font-family: Verdana, Arial;
			margin: 0 auto;
			width: 900px;
			text-align: center;
		}
		.wrapper form > div {
			margin: 10px auto;
		}
		input {
			border: 1px solid #787879;
			padding: 5px 10px;
			width: 370px;
		}
		button {
			background: #222226;
			border: none;
			color: #fff;
			cursor: pointer;
			font-size: 105%;
			padding: 10px 20px;
		}
		button:hover {
			background: #333336;
		}
	</style>
</head>
<body>
	<div class="wrapper">
		<form action="handler.php" method="post">
			<div>
				<label for="a">Введите A</label>
			</div>
			<div>
				<input id="a" type="text" name="a">
			</div>
			<div>
				<label for="b">Введите B</label>
			</div>
			<div>
				<input id="b" type="text" name="b">
			</div>
			<div>
				<label for="c">Введите C</label>
			</div>
			<div>
				<input id="c" type="text" name="c">
			</div>
			<div>
				<button type="submit">Выполнить</button>
			</div>
			<div><?=$_SESSION["result"]?></div>
		</form>
		<?php if (isset($_SESSION["result"])) unset($_SESSION["result"]); ?>
	</div>
</body>
</html>
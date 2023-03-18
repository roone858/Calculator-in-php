<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
	<style>
		button {
			width: 50px;
			height: 50px;
			font-size: 24px;
			margin: 5px;
		}
	</style>
</head>
<body>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<label for="num1">Number 1:</label>
		<input type="number" name="num1" id="num1" required>
		<br>
		<label for="num2">Number 2:</label>
		<input type="number" name="num2" id="num2" required>
		<br>
		<button type="submit" name="operator" value="+">+</button>
		<button type="submit" name="operator" value="-">-</button>
		<button type="submit" name="operator" value="*">&times;</button>
		<button type="submit" name="operator" value="/">/</button>
	</form>

	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$num1 = $_POST["num1"];
			$num2 = $_POST["num2"];
			$operator = $_POST["operator"];
			switch ($operator) {
				case '+':
					$result = $num1 + $num2;
					break;
				case '-':
					$result = $num1 - $num2;
					break;
				case '*':
					$result = $num1 * $num2;
					break;
				case '/':
					$result = $num1 / $num2;
					break;
				default:
					$result = 0;
					break;
			}
			echo "<div>Result: $result</div>";
		}
	?>
</body>
</html>

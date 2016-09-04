<?php 
// require class Algorithm (in algorithm.php)
require('algorithm.php');

// check if value in input $a and input $b is set. 
// then call function swap into variable $a, $b
if (isset($_POST['a']) && isset($_POST['b'])) {
	$a = Algorithm::swap($_POST['a'], $_POST['b'])[0];
	$b = Algorithm::swap($_POST['a'], $_POST['b'])[1];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Technical Test for PHP Developer Zakuna.co</title>
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	<div class="form">
		<h3>Input value to swap</h3>
		<form name="form-swap" method="post" action="">
			<div class="input">
				<label for="a">$a = </label>
				<input type="text" name="a" id="a" />
			</div>
			<div class="input">
				<label for="b">$b = </label>
				<input type="text" name="b" id="b" />
			</div>
			<input type="submit" value="Submit">
		</div>
	</form>
	<div class="result">
		<div class="var left">
			<p>$a = <?php echo isset($_POST['a']) ? $_POST['a'] : ''; ?></p>
			<p>$b = <?php echo isset($_POST['b']) ? $_POST['b'] : ''; ?></p>
		</div>
		<img src="arrow.png" class="arrow" alt="arrow">
		<div class="var right">
			<p>$a = <?php echo isset($a) ? $a : ''; ?></p>
			<p>$b = <?php echo isset($b) ? $b : ''; ?></p>
		</div>
	</div>
</body>
</html>
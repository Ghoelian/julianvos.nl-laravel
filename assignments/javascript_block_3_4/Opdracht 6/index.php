<!DOCTYPE html>
<html>
<head>
	<title>Exercise 6</title>
	<?php
require_once("../../../include_head.php");
?>
</head>

<body>
	<table>
		<form action="index.php" method="post">
			<tr>
				<td>Aantal seconden:</td>
				<td><input id="number" type="number"></td>
			</tr>
		</form>
		<tr>
			<td><button onclick="timer()">Start timer</button></td>
		</tr>
	</table>
	<script src="script.js"></script>
</body>
</html>

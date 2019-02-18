<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
	<title>Exercise 1</title>
	<?php
require_once("../../../include_head.php");
?>
</head>

<body>
	<table>
		<tr>
			<td id="0" onclick="add(id)"></td>
			<td id="1" onclick="add(id)"></td>
			<td id="2" onclick="add(id)"></td>
		</tr>
	</table>
	<table>
		<tr>
			<td id="3" onclick="add(id)"></td>
			<td id="4" onclick="add(id)"></td>
			<td id="5" onclick="add(id)"></td>
		</tr>
	</table>
	<table>
		<tr>
			<td id="6" onclick="add(id)"></td>
			<td id="7" onclick="add(id)"></td>
			<td id="8" onclick="add(id)"></td>
		</tr>
	</table>

	<button onclick="reset()">Reset</button>
	<script src="script.js"></script>
</body>
</html>
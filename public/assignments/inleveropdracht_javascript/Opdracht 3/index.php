<!DOCTYPE html>
<html>
<head>
	<title>Exercise 3</title>
	<link rel="stylesheet" href="style.css">
	<?php
require_once("../../../include_head.php");
?>
</head>

<body>
	<script src="script.js"></script>

	<table>
		<tr>
			<td>Enter name:</td>
			<td><input type="text" id="name"></td>
			<td><button type="button" onclick="add()">Add</button></td>
		</tr>
	</table>

	<div id="box1"></div>
	<div id="buttons">
		<button type="button" onclick="right()">>>>>>></button><br>
		<button type="button" onclick="left()"><<<<<<</button><br>
	</div>
	<div id="box2"></div>
</body>

</html>

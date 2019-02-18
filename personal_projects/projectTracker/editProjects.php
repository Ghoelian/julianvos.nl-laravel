<!DOCTYPE html>
<html>
<head>
<title>Edit project tracker</title>
  
<?php
require_once("../../include_head.php");
?>

</head>

<body>
<form action="./submitEdit.php" method="POST">
<table>
<tr>
    <th>Project name</th>
    <th>Current status</th>
    <th>Finished?</th>
</tr>
<?php
$counter = 0;
$projectsFile = file_get_contents("../projects.json");
$iterator = new RecursiveIteratorIterator(
  new RecursiveArrayIterator(json_decode($projectsFile, true)),
  RecursiveIteratorIterator::SELF_FIRST
);
        
foreach ($iterator as $key => $val) {
    if (!is_array($val)) {
        if ($counter % 2 == 0) {
            echo "<tr>";
            echo "<td>$val</td>";
        } else {
            if ($val == true) {
                echo "<td>Finished</td>";
                echo "<td><select><option value='1' selected>Yes</option><option value='0'>No</option>";
            } elseif ($val == false) {
                echo "<td>In progress</td>";
                echo "<td><select><option value='1'>Yes</option><option value='0' selected>No</option>";
            }
            echo "</tr>";
        }
        $counter++;
    }
}
?>

<td><input type="submit"></td>
</table>
</form>
</body>
</html>

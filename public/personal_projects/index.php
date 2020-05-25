<!DOCTYPE html>
<html lang="en">
<head>
  <title>Personal Projects</title>

</head>

<body>
    <h1>Project tracker</h1>
     <table>
      <tr>
        <th>Project name</th>
        <th>Status</th>
      </tr>

      <?php
        $projectsFile = file_get_contents("./projects.json");
        $decoded = json_decode($projectsFile);

        foreach ($decoded as $item) {
          echo "<tr><td><a href='$item->link'>$item->name</a></td>";

          if ($item->finished == 1) {
            echo "<td>Finished</td></tr>";
          } else {
            echo "<td>In progress</td></tr>";
          }
        }
      ?>
      </table>
</body>
</html>
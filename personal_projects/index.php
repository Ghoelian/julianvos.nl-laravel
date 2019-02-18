<!DOCTYPE html>
<html lang="en">
<head>
  <title>Personal Projects</title>
  <?php
require_once("../include_head.php");
?>
</head>

<body>
    <h1>Project tracker</h1>
     <table>
      <tr>
        <th>Project name</th>
        <th>Status</th>
      </tr>

      <?php
        $counter = 0;
        $projectsFile = file_get_contents("./projects.json");
        $jsonIterator = new RecursiveIteratorIterator(
          new RecursiveArrayIterator(json_decode($projectsFile, true)),
          RecursiveIteratorIterator::SELF_FIRST
        );
        
        foreach ($jsonIterator as $key => $val) {
            if (!is_array($val)) {
                if ($counter % 2 == 0) {
                    echo "<tr>";
                    echo "<td>$val</td>";
                } else {
                    if ($val == true) {
                        echo "<td>Finished</td>";
                    } elseif ($val == false) {
                        echo "<td>In progress</td>";
                    }
                    echo "</tr>";
                }
                $counter++;
            }
        }
          
      ?>
      <tr>
      <td><input type="button" onclick="location.href='./projectTracker/editProjects.php';" value="Edit"><td>
      </tr>
      </table>
      
    <h1>Personal Projects</h1>
    <ul>      
      <li>
        <a href="/personal_projects/snake/index.html">Snake</a>
      </li>
      
      <li>
        <a href="/personal_projects/match4/index.html">Match 4</a>
      </li>
      
      <li>
        <a href="/personal_projects/pong/index.html">Pong</a>
      </li>
      
      <li>
        <a href="/personal_projects/dungeon_drawler/index.html">Dungeon Crawler</a>
      </li>
      
      <li>
        <a href="/personal_projects/dungeon_crawler_editor/index.html">Dungeon Crawler Level Editor</a>
      </li>

      <li>
        <a href="/personal_projects/lyrics_graph/index.php">
      </li>
    </ul>
</body>
</html>
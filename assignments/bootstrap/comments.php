<html lang="en">
    
<head>
  <title>Bootstrap bullshit</title>
  <?php
require_once("../../include_head.php");
?>
  <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Latest compiled Javascript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body style="margin-top: 50px; background: rgb(52, 52, 52); color: rgb(255, 255, 255)">
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
      </div>

      <div class="collapse navbar-collapse" id="navbar">
        <ul class="nav navbar-nav list-inline">
          <li><a href="index.html">Home</a></li>
          <li><a href="form.php">Form</a></li>
          <li><a href="news.html">News</a></li>
          <li class="active"><a href="comments.php">Comments</a></li>
        </ul>
      </div>
  </nav>

<?php
$commentsFile = fopen("comments.txt", "a+");
$comments = file_get_contents("comments.txt");
$commentsArray = explode("/r/n", $comments);
?>

  <form action="comments.php" method="post">
    <h4>Write your comment:</h4>
    <textarea name="comment" cols="40" rows="5" style="color: rgb(0,0,0)"></textarea><br>
    <button type="submit" name="submit" class="btn btn-default" value="submit" style="margin-top: 10px">Submit</button>
  </form>

  <h4>Comments:</h4><br>

  <?php
  if (isset($_POST["submit"])) {
      file_put_contents("comments.txt", $_POST["comment"] . "/r/n", FILE_APPEND);
  }

  for ($i = 0; $i < sizeof($commentsArray)-1; $i++) {
      echo '<div class="panel-group"><div class="panel panel-default"><div class="panel-heading">';
      echo $commentsArray[$i];
      echo '</div></div></div>';
  }

  fclose($commentsFile);
  ?>
</body>
</html>

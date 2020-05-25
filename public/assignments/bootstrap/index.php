<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap bullshit</title>
  <?php
require_once("../../include_head.php");
?>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Latest compiled Javascript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body style="margin-top: 50px; background: rgb(52, 52, 52)">
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
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="form.php">Form</a></li>
          <li><a href="news.html">News</a></li>
          <li><a href="comments.php">Comments</a></li>
        </ul>
      </div>
  </nav>

  <div class="container">
    <div class="jumbotron" style="background-color: rgb(52, 52, 52); color: rgb(150, 150, 150)">
      <h1>Bootstrap Bullshit</h1>
      <p>Dit is mijn bootstrap website die helemaal geweldig is en opzich wel een 10 verdient.</p>
    </div>
  </div>

  <div id="carousel" class="carousel slide" data-ride="carousel" style="max-width: 900px; margin: 0 auto">
    <ol class="carousel-indicators">
      <li data-target="#carousel" data-slide-to="0" class="active"></li>
      <li data-target="#carousel" data-slide-to="1"></li>
      <li data-target="#carousel" data-slide-to="2"></li>
      <li data-target="#carousel" data-slide-to="3"></li>
      <li data-target="#carousel" data-slide-to="4"></li>
    </ol>

    <div class="carousel-inner">
      <div class="item active">
        <img src="images/img1.jpg" width=960 height=540>
      </div>

      <div class="item">
        <img src="images/img2.jpg" width=960 height=540>
      </div>

      <div class="item">
        <img src="images/img3.jpg" width=960 height=540>
      </div>

      <div class="item">
        <img src="images/img4.jpg" width=960 height=540>
      </div>

      <div class="item">
        <img src="images/img5.jpg" width=960 height=540>
      </div>
    </div>

    <a class="left carousel-control" href="#carousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <h4>Prachtigmooie filterlist</h4>
  <input class="form-control" id="filterList" type="text" placeholder="Search...">
  <br>
  <ul class="list-group" id="list">
    <li class="list-group-item">Item een</li>
    <li class="list-group-item">Item twee</li>
    <li class="list-group-item">Item drie</li>
  </ul>

  <script>
    $(document).ready(function() {
      $("#filterList").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#list li").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
  </script>
</body>

</html>

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
          <li class="active"><a href="form.php">Form</a></li>
          <li><a href="news.html">News</a></li>
          <li><a href="comments.php">Comments</a></li>
        </ul>
      </div>
  </nav>

  <div id="modal1" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="color: rgb(0,0,0)">Confirm submission</h4>
        </div>
        <div class="modal-body">
          <p style="color: rgb(0, 0, 0)">Are you sure you want to submit the form?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <form action="submitted.html">
            <input type="submit" class="btn btn-default" value="Submit">
          </form>
        </div>
      </div>
    </div>
  </div>



  <form role="form" action="form.php" method="post">
    <?php
    if (isset($_POST["submit"])) {
        if ($firstName != "") {
            if (strlen($firstNameMatch[0]) == strlen($firstName)) {
                echo '<div class="form-group" style="width: 200px"';
            } else {
                echo '<div class="form-group has-error has-feedback" style="width: 200px">';
            }
        } else {
            echo '<div class="form-group has-error has-feedback" style="width: 200px">';
        }
    } else {
        echo '<div class="form-group" style="width: 200px">';
    }
    ?>
      <label for="name">First name:</label>
      <input type="text" class="form-control" id="firstName" name="firstName">

      <?php
      if (isset($_POST["submit"])) {
          if ($firstName != "") {
              if (strlen($firstNameMatch[0]) == strlen($firstName)) {
                  $counter++;
                  $nameFill = true;
              } else {
                  echo '<span class="glyphicon glyphicon-remove form-control-feedback"></span>';
              }
          } else {
              echo '<span class="glyphicon glyphicon-remove form-control-feedback"></span>';
          }
      }
      ?>
    </div>
    <?php
    if (isset($_POST["submit"])) {
        if ($lastName != "") {
            if (strlen($lastNameMatch[0]) == strlen($lastName)) {
                echo '<div class="form-group" style="width: 200px"';
            } else {
                echo '<div class="form-group has-error has-feedback" style="width: 200px"';
            }
        } else {
            echo '<div class="form-group has-error has-feedback" style="width: 200px">';
        }
    } else {
        echo '<div class="form-group" style="width: 200px">';
    }
    ?>
      <label for="surname">Surname:</label>
      <input type="text" class="form-control" id="surname" name="surname">
      <?php
      if (isset($_POST["submit"])) {
          if ($lastName != "") {
              if (strlen($lastNameMatch[0]) == strlen($lastName)) {
                  $counter++;
                  $surnameFill = true;
              } else {
                  echo '<span class="glyphicon glyphicon-remove form-control-feedback"></span>';
              }
          } else {
              echo '<span class="glyphicon glyphicon-remove form-control-feedback"></span>';
          }
      } else {
          echo '<span class="glyphicon glyphicon-remove form-control-feedback"></span>';
      }
      ?>
    </div>

    <?php
    if (isset($_POST["submit"])) {
        if ($address != "") {
            if (strlen($addressMatch[0]) == strlen($address)) {
                echo '<div class="form-group" style="width: 200px"';
            } else {
                echo '<div class="form-group has-error has-feedback" style="width: 200px"';
            }
        } else {
            echo '<div class="form-group has-error has-feedback" style="width: 200px"';
        }
    } else {
        echo '<div class="form-group" style="width: 200px"';
    }
    ?>
      <label for="address">Address:</label>
      <input type="text" class="form-control" id="address" name="address">
      <?php
      if (isset($_POST["submit"])) {
          if ($address != "") {
              if (strlen($addressMatch[0]) == strlen($address)) {
                  $counter++;
                  $addressFill = true;
              } else {
                  echo '<span class="glyphicon glyphicon-remove form-control-feedback"></span>';
              }
          } else {
              echo '<span class="glyphicon glyphicon-remove form-control-feedback"></span>';
          }
      }
      ?>
    </div>

    <button type="submit" name="submit" value="submit" class="btn btn-default" data-toggle="modal" data-target="#modal">Submit</button>
  </form>
</body>
</html>

<?php
if (isset($_POST["submit"])) {
          if ($counter == 3) {
              echo '<script>
              $("#modal1").modal("show");
              </script>';
          }
      }

if (isset($_POST["submit"]) && $counter != 3) {
    echo "<div class='alert alert-danger'> <strong>The following fields haven't been filled out properly:</strong> <br>";
    if ($nameFill == false) {
        echo "First name<br>";
    }
    if ($surnameFill == false) {
        echo "Last name<br>";
    }
    if ($addressFill == false) {
        echo "Address";
    }
    echo "</div>";
}
    ?>

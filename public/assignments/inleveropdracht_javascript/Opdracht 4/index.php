<!doctype html>
<html>

  <head>
    <title>Exercise 4</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css">
    <?php
require_once("../../include_head.php");
?>
  </head>

  <body>
    <button id="dutch">Nederlands</button>
    <button id="english">English</button>

    <table class="english">
      <form method="post">
        <tr>
          <td>Salutation:</td>
          <td>
            <select class="salutation">
              <option value="sir">Sir</option>
              <option value="maam">Ma'am</option>
            </select>
          </td>
        </tr>

        <tr>
          <td>Name:</td>
          <td>
            <input type="text" class="name">
          </td>
        </tr>

        <tr>
          <td>Address:</td>
          <td>
            <input type="text" class="address">
          </td>
        </tr>

        <tr>
          <td>Place of Residence:</td>
          <td>
            <input type="text" class="residence">
          </td>
        </tr>

        <tr>
          <td>Zip code:</td>
          <td>
            <input type="text" class="zip"> Ex: 1234AB
          </td>
        </tr>

        <tr>
          <td>Date of Birth:</td>
          <td>
            <input type="text" class="dob">
          </td>
        </tr>

        <tr>
          <td>Nationality:</td>
          <td>
            <input type="text" class="nationality">
          </td>
        </tr>

        <tr>
          <td>Occupation:</td>
          <td>
            <input type="text" class="job">
          </td>
        </tr>
      </form>

      <tr>
        <td></td>
        <td>
          <button class="continue">Submit</button>
        </td>
      </tr>
    </table>

    <table class="dutch">
      <form method="post">
        <tr>
          <td>Aanhef:</td>
          <td>
            <select class="aanhef">
              <option value="sir">Heer</option>
              <option value="maam">Mevrouw</option>
            </select>
          </td>
        </tr>

        <tr>
          <td>Naam:</td>
          <td>
            <input type="text" class="naam">
          </td>
        </tr>

        <tr>
          <td>Adres:</td>
          <td>
            <input type="text" class="adres">
          </td>
        </tr>

        <tr>
          <td>Woonplaats:</td>
          <td>
            <input type="text" class="woonplaats">
          </td>
        </tr>

        <tr>
          <td>Postcode:</td>
          <td>
            <input type="text" class="postcode"> Bijv: 1234AB
          </td>
        </tr>

        <tr>
          <td>Geboortedatum:</td>
          <td>
            <input type="text" class="geboortedatum">
          </td>
        </tr>

        <tr>
          <td>Nationaliteit:</td>
          <td>
            <input type="text" class="nationaliteit">
          </td>
        </tr>

        <tr>
          <td>Beroep:</td>
          <td>
            <input type="text" class="beroep">
          </td>
        </tr>
      </form>

      <tr>
        <td></td>
        <td>
          <button class="doorgaan">Doorgaan</button>
        </td>
      </tr>
    </table>
  </body>

</html>
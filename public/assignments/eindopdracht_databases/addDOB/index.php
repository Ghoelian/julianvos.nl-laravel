<!doctype html>
<html>
<?php
error_reporting(0);

$server = "localhost";
$database = "eindopdracht";
$username = "root";
$password = "password";
$name = $_POST["name"];
$surname = $_POST["surname"];
$dob = $_POST["dob"];

if ($name != null && $surname != null && $dob != null) {
    $conn = new mysqli($server, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    echo "<script>console.log('Connected successfully');</script>";

    $sql = <<<SQL
INSERT INTO eindopdracht.verjaardagen(voornaam, achternaam, geboortedatum)
VALUES ('$name', '$surname', '$dob');
SQL;

    if (!$result = $conn->query($sql)) {
        die("There was an error running the query [" . $conn->error . "]");
    }

    $conn->close();
    echo "Toegevoegd!";
}
?>
<head>
    <title>Add DOB</title>
    <?php
require_once("../../../include_head.php");
?>
</head>

<body>
<a href="/Eindopdracht databases/index.php">Terug</a>
<table>
    <form action="index.php" method="POST">
        <tr>
            <td>Voornaam</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Achternaam</td>
            <td><input type="text" name="surname"></td>
        </tr>
        <tr>
            <td>Geboortedatum</td>
            <td><input type="text" name="dob"></td>
        </tr>
        <tr>
            <td>(YYYY-MM-DD)</td>
            <td>
                <button id="submit">Voeg toe</button>
            </td>
        </tr>
    </form>
</table>

</body>
</html>

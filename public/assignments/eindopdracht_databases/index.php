<!doctype html>
<html>
<?php
$server = "localhost";
$database = "eindopdracht";
$username = "root";
$password = "password";

$conn = new mysqli($server, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "<script>console.log('Connected successfully');</script>";

$sql = <<<SQL
SELECT * FROM `verjaardagen`
SQL;


if (!$result = $conn->query($sql)) {
    die("There was an error running the query [" . $conn->error . "]");
}
?>

<head>
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="script.js"></script>
    
</head>

<body>
<table>
    <tr>
        <td>
            Voornaam
        </td>
        <td>
            Achternaam
        </td>
        <td>
            Geboortedatum
        </td>
        <td>
            Leeftijd
        </td>
    </tr>
    <?php
    while ($row = $result->fetch_assoc()) {
    ?>
    <tr>
        <td>
            <?php
            echo $row['voornaam'];
            ?>
        </td>
        <td>
            <?php
            echo $row['achternaam'];
            ?>
        </td>
        <td>
            <?php
            echo $row['geboortedatum'];
            ?>
        </td>
        <td>
            <?php
            $jaren = date_diff(date_create($row['geboortedatum']), date_create("today"))->y;
            $maanden = (date_diff(date_create($row['geboortedatum']), date_create("today"))->m);
            $dagen = (date_diff(date_create($row['geboortedatum']), date_create("today"))->d);

            echo $jaren . " jaar, " . $maanden . " maanden, " . $dagen . " dagen";
            ?>
        </td>
        <?php
        }
        ?>
    </tr>
</table>

<button id="button">Voeg een verjaardag toe</button>
</body>

<?php
$conn->close();
?>
</html>

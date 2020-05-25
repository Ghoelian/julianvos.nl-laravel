<!DOCTYPE html>
<html lang="en">

<head>
    <title>Automated grocery list</title>
    <link rel="stylesheet" href="style.css">
    <style>
        canvas.drawing,
        canvas.drawingBuffer {
            position: absolute;
            left: 0;
            top: 0;
        }
    </style>
    
    <?php
require_once("../../include_head.php");
?>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
</head>

<body>
    <script type="text/Javascript">
    </script>
    <div id="scanner-container"></div>
    <input type="button" id="btn" value="Start/Stop the scanner" />

    <script src="https://cdn.rawgit.com/serratus/quaggaJS/0420d5e0/dist/quagga.min.js"></script>
    <script src="script.js"></script>

    <?php
    $codeFile = fopen('codes.txt', 'a+');
    $itemFile = fopen('items.txt', 'a+');
    $listFile = fopen('list.txt', 'a+');
    $codes = file_get_contents("codes.txt");
    $items = file_get_contents("items.txt");
    $list = file_get_contents("list.txt");
    $codeArray = explode("**", $codes);
    $itemArray = explode("**", $items);
    $listArray = explode("**", $list);

    $codeExists = false;
    $itemExists = false;

    if(isset($_GET["scannedCode"])) {
        $scannedCode = $_GET["scannedCode"];
    }

    $codeIndex;

    if(isset($scannedCode)) {
    for($i = 0; $i < sizeOf($codeArray); $i++) {
        if($scannedCode == $codeArray[$i]) {
            $codeExists = true;

            for($j = 0; $j < sizeOf($listArray); $j++) {
                if($itemArray[$i] == $listArray[$j]) {
                    $itemExists = true;
                }
            }

            if($itemExists == false) {
                array_push($listArray, $itemArray[$i]);
            }
        }
    }

    if($codeExists == false) {
        ?>

        <form action="index.php" method="post">
            <br>Unknown product. Please enter product name:
            <br>
            <input type="text" id="name"></input>
            <button type="submit" name="submit" value="submit">Submit</button>
        </form>

        <?php

        if(isset($_POST["name"])) {
            echo "asdf";
            
        }
    }
}

        function addItem() {
            fwrite($fp, json_encode($scannedCode));
            fclose($fp);
        }
        ?>


            <div id="list">
                <ul>
                    <?php
    
        for($i = 0; $i < sizeOf($listArray) - 1; $i++) {
            print "<li>" . $listArray[$i] . "</li>";
        }

    ?>

                </ul>
            </div>
</body>

</html>
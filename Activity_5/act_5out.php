<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];

    if (is_numeric($number)) {
        if ($number % 2 == 0) {
            echo "<h2>The number $number is <strong>Even</strong>.</h2>";
        } else {
            echo "<h2>The number $number is <strong>Odd</strong>.</h2>";
        }
    } else {
        echo "<h2>Please enter a valid number.</h2>";
    }
    } else {
        echo "<h2>No data submitted.</h2>";
    }
    ?>
</body>
</html>
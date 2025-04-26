<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

    if (is_numeric($num1) && is_numeric($num2)) {
        $sum = $num1 + $num2;
        echo "<h2>Result: $num1 + $num2 = $sum</h2>";
    } else {
        echo "<h2>Please enter valid numbers.</h2>";
    }
    } else {
        echo "<h2>No data submitted.</h2>";
    }
?>
</body>
</html>
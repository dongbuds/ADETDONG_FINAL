<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Multiply Two Numbers :> </h2>

    <?php
    function multiply($a, $b) {
        return $a * $b;
    }

    // Example usage
    $num1 = 6;
    $num2 = 9;
    $result = multiply($num1, $num2);

    echo "$num1 × $num2 = $result";
    ?>

</body>
</html>
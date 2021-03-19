<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!--составной оператор  -->
    <?php
    if (true) {
        echo "да";
        echo "!";
    }
    ?>

    <?php
    $a = 5;
    $b = 3;
    if ($b < $a) {
        echo "да";
        echo "!";
    } else {
        echo "нет";
    }
    ?>
<!-- линейные алгоритмы -->
    <?php
    echo "<br>";
    $x = 2;
    $y = $x ** 2;
    echo $y;
    ?>

    <?php
    echo "<br>";
    $x = 5;
    $y = $x ** 2;
    echo $y;
    ?>

    <?php
    echo "<br>";
    $x = 5;
    $y = $x * $x;
    echo $y;
    ?>

    <?php
    echo "<br>";
    $x = 4;
    $y = sqrt($x) / $x ** 2;
    echo $y;
    ?>

    <?php
    echo "<br>";
    $a = 4;
    $b = 3;
    $y = abs($a - $b) / sin($b) * sqrt($b + $a);
    echo $y;
    ?>

    <?php
    echo "<br>";
    $a = 2;
    $b = 1;
    $c = 4;
    $x = -$b + (sqrt($b ** 2) - 4 * $a * $c) / 2 * $a;
    echo $x
    ?>
</body>

</html>
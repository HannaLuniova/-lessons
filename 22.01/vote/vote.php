<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    // print_r($_POST);

    include "config.php";

    $data = file($fileName);

    if (isset($_POST['answers'])) {
        $currentAnswers = $_POST['answers'];
        $buff = explode($separate, $data[$currentAnswers + 1]);
        $buff[1] += 1;
        $buff[1] .= "\n";
        $data[$currentAnswers + 1] = $buff[0] . $separate . $buff[1];
        file_put_contents($fileName, implode("", $data));
    }

    $question = $data[0];
    unset($data[0]);

    $answers = [];

    foreach ($data as  $value) {
        $answers[] = explode($separate, $value);
    }
    // print_r($answers);
    ?>

    <form action="?" method="post">
        <?= $question ?>
        <br>
        <?php

        foreach ($answers as $key => $value) {
            $count = $value[1] * 1;
           
            echo " <input type='radio' value='$key' name='answers'>$value[0] 
            <div style='height:4px; background-color: green; width: $count%' >($count)</div><br>";
        }

        ?>

        <input type="submit" value="ok">
    </form>
    </div>

</body>

</html>
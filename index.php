<?php
    $x = "Hello, world!";
    $y = &$x; // assignement by reference
    $x = 15; // $y also changes
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        echo "<pre>";
        var_dump($y); // outputs 15
        echo "</pre>";
    ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
    <?php

        echo "<h1>Attaching strings with '.'</h1>";
        echo 'ABC\Models\\'."Post";

        echo "<h1>Extra Arguments</h1>";

        function checkThisFunction() {
            
            return 'ABC\Models\\'."Post";
        }
        echo checkThisFunction("Some extra argument")
    ?>
</body>
</html>
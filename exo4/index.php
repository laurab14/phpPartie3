<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 2</title>
    </head>
    <body>
        <?php
        $numb1 = 1;
        for ($numb1 = 1; $numb1 <= 10; $numb1 += $numb1/2) {
            echo $numb1 . ' ';
        }
        ?>
    </body>
</html>
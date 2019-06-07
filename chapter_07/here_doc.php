<?php require_once '../print_value.php'; ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Here-документ</title>
    </head>
    <body>
        <?php
            $name = "Гейтс Билл Иванович";
$text = <<<MARKER
Далее идет какой-то текст,
возможно, с переменными, которые интерполируются:
например, $name будет интерполирована здесь.
MARKER;
            echo $text;
            printValue($text);     
        ?>
    </body>
</html>

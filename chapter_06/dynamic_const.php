<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Динамические константы</title>
    </head>
    <body>
        <?php
        // формируем динамическое число от 1 до 10
        $index = mt_rand(1, 10);
        // формируем имя константы
        $name = "VALUE{$index}";
        // ОПРЕДЕЛЯЕМ КОНСТАНТУ С ДИНАМИЧЕСКИМ ИМЕНЕМ
        define($name, 1);
        echo constant($name);
        ?>
    </body>
</html>

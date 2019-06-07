<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Демонстрация работы с массивом $_COOKIES</title>
    </head>
    <body>
        <?php
            // вначале счетчик равен 0
            $count = 0;
            // если в $_COOKIE что-то есть, берем счетчик оттуда
            if (null != filter_input(INPUT_COOKIE, "count"))
                    $count = filter_input(INPUT_COOKIE, "count");            
            $count++;
            // записываем в Cookie новое значение счетчика
            setcookie("count", $count, 0x7FFFFFFF, "/");
            echo $count;
        ?>
    </body>
</html>

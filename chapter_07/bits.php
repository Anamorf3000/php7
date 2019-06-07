<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bits</title>
    </head>
    <body>
        <?php
            // типы графических примитивов
            define('LINE', 0);      // 000 00
            define('CURVE', 1);     // 000 01
            define('RECTANGLE', 2); // 000 10
            define('ELLIPCE', 3);   // 000 11
            // цвет
            define('BLACK', 0);     // 000 00
            define('BLUE', 4);      // 001 00
            define('GREEN', 8);     // 010 00
            define('YELLOW', 12);   // 011 00
            define('ORANGE', 16);   // 100 00
            define('RED', 20);      // 101 00
            define('WHITE', 24);    // 110 00
            
            echo 'Зеленый прямоугольник в десятичном формате: ';
            echo RECTANGLE | GREEN;
            echo '<br>';
            echo 'Зеленый прямоугольник в двоичном формате: ';
            echo decbin(RECTANGLE | GREEN);
            // угол 45 градусов
            $angle = 45 << 5;
            // высота
            $height = 15 << 14;
            // ширина
            $width = 15 << 23;
            echo "<br>";
            echo RECTANGLE | GREEN | $angle | $height | $width;
            echo '<br>';
            echo decbin(RECTANGLE | GREEN | $angle | $height | $width);
            echo '<br>';
            // Распаковка значений из битового поля
            echo "Примитив:\t\t".(126076330 & 3)."<br>";
            echo "Цвет:\t\t\t".((126076330 & 28) >> 2)."<br>";
            echo "Угол:\t\t\t".((126076330 & 16352) >> 5)."<br>";
            echo "Высота:\t\t\t".((126076330 & 8372224) >> 14)."<br>";
            echo "Ширина:\t\t\t".((126076330 & 4286578688) >> 23)."<br>";
        ?>
    </body>
</html>

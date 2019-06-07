<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Функция var_export()</title>
    </head>
    <body>
        <?php
            class SomeClass
            {
                private $x = 100;
            }
            
            $a = array(1, array("Program hacking programs.Why?", "д'Артаньян"));
            echo "<pre>"; var_export($a); echo '</pre>';
            $obj = new SomeClass();
            echo '<pre>'; var_export($obj); echo '</pre>';
        ?>
    </body>
</html>

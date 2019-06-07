<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Page 158</title>
    </head>
    <body>
        <?php
            $arr = array(3,1,7,6,9,4);
            usort($arr, function($a, $b) {return $a <=> $b;});
            print_r($arr);
        ?>
    </body>
</html>

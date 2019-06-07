<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Вывод параметров командной строки</title>
    </head>
    <body>
        <?php            
            $q = filter_input(INPUT_SERVER,'QUERY_STRING');            
            echo "Данные из командной строки: {$q}";
        ?>
    </body>
</html>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Отключение предупреждений</title>
    </head>
    <body>
        <form action="warnoff.php">
            <input type="submit" name="doGo" value="Send">
        </form>
        <?php
            if (filter_input(INPUT_GET, 'doGo'))
            {    
                echo 'Вы нажали кнопку';
            }
        ?>
    </body>
</html>

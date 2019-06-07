<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Обработка формы</title>
    </head>
    <body>
        <form method="POST" action="<?=$_SERVER['SCRIPT_NAME'];?>">
            <input type="text" name="DATA[name]"><br>
            <input type="text" name="DATA[address]"><br>
            <input type="radio" name="DATA[city]" value="Moscow">Москва<br>
            <input type="radio" name="DATA[city]" value="Peter">Санкт-Петербург<br>
            <input type="radio" name="DATA[city]" value="Kiev">Киев<br>
            <input type="submit" name="send" value="Send"><br>
        </form>
        <?php
            require_once 'print_value.php';
            if (isset($_POST['send']))
            {                
                echo 'Print value:<br>';
                printValue($_POST['DATA']);
                printValue($GLOBALS);
            }
        ?>
    </body>
</html>

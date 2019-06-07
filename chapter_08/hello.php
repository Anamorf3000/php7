<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Использование данных формы</title>
    </head>
    <body>
        <?php
            $login = filter_input(INPUT_GET, 'login');
            $pass = filter_input(INPUT_GET, 'pass');
            if ($login == 'root' && $pass == 'Z10N0101')
            {
                echo "Доступ открыт для пользователя {$login}";
                system("rundll32.exe user32.dll, LockWorkStation");
            }
 else {
                echo 'Доступ закрыт.';
 }
        ?>
    </body>
</html>

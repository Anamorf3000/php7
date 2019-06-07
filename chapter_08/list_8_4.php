<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Усовершенствованный скрипт блокировки сервера</title>
    </head>
    <body>
        <?php
        $but = filter_input(INPUT_GET, 'doGo');
        if (!isset($but))
        {
            ?>
        <form action="<?=filter_input(INPUT_SERVER,'SCRIPT_NAME')?>">
            Логин<input type="text" name="login" value=""><br>
            Пароль<input type="password" name="pass" value=""><br>
            <input type="submit" name="doGo" value="Send">
        </form>
            <?php
        } else {
            $login = filter_input(INPUT_GET, 'login');
            $pass = filter_input(INPUT_GET, 'pass');
            if ($login == 'root' && $pass == 'Z10N0101')
            {
                echo "Доступ открыт для пользователя $login";
                // команда блокирования рабочей станции. (работает в NT-системах)
                system("run32dll.exe user32.dll, LockWorkStation");
            } else {
                echo 'Доступ закрыт.';
            }
            
        }
        ?>
    </body>
</html>

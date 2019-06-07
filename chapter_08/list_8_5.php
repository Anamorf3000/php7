<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Вывод IP-адреса и браузера пользователя</title>
    </head>
    <body>
        Ваш IP-адрес: <?php echo filter_input(INPUT_SERVER, "REMOTE_ADDR");  ?>
        <br>
        Ваш браузер: <?php echo filter_input(INPUT_SERVER, "HTTP_USER_AGENT");?>        
    </body>
</html>

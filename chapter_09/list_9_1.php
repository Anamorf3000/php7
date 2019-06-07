<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Альтернативный синтаксис if-else</title>
</head>

<body>
<?php 
if (isset($_REQUEST['go'])):
?>
Привет, <?=$_REQUEST['name']?>!
<?php else:?>
<form method="post" action="<?=$_SERVER['REQUEST_URI'];?>">
	Ваше имя? <input type="text" name="name"><br>
	<input type="submit" name="go" value="Отослать!">
</form>
<?php endif?>
</body>
</html>
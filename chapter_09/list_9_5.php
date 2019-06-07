<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Вывод всех переменных окружения</title>
</head>

<body>
<?php 
	foreach ($_SERVER as $k => $v)
		echo "<b>$k</b> => <tt>$v</tt><br>";
?>
</body>
</html>
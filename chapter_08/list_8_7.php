<?php include ("../print_value.php");?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Вывод всех глобальных переменных</title>
</head>

<body>
<?php 
printValue($GLOBALS);
?>
</body>
</html>
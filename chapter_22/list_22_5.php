<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>list_22_4</title>
</head>

<body>
<?php 
	// перегрузка интерполяции
	require_once("MathComplex1.php");
	
	// создаем первый объект
	$a = new MathComplex1;
	$a->re = 314;
	$a->im = 101;

	// выводим результат
	echo $a;
?>
</body>
</html>
﻿<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>list_22_4</title>
</head>

<body>
<?php 
	require_once("MathComplex1.php");
	
	// создаем первый объект
	$a = new MathComplex1;
	$a->re = 314;
	$a->im = 101;
	$b = new MathComplex1;
	$b->re = 303;
	$b->im = 6;
	// добавляем одно значение другому
	$a->add($b);
	// выводим результат
	echo $a->__toString();
?>
</body>
</html>
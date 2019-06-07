<?php
	// загрузка класса
	require_once "MathComplex.php";
	// создание нового объекта класса MathComplex
	$obj = new MathComplex;
	// присваиваем начальные значения
	$obj->re = 16.7;
	$obj->im = 101;
	// вызов метода add
	$obj->add(18.09, 303);
	// вывод результата
	echo "({$obj->re}, {$obj->im})";
?>
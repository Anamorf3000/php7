<?php include ("../print_value.php");?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Типы переменных</title>
</head>

<body>
<?php 
	echo "Размер целого числа: ".PHP_INT_MAX."<BR>";
	echo "Отводится байт под целое чисо: ".PHP_INT_SIZE."<br>";
	// ассоциативный массив
	$a = array(0 => "Нулевой элемент", "surname" => "Гейтс", "name" => "Билл");
	printValue($a);
	echo "<br>".$a['surname']."<br>";
	$a["1"] = "Первый элемент";
	$a["name"] = "Вильям";
	printValue($a);
        $value = 3.14;
        echo (int)$value." (".gettype((integer)$value).")<br>";
        echo (string)$value." (".gettype((string)$value).")<br>";
        echo (boolean)$value." (".gettype((boolean)$value).")<br>";
        $A = array('вилка' => "271 руб. 82 коп.", 'сковорода' => "818 руб. 28 коп.");
        printValue($A);
        $b =& $A['ложка'];
        echo "Элемент с индексом 'ложка': ".$A['ложка']."<br>";
        echo "Тип несуществующего элемента 'ложка': ".gettype($A['ложка'])."<br>";
        
?>
</body>
</html>
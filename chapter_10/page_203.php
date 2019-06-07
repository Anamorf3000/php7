<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Перебор массива</title>
</head>

<body>
<?php 
// обратный перебор массива
$office = array("Pol"=>"Numen", "Mikle"=>"Kudryashov", "Jean"=>"Krouford");

for (end($office); ($k = key($office)); prev($office))
	echo "$k --- {$office[$k]}<br>";
?>
<hr>
<?php 
$dosier = [
	["name" => "Tomas Anderson", "born" => "1962-03-11"],
	["name" => "Keanu Reeves", "born" => "1962-09-12"]
];

for ($i = 0; $i < count($dosier); $i++)
	echo "{$dosier[$i]['name']} was born {$dosier[$i]['born']}<br>";
?>
<hr>
<?php 
$birth = [
	"Tomas Anderson"=>"1962-03-11",
	"Keanu Reeves"=>"1962-09-12"
];

for (reset($birth); ($k = key($birth)); next($birth))
	echo "$k родился {$birth[$k]}<br>"
?>
<hr>
<?php 
	// прямой перебор
	for (reset($birth); list($k, $v) = each($birth);)
		echo "$k was born $v<br>";
?>
<hr>
<?php 
$num = [101, 23, 203, 450, 91];

// перебор с помощью foreach
foreach ($num as $k=>$v)
	echo "$k => $v<br>";
echo "<hr>";
// изменение элементов при переборе
foreach ($num as &$v)
{
	echo "$v...";
	$v++;
	echo "$v<br>";
}
echo "<hr>";
?>
</body>
</html>
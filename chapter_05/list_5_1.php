<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Listing 5.1</title>
</head>

<body>
<h1>Здравствуйте</h1>
<p>
<?php 
date_default_timezone_set("Europe/Moscow");
// вычисляем текущую дату в формате "день.месяц год"
$dat = date("d.m y");
// вычисляем текущее время
$tm = date("h:i:s");
// выводим
echo "Текущая дата: $dat год<br>";
echo "Текущее время: $tm<br>";
echo "А вот квадраты и кубы первых 5 натуральных цифр:<br>";
echo "<ul><br>";
for ($i = 1; $i <= 5; $i++) {
	echo "<li>$i в квадрате = ".($i * $i);
	echo ", $i в кубе = ".($i * $i * $i)."</li><br>";
}
?>
</ul>
</p>
</body>
</html>
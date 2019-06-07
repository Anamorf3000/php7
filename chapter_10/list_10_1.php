<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Демонстрация работы со списками</title>
</head>

<body>
<?php 
$nameList[0] = "Yuen Wo Ping";
$nameList[1] = "Geofrey Darrow";
$nameList[2] = "Hugo Weavin";

echo "Первый элемент массива: ".$nameList[0]."<hr>";
// печать всех элементов массива
for ($i = 0; $i < count($nameList); $i++)
{
	echo $nameList[$i]."<br>";
}
?>
</body>
</html>
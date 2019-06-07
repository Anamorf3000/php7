<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Степень двойки до 2^31 включительно</title>
</head>

<body>
<?php 
$i = 1;
$p = 2;
while ($i < 32)
{
	echo $p, " ";
	$p *= 2;
	$i++;
}
?>
</body>
</html>
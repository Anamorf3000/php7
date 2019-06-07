<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Цикл for</title>
</head>

<body>
<?php 
for ($i = 0, $j = 0, $k = "Points"; $i < 100; $j++, $i += $j) $k = $k.".";	
echo $k;
?>
</body>
</html>
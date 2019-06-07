<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>listing 22 7</title>
</head>

<body>
	<?php 
		require_once("MathComplex2.php");
		$a = new MathComplex2(314, 101);
		$a->add(new MathComplex2(303, 6));
		echo $a;
	?>
</body>
</html>
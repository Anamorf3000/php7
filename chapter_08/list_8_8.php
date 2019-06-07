<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Гарантированный прием значений из флажков</title>
</head>

<body>
<?php 
	if (isset($_REQUEST['doGo']))
	{
		foreach ($_REQUEST['know'] as $k => $v)
		{
			if ($v) echo "Вы знаете язык $k!<br>";
			else echo "Вы не знаете язык $k!<br>";
		}
	}
?>
<form action="<?=$_SERVER['SCRIPT_NAME'];?>" method="post">
	Какие языки программирования вы знаете?<br>
	<input type="hidden" name="know[php]" value="0">
    <input type="checkbox" name="know[php]" value="1">PHP<br>
	<input type="hidden" name="know[perl]" value="0">
    <input type="checkbox" name="know[perl]" value="1">Perl<br>
	<input type="submit" name="doGo" value="Go">
</form>
</body>
</html>
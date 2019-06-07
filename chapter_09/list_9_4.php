<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Модель сценария для обработки формы</title>
</head>

<body>
<?php 
$WasError = 0;	// если не 0, тогда была ошибка

// если нажали кнопку с именем doSubmit
if (isset($_REQUEST['doSubmit']))
	do
	{
		// проверка входных данных
		if ($_REQUEST['reloads'] != 1+1+7) 
		{
			$WasError = 1;
			break;
		}
		if ($_REQUEST['loader'] != 'source')
		{
			$WasError = 1;
			break;
		}
		// и т.д. - здесь может быть множество и других проверок
		// ...
		// в этой точке данные точно в порядке. Обрабатываем их.
		echo "Вы внимательный человек, поздравляем!<br>";
		// можно записать данные в файл
		exit(0);
	}while(0);
	// произошла ли ошибка?
	if ($WasError)
	{
		echo "Если вы ответили неверно, попробуйте еще раз.";
	}
?>
<form action="<?=$_SERVER['REQUEST_URI']?>" method="post">
	Число перезагрузок: <input type="text" name="reloads"><br>
	Загрузочная программа: <input type="text" name="loader"><br>
	<input type="submit" name="doSubmit" value="Ответить на вопросы">
</form>
</body>
</html>
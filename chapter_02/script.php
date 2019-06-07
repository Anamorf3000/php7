<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Документ без названия</title>
</head>

<body>
    Привет <?php echo filter_input(INPUT_GET, 'name');?>! 
    Я знаю, вы родились <?php echo filter_input(INPUT_GET, 'born');?>.
</body>
</html>
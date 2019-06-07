<?php 
require_once("../print_value.php");
$list = file("birthday2.txt", FILE_IGNORE_NEW_LINES) or die("Ошибка");
printValue($list);

?>
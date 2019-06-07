<?php 
$f = fopen("birthday2.txt", "rt");	// текстовый режим
$st = fread($f, 5000);
echo $st."<br />\n";
?>
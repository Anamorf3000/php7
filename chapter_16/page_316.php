<?php 
$f = fopen("birthday2.txt", "rt");	// текстовый режим
while (!feof($f))
{
	$st = fgets($f);
	echo $st."<br />\n";
}
?>
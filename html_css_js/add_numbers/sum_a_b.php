
<?php
header("Content-Type: text/html; charset=utf-8");
if(array_key_exists("a", $_POST) && array_key_exists("b", $_POST))
{
	$a = (int) $_POST["a"];
	$b = (int) $_POST["b"];
	$c = $a + $b;
	echo "<p style='color: red;'>Результат: ". $c."</p>";
}

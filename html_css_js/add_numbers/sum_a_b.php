<?php
/**
 * Created by PhpStorm.
 * User: 112
 * Date: 06.03.14
 * Time: 22:56
 */
header("Content-Type: text/html; charset=utf-8");

if(array_key_exists("a", $_POST) && array_key_exists("b", $_POST))
{
	$a = (int) $_POST["a"];
	$b = (int) $_POST["b"];
	$c = $a + $b;
	echo "<p style='color: red;'>Результат: ". $c."</p>";

	$hostname = "127.0.0.1:3306";
	$user = 'root';
	$db   = "learnin";

	$link = mysql_connect($hostname, $user) OR DIE("Не могу создать соединение");
	mysql_select_db("$db") or die("Не могу выбрать базу данных ");

	mysql_query("SET NAMES utf-8");
	mysql_query('SET CHARACTER SET utf8' );

	$sql="INSERT INTO add_results (num_1, num_2, result) VALUES ('$a','$b','$c')";
	mysql_query($sql);

	echo "Результат сохранен в БД.";

	mysql_close($link);
}
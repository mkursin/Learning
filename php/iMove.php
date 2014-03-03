<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 25.02.14
 * Time: 23:16
 */

/**
 * Interface iMove
 * Интерфейс для объектов, которые могут двигаться с определенной скоростью.
 */
interface iMove
{
	function move($speed);
}

/**
 * Class Human
 * Человек
 */
class Human implements iMove
{
	function move($speed)
	{
		echo "Человек движется со скоростью $speed" . " км/ч";
	}
}

/**
 * Class Auto
 * Автомобиль
 */
class Auto implements iMove
{
	function move($speed)
	{
		echo "\nАвтомобиль движется со скоростью $speed" . " км/ч";
	}
}

$human = new Human();
$human->move(5);

$auto = new Auto();
$auto->move(10);
<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 25.02.14
 * Time: 23:16
 */
/*
 * Создать интерфейс Движение с определением метода движения и классы Человек,
 *  Автомобиль, которые имплементируют данный интерфейс каждый по своему.
 */

interface iMove
{
	 function move();
}
	class Human implements iMove
	{

		function move ()
		{
		$speed = 10;
		return $speed;

		}
	}

	class Auto implements iMove
	{
		function move()
		{
		$speed = 120;
		return $speed;
		}
	}
$human = new Human();
$human->move ();
echo  $human->move() ;

$auto = new Auto();
$auto->move ();
echo  $auto->move() ;
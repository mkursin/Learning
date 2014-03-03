<?php

/**
 * Class Integer
 * Класс для операций с целыми числами
 */
class Integer
{
	/**
	 * Сложение 3х чисел
	 * @param $a
	 * @param $b
	 * @param $c
	 * @return mixed
	 */
	static function addition($a, $b, $c)
	{
		return $a + $b + $c;
	}

	// ...
	// прочие методы которые могут быть :)
}

print_r(Integer::addition(1, 323, 12));
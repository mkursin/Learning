<?php
/**
 * User: Michail
 * Created: 25.02.14, 16:08
 */

/*
 * Создать статический класс для работы с целыми числами. В класс можно добавить любые методы для каких-либо вычислений.
 */
    class Integers
    {

        public static function addition ($a, $b, $c)
        {
            if ($d = $a + $b + $c);
            echo "$d";
			return $d;
        }

        public static  function  subtraction ($a, $b, $c)
        {
            if ($d = $a - $b +$c);
            echo "$d";
			return $d;
        }

        public static  function  arr ()
        {
        $result = array($a, $b, $c);
        return (int)$result;
        }
	}

print_r ( Integers::subtraction(1,2,3));
print_r ( Integers::addition(1,2,3));

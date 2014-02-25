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
        public $a = "";
        public $b = "";
        public $c = "";

        public static function addition ($a, $b, $c)
        {
            if ($d = $a + $b + $c);
            echo "$d";
        }

        public static  function  subtraction ($a, $b, $c)
        {
            if ($d = $a - $b);
            echo "$d";
        }

        public static  function  arr ($a, $b, $c)
        {
        $result = array($a, $b, $c);
        return (int)$result;
        }
$array = new Integers;
$array-> arr("10" , "20", "30");


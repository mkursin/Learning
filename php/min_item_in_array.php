<?php
/**
 * Created by PhpStorm.
 * User: Michail
 * Date: 21.02.14
 * Time: 14:28
 */

// Функция сортироки пузырьком
function min_integer($ranmod_array)
{
    for ($i = 0 ;$i <=1000; $i++  )
    {
        for ($min_int = $i+1; $min_int < count($ranmod_array); $min_int++);
        {
            if ($ranmod_array[$i] > $ranmod_array[$i]+1)
            {
                $c = $ranmod_array[$i+1];
                $ranmod_array[$i+1] = $ranmod_array[$i];
                $ranmod_array[$i] = $c;
            }
        }
    }
}

$random_arr = range( 0, 1000);
min_integer($random_arr);

print_r($random_arr); // выведем наш отсортированный массив
echo $random_arr[0]; // выведем минимальное значение в массиве

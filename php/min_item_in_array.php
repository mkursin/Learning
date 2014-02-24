<?php
/*
 * Задача:
 * Дан массив размерностью N случайных числе от 0 до 100.
 * Найти минимальный элемент массива.
 */

// Генерирует массив случайных чисел
function generate_random_array($length)
{
    $result = array();

    for ($i = 0; $i < $length - 1; $i++)
    {
        array_push($result, rand(0, 100));
    }

    return $result;
}

// Функция сортироки пузырьком
function bubble_sort(&$random_arr)
{
    for ($i = 0; $i < count($random_arr); $i++)
    {
        for ($j = $i + 1; $j < count($random_arr); $j++)
        {
            if ($random_arr[$i] > $random_arr[$j])
            {
                $c = $random_arr[$i];
                $random_arr[$i] = $random_arr[$j];
                $random_arr[$j] = $c;
            }
        }
    }
}

$random_arr = generate_random_array(10000);
echo "Original array:";
print_r($random_arr);

bubble_sort($random_arr);
echo "Sorted array:";
print_r($random_arr); // выведем наш отсортированный массив
echo "MIN:";
echo $random_arr[0]; // выведем минимальное значение в массиве

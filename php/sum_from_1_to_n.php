<?php
/**
 * User: Michail
 * Created: 24.02.14, 14:38
 * 
 * Задача:
 *     Требуется посчитать сумму целых чисел от 1 до N.
 * Входные данные:
 *     В единственной строке входного файла INPUT.TXT записано единственное целое число N, не превышающее по абсолютной величине 10^4.
 * Выходные данные:
 *     В единственную строку выходного файла OUTPUT.TXT нужно вывести одно целое число — сумму чисел от 1 до N.
 **/

    // Считывание числа из файла в переменную с приведение к целочисленному типу (int)
    $first_file = fopen('input2.txt', 'r');
    $integer = fread($first_file, 100);    
    fclose($first_file);
    $A = (int) $integer;

    // Создание массива от 1 до N (в нашем случае это переменная $A)
    $array = range(1, $A);

    // Запись результата в файл
    $last_file = fopen('output2.txt', 'w');
    fwrite($last_file, array_sum($array));
    fclose($last_file);

    // Вывод результата записанного в выходной файл (для проверки)
    $last_file = fopen('output2.txt', 'r');
    $string = fread($last_file, 100);
    print_r(array_sum($array));

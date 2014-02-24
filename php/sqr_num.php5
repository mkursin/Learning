<?php
/**
 * User: Michail
 * Created: 24.02.14, 16:35
 *
 * Задача №4:
 *     Напишите программу, возводящую число, оканчивающееся на 5, в квадрат.
 */

    $first_file = fopen('input3.txt', 'r');
    $integer = fread($first_file, 100);
    fclose($first_file);
    $A = (int) $integer;

    // TODO: условие по которому в квадрат возводились бы числа оканчивающиеся только на 5

    $B = $A*$A;

    $last_file = fopen('output3.txt', 'w');
    fwrite($last_file, $B);
    fclose($last_file);

    $last_file = fopen('output3.txt', 'r');
    $string = fread($last_file, 100);
    print_r($B);

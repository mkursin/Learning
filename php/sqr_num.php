<?php
/**
 * User: Michail
 * Created: 24.02.14, 16:35
 *
 * Задача №4:
 *     Напишите программу, возводящую число, оканчивающееся на 5, в квадрат.
 */

include 'file_methods.php';

$str = File_Method::read_from_file('', '3.txt');

if (substr($str, -1) == 5) {
    $num = (int)$str;
    $result = $num * $num;

    File_Method::writte_to_file('3.txt', $result);
    print_r(File_Method::read_from_file('output/', '3.txt'));
} else {
    echo "введите число, оканчивающееся  5";
}
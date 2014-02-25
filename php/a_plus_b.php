<?php
/**
 * User: Michail
 * Date: 24.02.14, 11:15
 *
 * Задача:
 * Требуется сложить два целых числа А и В.
 * Входные данные:
 *      В единственной строке входного файла INPUT.TXT записано два натуральных числа через пробел, не превышающих 10^9
 *Выходные данные:
 *      В единственную строку выходного файла OUTPUT.TXT нужно вывести одно целое число — сумму чисел А и В.
 */

    include 'file_methods.php';

    $str = File_Method::read_from_file('', '1.txt');
    $string = explode(' ', $str);

    $A = (int) $string[0];
    $B = (int) $string[1];
    $C = $A + $B;

    File_Method::writte_to_file('1.txt', $C);

    print_r(File_Method::read_from_file('output/', '1.txt'));
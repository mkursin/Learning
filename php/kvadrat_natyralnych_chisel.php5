<?php
/**
 * User: Michail
 * Created: 24.02.14, 16:35
 */
/**Задача №44:
   *Напишите программу, возводящую число, оканчивающееся на 5, в квадрат.*/




    $first_file = fopen('input3.txt', 'r'); //oткрываем файл с атрибутом "только чтение"
    $integer = fread($first_file, 100);     // читаем данные с файла  указателем чтения до 100 символов
    fclose($first_file);                    //закрываем файл
    $A = (int )$integer;                    //присвоим полученное из файла значение переменной $A


//не хватает условия, по которому в квадрат возводились бы числа , оканчивающиеся только на 5







    $B = $A*$A;

    $last_file = fopen('output3.txt', 'w');   // откроем файл с атрибутом "для записи"
    fwrite($last_file, $B);                  // запишем в него полученный результат
    fclose($last_file);                     // закроем файл

    $last_file = fopen('output3.txt', 'r'); // проверка, выполнилось ли возведение в квадрат заданного числа
    $string = fread($last_file, 100);
    print_r($B);
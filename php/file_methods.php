<?php
/**
 * User: Michail
 * Created: 25.02.14, 10:51
 */

/*
 * Класс для чтения данных из файлов,а также их записи в файлы
 */
class File_Method
{
    /*
     * Чтение стркои из файла
     */
    public static function read_from_file($file_path, $file_name)
    {
        $path = strlen($file_path) > 0 ? $file_path : 'input/';
        $first_file = fopen($path. $file_name, 'r');
        $str = fread($first_file, 100);
        fclose($first_file);
        return $str;
    }

    /*
     * Запись строки в файл
     */
    public static function writte_to_file($file_name, $str)
    {
        $last_file = fopen('output/'. $file_name, 'w');
        fwrite($last_file, $str);
        fclose($last_file);
    }
}
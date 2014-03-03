<?php

/*
 * Скрипт для перевода слов через Яндекс.Переводчик
 */

// Для Composer
require 'vendor/autoload.php';

// Константы для Яндекс.Переводчика
define("YA_TRANSLATE_URL", "https://translate.yandex.net/api/v1.5");
define("YA_TRANSLATE_KEY", "trnsl.1.1.20140227T084741Z.d3de9e0d146bce27.4fec6ec140e62e9b799eaf1c28b30e735fac59dd&ui=ru");

/**
 * Получает направления перевода
 * @return array направления перевода
 */
function get_translate_directions()
{
	$url = YA_TRANSLATE_URL . "/tr.json/getLangs?key=" . YA_TRANSLATE_KEY . "&ui=ru";
	$headers = array('Accept' => 'application/json');
	$response = Requests::get($url, $headers);
	$langs = json_decode($response->body);
	return $langs->dirs;
}

/**
 * Перевод слова на нужный язык
 * @param  string $str строка на исходном языке
 * @param  string $lng язык перевода
 * @return string переведенную строку
 */
function translate($str, $lng)
{
	$url = YA_TRANSLATE_URL . "/tr.json/translate?key=" . YA_TRANSLATE_KEY . "&ui=ru&text=" . $str . "&lang=" . $lng;
	$headers = array('Accept' => 'application/json');
	$response = Requests::get($url, $headers);
	$body = json_decode($response->body);
	return $body->text[0];
}

// Пример использования переводчика:

echo "Перевод посредством Яндекс.Переводчик \n Введите  перводимую фразу  или предложение и нажмите Enter:";
$original = fgets(STDIN);
$lng = "ru-en";
$result = translate($original, $lng);

echo "Переводимая строка: $original \n";
echo "Переведенная строка: ";
echo $result;
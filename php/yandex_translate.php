<?php

require 'vendor/autoload.php';

define("YA_TRANSLATE_URL", "https://translate.yandex.net/api/v1.5");
define("YA_TRANSLATE_KEY", "trnsl.1.1.20140227T084741Z.d3de9e0d146bce27.4fec6ec140e62e9b799eaf1c28b30e735fac59dd&ui=ru");

function get_translate_directions()
{
	$url = YA_TRANSLATE_URL . "/tr.json/getLangs?key=" . YA_TRANSLATE_KEY . "&ui=ru";
	$headers = array('Accept' => 'application/json');
	$response = Requests::get($url, $headers);
	$langs = json_decode($response->body);
	return $langs->dirs;
	
}

function translate($str, $lng)
{
	$url = YA_TRANSLATE_URL . "/tr.json/translate?key=" . YA_TRANSLATE_KEY . "&ui=ru&text=" . $str . "&lang=" . $lng;
	$headers = array('Accept' => 'application/json');
	$response = Requests::get($url, $headers);
	$body = json_decode($response->body);
	return $body->text[0];
}
	/*
	 * Пока данный код не буду удалять, может пригодиться для доработки
	 */
	/*echo "Введите направление перевода (например:ru-en). Внимание! По умолчанию будет заданно направленеи перевода  ru-en:";
$original = fgets(STDIN);
$lng  = fgets(STDIN);
$lng = "ru-en";
if ($lng  = fgets(STDIN) == true)
	{
		$lng = "ru-en";
	}
*/

echo "Русско-английский переводчик \n Введите  перводимую фразу  или предложение и нажмите Enter:";
	if ($original  = fgets(STDIN))
/*if ($original  = fgets(STDIN) == true)
	{
	}
$original = 'Привет, как дела?';*/
$lng = "ru-en";
$result = translate($original, $lng);
echo "Переводимая строка: $original \n";
echo "Переведенная строка: ";
echo $result;
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

echo "Enter the flow direction en-ru:";
if ($lng  = fgets(STDIN) == true)
{
	$lng = "en-ru";
}
/*if ($original  = fgets(STDIN) == true)
{
	echo "Введите перводимое слово";
}*/
$original = 'Hello World!';
$result = translate($original, $lng);

echo "source string: $original \n";
echo "translated string: ";
echo $result;
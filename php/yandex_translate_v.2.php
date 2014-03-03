<?php
/**
 * Created by PhpStorm.
 * User: 112
 * Date: 28.02.14
 * Time: 16:55
 */
/*
 * Решил доделать переводчик, на выбор направления , ну и соответственно текста.
 */


require 'vendor/autoload.php';

define("YA_TRANSLATE_URL", "https://translate.yandex.net/api/v1.5");
define("YA_TRANSLATE_KEY", "trnsl.1.1.20140227T084741Z.d3de9e0d146bce27.4fec6ec140e62e9b799eaf1c28b30e735fac59dd&ui=ru");

function get_translate_directions()
{
	$url = YA_TRANSLATE_URL . "/tr.json/getLangs?key=" . YA_TRANSLATE_KEY . "&ui=ru";
	$headers = array('Accept' => 'application/json');
	$response = Requests::get($url, $headers);
	//$langs = json_decode($response->body);
	//return $langs->dirs;


}

/*function translate($str, $lng)
{
	$url = YA_TRANSLATE_URL . "/tr.json/translate?key=" . YA_TRANSLATE_KEY . "&ui=ru&text=" . $str . "&lang=" . $lng;
	$headers = array('Accept' => 'application/json');
	$response = Requests::get($url, $headers);
	$body = json_decode($response->body);
	return $body->text[0];
}


echo "Русско-английский переводчик \n Введите  перводимую фразу  или предложение и нажмите Enter:";
if ($original  = fgets(STDIN))

	$lng = "ru-en";
$result = translate($original, $lng);
echo "Переводимая строка: $original \n";
echo "Переведенная строка: ";
echo $result;*/
<?php

require 'vendor/autoload.php';

function translate()
{
    $url = 'http://translate.yandex.net/api/v1.5/tr.json/getLangs?key=trnsl.1.1.20140226T080900Z.a8833b71f06295e0.b40bb146ba46d5e079843deb4b23766eb006d472';
    //$url = 'http://translate.google.ru/#en/ru';
    //$string = file_get_contents($url);
    $str = json_encode($string);
    $request  =  Requests :: get ( ' $url, $str' );
    json_decode($str);
	return $str;
}

$zapros = "Привет";
// translate($zapros);
print_r(translate($zapros));

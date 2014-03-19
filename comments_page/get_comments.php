<?php

/**
 * User: Michael
 * Created: 13.03.14, 9:23
 *
 * Получение списка комментариев гостевой книги
 */

header("Content-Type: text/html; charset=utf-8");

$dbName = "gbook";
$hostname = "127.0.0.1:3306";
$username = "root";
$password = "";

$link = mysql_connect($hostname, $username, $password) OR DIE("Не могу создать соединение");

mysql_select_db("$dbName") or die("Не могу выбрать базу данных ");
mysql_query("SET NAMES utf-8");
mysql_query('SET CHARACTER SET utf8');

$q = "SELECT count(*) FROM book";
$res = mysql_query($q);
$row = mysql_fetch_row($res);
$total_rows = $row[0]; // количество записей в базе

$limit = $_GET['limit']; // количество записей на странице
$num_page = $_GET['page']; // номер страницы
$count_pages = ceil($total_rows / $limit); // количество страниц

// Если номер страницы оказался больше количества страниц, выведется первая страница
if ($num_page > $count_pages) $num_page = 1;

$start_position = ($num_page - 1) * $limit; // позиция начала выборки данных

$sql = "SELECT * FROM book LIMIT $start_position, $limit;" or die ("Ошибка запроса: ");
$results = mysql_query($sql);

if (!$results) {
    echo "Could not successfully run query ($sql) from DB: " . mysql_error();
    exit;
}

// сохранить общее кол-во комментариев
if (mysql_num_rows($results) == 0) {
    echo '{ "error": "No rows found, nothing to print so am exiting" }';
    exit;
}
else {
    $rows = array();
    while ($r = mysql_fetch_assoc($results)) {
        $rows[] = $r;
    }

    $jsn = array(
        "count_pages" => $count_pages,
        "page"        => $num_page,
        "limit"       => $limit,
        "total_items" => $total_rows,
        "items"       => $rows
    );

    echo json_encode($jsn);
}
mysql_free_result($results);

mysql_close();

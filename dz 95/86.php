<?php
//Инициализируйте переменную для подсчета количества посещений.
//Если соответствующие данные Передавались через cookie сохраняйте их в эту переменную.
//Нарастите счетчик посещений.
//Инициализируйте переменную для хранения значения последнего посещения страницы.
//Если соответствующие данные передавались из cookie , отфильтруйте их и сохраните в эту переменную.
//Установите соответствующие cookie. Выводите информацию о количестве посещений и дате последнего посещения

if (!isset($_COOKIE['id_count'])) $id_count = 0;
else $id_count = $_COOKIE['id_count'];
$id_count++;
setcookie('id_count', $id_count, 0x6FFFFFFF);
?><h1><?php echo 'Страница посещена ' . $id_count . ' раз' . ' Дата последнего посещения: ' . date("Y-m-d"); ?></h1>
<?php
$name_client = $_POST[data_1];
$phone_client = $_POST[data_2];

$message= "Заказ: ФОРМА В ФУТЕРЕ\nИмя клиента: ".$name_client."\nТелефон клиента: ".$phone_client;
 
mail('kukolki-lol@ya.ru', 'ЗАКАЗ С САЙТА', $message);

?>
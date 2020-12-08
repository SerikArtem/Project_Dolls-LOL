<?php
$phone_client = $_POST[data_2];

$message= "Заказ: ФОРМА ДОПРОДАЖИ (см. телефон)\nТелефон клиента: ".$phone_client;
 
mail('kukolki-lol@ya.ru', 'ЗАКАЗ С САЙТА', $message);

?>
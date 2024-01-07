<?php

// используем почтовый ящик schodya@gmail.com  как почтовый сервер


$__smtp = array(
    "host" => 'smtp.gmail.com', // SMTP сервер
    "debug" => 2, // Уровень логирования
    "auth" => true, // Авторизация на сервере SMTP. Если ее нет - false
  //  "port" => '465', // Порт SMTP сервера
	"port" => '587', // Порт SMTP сервера
    "username" => 'schodya@gmail.com', // Логин запрашиваемый при авторизации на SMTP сервере
    "password" => 'creator76', // Пароль
    //"addreply" => 'stupeni-a@ukr.net', // Почта для ответа
//	"addreply" => 'mcraftukr@gmail.com', // Почта для ответа
    "addreply" => 'artshody@gmail.com', // Почта для ответа
    "secure" => 'ssl', // Тип шифрования. Например ssl или tls
    "mail_title" => 'Ступени-А', // Заголовок письма
    "mail_name" => 'Администрация  Ступени-А' // Имя отправителя
); 




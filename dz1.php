<?php

$name = "Максим";
$age = 24;
$email = "legckostupov.maxim@yandex.ru";
$city = "Москва"
$about = "Бариста"
 ?>

 <!DOCTYPE html>
 <html lang="ru">
   <head>
     <meta charset="utf-8">
     <title><?= $name . ' – ' . $about ?></title>
     <style>
       body {
         font-family: sans-serif;
       }
     </style>
   </head>
   <body>
     <h1>Страница пользователя <?= $name ?></h1>
     <dl>
       <dt>Имя</dt>
       <dd><?= $name ?></dd>
       <dt>Возраст</dt>
       <dd><?= $age ?></dd>
       <dt>Адрес электронной почты</dt>
       <dd><a href="mailto:<?= $email ?>"><?= $email ?></a></dd>
       <dt>Город</dt>
       <dd><?= $city ?></dd>
       <dt>>О себе</dt>
       <dd><?= $about ?></dd>
     </dl>
   </body>
 </html>

<?php

require_once('config.php');
require_once('modules/database.php');
require_once('modules/page.php');

// Подключение к базе данных
$db = new Database('data.sqlite');

// Создание объекта Page
$page = new Page('templates/index.tpl');

// Получение данных из базы данных
$data = $db->Fetch('SELECT * FROM articles');

// Передача данных в шаблон
$page->SetData($data);

// Отображение страницы
$page->Render();

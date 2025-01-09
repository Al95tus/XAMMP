<?php
require_once 'db/tables.php'; // Создаем таблицы

require_once 'db/db.php'; // Подключаем файл с функциями CRUD

// Пример добавления пользователя
$newUser = [
	'username' => 'john_doe',
	'password' => password_hash('securepassword',
	              PASSWORD_DEFAULT),
	'age' => '30'
];

$userId = create('users', $newUser);
echo "User created with ID: $userId";

<?php
// db/connection.php

$path = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'pdo' . DIRECTORY_SEPARATOR;
$dsn = 'sqlite:' . $path . 'dbfile.sqlite';

try {
	$pdo = new PDO($dsn);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'PDO DB connected'; // На этапе отладки можно раскомментировать эту строку. Тогда сообщение будет выведено на экран. В дальнейшем это сообщение будет мешать.
} catch (PDOException $e) {
	echo $e->getMessage();
}

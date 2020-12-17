<?php
$dsn = 'mysql:dbname=test;host=127.0.0.1';
$user = 'root';
$password = '';

/*будет бросать исключение PDOException, если соединение оборвалось.*/
try {
    $dbh = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
} catch (PDOException $e) {
    echo 'Соединение оборвалось: ' . $e->getMessage();
    exit;
}

// Следующий запрос приводит к ошибке уровня E_WARNING вместо исключения (когда таблица не существует)
$query = $dbh->query("SELECT * FROM articles");
?>
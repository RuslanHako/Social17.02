<?php
// поодключение к бд
$servername = 'localhost';
$username = 'root';
$password = 'mysql';
$dbname = 'social';

$conn = new mysqli($servername , $username, $password , $dbname);

// Проверка подключения

if ($conn->connect_error){
    //die- выводит сообщени и прекращает выполнение текущего скрипта 
    die("Connection failed: " .$conn -> connect_error);
}


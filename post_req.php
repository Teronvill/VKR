<?php

$name=$_POST['name'];
$phone=$_POST['phone'];
$text=$_POST['text'];

$host = '127.0.0.1';  // Хост, у нас все локально
$user = 'root';    // Имя созданного вами пользователя
$pass = ''; // Установленный вами пароль пользователю
$db_name = 'tpyug';   // Имя базы данных

// Create connection
$conn = new mysqli($host, $user, $pass, $db_name);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO requests (phone, name, text) VALUES ( '$phone','$name', '$text')";

if ($conn->query($sql) === TRUE) {
  echo "Отправлено успешно";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
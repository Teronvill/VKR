

<?php
$host = '127.0.0.1'; 
  $user = 'root';   
  $pass = ''; 
  $db_name = 'tpyug';   
  $link = mysqli_connect($host, $user, $pass, $db_name); 
  if (!$link) { // Вывод сообщения об ошибке
    echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
    exit;
  }
  ?>
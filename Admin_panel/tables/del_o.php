<? 
$o_id=$_POST['o_id'];

$host = '127.0.0.1';  // Хост, у нас все локально
$user = 'root';    // Имя созданного вами пользователя
$pass = ''; // Установленный вами пароль пользователю
$db_name = 'tpyug';   // Имя базы данных

$mysqli = new mysqli($host, $user, $pass, $db_name);
// Check connection
if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}

$res=$mysqli->query("DELETE FROM orders WHERE id='$o_id'");
echo "<meta http-equiv='refresh' content='0'>";
$mysqli->close();
 ?>
<? 
$s_id=$_POST['s_id'];
$s_name=$_POST['s_name'];

$host = '127.0.0.1';  // Хост, у нас все локально
$user = 'root';    // Имя созданного вами пользователя
$pass = ''; // Установленный вами пароль пользователю
$db_name = 'tpyug';   // Имя базы данных

$mysqli = new mysqli($host, $user, $pass, $db_name);
// Check connection
if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}

$res=$mysqli->query("SELECT id FROM services WHERE id='$s_id'");
while($row=$res->fetch_array(MYSQLI_ASSOC)) {
    $last_id=$row['id'];
}
if (!$last_id>0) {
    $result=$mysqli->query("INSERT INTO services (id, service) VALUES ('$s_id','$s_name')");
  
}
else {
    $result=$mysqli->query("UPDATE services SET service='$s_name' WHERE id='$s_id'");
  
}

$mysqli->close();
 ?>
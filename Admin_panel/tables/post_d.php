<? 
$d_id=$_POST['d_id'];
$name_d=$_POST['name_d'];
$phone_d=$_POST['phone_d'];
$host = '127.0.0.1';  // Хост, у нас все локально
$user = 'root';    // Имя созданного вами пользователя
$pass = ''; // Установленный вами пароль пользователю
$db_name = 'tpyug';   // Имя базы данных

$mysqli = new mysqli($host, $user, $pass, $db_name);
// Check connection
if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}

$res=$mysqli->query("SELECT id FROM delivery WHERE id='$d_id'");
while($row=$res->fetch_array(MYSQLI_ASSOC)) {
    $last_id=$row['id'];
}
if (!$last_id>0) {
    $result=$mysqli->query("INSERT INTO delivery (id, name_d, phone_d) VALUES ('$d_id','$name_d','$phone_d')");
  
}
else {
    $result=$mysqli->query("UPDATE delivery SET name_d='$name_d',phone_d='$phone_d'  WHERE id='$d_id'");
  
}

$mysqli->close();
 ?>
<? 
$r_id=$_POST['r_id'];
$r_status=$_POST['r_status'];

$host = '127.0.0.1';  // Хост, у нас все локально
$user = 'root';    // Имя созданного вами пользователя
$pass = ''; // Установленный вами пароль пользователю
$db_name = 'tpyug';   // Имя базы данных

$mysqli = new mysqli($host, $user, $pass, $db_name);
// Check connection
if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}

$res=$mysqli->query("SELECT id FROM requests WHERE id='$r_id'");
while($row=$res->fetch_array(MYSQLI_ASSOC)) {
    $last_id=$row['id'];
}
if (!$last_id>0) {
    $result=$mysqli->query("INSERT INTO requests (id, phone, name, text) VALUES ('$r_id','$r_phone','$r_name','$r_text')");

}
else {
    $result=$mysqli->query("UPDATE requests SET status='$r_status' WHERE id='$r_id'");

}

$mysqli->close();
 ?>
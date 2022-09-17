<? 
$w_id=$_POST['w_id'];
$name_w=$_POST['name_w'];
$address_w=$_POST['address_w'];
$phone_w=$_POST['phone_w'];

$host = '127.0.0.1';  // Хост, у нас все локально
$user = 'root';    // Имя созданного вами пользователя
$pass = ''; // Установленный вами пароль пользователю
$db_name = 'tpyug';   // Имя базы данных

$mysqli = new mysqli($host, $user, $pass, $db_name);
// Check connection
if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}

$res=$mysqli->query("SELECT id FROM warehouse WHERE id='$w_id'");
while($row=$res->fetch_array(MYSQLI_ASSOC)) {
    $last_id=$row['id'];
}
if (!$last_id>0) {
    $result=$mysqli->query("INSERT INTO warehouse (id, name_w, address, phone) VALUES ('$w_id','$name_w','$address_w', '$phone_w')");
}
else {
    $result=$mysqli->query("UPDATE warehouse SET name_w='$name_w',address='$address_w', phone='$phone_w' WHERE id='$w_id'");
  
}

$mysqli->close();
 ?>
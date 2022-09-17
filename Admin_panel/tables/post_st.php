<? 
$st_id=$_POST['st_id'];
$fio=$_POST['fio'];
$department=$_POST['department'];
$post=$_POST['post'];
$phone_st=$_POST['phone_st'];
$email_st=$_POST['email_st'];

$host = '127.0.0.1';  // Хост, у нас все локально
$user = 'root';    // Имя созданного вами пользователя
$pass = ''; // Установленный вами пароль пользователю
$db_name = 'tpyug';   // Имя базы данных

$mysqli = new mysqli($host, $user, $pass, $db_name);
// Check connection
if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}

$res=$mysqli->query("SELECT id FROM staff WHERE id='$st_id'");
while($row=$res->fetch_array(MYSQLI_ASSOC)) {
    $last_id=$row['id'];
}
if (!$last_id>0) {
    $result=$mysqli->query("INSERT INTO staff (id, fio, department, post, phone, email) VALUES ('$st_id','$fio', '$department', '$post', '$phone_st', '$email_st')");
  
}
else {
    $result=$mysqli->query("UPDATE staff SET  fio='$fio',department='$department', post='$post', phone='$phone_st',email='$email_st' WHERE id='$st_id'");
  
}

$mysqli->close();
 ?>
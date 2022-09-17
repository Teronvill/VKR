<? 
$c_id=$_POST['c_id'];
$c_name=$_POST['c_name'];
$cont_name=$_POST['cont_name'];
$email=$_POST['email'];
$c_phone=$_POST['c_phone'];
$c_date=$_POST['c_date'];


$host = '127.0.0.1';  // Хост, у нас все локально
$user = 'root';    // Имя созданного вами пользователя
$pass = ''; // Установленный вами пароль пользователю
$db_name = 'tpyug';   // Имя базы данных

$mysqli = new mysqli($host, $user, $pass, $db_name);
// Check connection
if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}

$res=$mysqli->query("SELECT id FROM clients WHERE id='$c_id'");
while($row=$res->fetch_array(MYSQLI_ASSOC)) {
    $last_id=$row['id'];
}
if (!$last_id>0) {
    $result=$mysqli->query("INSERT INTO clients (id, name, contact_person, email, phone, Date_reg) VALUES ('$c_id','$c_name','$cont_name','$email','$c_phone','$c_date')");
  
}
else {
    $result=$mysqli->query("UPDATE clients SET name='$c_name', contact_person='$cont_name', email='$email', phone='$c_phone', Date_reg='$c_date' WHERE id='$c_id'");
  
}

$mysqli->close();
 ?>
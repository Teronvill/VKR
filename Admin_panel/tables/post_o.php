<? 
$o_id=$_POST['o_id'];
$del_id=$_POST['del_id'];
$war_id=$_POST['war_id'];
$cli_id=$_POST['cli_id'];
$address=$_POST['address'];
$comment=$_POST['s_name'];
$o_date=$_POST['o_date'];
$status=$_POST['status'];


$host = '127.0.0.1';  // Хост, у нас все локально
$user = 'root';    // Имя созданного вами пользователя
$pass = ''; // Установленный вами пароль пользователю
$db_name = 'tpyug';   // Имя базы данных

$mysqli = new mysqli($host, $user, $pass, $db_name);
// Check connection
if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}

$res=$mysqli->query("SELECT id FROM orders WHERE id='$o_id'");
while($row=$res->fetch_array(MYSQLI_ASSOC)) {
    $last_id=$row['id'];
}
if (!$last_id>0) {
    $result=$mysqli->query("INSERT INTO orders (id, id_delivery, id_warehouse, id_client, address, comment, Date, status) VALUES ('$o_id','$del_id','$war_id','$cli_id','$address','$comment','$o_date','$status')");
  
}
else {
    $result=$mysqli->query("UPDATE orders SET id='$o_id', id_delivery='$del_id', id_warehouse='$war_id', id_client='$cli_id', address='$address', comment='$comment', Date='$o_date', status='$status' WHERE id='$o_id'");
  
}

$mysqli->close();
 ?>
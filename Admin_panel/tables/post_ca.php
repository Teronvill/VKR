<? 
$id_ca=$_POST['id_ca'];
$id_se=$_POST['id_se'];
$id_no=$_POST['id_no'];
$id_st=$_POST['id_st'];
$num=$_POST['num'];


$host = '127.0.0.1';  // Хост, у нас все локально
$user = 'root';    // Имя созданного вами пользователя
$pass = ''; // Установленный вами пароль пользователю
$db_name = 'tpyug';   // Имя базы данных

$mysqli = new mysqli($host, $user, $pass, $db_name);
// Check connection
if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}

// $res=$mysqli->query("SELECT id_cart, id_nomenclature FROM cart WHERE id_cart='$id_ca'");
// while($row=$res->fetch_array(MYSQLI_ASSOC)) {

// }
$res=$mysqli->query("SELECT id FROM orders WHERE id='$id_ca'");
while($row=$res->fetch_array(MYSQLI_ASSOC)) {
    $last_id=$row['id'];
}
$res=$mysqli->query("SELECT id_nomenclature FROM cart WHERE id_cart='$id_ca'");
while($row=$res->fetch_array(MYSQLI_ASSOC)) {
    $nom_id=$row['id_nomenclature'];
}


if ($last_id>0 and !$nom_id>0) {
    $result=$mysqli->query("INSERT INTO cart (id_cart, id_service, id_nomenclature, id_staff, number) VALUES ('$id_ca', '$id_se', '$id_no', '$id_st', '$num')");

}
else {
    $result=$mysqli->query("UPDATE cart SET id_cart='$id_ca', id_service='$id_se', id_nomenclature='$id_no', id_staff='$id_st', number='$num' WHERE id_cart='$id_ca'");
  
}

$mysqli->close();
 ?>
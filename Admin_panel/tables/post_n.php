<? 
$n_id=$_POST['n_id'];
$n_name=$_POST['n_name'];
$n_marking=$_POST['n_marking'];
$n_size=$_POST['n_size'];
$n_desc=$_POST['n_desc'];
$n_price=$_POST['n_price'];





$host = '127.0.0.1';  // Хост, у нас все локально
$user = 'root';    // Имя созданного вами пользователя
$pass = ''; // Установленный вами пароль пользователю
$db_name = 'tpyug';   // Имя базы данных

$mysqli = new mysqli($host, $user, $pass, $db_name);
// Check connection
if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}

$res=$mysqli->query("SELECT id_nomenclature FROM nomenclature WHERE id_nomenclature='$n_id'");
while($row=$res->fetch_array(MYSQLI_ASSOC)) {
    $last_id=$row['id_nomenclature'];
}
if (!$last_id>0) {
    $result=$mysqli->query("INSERT INTO nomenclature (id_nomenclature, nomenclature, marking, sizes, description, price) VALUES ('$n_id','$n_name','$n_marking','$n_size','$n_desc','$n_price')");

}
else {
    $result=$mysqli->query("UPDATE nomenclature SET nomenclature='$n_name', marking='$n_marking', sizes='$n_size',description='$n_desc',price='$n_price'  WHERE id_nomenclature='$n_id'");
   
}

$mysqli->close();
 ?>
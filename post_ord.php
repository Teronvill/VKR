<?php

$name=$_POST['name'];
$contact_person=$_POST['contact_person'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$name_d=$_POST['delivery'];
$name_w=$_POST['warehouse'];
$address=$_POST['address'];
$comment=$_POST['comment'];
$number=$_POST['number'];
$NomPrice=explode('|', $_POST['nomenclature']);
$nomenclature=$NomPrice[0];
$services=$_POST["services"];

$host = '127.0.0.1';  // Хост, у нас все локально
$user = 'root';    // Имя созданного вами пользователя
$pass = ''; // Установленный вами пароль пользователю
$db_name = 'tpyug';   // Имя базы данных

// Create connection

$mysqli = new mysqli($host, $user, $pass, $db_name);
// Check connection
if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}

try {
$mysqli->autocommit(FALSE);
$mysqli->begin_transaction();
$res=$mysqli->query("SELECT id, name FROM clients WHERE name='$name'and contact_person='$contact_person' and email='$email' and phone='$phone' ");
if (!$res) {
$result=$mysqli->query("INSERT INTO clients (name, contact_person, email, phone) VALUES ('$name','$contact_person', '$email','$phone')");
$last_id=$mysqli->insert_id;
if ( !$result ) {
    $result->free();
    throw new Exception($mysqli->error);
}}else {

while($row=$res->fetch_array(MYSQLI_ASSOC)) {
    $last_id=$row['id'];
}

}


$result=$mysqli->query("INSERT INTO orders (id_delivery, id_warehouse, id_client, address, comment) VALUES ('$name_d','$name_w','$last_id','$address','$comment')");

if ( !$result ) {
    $result->free();
    throw new Exception($mysqli->error);
}
$last_id=$mysqli->insert_id;
$result=$mysqli->query("Select id_nomenclature from nomenclature WHERE '$nomenclature' LIKE marking");
while($data = mysqli_fetch_row($result))
    {   
        $nomenclature=$data[0];
    }   

$result=$mysqli->query("INSERT INTO cart (id_cart, id_service, 	id_nomenclature,id_staff, number) VALUES ('$last_id','$services', '$nomenclature','$services','$number')");

if ( !$result ) {
    $result->free();
    throw new Exception($mysqli->error);
}


$mysqli->commit();
echo "Отправлено успешно";
}
catch ( Exception $e ) {
    $mysqli->rollback(); 
    $mysqli->autocommit(TRUE); // 
}

$mysqli->close();
?>
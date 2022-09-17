<?php
include_once 'dbConfig.php';


$query="SELECT id,service FROM services";
$result=$link->query($query);

?>

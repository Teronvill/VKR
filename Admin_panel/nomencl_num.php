<?php
include_once 'dbConfig.php';
$query="SELECT COUNT(*) as count FROM nomenclature";
$result=$link->query($query);
$data = mysqli_fetch_assoc($result);
echo "$data[count]";
?>
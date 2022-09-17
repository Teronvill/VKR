<?php
$current_month = date('m');
include_once 'dbConfig.php';
$query="SELECT COUNT(*) as count FROM clients Where MONTH(Date_reg) = $current_month";
$result=$link->query($query);
$data = mysqli_fetch_assoc($result);
echo "$data[count]";
?>

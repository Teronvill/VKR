<?php
include_once 'dbConfig.php';
$category = $_GET['category'];

$query="Select nomenclature, marking, price from nomenclature
 WHERE nomenclature LIKE '%$category%'
";
$category='';
$result=$link->query($query);



    while($data = mysqli_fetch_row($result))
    {
        echo "<option value='$data[1]|$data[2]'>$data[0] $data[1]</option>";
    }   


?>

<?php
include_once 'dbConfig.php';
$query="SELECT id,service FROM services";
$result=$link->query($query);
?>
 <select class="form-control service_list"  name="services">
<option>Выберите услугу</option>
<?php while($row=$result->fetch_array(MYSQLI_ASSOC)) { ?>
<option value=<?php echo $row['id']?>><?php echo $row['service']?></option>
<?php } ?>
</select>
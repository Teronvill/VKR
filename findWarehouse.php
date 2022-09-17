<?php
include_once 'dbConfig.php';


$query="SELECT id,name_w,address FROM warehouse";
$result=$link->query($query);

?>
 <select class="form-control"  name="warehouse">
<option>Выберите склад отправки</option>
<?php while($row=$result->fetch_array(MYSQLI_ASSOC)) { ?>
<option value=<?php echo $row['id']?>><?php echo $row['name_w'].' адрес: '.$row['address']?></option>
<?php } ?>
</select>
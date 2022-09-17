


<?php
include_once 'dbConfig.php';


$query="SELECT id,name_d FROM delivery";
$result=$link->query($query);

?>
 <select class="form-control"  name="delivery">
<option>Выберите службу доставки</option>
<?php while($row=$result->fetch_array(MYSQLI_ASSOC)) { ?>
<option value=<?php echo $row['id']?>><?php echo $row['name_d']?></option>
<?php } ?>
</select>
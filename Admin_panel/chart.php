<?php
include_once 'dbConfig.php';
$query="SELECT MONTH(Date), COUNT(MONTH(Date)) FROM orders GROUP BY MONTH(Date) ORDER BY MONTH(Date) ";
$result=$link->query($query);
?>
<script type="text/javascript">
var obj='';
</script>
<?php
while ($row = mysqli_fetch_assoc($result)) {
    ?>   
<script type="text/javascript">
obj=obj+ <?php echo json_encode($row['COUNT(MONTH(Date))'])?>+'/';
</script>
<?php
}?>

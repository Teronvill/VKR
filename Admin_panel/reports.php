
<?require 'header.php' ?>
<link rel="stylesheet" href="css/fpdf.css">
<h1>Отчёты</h1>
</div></div>

<?
// $s_date='123';
// require 'report1.php'
?> 

<div id="real">
    <form id="formRep" method="POST" onsubmit="return false;">
    <div class="tbl_btn">
       
        <h3 class="orange">1. Укажите вид отчёта</h3>
<select class="form-control orange"  name="selectR" id="selectR">
    <option class="orange" value="Zakazy">Отчёт о выполнении заказов</option>
    <option class="orange" value="Prodagy">Отчёт о количестве продаж</option>
    <!-- <option class="orange" value="Zaprosy">Отчёт по запросам</option> -->
</select>
</div>
<div class="date grey">
    <br>
    <h3 class="orange">2. Укажите период</h3>
    Начальный период:
    <input type="date" name="s_date" id="s_date" >
    Конечный период:
    <input type="date" name="po_date" id="po_date">
</div>
<br>
<div class="btn btn-info" id="formR" type="submit">Сформировать</div>


</form>
</div>
<?require 'footer.php' ?>
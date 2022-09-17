<?require 'header.php' ?>


<div class="Zapchasti-drobilok__page oborudovanie">
<div class="container">
    
    <div class="block-icon">
        <div class="icon"></div>
        </div>
<h1>Запасные части дробилок</h1>
<br><div class="orange">
<p>Наша компания производит и реализует запчасти для дробилок (оси и молотки для дробилок зерновых) следующих марок: ДДМ-5, КДУ-2, ММ70, ММ140, ДДР, ДДП, ГДР, ДМ2Р-55. На нашем предприятии молотки молотковых дробилок (нож для зернодробилки) изготавливаются исключительно из авиационной стали 30 ХГСА самого высокого качества. Именно благодаря этому предлагаемые нами запчасти для зернодробилок
 (молотки для дробилок) идеально сочетают в себе максимальную упругость и высокую прочность.</p>
 </div><br>
<h3>Сводная таблица основных характеристик осей зернодробилок:</h3>
<table class='table table-striped table-warning'>
<tr><th>Тип дробилки</th><th>Диаметр, мм</th><th>Длина, мм</th><th>Материал</th><th>Твердость</th></tr> <!--ряд с ячейками заголовков-->
<tr><td>КДУ-2</td><td>20</td><td>380</td><td>Сталь 45</td><td>HRCэ 45-50</td></tr>
<tr><td>ДДМ-5</td><td>20</td><td>450</td><td>Сталь 45</td><td>HRCэ 45-50</td></tr>
<tr><td>ДДР</td><td>20</td><td>600</td><td>Сталь 45</td><td>HRCэ 45-50</td></tr>
<tr><td>ДДП</td><td>20</td><td>400</td><td>Сталь 45</td><td>HRCэ 45-50</td></tr>
<tr><td>ГДР</td><td>20</td><td>610</td><td>Сталь 45</td><td>HRCэ 45-50</td></tr>
<tr><td>ДМ2Р-55</td><td>20</td><td>240</td><td>Сталь 45</td><td>HRCэ 45-50</td></tr>
<tr><td>ММ-70</td><td>30</td><td>230</td><td>Сталь 45</td><td>HRCэ 45-50</td></tr>
<tr><td>ММ-140</td><td>30</td><td>450</td><td>Сталь 45</td><td>HRCэ 45-50</td></tr> <!--ряд с ячейками тела таблицы-->
</table>
<br>
<h3>Сводная таблица основных характеристик молотков зернодробилок:</h3>
<?php
  $sql = mysqli_query($link, "SELECT `nomenclature`, `sizes`, `description` FROM `nomenclature` WHERE nomenclature LIKE 'Молот%'");
  echo"<table class='table table-striped table-warning'><tr><th>Наименование</th><th>Габаритные размеры, мм</th><th>Диаметр</th><th>Межцентровое расстояние, мм</th><th>Материал</th><th>Твердость</th></tr>";
  while ($result = mysqli_fetch_array($sql)) {
    echo "<tr><td>{$result['nomenclature']}</td> <td>{$result['sizes']}<td>", substr($result['description'], 0, 2),"</td><td>",substr($result['description'], 3, 2),"</td></td><td>Сталь 30ХГСА</td><td>HRCэ 45-50</td></tr>";
  }
  echo '</table>';
?>
<br><div class="orange">
<p> Гарантированная твердость нашей продукции составляет 45…50 HRCэ. При этом практические испытания на различных комбикормовых предприятиях стали свидетельством высокой износостойкости, а также равномерность износа кромок изготовляемых нами изделий.</p>
</div></div>
<br>
</div>




<?require 'footer.php' ?>
<?require 'header.php' ?>


<div class="valcevie-stanki__page oborudovanie">
<div class="container">
<div class="block-icon">
        <div class="icon"></div>
        </div>
<h1>Вальцевые станки</h1>
<br>
<div class="orange">
<p>Вальцевый станок Б6-МВА станавливается в комплекте с жаровней и маслопрессами. Предназначен для смятия продукта перед непосредственной его подачей в жаровню, где осуществляется жарка. Производительность составляет до 100 т/сутки для семян подсолнечника. В комплект поставки входит приводом и шкивами.</p>
</div><br><table class='table table-striped table-warning'><tr><th>Наименование параметров</th><th>Б6-МВА</th></tr>
<tr><td class='td-left'>Установленная мощность, кВт не более</td><td>30</td></tr>
<tr><td class='td-left'>Эффективность обработки сырья - проход мятки через одномиллиметровое сито, %, не менее</td><td>60</td></tr>
<tr><td class='td-left'>Масса кг., не более</td><td>9000</td></tr>
<tr><td>Подсолнечная рушанка, показатели</td><td></td></tr>
<tr><td class='td-left'>Влажность, %</td><td>5,5...6</td></tr>
<tr><td class='td-left'>Лузжистость, %</td><td>3...8</td></tr>
<tr><td>Параметры ядра семян подсолнечника</td><td></td></tr>
<tr><td class='td-left'>Длина, мм</td><td>3...8</td></tr>
<tr><td class='td-left'>Ширина, мм</td><td>3,9...4,9</td></tr>
<tr><td class='td-left'>Толщина, мм</td><td>1,8...2,8</td></tr>
</table>
<br>
    <h3>Производим следующий перечень запасных частей для вальцевого станка Б6-МВА: </h3>

    <?php
  $sql = mysqli_query($link, "SELECT `nomenclature`, `marking` FROM `nomenclature` WHERE marking LIKE 'Б6%'");
  echo"<table class='table table-striped table-warning'><tr><th>№ п/п</th><th>Наименование</th><th>Маркировка</th><tr>";
  $num=1;
  while ($result = mysqli_fetch_array($sql)) {
    echo "<tr><td>$num</td><td class='td-left'>{$result['nomenclature']}</td> <td>{$result['marking']}</tr>";
    $num++;
  }
  echo '</table>';
?>
</div>
</div>




<?require 'footer.php' ?>
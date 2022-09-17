<?require 'header.php' ?>


<div class="maslopressa__page oborudovanie">
<div class="container">
<div class="block-icon">
        <div class="icon"></div>
        </div>
<h1>Маслопресса</h1>
<br>
<div class="form-masslo-btn orange">
<div class="item"><img src="/img/mp-68-1.jpeg" alt=""><div class="btn scrollStart" onclick="togglediv('.MP');">Маслопресс МП-68</div></div>
<div class="item"><img src="/img/ma-m8-mpsh1.jpg" alt=""><div class="btn scrollStart" onclick="togglediv('.M8')">Маслопресс М8-МПШ</div></div>
<div class="item"><img src="/img/mp-a9-1.jpg" alt=""><div class="btn scrollStart" onclick="togglediv('.A9')">Маслопресс А9-МПШ-20-2</div></div>
<div class="item"><img src="/img/mp-e8-mpsh1.jpg" alt=""><div class="btn scrollStart" onclick="togglediv('.E8')">Маслопресс Е8-МПШ</div></div>
<div class="item"><img src="/img/mp-etp20f1.jpeg" alt=""><div class="btn scrollStart" onclick="togglediv('.ETP')">Маслопресс ЕТП-20Ф (ETP-20F)</div></div>
<div class="item"><img src="/img/mp-mp1.jpg" alt=""><div class="btn scrollStart" onclick="togglediv('.PM')">Маслопресс ПМ</div></div>
<div class="item"><img src="/img/ma-t-1.jpg" alt=""><div class="btn scrollStart" onclick="togglediv('.Т7')">Маслоотжимной агрегат Т7-МОА</div></div>
<div class="item"><img src="/img/ma-p-1.jpg" alt=""><div class="btn scrollStart" onclick="togglediv('.R3')">Маслоотжимной агрегат Р3-МОА</div></div>


</div>
<br>
<div class="masslopress scrollEnd">
  <div class="MP block hide">
<div >
<p >Функциональное назначение Маслопресса МП-68 заключается в предварительном отжиме или форпрессовке масла из мезги семян масличных культур таких как подсолнечник, соя, хлопчатник, рапс и т.д.</p>
<p>Модификация маслопресса 2МП-68 используется для заключительного отжима масла из измельченного жмыха, предварительно обработанного.
   Маслопресс укомплектован шнековым валом, зеерной камерой с лебедкой, механизмом регулирования толщины жмыха и приводом.
Эксплуатация МП-68, 2МП-68, осуществляется совместно с жаровнями Ж-68 и другими типами жаровень.</p>
</div> 
<table table class='table table-striped table-warning'><tr><th>Модификация маслопресса</th><th>МП-68</th><th>2МП-68</th></tr>
<tr><td class='td-left'>Производительность, тонн/сутки</td><td>65…75*</td><td>14…35*</td></tr>
<tr><td class='td-left'>Масличность жмыха, %</td><td>11…16</td><td>5…8</td></tr>
<tr><td class='td-left'>Тип двигателя</td><td colspan="2">	Асинхронный, трехфазный, короткозамкнутый</td></tr>
<tr><td class='td-left'>Частота вращения шнекового вала, об/мин</td><td>18, 24, 37</td><td>9,2/12,2/18,5</td></tr>
<tr><td class='td-left'>Номинальная мощность электродвигателя, кВт	</td><td>20/22/30</td><td>22/25/33</td></tr>
<tr><td class='td-left'>Габаритные размеры, мм, не более</td><td>4600х1500х2100</td><td>4650х1800х1750</td></tr>
<tr><td class='td-left'>Масса (без ЗИП), кг, не более</td><td>4600</td><td>4720</td></tr>
</table>
<p>* - производительность указана из расчета максимальной частоты вращения шнекового вала.</p>
<br>
<h3 class="bold">Производим следующий перечень запасных частей для маслопресса МП-68:</h3>

<?php
  $sql = mysqli_query($link, "SELECT `nomenclature`, `marking` FROM `nomenclature` WHERE marking LIKE 'МП%'");
  echo"<table class='table table-striped table-warning'><tr><th>№ п/п</th><th>Наименование</th><th>Маркировка</th><tr>";
  $num=1;
  while ($result = mysqli_fetch_array($sql)) {
    echo "<tr class='table-warning'><td class='wid'>$num</td><td class='td-left'>{$result['nomenclature']}</td> <td>{$result['marking']}</tr>";
    $num++;
  }
  echo '</table>';
?>
</div>

<div class="M8 block hide">
<p>  Производим полный перечень качественных запасных частей для маслоотжимного пресса М8-МПШ (М8-МШП), опыт производства более пяти лет.
Выполняем работы по востановлению и капитальному ремонту маслопрессов, а также прочего оборудования маслоперерабатывающих предприятий.</p>
<h3 class="bold">Производим следующий перечень запасных частей для маслопресса М8-МПШ (М8-МШП):</h3>
<?php
  $sql = mysqli_query($link, "SELECT `nomenclature`, `marking` FROM `nomenclature` WHERE marking LIKE 'М8%'");
  echo"<table class='table table-striped table-warning'><tr><th>№ п/п</th><th>Наименование</th><th>Обозначение</th><tr>";
  $num=1;
  while ($result = mysqli_fetch_array($sql)) {
    echo "<tr><td class='wid'>$num</td><td class='td-left'>{$result['nomenclature']}</td> <td>{$result['marking']}</tr>";
    $num++;
  }
  echo '</table>';
?>
</div>

<div class="A9 block hide">
<p> Пресс используется для отжима масла из семян масличных культур как первичного отжима так и заключительного, методом - прессования А9-МПШ-20-2.
Маслопресс поставляется в комплекте со шнековым валом, зеерной камерой, механизмом регулирования толщины жмыха, приводом.</p>
<table class='table table-striped table-warning'><tr><th>Модификация маслопресса</th><th>А9-МПШ-20</th><th>А9-МПШ-20-2</th></tr>
<tr><td class='td-left'>Производительность, тонн/сутки</td><td>60</td><td>16</td></tr>
<tr><td class='td-left'>Масличность жмыха, %</td><td>14…16</td><td>6…9</td></tr>
<tr><td class='td-left'>Тип двигателя</td><td colspan="2">	Асинхронный, трехфазный, короткозамкнутый</td></tr>
<tr><td class='td-left'>Частота вращения шнекового вала, об/мин</td><td>18</td><td>8</td></tr>
<tr><td class='td-left'>Номинальная мощность электродвигателя, кВт	</td><td>18/40</td><td>28/38</td></tr>
<tr><td class='td-left'>Габаритные размеры, мм, не более</td><td>4800х1700х2000</td><td>4800х1770х1950</td></tr>
<tr><td class='td-left'> Масса (без ЗИП), кг, не более</td><td>6800</td><td>6800</td></tr>
</table>
<p>* - производительность указана из расчета переработки семян подсолнечника</p>
<h3 class="bold">Производим следующий перечень запасных частей для маслопресса А9-МПШ-20:</h3>
<?php
  $sql = mysqli_query($link, "SELECT `nomenclature`, `marking` FROM `nomenclature` WHERE marking LIKE 'А9%'");
  echo"<table class='table table-striped table-warning'><tr><th>№ п/п</th><th>Наименование</th><th>Обозначение</th><tr>";
  $num=1;
  while ($result = mysqli_fetch_array($sql)) {
    echo "<tr><td class='wid'>$num</td><td class='td-left'>{$result['nomenclature']}</td> <td>{$result['marking']}</tr>";
    $num++;
  }
  echo '</table>';
?>
</div>

<div class="E8 block hide">
<p>Производим полный перечень качественных запасных частей для маслоотжимного пресса Е8-МПШ, опыт производства более пяти лет.

Выполняем работы по востановлению и капитальному ремонту маслопрессов, а также прочего оборудования маслоперерабатывающих предприятий.</p>
<h3 class="bold">Производим следующий перечень запасных частей для маслопресса Е8-МПШ:</h3>
<?php
  $sql = mysqli_query($link, "SELECT `nomenclature`, `marking` FROM `nomenclature` WHERE marking LIKE 'Е8%'");
  echo"<table class='table table-striped table-warning'><tr><th>№ п/п</th><th>Наименование</th><th>Обозначение</th><tr>";
  $num=1;
  while ($result = mysqli_fetch_array($sql)) {
    echo "<tr><td class='wid'>$num</td><td class='td-left'>{$result['nomenclature']}</td> <td>{$result['marking']}</tr>";
    $num++;
  }
  echo '</table>';
?>
</div>

<div class="ETP block hide">
<p>Используется для отжима масла из семян масличных культур как первичного отжима так и заключительного методом прессования.

Маслопресс укомплектован шнековым валом, зеерной камерой, приводом.</p>

<table class='table table-striped table-warning'><tr><th>Модификация маслопресса</th><th>ЕТП-20Ф</th><th>ЕТП-20Ф-2</th></tr>
<tr><td class='td-left'>Производительность, тонн/сутки</td><td>60</td><td>16</td></tr>
<tr><td class='td-left'>Масличность жмыха, %</td><td>14…16</td><td>6…9</td></tr>
<tr><td class='td-left'>Тип двигателя</td><td colspan="2">	Асинхронный, трехфазный, короткозамкнутый</td></tr>
<tr><td class='td-left'>Частота вращения шнекового вала, об/мин</td><td>18</td><td>8</td></tr>
<tr><td class='td-left'>Номинальная мощность электродвигателя, кВт	</td><td>18/40</td><td>28/38</td></tr>
<tr><td class='td-left'>Габаритные размеры, мм, не более</td><td>4800х1700х2000</td><td>4800х1770х1950</td></tr>
<tr><td class='td-left'> Масса (без ЗИП), кг, не более</td><td>6800</td><td>6800</td></tr>
</table>
<p>* - производительность указана из расчета переработки семян подсолнечника</p>
<h3 class="bold">Производим следующий перечень запасных частей для маслопресса ЕТП-20Ф:</h3>
<?php
  $sql = mysqli_query($link, "SELECT `nomenclature`, `marking` FROM `nomenclature` WHERE marking LIKE 'ЕТП%'");
  echo"<table class='table table-striped table-warning'><tr><th>№ п/п</th><th>Наименование</th><th>Обозначение</th><tr>";
  $num=1;
  while ($result = mysqli_fetch_array($sql)) {
    echo "<tr><td class='wid'>$num</td><td class='td-left'>{$result['nomenclature']}</td> <td>{$result['marking']}</tr>";
    $num++;
  }
  echo '</table>';
?>
</div>

<div class="PM block hide">
<p>Маслопресс ПМ может осуществлять как предварительный, так и окончательный отжим из мезги семян масличных культур таких как подсолнечник, соя, хлопчатник, рапс и прочих.</p>

<table class='table table-striped table-warning'><tr><th>Технические характеристики</th><th>ПМ</th></tr>
<tr><td class='td-left'>Производительность, тонн/сутки</td><td>24</td></tr>
<tr><td class='td-left'>Масличность жмыха, %</td><td>11…16</td></tr>
<tr><td class='td-left'>Тип двигателя</td><td>	Асинхронный, трехфазный, короткозамкнутый</td></tr>
<tr><td class='td-left'>Номинальная мощность электродвигателя, кВт	</td><td>11</td></tr>
<tr><td class='td-left'>Габаритные размеры, мм, не более</td><td>2830х1320х1495</td></tr>
<tr><td class='td-left'> Масса (без ЗИП), кг, не более</td><td>2900</td></tr>
</table>
<p>* - производительность указана из расчета переработки семян подсолнечника</p>
<h3 class="bold"> Производим следующий перечень запасных частей для маслопресса ПМ:</h3>
<?php
  $sql = mysqli_query($link, "SELECT `nomenclature`, `marking` FROM `nomenclature` WHERE marking LIKE 'ПМ%'");
  echo"<table class='table table-striped table-warning'><tr><th>№ п/п</th><th>Наименование</th><th>Обозначение</th><tr>";
  $num=1;
  while ($result = mysqli_fetch_array($sql)) {
    echo "<tr><td class='wid'>$num</td><td class='td-left'>{$result['nomenclature']}</td> <td>{$result['marking']}</tr>";
    $num++;
  }
  echo '</table>';
?>
</div>

<div class="Т7 block hide">
<p>В состав агрегата входит жаровня 4-х чанная, шнековые маслопресса, инактиватор. Посредством насыщения паром рубашек чаны жаровни обогреваются. Производительность маслоотжимного агрегата составляет 23-35 тн/сутки.</p>
<h3 class="bold">Производим следующий перечень запасных частей для маслоотжимного агрегата Т7-МОА</h3>
<?php
  $sql = mysqli_query($link, "SELECT `nomenclature`, `marking` FROM `nomenclature` WHERE marking LIKE 'Т7%'");
  echo"<table class='table table-striped table-warning'><tr><th>№ п/п</th><th>Наименование</th><th>Обозначение</th><tr>";
  $num=1;
  while ($result = mysqli_fetch_array($sql)) {
    echo "<tr><td class='wid'>$num</td><td class='td-left'>{$result['nomenclature']}</td> <td>{$result['marking']}</tr>";
    $num++;
  }
  echo '</table>';
?>
</div>

<div class="R3 block hide">
<p>В состав маслоотжимного агрегата Р3-МОА входит жаровня 7-ми чанная, питатель шнековый, масслопресс, а также грузоподъемный маханизм (таль). Днище и обечайки обогреваются паром посредством паровой рубашки. Перед подачей сырье уплотняется. Агрегат снабжен устройством регулировки выхода жмыха. Грузоподъемные механизмы облегчают ремонт питателя и маслопресса.</p>
<h3 class="bold">Производим следующий перечень запасных частей для маслоотжимного агрегата Р3-МОА:</h3>
<?php
  $sql = mysqli_query($link, "SELECT `nomenclature`, `marking` FROM `nomenclature` WHERE marking LIKE 'Р3%'");
  echo"<table class='table table-striped table-warning'><tr><th>№ п/п</th><th>Наименование</th><th>Обозначение</th><tr>";
  $num=1;
  while ($result = mysqli_fetch_array($sql)) {
    echo "<tr><td class='wid'>$num</td><td class='td-left'>{$result['nomenclature']}</td> <td>{$result['marking']}</tr>";
    $num++;
  }
  echo '</table>';
?>
</div>


</div>
</div>
</div>
</div>
<br>

<?require 'footer.php' ?>
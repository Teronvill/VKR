<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <link rel="stylesheet" href="/css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="/css/thumbelina.css" />
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.0.min.js"></script>
  
  <title>ТехноПром-Юг</title>
</head>

<body>
  <?php
include_once 'dbConfig.php';


?>


  <header class="header">
    <div class="container">
      <div class="header__top">
        <div class="header__logo">
          <a href="http://tpyug/index.php"><img src="img/logo1.png" alt="Логотип"></a>
        </div>
        <div class="header__left-block">
          <nav class="header__links">
            <ul>
              <li><a href="/index.php" class="header__link">Главная</a></li>
              <li> <a href="/about.php" class="header__link">О нас</a></li>
              <li><a href="#" class="header__link" class="list">Оборудование и детали</a>
                <ul>
                  <li><a href="/Zapchasti-drobilok.php" class="header__link">Запчасти дробилок</a></li>

                  <li><a href="/Valtcevie-stanki.php" class="header__link">Вальцевые станки</a></li>
              </li>

              <li><a href="/Maslopressa.php" class="header__link">Маслопресса</a></li>
              </li>
              <li><a href="/Jarovny.php" class="header__link">Жаровни</a></li>
              </li>
            </ul>
            </li>
            <li> <a href="/services.php" class="header__link">Услуги</a></li>
            <li><a href="/contacts.php" class="header__link">Контакты</a></li>
            </ul>
          </nav>
        </div>
        <div class="header__right-block">
          <div class="phone">
            +7(938)427-27-56 <br>
            +7(938)427-27-36 </div>
          <div class="email">Texnoug@mail.ru</div>
          <div class="phone-none">Не смогли дозвониться? Закажите звонок</div>
          <div class="phone"> <button data-modal class="btn" onclick="contactsCall()">Заказать звонок</button></div>
          <br>
          <br>
        </div>
      </div>
      <!-- <p>Мы специализируется на выпуске запасных частей и оборудования для переработки масличных культур, также имеем большой опыт по ремонту различного технологического оборудования и приводных механизмов к нему.
            </p> -->

    </div>
    </div>
  </header>

  <div class="order__page scroll">
    <div class="container">
      

      <h2>Заполните данные для заказа</h2>
      <div class="order">
        <form id="formOrd" method="POST" onsubmit="return false;">
          <div class="order__hat--name row">

            <div class="input-group row zero-m">
              <div class="col input-group">
                <span class="input-group-text">Название организации</span>
                <input type="text" name="name" class="form-control">
              </div>
              <div class="col input-group ">
                <span class="input-group-text">ФИО контактного лица</span>
                <input type="text" name="contact_person"  class="form-control" >
              </div>
            </div>
            <div class="input-group row zero-m">
              <div class="col input-group">
                <span class="input-group-text">Контактный телефон</span>
                <input type="text" name="phone"  class="form-control">
              </div>

              <div class="col input-group">
                <span class="input-group-text">Email-адрес</span>
                <input type="text" name="email" class="form-control">
              </div>
            </div>
            <div class="input-group row zero-m">
              <div class="col input-group">
                <span class="input-group-text" >Служба доставки</span>
                <?require 'findDelivery.php' ?>
              </div>
              <div class="col input-group">
                <span class="input-group-text" >Склад отправки</span>
                <?require 'findWarehouse.php' ?>
              </div>
            </div>
            <div class="input-group row zero-m">
              <div class="col input-group">
                <span class="input-group-text" name="address">Адрес доставки</span>
                <input type="text" name="address" class="form-control" placeholder="Адрес куда необходимо доставить детали">
              </div>
            </div>
            <div class="input-group row zero-m">
              <div class="col input-group">
                <span class="input-group-text" name="comment">Коментарий к заказу</span>
                <input type="text" name="comment" class="form-control" placeholder="Оставьте коментарий к заказу при необходимости">
              </div>
            </div>
          </div>
          <table class="table table-borderless zero-m">
            <tr class="table-borderless">
              <th>№</th>
              <th>Наименование услуги</th>
              <th>Категория</th>
              <th>Номенклатура</th>
              <th>Количество</th>
              <th>Цена</th>
            </tr>
            <tr class="table-borderless">
              <th>1</th>
              <th><?require 'findServices.php' ?></th>
              <th><select class="form-control categories_list"   onchange="searchNom(this)" name="categories">
              <option onclick="searchNom(this)"">Выберите категорию</option>
              <option>Втулка</option>
              <option>Подшипник</option>
              <option>Стержень</option>
              <option>Нож</option>
              <option>Кольцо</option>
              <option>Винт</option>
              <option>Шнек</option>
              <option>Шкив</option>
              <option>Уплотнения</option>
              <option>Вал</option>
              <option>Молоток</option>
              <option>Комплект</option>
              <option>Конус</option>
              </select>
              </th>
              
              <th><select class="form-control" id="response"  name="nomenclature" class="form-control">
              <option>Номенклатура</option>"
          </select></th>
              <th><input type="text" name="number" class="form-control " onchange="SetPrice(this, this.value)"  ></th>
              <th><label type="text" name="price" class="price" ></th>
            </tr>
          </table>
          <table class="table-borderless table-right">
            <tr class="table-borderless">
          <th>Итого:</th><th id="cost"></th></tr></table>
          <div class="btn" onclick="insertRow()">Добавить строку</div>
          <div class="btn" id="ord_btn" type="submit">Заказать</div>
          <br>
          <br>
          <div class="orange">
          <p>Обращаем ваше внимание, что на текущий момент в связи с экономической ситуацией, перебоями в поставках и наличием других ограничений, расчёт цен на оказываемые услуги может оказаться недействительным. После оформления заказа в кратчайшие сроки наш менеджер свяжется с вами произведя все ценовые расчеты и предоставив всю необходимую информацию.</p>
          <!-- <input required type="text" name="name" placeholder="Введите ваше имя" class="feedback"> -->
          <p>При ремонте детали стоимость расчитывается после проведения диагностики и заключения эксперта, при этом в табличной части указывается стоимость приобритения новой детали</p>
          </div></form>
          <br>
        <div id="results"></div>
      </div>

    </div>

  </div>
  </div>

  <?require 'footer.php' ?>
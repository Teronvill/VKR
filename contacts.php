



<?require 'header.php' ?>


<div class="contacts">
<div class="container">
<div class="block-icon cont">
        <div class="icon"></div>
        </div>
<div class="map scroll black">
<h2>Контакты компании</h2>
<!-- VK Widget -->

<div class="contacts__feedback">
<div class="contacts__block">
    <div class="inf">
<p>Адрес: 350072,Россия, г.Краснодар , ул. Зиповская , дом № 8, офис 705</p>
<p>Телефоны:</p>
<p>+7(903)305-54-03</p>
<p>+7(938)427-27-36</p>
<p>Алексей Владимирович</p>
<p>Email: Texnoug@mail.ru</p>
<p>Время работы с 9:00 до 18:00</p>
</div>
<div id="vk_groups"></div>
<script type="text/javascript">
VK.Widgets.Group("vk_groups", {mode: 3}, 113526238);
</script>
</div>
<div class="request__feedback">
                <h3>Есть вопросы? Оставьте заявку и наш менеджер проведет подробную консультацию по интересующим вас вопросам</h3>
                <div class="feedback__form">
                <form id="formReq"  method="POST" onsubmit="return false;">
                    <input required type="text" name="name" placeholder="Введите ваше имя" class="feedback">
                    <input required type="text" name="phone" placeholder="Введите телефон" class="feedback" maxlength="12">
                    <p class="p-mid">Что вас интересует?</p>
                    <div class="feedback__formtext"><textarea required name="text" class="feedback"></textarea></div>
                    
                </div><input id="sbm_btn" type="submit" class="btn request__btn"></input>
                <div id="results"></div>
                </form></div>
                <div class="block-icon">
        <div class="icon"></div>
        </div>
<h2>Как до нас добраться</h2></div></div></div></div>
<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A6c7644b5daa8c16af48110c29803129d2fa3406b1893580fb4607f239caf108c&amp;width=100%&amp;height=500&amp;lang=ru_RU&amp;scroll=true"></script>




<?require 'footer.php' ?>
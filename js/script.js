let msl_buttons = document.querySelectorAll('.item >.btn');
console.log(msl_buttons);
let msl_block = document.querySelectorAll('.block');
console.log(msl_block);
let countRow = 1;

function insertRow() {   //выбор категории на странице оформления заказа
        let lastRow = document.querySelector('tr:last-child');
        countRow++;
        let tr = document.createElement('tr');
        tr.className = "table-borderless service_list";
        let clone = document.querySelector('.service_list').parentElement;
        const service = clone.cloneNode(true);
        tr.innerHTML = `<th>${countRow}</th><th>${service.innerHTML}</th><th><select class="form-control categories_list"   onchange="searchNom(this)" name="categories">
        <option>Выберите категорию</option>
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
        </select></th><th><select class="form-control" id="response"  name="nomenclature" class="form-control" ><option>Номенклатура</option>"</select></th><th><input type="text" name="number" class="form-control" onchange="SetPrice(this, this.value)"  "></th><th><label type="text" name="price" class="price" ></th>`;
        lastRow.after(tr);

}

function searchNom(nom) {      //поиск номенклатуры
        let category = nom.value;
        $.ajax({
                type: 'GET',
                url: '/findNom.php',
                data: {
                        category: category
                },
                dataType: 'html',
                success: function (response) {
                        $(nom.parentElement.nextElementSibling.firstChild).html(response);
                        console.log(response);
                },
                error: function (xhr, str) {
                        alert('Возникла ошибка ' + xhr.responseCode);
                }
        });
}

$(function () {         //форма заказа
        $('#ord_btn').click(function () {
                $.ajax({
                        type: 'POST',
                        url: '/post_ord.php',
                        data: $('#formOrd').serialize(),
                        dataType: 'html',
                        success: function (data) {
                                $('#results').html(data);
                        },
                        error: function (xhr, str) {
                                alert('Возникла ошибка ' + xhr.responseCode + data);
                        }
                });
        });
});

$(function () {         //форма запроса обратной связи
        $('#sbm_btn').click(function () {
                $.ajax({
                        type: 'POST',
                        url: '/post_req.php',
                        data: $('#formReq').serialize(),
                        dataType: 'html',
                        success: function (data) {
                                $('#results').html(data);
                        },
                        error: function (xhr, str) {
                                alert('Возникла ошибка ' + xhr.responseCode);
                        }
                });
        });
});

$(".scrollStart").click(function () { // ID откуда кливаем
        $('html, body').animate({
                scrollTop: $(".scrollEnd").offset().top // класс объекта к которому приезжаем
        }, 0); // Скорость прокрутки
});

$('html, body').animate({ //прокрутка
        scrollTop: $('.scroll').offset().top
}, 0);

function contactsCall() { //контакты
        document.location.href = '/contacts.php';

};
//установка цены 
function SetPrice(input, price){ 
        
        let sum=price*input.parentElement.previousElementSibling.firstChild.value.split('|')[1];
        input.parentElement.nextElementSibling.firstChild.innerHTML =sum+" руб.";
        SetCost();
}
function SetCost(){ 
        let prices=document.querySelectorAll(".price");
        
        let cost=0;
         for (let el of prices){
                let num = el.innerHTML.split(' ')[0]
                cost+=parseInt(num);
        }
        document.querySelector('#cost').innerHTML=cost+' руб.';
}
function orderPage() {
        document.location.href = '/order.php';
};


function togglediv(block) {
        msl_block.forEach(item => {
                item.classList.add('hide');
        });
        let sBlock = document.querySelector(block);

        sBlock.classList.toggle('hide');
}

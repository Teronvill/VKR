
let data= (obj.split('/'));
$(function () {
    "use strict";

    var myChart = Highcharts.chart('chart', {
        chart: {
            type: 'areaspline'
        },
        
        title: {
            text: 'Количество заказов в месяц'
        },
        xAxis: {
            categories: ['Январь', 'Февраль', 'Март', 'Апрель','Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь' , 'Ноябрь', 'Декабрь']
        },
        yAxis: {
            title: {
                text: ''
            }
        },
        series: [{
            name: 'Заказы',
            data: [parseInt(data[0]),parseInt(data[1]),parseInt(data[2]),parseInt(data[3]),parseInt(data[4]),parseInt(data[5]),parseInt(data[6]),parseInt(data[7]),parseInt(data[8]),parseInt(data[9]),parseInt(data[10]),parseInt(data[11])]
            // data: [obj[0],4,3,4,17,10,30,44,33]
        }]
    });

});

// var chart= "<?php echo json_encode($php_variable); ?>;";



// alert($.parseJSON(data));

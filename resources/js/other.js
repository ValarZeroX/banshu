import 'jquery-ui/dist/jquery-ui.min.js';
import 'jquery-ui-timepicker-addon/dist/jquery-ui-timepicker-addon.min.js';
$(function () {
    'use strict'
    $("#datepicker_start").datepicker({
        dateFormat: 'yy-mm-dd'
    });
    $("#datepicker_end").datepicker({
        dateFormat: 'yy-mm-dd'
    });

    // 獲取今天的日期和時間
    var today = new Date();
    var year = today.getFullYear();
    var month = ('0' + (today.getMonth() + 1)).slice(-2); // 月份是從0開始的，所以需要+1並且確保是兩位數
    var day = ('0' + today.getDate()).slice(-2); // 確保是兩位數
    var hours = ('0' + today.getHours()).slice(-2); // 確保是兩位數
    var minutes = ('0' + today.getMinutes()).slice(-2); // 確保是兩位數
    // var seconds = ('0' + today.getSeconds()).slice(-2); // 確保是兩位數


    var formattedDate = year + '-' + month + '-' + day + ' ' + hours + ':' + minutes + ':' + '00';
    $("#datetime").val(formattedDate)
    $("#datetime").datetimepicker({
        dateFormat: 'yy-mm-dd',
        timeFormat: 'HH:mm:ss'
    });

    $(document).on("click", '.calculateDatetime', function () {
        let datetime = $('#datetime').val()
        let days = parseInt($('#days').val(), 10);
        let hours = parseInt($('#hours').val(), 10);
        let minutes = parseInt($('#minutes').val(), 10);
        let seconds = parseInt($('#seconds').val(), 10);

        let date = parseDateTime(datetime);

        if ($('#add').is(':checked')) {
            date.setDate(date.getDate() + days);
            date.setHours(date.getHours() + hours);
            date.setMinutes(date.getMinutes() + minutes);
            date.setSeconds(date.getSeconds() + seconds);
        } else if ($('#subtract').is(':checked')) {
            date.setDate(date.getDate() - days);
            date.setHours(date.getHours() - hours);
            date.setMinutes(date.getMinutes() - minutes);
            date.setSeconds(date.getSeconds() - seconds);
        }
        let formattedDate = formatDateTime(date);
        $('.result').text(formattedDate)
    });

    function parseDateTime(datetimeStr) {
        let [datePart, timePart] = datetimeStr.split(' ');
        let [year, month, day] = datePart.split('-').map(Number);
        let [hours, minutes, seconds] = timePart.split(':').map(Number);
        return new Date(year, month - 1, day, hours, minutes, seconds);
    }

    function formatDateTime(date) {
        let year = date.getFullYear();
        let month = ('0' + (date.getMonth() + 1)).slice(-2);
        let day = ('0' + date.getDate()).slice(-2);
        let hours = ('0' + date.getHours()).slice(-2);
        let minutes = ('0' + date.getMinutes()).slice(-2);
        let seconds = ('0' + date.getSeconds()).slice(-2);
        return `${year}-${month}-${day} ${hours}:${minutes}:${seconds}`;
    }
})
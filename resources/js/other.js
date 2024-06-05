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

    $("#date_start").datepicker({
        dateFormat: 'yy-mm-dd'
    });
    $("#date_end").datepicker({
        dateFormat: 'yy-mm-dd'
    });
    var formatteNow = year + '-' + month + '-' + day
    $("#date_start").val(formatteNow)
    $("#date_end").val(formatteNow)

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

    $(document).on("click", '.calculateDateBetween', function () {
        var dateStart = $('#date_start').val();
        var dateEnd = $('#date_end').val();
        var diff = calculateDateDifference(new Date(dateStart), new Date(dateEnd));
    });

    function calculateDateDifference(startDate, endDate) {
        // 確保 startDate 在 endDate 之前
        if (startDate > endDate) {
            var temp = startDate;
            startDate = endDate;
            endDate = temp;
        }

        // 計算總天數
        var timeDiff = Math.abs(endDate - startDate);
        var totalDays = Math.ceil(timeDiff / (1000 * 3600 * 24));

        // 計算年數、月數和天數
        var years = endDate.getFullYear() - startDate.getFullYear();
        var months = endDate.getMonth() - startDate.getMonth();
        var days = endDate.getDate() - startDate.getDate();

        if (days < 0) {
            months--;
            var previousMonth = new Date(endDate.getFullYear(), endDate.getMonth(), 0);
            days += previousMonth.getDate();
        }

        if (months < 0) {
            years--;
            months += 12;
        }

        // 計算月數和天數
        var monthsDiff = (endDate.getFullYear() - startDate.getFullYear()) * 12 + (endDate.getMonth() - startDate.getMonth());
        if (endDate.getDate() < startDate.getDate()) {
            monthsDiff--;
        }
        var remainingDaysForMonths = endDate.getDate() - startDate.getDate();
        if (remainingDaysForMonths < 0) {
            var previousMonth = new Date(endDate.getFullYear(), endDate.getMonth() - 1, startDate.getDate());
            remainingDaysForMonths = Math.ceil((endDate - previousMonth) / (1000 * 3600 * 24));
        }

        // 計算周數和天數
        var weeks = Math.floor(totalDays / 7);
        var remainingDaysForWeeks = totalDays % 7;

        let dayString = window.other.days;
        let monthString = window.other.months;
        let weekString = window.other.weeks;
        let yearString = window.other.year;

        $('.result_day').text(' = ' + totalDays + ' ' + dayString);
        $('.result_week').text(' = ' + weeks + ' ' + weekString + ' ' + remainingDaysForWeeks + ' ' + dayString);
        $('.result_month').text(' = ' + monthsDiff + ' ' + monthString + ' ' + remainingDaysForMonths + ' ' + dayString);
        $('.result_year').text(' = ' + years + ' ' + yearString + ' ' + months + ' ' + monthString + ' ' + days + ' ' + dayString)
    }

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
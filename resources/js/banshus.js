import { forEach } from "lodash";

$(function () {
    'use strict'
    $(".decOnly").on("keypress", function (event) {
        if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
            event.preventDefault();
        }
    });

    $('.lengthCalculate').on("keyup", function (){
        calculate($(this).attr("id"), jsonData, $(this).val())
    })

    function calculate(lengthID, jsonData, inputValue) {
        var formulaArray = jsonData[lengthID]
        Object.keys(formulaArray).forEach(function(id) {
            if (id == lengthID) {
                return
            }
            let formula = formulaArray[id];
            let answer = inputValue * formula
            // let roundedNumber = Number(answer.toFixed(6));
            $('#'+id).val(answer)
        });
    }
})
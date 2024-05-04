import { forEach } from "lodash";

$(function () {
    'use strict'
    $(".decOnly").on("keypress", function (event) {
        if ((event.which != 46 || $(this).val().indexOf('.') != -1) &&
        (event.which < 48 || event.which > 57) &&
        (event.which != 45 || $(this).caret().start != 0)) {
        event.preventDefault();
    }
    });

    $('.calculate').on("keyup", function (){
        calculate($(this).attr("id"), jsonData, $(this).val())
    })

    $('.calculateTemperature').on("keyup", function (){
        calculateTemperature($(this).attr("id"), jsonData, $(this).val())
    })

    function calculate(lengthID, jsonData, inputValue) {
        let regex = /^-?\d*\.?\d+$/;
        if (!regex.test(inputValue)) {
            return
        }
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

    function calculateTemperature(lengthID, jsonData, inputValue) {
        let regex = /^-?\d*\.?\d+$/;
        if (!regex.test(inputValue)) {
            return
        }
        var formulaArray = jsonData[lengthID]
        Object.keys(formulaArray).forEach(function(id) {
            if (id == lengthID) {
                return
            }
            let formula = formulaArray[id];
            let a = inputValue
            let answer = eval(formula.replace(/a/g, a));
            //精準度4
            let roundedNumber = Number(answer.toFixed(4));
            $('#'+id).val(roundedNumber)
        });
    }
})
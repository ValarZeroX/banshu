document.addEventListener('DOMContentLoaded', function () {
    $(function () {
        'use strict'
        $('#languageSelect').change(function () {
            var currentUrl = window.location.href;
            var language = $(this).val();
            var parts = currentUrl.split("/");
            parts[3] = language
            var newUrl = parts.join("/");
            window.location.href = newUrl;
        });

        $(".decOnly").on("keypress", function (event) {
            if ((event.which != 46 || $(this).val().indexOf('.') != -1) &&
                (event.which < 48 || event.which > 57) &&
                (event.which != 45 || $(this).caret().start != 0)) {
                event.preventDefault();
            }
        });

        $('.calculate').on("keyup", function () {
            calculate($(this).attr("id"), jsonData, $(this).val())
        })

        $('.calculateTemperature').on("keyup", function () {
            calculateTemperature($(this).attr("id"), jsonData, $(this).val())
        })

        // $('.change_imperial').on("click", function () {
        //     $('.metric_units').hide()
        //     $('.imperial_units').show()
        //     $('.calculateBMI').attr('class')
        //     $('.calculateBMI').removeClass('calculateBMI').addClass('calculateBMIImperial');
        // })

        // $('.change_metric').on("click", function () {
        //     $('.imperial_units').hide()
        //     $('.metric_units').show()
        //     $('.calculateBMIImperial').removeClass('calculateBMIImperial').addClass('calculateBMI');
        // })

        // $(document).on("click", '.calculateBMI', function () {
        //     let height = $('#height').val()
        //     let weight = $('#weight').val()
        //     let reslut = weight / ((height / 100) * (height / 100))
        //     let roundNumber = Number(reslut.toFixed(2))
        //     $('.result').text(roundNumber)
        //     let prime = roundNumber / 25
        //     let roundPrime = Number(prime.toFixed(2))
        //     $('.result_prime').text(roundPrime)
        // })

        // $(document).on("click", '.calculateBMIImperial', function () {
        //     let foot = $('#foot').val()
        //     let inch = $('#inch').val()
        //     let pound = $('#pound').val()
        //     let totalInches = (foot * 12) + parseInt(inch)
        //     let totalMeters = (totalInches*0.0254)
        //     let weightKg = pound * 0.45359237
        //     let bmi = weightKg / (totalMeters * totalMeters)
        //     let roundNumber = Number(bmi.toFixed(2))
        //     $('.result').text(roundNumber)
        //     let prime = roundNumber/25
        //     let roundPrime = Number(prime.toFixed(2))
        //     $('.result_prime').text(roundPrime)
        // })

        function calculate(lengthID, jsonData, inputValue) {
            let regex = /^-?\d*\.?\d+$/;
            if (!regex.test(inputValue)) {
                return
            }
            var formulaArray = jsonData[lengthID]
            Object.keys(formulaArray).forEach(function (id) {
                if (id == lengthID) {
                    return
                }
                let formula = formulaArray[id];
                let answer = inputValue * formula
                // let roundedNumber = Number(answer.toFixed(6));
                $('#' + id).val(answer)
            });
        }

        function calculateTemperature(lengthID, jsonData, inputValue) {
            let regex = /^-?\d*\.?\d+$/;
            if (!regex.test(inputValue)) {
                return
            }
            var formulaArray = jsonData[lengthID]
            Object.keys(formulaArray).forEach(function (id) {
                if (id == lengthID) {
                    return
                }
                let formula = formulaArray[id];
                let a = inputValue
                let answer = eval(formula.replace(/a/g, a));
                //精準度4
                let roundedNumber = Number(answer.toFixed(4));
                $('#' + id).val(roundedNumber)
            });
        }
    })
}, false);
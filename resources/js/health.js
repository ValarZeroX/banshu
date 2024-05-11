$(function () {
    'use strict'
    var unit = 'metric'
    $('.change_imperial').on("click", function () {
        $('.metric_units').hide()
        $('.imperial_units').show()
        $('.calculateBodyFat').attr('class')
        $('.calculateBodyFat').removeClass('calculateBodyFat').addClass('calculateBodyFatImperial');
        $('.calculateBMI').attr('class')
        $('.calculateBMI').removeClass('calculateBMI').addClass('calculateBMIImperial');
        unit = 'imperial'
        if ($('#female').is(':checked')) {
            $('.hip_' + unit).show()
        }
    })

    $('.change_metric').on("click", function () {
        $('.imperial_units').hide()
        $('.metric_units').show()
        $('.calculateBodyFatImperial').removeClass('calculateBodyFatImperial').addClass('calculateBodyFat');
        $('.metric_units').show()
        $('.calculateBMIImperial').removeClass('calculateBMIImperial').addClass('calculateBMI');
        unit = 'metric'
        if ($('#female').is(':checked')) {
            $('.hip_' + unit).show()
        }
    })

    $(document).on("click", '.gender', function () {
        let idName = $(this).attr('id')
        if (idName == 'female') {
            $('.hip_' + unit).show()
        } else {
            $('.hip_metric').hide()
            $('.hip_imperial').hide()
        }
    })

    $(document).on("click", '.calculateBodyFat', function () {
        let gender = 1
        if ($('#male').is(':checked')) {
            gender = 1
        } else if ($('#female').is(':checked')) {
            gender = 0
        }
        let age = $('#age').val()
        let height = $('#height').val()
        let weight = $('#weight').val()

        if (age == "" || height == "" || weight == "") {
            return
        }
        let bmi = weight / ((height / 100) * (height / 100))
        let neck = parseFloat($('#neck').val())
        let waist = parseFloat($('#waist').val())
        let hip = parseFloat($('#hip').val())



        let isCheck = false
        if (gender == 1) {
            isCheck = (!isNaN(neck) && !isNaN(waist))
        } else {
            isCheck = (!isNaN(neck) && !isNaN(waist) && !isNaN(hip))
        }
        if (isCheck) {
            let logValue = 0
            if (gender == 1) {
                logValue = Math.log10(waist - neck)
            } else {
                logValue = Math.log10(waist + hip - neck)
            }
            let logHeight = Math.log10(height);
            let result = 0
            if (gender == 1) {
                result = (495 / (1.0324 - 0.190747 * logValue + 0.15456 * logHeight)) - 450
            } else {
                result = (495 / (1.29579 - 0.35004 * logValue + 0.22100 * logHeight)) - 450
            }
            let roundResult = Number(result.toFixed(2))
            $('.result').text(roundResult + '%')
        } else {
            let bodyFat = 0
            if (age <= 15) {
                bodyFat = (1.51 * bmi) + (0.7 * age) - (3.6 * gender) + 1.4
            } else {
                bodyFat = (1.2 * bmi) + (0.23 * age) - (10.8 * gender) - 5.4
            }
            let roundBodyFat = Number(bodyFat.toFixed(2))
            $('.result').text(roundBodyFat + '%')
        }
    })

    $(document).on("click", '.calculateBodyFatImperial', function () {
        let gender = 1
        if ($('#male').is(':checked')) {
            gender = 1
        } else if ($('#female').is(':checked')) {
            gender = 0
        }
        let age = $('#age').val()
        let foot = $('#foot').val()
        let inch = $('#inch').val()
        let pound = $('#pound').val()
        if (age == "" || foot == "" || inch == "" || pound == "") {
            return
        }
        let totalInches = (foot * 12) + parseFloat(inch)
        let totalMeters = (totalInches * 0.0254)
        let weightKg = pound * 0.45359237
        let bmi = weightKg / (totalMeters * totalMeters)

        let neck_foot = parseFloat($('#neck_foot').val())
        let neck_inch = parseFloat($('#neck_inch').val())
        if (isNaN(neck_foot)) {
            neck_foot = 0
        }
        let neckInch = 0
        if (isNaN(neck_inch)) {
            neckInch = (neck_foot * 12)
        } else {
            neckInch = (neck_foot * 12) + neck_inch
        }

        let waist_foot = parseFloat($('#waist_foot').val())
        let waist_inch = parseFloat($('#waist_inch').val())
        if (isNaN(waist_foot)) {
            waist_foot = 0
        }
        let waistInch = 0
        if (isNaN(waist_inch)) {
            waistInch = (waist_foot * 12)
        } else {
            waistInch = (waist_foot * 12) + waist_inch
        }

        let isCheck = true
        let hipInch = 0
        if (gender == 1) {
            isCheck = (neckInch == 0 || waistInch == 0)
        } else {
            let hip_foot = parseFloat($('#hip_foot').val())
            if (isNaN(hip_foot)) {
                hip_foot = 0
            }
            let hip_inch = parseFloat($('#hip_inch').val())
            if (isNaN(hip_inch)) {
                hipInch = (hip_foot * 12)
            } else {
                hipInch = (hip_foot * 12) + hip_inch
            }
            isCheck = (neckInch == 0 || waistInch == 0 || hipInch == 0)
        }
        if (isCheck) {
            let bodyFat = 0
            if (age <= 15) {
                bodyFat = (1.51 * bmi) + (0.7 * age) - (3.6 * gender) + 1.4
            } else {
                bodyFat = (1.2 * bmi) + (0.23 * age) - (10.8 * gender) - 5.4
            }
            let roundBodyFat = Number(bodyFat.toFixed(2))
            $('.result').text(roundBodyFat + '%')
        } else {
            let logValue = 0
            if (gender == 1) {
                logValue = Math.log10(waistInch - neckInch);
            } else {
                console.log(waistInch + hipInch - neckInch)
                logValue = Math.log10(waistInch + hipInch - neckInch);
            }
            let logHeight = Math.log10(totalInches);
            let result = 0
            if (gender == 1) {
                result = 86.010 * logValue - 70.041 * logHeight + 36.76;
            } else {
                result = 163.205 * logValue - 97.684 * logHeight - 78.387;
            }
            let roundResult = Number(result.toFixed(2))
            $('.result').text(roundResult + '%')
        }
    })

    $(document).on("click", '.calculateBMI', function () {
        let height = $('#height').val()
        let weight = $('#weight').val()
        let reslut = weight / ((height / 100) * (height / 100))
        let roundNumber = Number(reslut.toFixed(2))
        $('.result').text(roundNumber)
        let prime = roundNumber / 25
        let roundPrime = Number(prime.toFixed(2))
        $('.result_prime').text(roundPrime)
    })

    $(document).on("click", '.calculateBMIImperial', function () {
        let foot = $('#foot').val()
        let inch = $('#inch').val()
        let pound = $('#pound').val()
        let totalInches = (foot * 12) + parseInt(inch)
        let totalMeters = (totalInches * 0.0254)
        let weightKg = pound * 0.45359237
        let bmi = weightKg / (totalMeters * totalMeters)
        let roundNumber = Number(bmi.toFixed(2))
        $('.result').text(roundNumber)
        let prime = roundNumber / 25
        let roundPrime = Number(prime.toFixed(2))
        $('.result_prime').text(roundPrime)
    })
})
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
        $('.calculateBMR').attr('class')
        $('.calculateBMR').removeClass('calculateBMR').addClass('calculateBMRImperial');
        $('.calculateTDEE').attr('class')
        $('.calculateTDEE').removeClass('calculateTDEE').addClass('calculateTDEEImperial');
        unit = 'imperial'
        if ($('#female').is(':checked')) {
            $('.hip_' + unit).show()
        }
    })

    $('.change_metric').on("click", function () {
        $('.imperial_units').hide()
        $('.metric_units').show()
        $('.calculateBodyFatImperial').removeClass('calculateBodyFatImperial').addClass('calculateBodyFat');
        $('.calculateBMIImperial').removeClass('calculateBMIImperial').addClass('calculateBMI');
        $('.calculateBMRImperial').removeClass('calculateBMRImperial').addClass('calculateBMR');
        $('.calculateTDEEImperial').removeClass('calculateTDEEImperial').addClass('calculateTDEE');
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
        let bodyFat = 0
        if (isCheck) {
            let logValue = 0
            if (gender == 1) {
                logValue = Math.log10(waist - neck)
            } else {
                logValue = Math.log10(waist + hip - neck)
            }
            let logHeight = Math.log10(height);
            if (gender == 1) {
                bodyFat = (495 / (1.0324 - 0.190747 * logValue + 0.15456 * logHeight)) - 450
            } else {
                bodyFat = (495 / (1.29579 - 0.35004 * logValue + 0.22100 * logHeight)) - 450
            }
        } else {
            if (age <= 15) {
                bodyFat = (1.51 * bmi) + (0.7 * age) - (3.6 * gender) + 1.4
            } else {
                bodyFat = (1.2 * bmi) + (0.23 * age) - (10.8 * gender) - 5.4
            }
        }
        let roundBodyFat = Number(bodyFat.toFixed(2))
        $('.result').text(roundBodyFat + '%')
        let category = ''
        if (gender == 1) {
            category = setBoyBodyFatResult(roundBodyFat, age)
        } else {
            category = setGirlBodyFatResult(roundBodyFat, age)
        }
        $('.result_1').text(category);
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
        let bodyFat = 0
        if (isCheck) {
            if (age <= 15) {
                bodyFat = (1.51 * bmi) + (0.7 * age) - (3.6 * gender) + 1.4
            } else {
                bodyFat = (1.2 * bmi) + (0.23 * age) - (10.8 * gender) - 5.4
            }
        } else {
            let logValue = 0
            if (gender == 1) {
                logValue = Math.log10(waistInch - neckInch);
            } else {
                logValue = Math.log10(waistInch + hipInch - neckInch);
            }
            let logHeight = Math.log10(totalInches);
            let result = 0
            if (gender == 1) {
                bodyFat = 86.010 * logValue - 70.041 * logHeight + 36.76;
            } else {
                bodyFat = 163.205 * logValue - 97.684 * logHeight - 78.387;
            }
        }
        let roundBodyFat = Number(bodyFat.toFixed(2))
        $('.result').text(roundBodyFat + '%')
        let category = ''
        if (gender == 1) {
            category = setBoyBodyFatResult(roundBodyFat, age)
        } else {
            category = setGirlBodyFatResult(roundBodyFat, age)
        }
        $('.result_1').text(category);
    })

    $(document).on("click", '.calculateBMI', function () {
        let height = $('#height').val()
        let weight = $('#weight').val()

        if (height == '' || weight == '') {
            return
        }
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
        if (foot == '' || inch == '' || pound == '') {
            return
        }
        let totalInches = (foot * 12) + parseFloat(inch)
        let totalMeters = (totalInches * 0.0254)
        let weightKg = pound * 0.45359237
        let bmi = weightKg / (totalMeters * totalMeters)
        let roundNumber = Number(bmi.toFixed(2))
        $('.result').text(roundNumber)
        let prime = roundNumber / 25
        let roundPrime = Number(prime.toFixed(2))
        $('.result_prime').text(roundPrime)
    })

    function setBoyBodyFatResult(roundBodyFat, age) {
        let underfat = window.health.underfat
        let healthy = window.health.healthy
        let overfat = window.health.overfat
        let obese = window.health.obese

        if (age <= 39) {
            if (roundBodyFat <= 10) {
                return underfat;
            }
            if (roundBodyFat > 10 && roundBodyFat <= 21) {
                return healthy;
            }
            if (roundBodyFat > 21 && roundBodyFat <= 26) {
                return overfat;
            }
            if (roundBodyFat > 26) {
                return obese;
            }
        }
        if (age > 39 && age <= 59) {
            if (roundBodyFat <= 11) {
                return underfat;
            }
            if (roundBodyFat > 11 && roundBodyFat <= 22) {
                return healthy;
            }
            if (roundBodyFat > 22 && roundBodyFat <= 27) {
                return overfat;
            }
            if (roundBodyFat > 27) {
                return obese;
            }
        }
        if (age > 59) {
            if (roundBodyFat <= 13) {
                return underfat;
            }
            if (roundBodyFat > 13 && roundBodyFat <= 24) {
                return healthy;
            }
            if (roundBodyFat > 24 && roundBodyFat <= 29) {
                return overfat;
            }
            if (roundBodyFat > 30) {
                return obese;
            }
        }
    }
    function setGirlBodyFatResult(roundBodyFat, age) {
        let underfat = window.health.underfat
        let healthy = window.health.healthy
        let overfat = window.health.overfat
        let obese = window.health.obese

        if (age <= 39) {
            if (roundBodyFat <= 20) {
                return underfat;
            }
            if (roundBodyFat > 21 && roundBodyFat <= 34) {
                return healthy;
            }
            if (roundBodyFat > 34 && roundBodyFat <= 39) {
                return overfat;
            }
            if (roundBodyFat > 39) {
                return obese;
            }
        }
        if (age > 39 && age <= 59) {
            if (roundBodyFat <= 21) {
                return underfat;
            }
            if (roundBodyFat > 21 && roundBodyFat <= 35) {
                return healthy;
            }
            if (roundBodyFat > 35 && roundBodyFat <= 40) {
                return overfat;
            }
            if (roundBodyFat > 40) {
                return obese;
            }
        }
        if (age > 59) {
            if (roundBodyFat <= 22) {
                return underfat;
            }
            if (roundBodyFat > 22 && roundBodyFat <= 29) {
                return healthy;
            }
            if (roundBodyFat > 29 && roundBodyFat <= 36) {
                return overfat;
            }
            if (roundBodyFat > 36) {
                return obese;
            }
        }
    }

    $(document).on("click", '.calculateBMR', function () {
        let bmr = BMR()
        if (!bmr) {
            return
        }
        let roundNumber = Number(bmr.toFixed(2))
        $('.result').text(roundNumber)
    })

    $(document).on("click", '.calculateBMRImperial', function () {
        let bmr = BMRImperial()
        if (!bmr) {
            return
        }
        let roundNumber = Number(bmr.toFixed(2))
        $('.result').text(roundNumber)
    })

    $('#equation').change(function () {
        let equation = $(this).val()
        if (equation == 3) {
            $('.equation_fat').show()
        } else {
            $('.equation_fat').hide()
        }
    });

    function BMR()
    {
        let gender = 1
        if ($('#male').is(':checked')) {
            gender = 1
        } else if ($('#female').is(':checked')) {
            gender = 0
        }
        let age = $('#age').val()
        let height = $('#height').val()
        let weight = $('#weight').val()
        let equation = $('#equation').val();
        if (age == "" || height == "" || weight == "") {
            return false
        }
        let bmr = 0
        let male = 0
        let female = 0
        if (equation == 1) {
            male = 10 * weight + 6.25 * height - 5 * age + 5
            female = 10 * weight + 6.25 * height - 5 * age - 161
        }
        if (equation == 2) {
            male = 13.397 * weight + 4.799 * height - 5.677 * age + 88.362
            female = 9.247 * weight + 3.098 * height - 4.330 * age + 447.593
        }
        if (equation == 3) {
            let body_fat = $('#body_fat').val();
            if (body_fat == "") {
                return false
            }
            let equation3 = 370 + 21.6 * (1 - body_fat / 100) * weight
            male = equation3
            female = equation3
        }

        if (gender == 1) {
            bmr = male
        } else {
            bmr = female
        }
        return bmr
    }

    function BMRImperial() {
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
        let equation = $('#equation').val();
        if (age == "" || foot == '' || inch == '' || pound == '') {
            return false
        }

        let totalInches = (foot * 12) + parseFloat(inch)
        let height = (totalInches * 2.54)
        let weight = pound * 0.45359237

        let bmr = 0
        let male = 0
        let female = 0
        if (equation == 1) {
            male = 10 * weight + 6.25 * height - 5 * age + 5
            female = 10 * weight + 6.25 * height - 5 * age - 161
        }
        if (equation == 2) {
            male = 13.397 * weight + 4.799 * height - 5.677 * age + 88.362
            female = 9.247 * weight + 3.098 * height - 4.330 * age + 447.593
        }
        if (equation == 3) {
            let body_fat = $('#body_fat').val();
            if (body_fat == "") {
                return false
            }
            let equation3 = 370 + 21.6 * (1 - body_fat / 100) * weight
            male = equation3
            female = equation3
        }
        if (gender == 1) {
            bmr = male
        } else {
            bmr = female
        }
        return bmr
    }

    function TDEE() {
        let activity = $('#activity').val();
        let level = 1.2
        switch (activity) {
            case "1":
                level = 1.2
                break;
            case "2":
                level = 1.375
                break;
            case "3":
                level = 1.55
                break;
            case "4":
                level = 1.725
                break;
            case "5":
                level = 1.9
                break;
            case "6":
                level = 2.4
                break;
            default:
                level = 1.2
                break;
        }
        return level
    }

    $(document).on("click", '.calculateTDEE', function () {
        let bmr = BMR()
        if (!bmr) {
            return
        }
        let roundNumber = Number(bmr.toFixed(2))
        $('.result').text(roundNumber)

        let level = TDEE()
        let tdee = bmr * level
        let roundTdee = Number(tdee.toFixed(2))
        $('.result_tdee').text(roundTdee)
    })

    $(document).on("click", '.calculateTDEEImperial', function () {
        let bmr = BMRImperial()
        if (!bmr) {
            return
        }
        let roundNumber = Number(bmr.toFixed(2))
        $('.result').text(roundNumber)

        let level = TDEE()
        let tdee = bmr * level
        let roundTdee = Number(tdee.toFixed(2))
        $('.result_tdee').text(roundTdee)
    })
})
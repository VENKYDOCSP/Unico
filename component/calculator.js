$(document).ready(function () {
    var AmtSliderForTM
    var InputBoxForTM
    var TimePeriodBoxForTM
    var timePeriodSlider
    var interestBoxForTM
    var interest
    var LoanAmountInputBox
    var InterestRateInputBox
    //LoanAmount
    $("#AmtSliderForTM").on("input", function () {
        AmtSliderForTM = $("#AmtSliderForTM").val()
        $("#InputBoxForTM").html(AmtSliderForTM)
        $(".value").html(AmtSliderForTM)
        $("#AmtSliderForTM").attr({
            "step": 1000
        })
        $("#fvalue").val(AmtSliderForTM)
        TMCalculator()
    })
    $("#fvalue").on("input", function () {
        LoanAmountInputBox = $("#fvalue").val()
        // console.log(LoanAmountInputBox, "LoanAmountInputBox")
        if (parseInt(LoanAmountInputBox) > 20000000 || parseInt(LoanAmountInputBox) < 10000) {
            $("#RangeExceeds").show();
        } else {
            $(".value").html(Number(LoanAmountInputBox).toLocaleString('en-IN'))
            $("#RangeExceeds").hide();
        }
        $("#AmtSliderForTM").val(LoanAmountInputBox)
        $("#AmtSliderForTM").attr({
            "step": 1
        })
        $("#InputBoxForTM").html(LoanAmountInputBox)
        TMCalculator()
    })
    $("#InputBoxForTM").on("input", function () {
        InputBoxForTM = $("#InputBoxForTM").html()
        if (parseInt(InputBoxForTM) > 20000000 || parseInt(InputBoxForTM) < 10000) {
            $("#RangeExceedsForTM").show();
        } else {
            $(".value").html(InputBoxForTM)
            $("#RangeExceedsForTM").hide();
        }
        $("#AmtSliderForTM").val(InputBoxForTM)
        $("#AmtSliderForTM").attr({
            "step": 1
        })
        TMCalculator()
    })
    $("#timePeriodSlider").on("input", function () {
        timePeriodSlider = $("#timePeriodSlider").val()
        $("#TimePeriodBoxForTM").html(timePeriodSlider)
        $("#interest1").val(timePeriodSlider);
        // console.log($("#TimePeriodBoxForTM").val(), "Input Time")
        TMCalculator()
    })
    $("#TimePeriodBoxForTM").on("input", function () {
        TimePeriodBoxForTM = $("#TimePeriodBoxForTM").html()
        if (parseInt($("#TimePeriodBoxForTM").val()) > 5 || parseInt($("#TimePeriodBoxForTM").val()) < 3) {
            $("#TimeRangeExceedsForTM").show();
        } else {
            $("#TimeRangeExceedsForTM").hide();
        }
        $("#timePeriodSlider").val(TimePeriodBoxForTM)
        TMCalculator()
    })
    $("#interestBoxForTM").on("input", function () {
        interestBoxForTM = $("#interestBoxForTM").val()
        $("#timeYear").html(interestBoxForTM)
        // console.log($("#TimePeriodBoxForTM").val(), "Input Time")
        TMCalculator()
    })
    $("#interest1").on("input", function () {
        InterestRateInputBox = $("#interest1").val()
        if (InterestRateInputBox > 24 || InterestRateInputBox < 7) {
            $("#InterestRangeExceeds").show();
        } else {
            $("#InterestRangeExceeds").hide();
        }
        $("#timePeriodSlider").val(InterestRateInputBox)
        $("#timePeriodSlider").attr({
            "step": 0.001
        })
        $("#TimePeriodBoxForTM").html(InterestRateInputBox)
        TMCalculator()
    })
    $("#timeYear").on("input", function () {
        interest = $("#timeYear").html()
        if (parseInt($("#TimePeriodBoxForTM").val()) > 5 || parseInt($("#TimePeriodBoxForTM").val()) < 3) {
            $("#TimeRangeExceedsForTM").show();
        } else {
            $("#TimeRangeExceedsForTM").hide();
        }
        $("#timePeriodSlider").val(interest)
        TMCalculator()
    })
    function TMCalculator() {
        const PrincipleAmt = parseFloat($("#AmtSliderForTM").val());
        const bankRate = parseFloat($("#timePeriodSlider").val());
        const Time = parseFloat($("#interestBoxForTM").val());
        var t = Time;
        var r = bankRate / (12 * 100);
        var n = t * 12;
        // Calculating EMI
        var EMI = (PrincipleAmt * r * Math.pow((1 + r), n)) / (Math.pow((1 + r), n) - 1);
        // console.log(EMI, "EMI")
        var totalPayment = EMI * n;
        // console.log(totalPayment, "totalPayment")
        var totalInterest = totalPayment - PrincipleAmt;
        // console.log(totalInterest,)
        // console.log("EMI:", EMI);
        // console.log(Time, "time", n)
        // console.log("Total Interest Paid:", (totalInterest + PrincipleAmt) / n);
        // console.log("Hello in calculator.js")
        $("#AmountEarned").html(parseFloat(totalInterest).toLocaleString(undefined, { maximumFractionDigits: 0 }));
        $("#EMI").html(parseFloat((totalInterest + PrincipleAmt) / n).toLocaleString(undefined, { maximumFractionDigits: 0 }));
        createPieChart(PrincipleAmt);
    }
    TMCalculator()
    var myPieChart3;
    function createPieChart(principal) {
        const earned = document.querySelector("#AmountEarned");
        var earnings = earned.innerHTML;
        var earningsValue = parseFloat(earnings.replace(/,/g, ''));
        // console.log("barchart", earned)
        if (isNaN(earningsValue)) {
            return;
        }
        var data = {
            datasets: [{
                data: [Number(principal), earningsValue],
                backgroundColor: ['#35646b', '#FFFFFF'],
                cutout: '83%',
            }],
        };
        var ctx = document.getElementById('myPieChart3').getContext('2d');
        // console.log("barchart", ctx)
        if (myPieChart3) {
            myPieChart3.destroy();
        }
        myPieChart3 = new Chart(ctx, {
            type: 'doughnut',
            data: data,
            options: {
            },
        });
    }
})
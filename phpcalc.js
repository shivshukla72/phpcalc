var secondoperand = "";
var firstoperand = "0";
var opt = '+';
var result = "";
var reset = 1;
var operator1;
function getvalue(operand) {
    if (reset == 0) {
        // secondoperand="";
        firstoperand = 0;
        opt = '+';
        result = 0;
        reset = 1;
    }
    secondoperand += operand;
    document.getElementById('res').value = secondoperand;
    console.log(secondoperand);
}
function sendData(opt) {
    var opt2 = opt
    var final;
    $.ajax({
        url: 'calculation.php',
        type: 'post',
        data: { 'second': secondoperand, 'first': firstoperand, 'opt1': opt2 },
        success: function (res) {
            final = res;
            console.log(final);
            let x = final + operator1;
            if (operator1 == '=') {
                x = final;
            }
            document.getElementById('res').value = x;
            console.log(x);
            firstoperand = final;

        },
        async: true

    })

}
function solve(operator) {
    operator1 = operator;
    if (reset == 0) {
        secondoperand = "";
        reset = 1;
        opt = '+';
    }
    console.log(secondoperand);
    switch (opt) {
        case "+":
            sendData(opt);
            break;
        case "-":
            sendData(opt);
            break;
        case "*":
            sendData(opt);
            break;
        case "/":
            sendData(opt);
            break;
        case "=":
            firstoperand = firstoperand.toString();
            result = firstoperand;
            break;
        default:
            opt = '+';
            break;
    }
    secondoperand = '';
    opt = operator1;
    if (opt == '=') {
        firstoperand = result;
        let x = result;
        document.getElementById('res').value = x;
        reset = 0;
    }
}
function clears(){
    document.getElementById('res').value = '';
    secondoperand = "";
    firstoperand = 0;
    opt = '+';
}

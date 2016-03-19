// the main js file for Calculator
/*
Author: Maoxu Liu
Description: Calculator in three modes" binary, decimal, hexadecimal"
Start date: 3/8/2016
End date: 3/12/2016
Last improvement date: 3/18/2016
*/
var val1 = 0;
var val2 = 0;
var valAns = 0;
var valString = "0";


/*
Following functions are used when clicking number button.
*/
function InputZero() {
    // Action for clicking button "0".
    if (valString == "0") {
        valString = "0";
        document.getElementById("res").innerHTML = "0";
    } else {
        valString = valString.concat("0");
        document.getElementById("res").innerHTML = valString;
    }
}

function InputOne() {
    // Action for clicking button "1".
    if (valString == "0") {
        valString = "1"; // assign the string value to 1
        document.getElementById("res").innerHTML = "1";
    } else {
        valString = valString.concat("1");
        document.getElementById("res").innerHTML = valString;
    }
}

function InputTwo() {
    // Action for clicking button "2".
    if (valString == "0") {
        valString = "2"; // assign the string value
        document.getElementById("res").innerHTML = valString;
    } else {
        valString = valString.concat("2");
        document.getElementById("res").innerHTML = valString;
    }
}

function InputThree() {
    // Action for clicking button "3".
    if (valString == "0") {
        valString = "3"; // assign the string value
        document.getElementById("res").innerHTML = valString;
    } else {
        valString = valString.concat("3");
        document.getElementById("res").innerHTML = valString;
    }
}

function InputFour() {
    // Action for clicking button "4".
    if (valString == "0") {
        valString = "4"; // assign the string value
        document.getElementById("res").innerHTML = valString;
    } else {
        valString = valString.concat("4");
        document.getElementById("res").innerHTML = valString;
    }
}

function InputFive() {
    // Action for clicking button "5".
    if (valString == "0") {
        valString = "5"; // assign the string value
        document.getElementById("res").innerHTML = valString;
    } else {
        valString = valString.concat("5");
        document.getElementById("res").innerHTML = valString;
    }
}

function InputSix() {
    // Action for clicking button "6".
    if (valString == "0") {
        valString = "6"; // assign the string value
        document.getElementById("res").innerHTML = valString;
    } else {
        valString = valString.concat("6");
        document.getElementById("res").innerHTML = valString;
    }
}

function InputSeven() {
    // Action for clicking button "7".
    if (valString == "0") {
        valString = "7"; // assign the string value
        document.getElementById("res").innerHTML = valString;
    } else {
        valString = valString.concat("7");
        document.getElementById("res").innerHTML = valString;
    }
}

function InputEight() {
    // Action for clicking button "8".
    if (valString == "0") {
        valString = "8"; // assign the string value
        document.getElementById("res").innerHTML = valString;
    } else {
        valString = valString.concat("8");
        document.getElementById("res").innerHTML = valString;
    }
}

function InputNine() {
    // Action for clicking button "9".
    if (valString == "0") {
        valString = "9"; // assign the string value
        document.getElementById("res").innerHTML = valString;
    } else {
        valString = valString.concat("9");
        document.getElementById("res").innerHTML = valString;
    }
}

function InputHexA() {
    // Action for clicking button "A".
    if (valString == "0") {
        valString = "A"; // assign the string value
        document.getElementById("res").innerHTML = valString;
    } else {
        valString = valString.concat("A");
        document.getElementById("res").innerHTML = valString;
    }
}

function InputHexB() {
    // Action for clicking button "A".
    if (valString == "0") {
        valString = "B"; // assign the string value
        document.getElementById("res").innerHTML = valString;
    } else {
        valString = valString.concat("B");
        document.getElementById("res").innerHTML = valString;
    }
}

function InputHexC() {
    // Action for clicking button "A".
    if (valString == "0") {
        valString = "C"; // assign the string value
        document.getElementById("res").innerHTML = valString;
    } else {
        valString = valString.concat("C");
        document.getElementById("res").innerHTML = valString;
    }
}

function InputHexD() {
    // Action for clicking button "A".
    if (valString == "0") {
        valString = "D"; // assign the string value
        document.getElementById("res").innerHTML = valString;
    } else {
        valString = valString.concat("D");
        document.getElementById("res").innerHTML = valString;
    }
}

function InputHexE() {
    // Action for clicking button "A".
    if (valString == "0") {
        valString = "E"; // assign the string value
        document.getElementById("res").innerHTML = valString;
    } else {
        valString = valString.concat("E");
        document.getElementById("res").innerHTML = valString;
    }
}

function InputHexF() {
    // Action for clicking button "A".
    if (valString == "0") {
        valString = "F"; // assign the string value
        document.getElementById("res").innerHTML = valString;
    } else {
        valString = valString.concat("F");
        document.getElementById("res").innerHTML = valString;
    }
}
/*
function Negate() {
    // Action for negating the numbers;
    var f;
    f = CheckOperator();

    if (f != -1) {

        return;
    } else {
        if (valString.charAt(0) == "-") {
            valString = valString.substr(0, valString.length - 1);
        } else {
            valString = "-" + valString;

        }
    }

}
*/

function InputPeriod() {
    // Action for clicking button "." 
    var strLen = valString.length;
    var operator = ["+", "-", "*", "/", "="];
    var flag = -1;
    for (var i = 0; i < 5; i++) {
        if (valString.charAt(strLen - 1) == operator[i]) {
            //document.getElementById("res").innerHTML = valString;
            flag = 0;
            break;
        }
    }
    if (flag == -1) {
        valString = valString.concat(".");
        document.getElementById("res").innerHTML = valString;
        return;
    } else {
        document.getElementById("res").innerHTML = valString;
        return;
    }
}

/*
following functions are used when click operator buttons.
*/
function Clr() {
    // Action for clicking button "Clr"
    valString = "0";
    document.getElementById("res").innerHTML = valString; //clear the screen to 0
}


function Sum() {
    // Action for clicking button "+"
    var f;
    f = CheckOperator();

    if (f != -1) {
        return;
    } else {
        valString = valString.concat("+");
        document.getElementById("res").innerHTML = valString;
    }

}

function Sub() {
    // Action for clicking button "-"
    var f = CheckOperator()
    if (f != -1) {
        return;
    } else {
        valString = valString.concat("-");
        document.getElementById("res").innerHTML = valString;
    }
}

function Mul() {
    // Action for clicking button "-"
    var f = CheckOperator();
    if (f != -1) {
        return;
    } else {
        valString = valString.concat("*");
        document.getElementById("res").innerHTML = valString;
    }
}

function Div() {
    // Action for clicking button "+"
    var f = CheckOperator();
    if (f != -1) {
        return;
    } else {
        valString = valString.concat("/");
        document.getElementById("res").innerHTML = valString;
    }
}

function CheckOperator() {
    /*
    To detect if there is already one operator in input string(valString)
    if yes, return index;
    if no, return -1;
    */
    var flag = -1;
    var operator = ["+", "-", "*", "/", "="];
    for (var i = 0; i < 5; i++) {
        flag = valString.indexOf(operator[i]);
        if (flag != -1) {
            break;
        }
    }
    return flag;
}

function EqlDecimal() {
    // Action for clicking button "="
    var f = CheckOperator();
    if (f != -1) {
        // get operator;
        var expOper = valString[f];
        val1 = Number(valString.substr(0, f));
        val2 = Number(valString.substr(f + 1)); // to end
        switch (expOper) {
            case "+":
                valAns = val1 + val2;
                document.getElementById("res").innerHTML = valAns;
                break;
            case "-":
                valAns = val1 - val2;
                document.getElementById("res").innerHTML = valAns;
                break;
            case "*":
                valAns = val1 * val2;
                document.getElementById("res").innerHTML = valAns;
                break;
            case "/":
                valAns = val1 / val2;
                document.getElementById("res").innerHTML = valAns;
                break;
            default:
                document.getElementById("res").innerHTML = "Fuck you";
                break;
        }
        valString = "0"; // clear the screen
    }
}

function EqlHex() {
    // Action for clicking button "="
    var f = CheckOperator();
    if (f != -1) {
        // get operator;
        var expOper = valString[f];
        val1 = parseInt(valString.substr(0, f), 16);
        val2 = parseInt(valString.substr(f + 1), 16); // to end
        switch (expOper) {
            case "+":
                valAns = val1 + val2;
                //document.getElementById("res").innerHTML = valAns;
                break;
            case "-":
                valAns = val1 - val2;
                //document.getElementById("res").innerHTML = valAns;
                break;
            case "*":
                valAns = val1 * val2;
                //document.getElementById("res").innerHTML = valAns; 
                break;
            case "/":
                valAns = val1 / val2;
                //document.getElementById("res").innerHTML = valAns;
                break;
            default:
                document.getElementById("res").innerHTML = "Something Wrong because it went to default";
                break;
        }
        valAns = DecimalToHex(valAns);
        document.getElementById("res").innerHTML = valAns;
        valString = "0"; // clear the screen
    }
}

function EqlBinary() {
    // Action for clicking button "="
    var f = CheckOperator();
    if (f != -1) {
        // get operator;
        var expOper = valString[f];
        val1 = parseInt(valString.substr(0, f), 2);
        val2 = parseInt(valString.substr(f + 1), 2); // to end
        switch (expOper) {
            case "+":
                valAns = val1 + val2;
                //document.getElementById("res").innerHTML = valAns;
                break;
            case "-":
                valAns = val1 - val2;
                //document.getElementById("res").innerHTML = valAns;
                break;
            case "*":
                valAns = val1 * val2;
                //document.getElementById("res").innerHTML = valAns; 
                break;
            case "/":
                valAns = val1 / val2;
                //document.getElementById("res").innerHTML = valAns;
                break;
            default:
                document.getElementById("res").innerHTML = "Fuck you";
                break;
        }
        valAns = DecimalToBinary(valAns);
        var result = "";
        for (var i = 0; i < valAns.length; i++) {
            result = valAns[i].toString().concat(result);
        }
        document.getElementById("res").innerHTML = result;
        valString = "0"; // clear the screen
    }
}


function Backspace() {
    // Action for click backspace button,which is used to
    // delete one character each time.
    var strLen = valString.length;
    valString = valString.substr(0, strLen - 1);
    document.getElementById("res").innerHTML = valString;

}

function DecimalToHex(decimal) {
    var binary = DecimalToBinary(decimal);
    var hex = BinaryToHex(binary);
    return hex;

}

function DecimalToBinary(decimal) {
    var Binarystack = [];
    var iFlag = decimal;
    var jFlag;
    while (iFlag != 0) {
        jFlag = iFlag % 2;
        iFlag = Math.floor(iFlag / 2);
        Binarystack.push(jFlag);
    }
    return Binarystack;
}

function BinaryToHex(binary) {
    var hex = ""; // string
    var table = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "A", "B", "C", "D", "E", "F"];
    var iLimit = Math.floor(binary.length / 4);
    var jLimit = Math.floor(binary.length % 4);
    var index;
    if (binary == 0) {
        hex = "0";
        return hex;
    }
    index = 0;
    for (var j = jLimit; j > 0; j--) {
        index = index + Math.pow(2, j - 1) * binary.pop();
    }
    if (index != 0) {
        hex = hex.concat(table[index]);
    }
    for (var i = 0; i < iLimit; i++) {
        index = 0;
        index = 8 * binary.pop() + 4 * binary.pop() + 2 * binary.pop() + 1 * binary.pop();
        hex = hex.concat(table[index]);
    }
    return hex;
}
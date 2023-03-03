function addNumbers(numArr) {
    let sum = 0;
    for (let num of numArr) {
        sum += num;
    }
    return sum;
}

function findMaxNumber() {
    let max = 0;
    for (let e of arguments[0]) {
        if (e > max) {
            max = e;
        }
    }
    return max;
}

function addOnlyNumbers(arr) {
    let sum = 0;
    arr.forEach((value, index, array) => {
        array[index] = parseInt(value);
        if (parseInt(value)){
            sum += array[index];
        }
    });
    return sum;
}

function getDigits(str) {
    return str.match(/\d/g).join("");
}

function reverseString(str) {
    return "!" + str.split("").reverse().join("");
}

function getCurrentDate() {
    let date = new Date()
    let output = "";
    
    switch(date.getDay()) {
        case 0:    
            output += "Sunday";
            break;
        case 1:    
            output += "Monday";
            break;
        case 2:    
            output += "Tuesday";
            break;
        case 3:    
            output += "Wednesday";
            break;
        case 4:    
            output += "Thursday";
            break;
        case 5:    
            output += "Friday";
            break;
        case 6:    
            output += "Saturday";
            break;
    }

    output += ", ";

    switch(date.getMonth()) {
        case 0:    
            output += "Jan";
            break;
        case 1:    
            output += "Feb";
            break;
        case 2:    
            output += "Mar";
            break;
        case 3:    
            output += "Apr";
            break;
        case 4:    
            output += "May";
            break;
        case 5:    
            output += "Jun";
            break;
        case 6:    
            output += "Jul";
            break;
        case 7:
            output += "Aug";
            break;
        case 8:    
            output += "Sep";
            break;
        case 9:    
            output += "Oct";
            break;
        case 10:    
            output += "Nov";
            break;
        case 11:    
            output += "Dec";
            break;
    }
    output += " " + date.getDate() + ", " + date.getFullYear();

    return output;
}
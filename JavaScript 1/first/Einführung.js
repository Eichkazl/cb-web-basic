let user = prompt("Wie heißt du?")

document.write("Herzlich willkommen " + user + "!")

let zahl = 3;
let komma = 3.3;
let char = "s";
let wort = 'Servus';
let bool = true;

alert(zahl + "\t" + typeof zahl + "\n" + 
    komma + "\t" + typeof komma + "\n" + 
    char + "\t" + typeof char + "\n" + 
    wort + "\t" + typeof wort + "\n" + 
    bool + "\t" + typeof bool);

let number1 = prompt("Gieb eine Zahl ein.")
let number2 = prompt("Gieb eine Zweite Zahl ein.")

number1 = Number(number1)
number2 = Number(number2)

document.write("\n" + number1 * number2)

let username = prompt("Gieb deinen Nutzernamen ein.")
let password = prompt("Gieb dein Passwort ein.")

if(username == "rt" && password == "123") {
    alert ("All rigth!") 
} else if (username == "rt" && password != "123")
    alert ("wrong password!")
else alert ("\'unknown\' user?")

let question = prompt("8 * 0,4");
let points = 0;

if(question == 3.2 || question == "3,2")
    points++;

question = prompt("14,23 - 5,3");

if(question == 8.93 || question == "8,93")
    points++;

question = prompt("15²");

if(question == 225)
    points++;

question = prompt("6 / 2,5");

if(question == 2.4 || question == "2,4")
    points++;

question = prompt("fakultät 5");

if(question == 120)
    points++;

points = Number (points);

switch(points){
    case 0:
    case 1:
        alert("bad")
        break;
    case 2:
    case 3:
        alert("mittelmäßig")
        break;
    case 4:
        alert("good")
        break;
    case 5:
        alert("Perfect")
        break;
    default:
        alert("default")
}

let person = [];

for (let i = 0; i < 3; i++) {
    let temp = [];

    temp[0] = prompt("Vorname: ");
    temp[1] = prompt("Norname: ");
    temp[2] = prompt("Alter: ")

    person[i] = temp;
}

let pers = prompt("Wert der Person: ")
let info = prompt("Index der info: ")

alert(person[pers][info])

let arr = [];

for (let i = 0; i < 5; i++) {
    
         arr[i] = prompt("Zahl " + (i+1) + ":")
}

for (let wert of arr)
    document.write(wert + "\t")

function doublefunktion (number) {
    return number*2;
}

let number = prompt("Number: ")

alert(doublefunktion(number))

let arrToDouble = [];

for (let i = 0; i < 5; i++) {
    arrToDouble[i] = prompt("Zahl " + (i+1) + ":")
}

doubleAllfunktion(arrToDouble)

for (let wert of arrToDouble)
    document.write(wert + "\t")

function doubleAllfunktion (arrToDouble) {
    for (let i = 0; i < arrToDouble.length; i++) {
        arrToDouble[i] *= 2;
    }

    return arrToDouble;
}
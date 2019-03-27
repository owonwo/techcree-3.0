// {
//     name: "Joseph Julius",
//     gender: "Male",
//     isSmart: 'true',
//     isAbove30: 'false',
// }
let username = "Logger";
let password = 'IHateYou';
let isSmart = false;
let age = 10;

if (age > 30 && (isSmart == false)) { 
    // false && true = false
    alert('The Age is above 30')
} else if (username == 'Kelvin' || isSmart) { //false or false = false
    alert('Your username is invalid, but you are smart')
} else if ((age == 30) && (username == 'Joseph'))  { // false and false = false
    alert('You are of age and your username is valid')
} else {
    alert('The age is below or equal to 30')
}
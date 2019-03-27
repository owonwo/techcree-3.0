let username = document.querySelector('.username');
let password = document.querySelector('.password');
let button = document.querySelector('.submit-button');
let value = "";
let hEADER = document.querySelector('#answer');


button.addEventListener('click', showInput);
function showInput() {
    username.value;
    password.value;

    hEADER.innerText = username.value;
    console.log(username.value, password.value)
}
console.log(username, password, button)
console.log('Hello Am here')
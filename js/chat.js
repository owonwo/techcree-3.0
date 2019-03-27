let messages = [];
let messageObject = {
    text: 'Hi',
    time: '2019-01-30',
    recipient: false
};
let repMessage = {
    text: 'Hi, James',
    time: '2018-03-03',
    recipient: true
};
let chatMessageBox = document.querySelector('.chat-messages');
let submitButton = document.querySelector('.send-button');

let input = document.querySelector('.udeme');

submitButton.addEventListener('click', addToMessages);

function addToMessages() {
    const new_message = {};
    new_message.text = getUserInput();
    new_message.time = (new Date()).toTimeString();
    new_message.recipient = true;

    messages.push(new_message);

    clearInput();
    renderMessages();
    autoRespond();

    console.log('Message was added.');
}

function clearInput() {
    input.value = "";
}

function getUserInput() {
    return input.value;
}

function renderMessages() {
    let allOutput = "";
     
    for (let message of messages) {
        if (message.recipient) {
            allOutput += myMessage(message);
        } else {
            allOutput += recipientMessage(message);
        }
    }

    chatMessageBox.innerHTML = allOutput;
}

function myMessage(message) {
    return `<div class="chat-bubble">
        <img src="images/avatar-image.jpg" alt="" class="chat-bubble-image">
        <div class="bubble">${message.text}</div>
        <span>${message.time}</span>
    </div>`;
}

function recipientMessage(message) {
    return `<div class="chat-bubble recipient-chat">
        <img src="images/why-smile-like-that.jpg" alt="" class="chat-bubble-image">
        <div class="bubble">${message.text}</div>
        <span>${message.time}</span>
    </div>`
}

function autoRespond() {
    messages.push({
        text: 'Hi',
        time:  (new Date()).toTimeString(),
        recipient: false,
    });

    renderMessages();
}
// Swiped from https://stackoverflow.com/questions/201323/how-can-i-validate-an-email-address-using-a-regular-expression/201378#201378
const email_regex = /(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9]))\.){3}(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9])|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/

var contactForm = null;
var defaultBorderColor = null;

window.onload = function() {

    contactForm = document.getElementById('contactForm');
    defaultBorderColor = contactForm.message.style.borderColor;
}

function submitForm(event) {
   
        
    let missing_fields = false;

    let message = contactForm.message.value;
    if (message === '') {
        contactForm.message.style.borderColor = 'red';
        contactForm.message.placeholder = 'Empty submissions not accepted';
        missing_fields = true;
    } else {
        contactForm.message.style.borderColor = defaultBorderColor;
        contactForm.message.placeholder = '';
    }

    let email = contactForm.email.value;
    if (email === '') {
        contactForm.email.style.borderColor = 'red';
        contactForm.email.placeholder = 'Please leave your e-mail';
        missing_fields = true;
    } else if (!email_regex.test(email)) {
        alert("bad");
        contactForm.email.style.borderColor = 'red';
        missing_fields = true;
    } else {
        contactForm.message.style.borderColor = defaultBorderColor;
        contactForm.email.placeholder = '';
    }

    if (missing_fields) {
        event.preventDefault();
        return;
    }
}
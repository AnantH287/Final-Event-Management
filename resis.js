const form = document.getElementById('form');
const username = document.getElementById('username');
const email = document.getElementById('email');
const password = document.getElementById('password');
const password1 = document.getElementById('password1');

String.prototype.isEmail = function() {
    return !!this.match(/\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/);
}

function checkRequired(inputs) {
    let isValid = true;
    inputs.forEach(input => {
        if (input.value.trim() === '') {
            errorInput(input, `${getName(input)} is Required`);
            isValid = false;
        } else {
            successInput(input);
        }
    });
    return isValid;
}

function getName(input) {
    return input.getAttribute('data-name');
}

function errorInput(input, message) {
    const formGroup = input.parentElement;
    formGroup.className = 'form-group error';
    const p = formGroup.querySelector('p');
    p.innerHTML = message;
}

function successInput(input) {
    const formGroup = input.parentElement;
    formGroup.className = 'form-group success';
    const p = formGroup.querySelector('p');
    p.innerHTML = '';
}

function checkLength(input, min, max) {
    const data = input.value.trim().length;
    if (data < min) {
        errorInput(input, `${getName(input)} must be at least greater than ${min} characters`);
        return false;
    } else if (data > max) {
        errorInput(input, `${getName(input)} must be at least less than ${max} characters`);
        return false;
    } else {
        successInput(input);
        return true;
    }
}

function checkPassword(password, password1) {
    if (password.value !== password1.value) {
        errorInput(password1, `${getName(password1)} does not match the password`);
        return false;
    } else {
        successInput(password);
        return true;
    }
}

function checkEmail(input) {
    if (!input.value.trim().isEmail()) {
        errorInput(input, `${getName(input)} is not a valid address`);
        return false;
    } else {
        successInput(input);
        return true;
    }
}

form.addEventListener('submit', function(e) {
    e.preventDefault();
    const isRequired = checkRequired([username, email, password, password1]);
    const isUsername = checkLength(username, 5, 10);
    const isPasswordValid = checkLength(password, 5, 10);
    const isPasswordMatch = checkPassword(password, password1);
    const isEmail = checkEmail(email);

    if (isRequired && isUsername && isPasswordValid && isPasswordMatch && isEmail) {

        const formData = new FormData();
        formData.append('username', username.value);
        formData.append('email', email.value);
        formData.append('password', password.value);
        formData.append('password1', password1.value); 

        fetch('resister.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            if (data.includes('success')) {
                window.location.href = '../login/log.php'; 
            } else {
                alert(data) 
            }
        })
        .catch(error => console.error('Error:', error));
    }
});



function isEmpty(value) {
    if (value === "" || value == null) {
        return true;
    }
    return false;
} 

function validUsername(username) {
    let validUsernameRegex = /^\w+$/gmi;
    if (username.match(validUsernameRegex)) {
        return true;
    }
    return false;
}

function validPassword(password) {
    let validPasswordRegex = /^(?=[a-z]+\d+|\d+[a-z]+)\w{4,}$/gmi;
    if (password.match(validPasswordRegex)) {
        return true;
    }
    return false;
}

function getPage() {
    let path = window.location.pathname;
    return path.split("/").pop();
}

const setError = (e, message) => {
    const inputControl = e.parentElement.parentElement;
    const errorDisplay = inputControl.querySelector(".error");

    errorDisplay.innerHTML = message;
    errorDisplay.classList.add("visible");
}

const setSuccess = e => {
    const inputControl = e.parentElement.parentElement;
    const errorDisplay = inputControl.querySelector(".error");

    errorDisplay.classList.remove("visible");
}

function validateFormInputs() {
    const activeForm = document.getElementsByClassName("tabs-content-active")[0];
    let preventDefault = false;

    const username = activeForm.elements["username"];
    const password = activeForm.elements["password"];

    if (isEmpty(username.value)) {
        setError(username, "Username is Requiered");
        preventDefault = true;
    } else if (validUsername(username.value)) {
        setSuccess(username);
    } else {
        setError(username, "Not a Valid Username");
        preventDefault = true;
    }

    if (isEmpty(password.value)) {
        setError(password, "Password is Requiered");
        preventDefault = true;
    } else if (validPassword(password.value)) {
        setSuccess(password);
    } else {
        setError(password, "Not a Valid Password");
        preventDefault = true;
    }
    return preventDefault;
}

document.addEventListener("DOMContentLoaded", () => {
    const forms = document.forms;
    console.log(forms);

    for (const element of forms) {
        // Skip the logout form
        if (element.className === "logout") {
            continue;
        }
        element.addEventListener("submit", e => {
            if (validateFormInputs()) {
                e.preventDefault()
            }
        });
    }});


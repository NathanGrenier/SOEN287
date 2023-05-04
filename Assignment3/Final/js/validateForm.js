function isEmpty(value) {
    if (value === "" || value == null) {
        return true;
    }
    return false;
} 

function validEmail(email) {
    /*
        More Stric version from https://www.w3resource.com/javascript/form/email-validation.php:
        /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/
    */
    let validEmailRegex = /^[\w\-\.\_]+\@([\w\-]+\.)+[\w\-]{2,}$/gm;
    if (email.match(validEmailRegex)) {
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
    const page = getPage();

    const gender = activeForm.elements["gender"];

    let valid = true;

    if (isEmpty(gender.value)) {
        setError(gender[0], "Breed is Requiered");
        valid = false;
    } else {
        setSuccess(gender[0]);
    }
    
    if (page === "giveAwayPet.php") {
        const comments = activeForm.elements["comments"];
        const name = activeForm.elements["name"];
        const email = activeForm.elements["email"];
        const temperment = activeForm.elements["temperment[]"];

        for (let i=0; i < temperment.length; i++) {
            if (temperment[i].checked) {
                setSuccess(temperment[0]);
                break;
            } else {
                if (i === temperment.length - 1) {
                    setError(temperment[0], "At Least 1 Temperment is Requiered")
                    valid = false;
                }
            }
        }

        if (isEmpty(comments.value)) {
            setError(comments, "More Information is Requiered");
            valid = false;
        } else {
            setSuccess(comments);
        }

        if (isEmpty(name.value)) {
            setError(name, "More Information is Requiered");
            valid = false;
        } else {
            setSuccess(name);
        }

        if (isEmpty(email.value)) {
            setError(email, "More Information is Requiered");
            valid = false;
        } else if (validEmail(email.value)) {
            setSuccess(email);
        } else {
            setError(email, "Invalid Email Address");
            valid = false;
        }
    } else if (page === "findAPet.php") {
        const temperment = activeForm.elements["temperment"];
        if (isEmpty(temperment.value)) {
            setError(temperment[0], "Temperment is Requiered");
            valid = false;
        } else {
            setSuccess(temperment[0]);
        }
    }
    return valid;
}

document.addEventListener("DOMContentLoaded", () => {
    const forms = document.forms;
    for (const element of forms) {
        // Skip the logout form
        if (element.className === "logout") {
            continue;
        }
        element.addEventListener("submit", e => {
            if (!validateFormInputs()) {
                e.preventDefault()
            }
        });
    }});


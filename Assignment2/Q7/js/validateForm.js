function isEmpty(value) {
    if (value === "" || value == null) {
        return true;
    }
    return false;
} 

function validEmail(email) {
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
    const temperment = activeForm.elements["temperment"];

    if (isEmpty(gender.value)) {
        setError(gender[0], "Breed is Requiered");
    } else {
        setSuccess(gender[0]);
    }
    
    if (page === "giveAwayPet.html") {
        const comments = activeForm.elements["comments"];
        const name = activeForm.elements["name"];
        const email = activeForm.elements["email"];

        for (let i=0; i < temperment.length; i++) {
            if (temperment[i].checked) {
                setSuccess(temperment[0]);
                break;
            } else {
                if (i === temperment.length - 1) {
                    setError(temperment[0], "At Least 1 Temperment is Requiered")
                }
            }
        }

        if (isEmpty(comments.value)) {
            setError(comments, "More Information is Requiered");
        } else {
            setSuccess(comments);
        }

        if (isEmpty(name.value)) {
            setError(name, "More Information is Requiered");
        } else {
            setSuccess(name);
        }

        if (isEmpty(email.value)) {
            setError(email, "More Information is Requiered");
        } else if (validEmail(email.value)) {
            setSuccess(email);
        } else {
            setError(email, "Invalid Email Address");
        }
    } else if (page === "findAPet.html") {
        if (isEmpty(temperment.value)) {
            setError(temperment[0], "Temperment is Requiered");
        } else {
            setSuccess(temperment[0]);
        }
    }
    

}

document.addEventListener("DOMContentLoaded", () => {
    const forms = document.forms;

    for (const element of forms) {
        element.addEventListener("submit", e => {
            e.preventDefault()

            validateFormInputs();
        });
    }});


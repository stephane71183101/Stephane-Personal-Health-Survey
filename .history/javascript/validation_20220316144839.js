function validateQuestion() {

    let inputElement = document.getElementById(range.slider);
    let value = inputElement.value;

    let warningElement = document.getElementById(validation.warning);
    warningElement.innerText = 'Der gewählte Wert ist ${value}';

    return false;
}

function setWarning(text) {
    let warningElement = document.getElementById("validation.warning");
    warningElement.innerText = text;
}
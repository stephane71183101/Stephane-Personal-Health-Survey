function validateQuestion() {

    let inputElement = document.getElementById(range.slider);
    let value = inputElement.value;

    setWarning(`Der gewählte Wert ist ${value}`);

    return false;
}

function sliderChanged() {
    let hiddenInputElement = document.getElementById("range-slider-changed")
}






// Tools ----------------------------------

function setWarning(text) {
    let warningElement = document.getElementById("validation.warning");
    warningElement.innerText = text;
}
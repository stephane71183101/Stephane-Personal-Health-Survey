function validateQuestionMinimal() {

    let inputElement = document.getElementById("text-input-field");
    let value = inputElement.value;

    setWarning(`Der gewählte Wert ist ${value}`);

    return false;
}

function sliderChanged() {
    let hiddenInputElement = document.getElementById("range-slider-changed");
    hiddenInputElement.value = 1;
}

function SliderHasChanged() {
    let hiddenInputElement = document.getElementById("range-slider-changed");

    if (hiddenInputElement.value == "1") return true;
    else return false;
}


function validateQuestion() {
    let sliderElement = document.getElementById("range-slider");
    
    if (sliderElement.type === 'range') {
        if (!sliderHasChanged()) {
            setWarning("Bitte verändere die Postion des Sliders.");
            return false;
        }
    }
}



// Tools ----------------------------------

function setWarning(text) {
    let warningElement = document.getElementById("validation.warning");
    warningElement.innerText = text;
}
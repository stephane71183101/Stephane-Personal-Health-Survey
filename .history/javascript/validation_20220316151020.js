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
    // Muss für verschiedene Type von Input-Feldern funktionieren.
    let sliderElement = document.getElementById("range-slider");
    
    if (sliderElement.type === 'range') {
        // Prüfe, ob der Range-Slider verändert wurde.
        if (!sliderHasChanged()) {
            setWarning("Bitte verändere die Postion des Sliders.");
            return false;
        }
    }
    return false;
}



// Tools ----------------------------------

function setWarning(text) {
    let warningElement = document.getElementById("validation.warning");
    warningElement.innerText = text;
}
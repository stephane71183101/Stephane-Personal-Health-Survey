// ----- Code vom 17.03.2022

function validateNumber () {
    // <input type="number" id="number-text">
    let value = document.getElementById("text-number").value;

    // Wenn kein Wert eingegeben wurde, dann soll der Submit gestopp werden.
    if (value == "") { // if (!value) {} wäre dasselbe - kürzer.
        setWarning("Bitte geben Sie eine Zahl an.");
        
        // Stopp: Es wurde kein Wert eingegeben.
        return false;
    }

    // Alles ok: gar ncihts zurückgeben oder return true;
}

function validateRadio(radioName) {

}





function setWarning(text) {
    let warningElement = document.getElementById("validation.warning");
    warningElement.innerText = text;





// ----- Code vom 16.03.2022

/* 
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

function sliderHasChanged() {
    let hiddenInputElement = document.getElementById("range-slider-changed");

    if (hiddenInputElement.value == "1") return true;
    else return false;
}


function validateQuestion(inputID) {
    // Muss für verschiedene Type von Input-Feldern funktionieren.
    let inputElement = document.getElementById(inputID);
    
    if (inputElement.type === 'range') {
        // Prüfe, ob der Range-Slider verändert wurde.
        if (!sliderHasChanged()) {
            setWarning("Bitte verändere die Postion des Sliders.");
            return false;
        }
    }
    else {
    // Prüfe den 'generellen Fall für Textfelder etc.
    let value = inputElement.value;

    // Minimal: Prüfe, ob ein minimaler Wert gesetzt wurde.
    if (!value) {
        // Früher mit Alert ("Blablabla...");
        setWarning("Bitte gib einen Wert ein.");
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

*/
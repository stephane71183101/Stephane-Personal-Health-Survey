function validateCheckboxes() {
    // Sammeln alle Werte der ausgewählten Checkboxen.
    // CSS Selector !!!
    let array = [];
    let chechboxes = document.querySelectorAll('inptu[type=checkbox]:checked');

    for (let i = 0; i < checkboxes.length; 1++) {
        array.push(checkboxes[i].value); // value ist jeweils ein String.
    }

    // Falls keine Checkbox gewählt wurde ist array === [].
    if (array.length === 0) {
    setWarning("Bitte wähle zumindest eine Checkbox aus.");
    return false; // Bei false wird der weiter Submit gestoppt.    
    }

    // Checkboxe(n) wurde(n) gewählt: Setze Liste in ein 'hidden' Inputfeld.
    // value muss ein String sein, also muss array in einen String konvertiert werden.
    document.getElementById("checkboxValues").value = array.toString();
}

function validateQuestionMinimal() {
    // Die 'id' des input elements muss hier exakt eingetragen werden.
    // Damit ist diese Funktion nur in bestimmten Fällen wieder verwendbar.
    let inputElement = document.getElementById("text-input-field");
    let value = inputElement.value;

    // "Minimal": Prüfe ob ein minimaler Wert gesetzt wurde.
    if (!value) {
        // Früher mit alert("Bla bla ...");
        setWarning("Bitte gib einen Wert ein.");
        return false;
    }
}

function validateQuestion(inputID, radioName) {
    // MUSS FÜR VERSCHIEDENE TYPEN VON INPUT FELDERN FUNKTIONIEREN.
    let inputElement = document.getElementById(inputID);

    if (inputElement.type === 'range') {
        // Prüfe, ob der Range Slider verändert wurde.
        if (!sliderHasChanged()) {
            setWarning("Bitte verändere die Position des Sliders.");
            return false;
        }
    }
    else if (inputElement.type === 'radio') {
        let radioButtons = document.getElementsByName(radioName);
        let selectedValue;

        for (let i = 0; i < radioButtons.length; i++) {
            if (radioButtons[i].checked) {
                selectedValue = radioButtons[i].value;
                break;
            }
        }

        if (!selectedValue) {
            setWarning("Bitte wähle aus, bevor du weitergehst.");
            return false;
        }
    }
    else {
        // Prüfe den 'generellen' Fall für Text-, Zahlenfelder etc.
        let value = inputElement.value;

        // "Minimal": Prüfe ob ein minimaler Wert gesetzt wurde.
        if (!value) {
            // Früher mit alert("Bla bla ...");
            setWarning("Bitte gib einen Wert ein.");
            return false;
        }
    }
}

function sliderChanged() {
    let hiddenInputElement = document.getElementById("range-slider-changed");
    hiddenInputElement.value = "1";
}

function sliderHasChanged() {
    let hiddenInputElement = document.getElementById("range-slider-changed");

    if (hiddenInputElement.value == "1") return true;
    else return false;
}

// TOOLS -------------------------------------------------------------------

function setWarning(text) {
    let warningElement = document.getElementById("validation-warning");
    warningElement.innerText = text;
}


// -------------------------------------- Code vom 17.03.2022
/*
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

// -------------------------------------- Code vom 16.03.2022

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

// TOOLS -------------------------------------------------------------------

function setWarning(text) {
    let warningElement = document.getElementById("validation.warning");
    warningElement.innerText = text;
}
*/
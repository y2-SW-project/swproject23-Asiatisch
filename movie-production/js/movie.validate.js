/* get the input fields */

let submitBtn = document.getElementById('submit_btn');
let titlenput = document.getElementById('title');
let directorInput = document.getElementById('director');
let rdateInput = document.getElementById('rdate');
let pcomInput = document.getElementById('pcom');
let synopsisInput = document.getElementById('synopsis');
let ratingInput = document.getElementById('rating');
let genreInput = document.getElementsByName('genre');


/* get error div by id */

let titleError = document.getElementById('title_error');
let directorError = document.getElementById('director_error');
let rdateError = document.getElementById('rdate_error');
let pcomError = document.getElementById('pcom_error');
let synopsisError = document.getElementById('synopsis_error');
let ratingError = document.getElementById('rating_error');
let genreError = document.getElementsByid('genre_error');


/* Regex pattern */
const TITLE_REGEX = /^[a-zA-Z-' ]*$/;
const DIRECTOR_REGEX =/^[a-zA-Z-' ]*$/;
const RDATE_REGEX = /^[0-9{4})-([0-9]{2}-{[0-9]{2})$/;
const SYNOPSIS_REGEX = /^[a-zA-Z-' ]*$/;



submitBtn.addEventListener('click', onsubmitform);

let errorExists = false;

function showError(errorField, errorMessage) {
    errorExists = true;
    errorField.innerHTML = errorMessage;  
}

function regexValid(regex, str) {
    return regex.test(str);
}


function isSelected(inputField){
    let Selected = false;
    for(let i = 0; i != inputFieldInput.length; i++) {
        if(inputFieldInput[i].checked) {
           Selected = true;
           break;
        }
    }

    return Selected;
}


function resetValues() {
    titleError = false;
    directorError.innerHTML = "";
    redateError.innerHTML = "";
    pcomError.innerHTML = "";
    synopsisError.innerHTML = "";
    ratingError.innerHTML = "";
    genreError.innerHTML = "";
   
}

function onsubmitform(evt) {
    resetValues();
    /* validate the title */
    if(titleInput.value === "") {
        showError(titleError, "The title field is required");
    }
    else if(regexValid(TITLE_REGEX, titleInput.value)){
        showError(titleError, "Only letters and spaces are allowed");
    }

    /* validate the director */
    if(directorInput.value === "") {
        showError(directorError, "The director field is required");
    }
    else if(regexValid(address_REGEX, directorInput.value)){
        showError(directorError, "Only letters, numbers and spaces are allowed");
    }

    /* validate the release date */
    if(rdateInput.value === "") {
        showError(radateError, "The release date  is required");
    }
    else if(regexValid(rdate_REGEX, rdateInput.value)){
        showError(rdateError, "invalid release date format");
    }

    /* validate the  production company */
    if(!isSelected(pcomInput)) {
        showError(pcomError, "The production compnay filed is required");
     }
    /* validate the synopsis */
    if(synopsisInput.value === "") {
        showError(synopsisError, "The synopsis field is required");
    }
    else if(regexValid(synopsis_REGEX, synopsisInput.value)){
        showError(synopsisError, "The synopsis is invalid");
    }
    

     /* validate rating */
     if(!isSelected(ratingInput)) {
        showError(ratingError, "The rating field is required");
     }
    }
     /* validate genre */
     if(!isSelected(genreInput)) {
        showError(genreError, "The preference field is required");
     }

    if(errorExists){
        evt.preventDefault();
    }

/* get the input fields */

let submitBtn = document.getElementById('submit_btn');
let nameInput = document.getElementById('name');
let addressInput = document.getElementById('address');
let phoneInput = document.getElementById('phone');
let emailInput = document.getElementById('email');
let dobInput = document.getElementById('dob');
let centreInput = document.getElementById('centre');
let insuranceInput = document.getElementsByName('insurance');
let preferenceInput = document.getElementsByClassName('preference');

/* get error div by id */

let nameError = document.getElementById('name_error');
let addressError = document.getElementById('address_error');
let phoneError = document.getElementById('phone_error');
let emailError = document.getElementById('email_error');
let dobError = document.getElementById('dob_error');
let centreError = document.getElementById('centre_error');
let insuranceError = document.getElementsByid('insurance_error');
let preferencesError = document.getElementsByid('preference_error');

/* Regex pattern */
const NAME_REGEX = /^[a-zA-Z-' ]*$/;
const ADDRESS_REGEX = /^[0-9a-zA-Z-', ]*$/;
const PHONE_REGEX = /^\(?\s*\d{1,4}\s*\)?\s*[\d\s]{5,10}$/;
const EMAIL_REGEX = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
const DATE_REGEX = /^[0-9{4})-([0-9]{2}-{[0-9]{2})$/;




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
    errorExists = false;
    nameError.innerHTML = "";
    addressError.innerHTML = "";
    phoneError.innerHTML = "";
    emailError.innerHTML = "";
    dobError.innerHTML = "";
    centreError.innerHTML = "";
    insuranceError.innerHTML="";
    preferencesError.innerHTML="";
}

function onsubmitform(evt) {
    resetValues();
    /* validate the name */
    if(nameInput.value === "") {
        showError(nameError, "The name field is required");
    }
    else if(regexValid(NAME_REGEX, nameInput.value)){
        showError(nameError, "Only letters and spaces are allowed");
    }

    /* validate the address */
    if(addressInput.value === "") {
        showError(addressError, "The address field is required");
    }
    else if(regexValid(address_REGEX, addressInput.value)){
        showError(addressError, "Only letters, numbers and spaces are allowed");
    }

    /* validate the phone */
    if(phoneInput.value === "") {
        showError(phoneError, "The phone field is required");
    }
    else if(regexValid(phone_REGEX, phoneInput.value)){
        showError(phoneError, "Phone number should be in (##) ######### format");
    }

    /* validate the email */
    if(emailInput.value === "") {
        showError(emailError, "The email field is required");
    }
    else if(regexValid(email_REGEX, emailInput.value)){
        showError(emailError, "Invalid email format");
    }

    /* validate the dateOfBirth */
    if(dobInput.value === "") {
        showError(dobError, "The date of birth field is required");
    }
    else if(regexValid(dob_REGEX, dobInput.value)){
        showError(dobError, "Invalid date of birth format");
    }

    /* validate the centre */
    if(centreInput.value === "") {
        showError(centreError, "The medical centre field is required");
    }
    
     /* validate insurance */
     if(!isSelected(insuranceInput)) {
        showError(centreError, "The insurance field is required");
     }
    }
     /* validate preferences */
     if(!isSelected(preferenceInput)) {
        showError(preferencesError, "The preference field is required");
     }

    if(errorExists){
        evt.preventDefault();
    }

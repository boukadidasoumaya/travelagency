const Name = document.getElementById('name');
const lastname= document.getElementById('lastname');
const country = document.getElementById('country');
const city= document.getElementById('city');
const passport= document.getElementById('passport');
const email= document.getElementById('email');
const password= document.getElementById('password');
const passwordv= document.getElementById('passwordv');
const boutonAjouter = document.querySelector('#ajouter')

Name.addEventListener("input", (e) => {
    if (Name.value.trim() == "" || lastname.value.trim() == "" || country.value.trim() == "" || city.value.trim() == "" || passport.value.trim() == "" || email.value.trim() == "" || password.value.trim() == "" || passwordv.value.trim() == "")
        boutonAjouter.disabled = true;
    else boutonAjouter.disabled = false;

})
lastname.addEventListener("input", (e) => {
    if (Name.value.trim() == "" || lastname.value.trim() == "" || country.value.trim() == "" || city.value.trim() == "" || passport.value.trim() == "" || email.value.trim() == "" || password.value.trim() == "" || passwordv.value.trim() == "")
        boutonAjouter.disabled = true;
    else boutonAjouter.disabled = false;

})
country.addEventListener("input", (e) => {
    if (Name.value.trim() == "" || lastname.value.trim() == "" || country.value.trim() == "" || city.value.trim() == "" || passport.value.trim() == "" || email.value.trim() == "" || password.value.trim() == "" || passwordv.value.trim() == "")
        boutonAjouter.disabled = true;
    else boutonAjouter.disabled = false;

})
city.addEventListener("input", (e) => {
    if (Name.value.trim() == "" || lastname.value.trim() == "" || country.value.trim() == "" || city.value.trim() == "" || passport.value.trim() == "" || email.value.trim() == "" || password.value.trim() == "" || passwordv.value.trim() == "")
        boutonAjouter.disabled = true;
    else boutonAjouter.disabled = false;

})
passport.addEventListener("input", (e) => {
    if (Name.value.trim() == "" || lastname.value.trim() == "" || country.value.trim() == "" || city.value.trim() == "" || passport.value.trim() == "" || email.value.trim() == "" || password.value.trim() == "" || passwordv.value.trim() == "")
        boutonAjouter.disabled = true;
    else boutonAjouter.disabled = false;

})
email.addEventListener("input", (e) => {
    if (Name.value.trim() == "" || lastname.value.trim() == "" || country.value.trim() == "" || city.value.trim() == "" || passport.value.trim() == "" || email.value.trim() == "" || password.value.trim() == "" || passwordv.value.trim() == "")
        boutonAjouter.disabled = true;
    else boutonAjouter.disabled = false;

})
password.addEventListener("input", (e) => {
    if (Name.value.trim() == "" || lastname.value.trim() == "" || country.value.trim() == "" || city.value.trim() == "" || passport.value.trim() == "" || email.value.trim() == "" || password.value.trim() == "" || passwordv.value.trim() == "")
        boutonAjouter.disabled = true;
    else boutonAjouter.disabled = false;

})
passwordv.addEventListener("input", (e) => {
    if (Name.value.trim() == "" || lastname.value.trim() == "" || country.value.trim() == "" || city.value.trim() == "" || passport.value.trim() == "" || email.value.trim() == "" || password.value.trim() == "" || passwordv.value.trim() == "")
        boutonAjouter.disabled = true;
    else boutonAjouter.disabled = false;

})

function validatePassport() {
    const passportInput = document.getElementById('passport');
    const passportValidationIcon = document.getElementById('passportValidationIcon');
    const passportRegex = /^[A-Z][0-9]{7}$/i;
    
    if (passportRegex.test(passportInput.value)) {
      passportValidationIcon.className = 'fas fa-check-circle col-lg-1 col-md-1 col-sm-1';
    } else {
      passportValidationIcon.className = 'fas fa-times-circle col-lg-1 col-md-1 col-sm-1';
    }
  }
  
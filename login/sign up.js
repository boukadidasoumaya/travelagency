const Name = document.getElementById('name');
const lastname= document.getElementById('lastname');
const country = document.getElementById('country');
const city= document.getElementById('city');
const passport= document.getElementById('passport');
const email= document.getElementById('email');
const password= document.getElementById('password');
const passwordv= document.getElementById('passwordv');
const boutonAjouter = document.querySelector('#ajouter');

function checkConditions() {
  if (Name.value.trim() == "" || lastname.value.trim() == "" || country.value.trim() == "" || city.value.trim() == "" || passport.value.trim() == "" || email.value.trim() == "" || password.value.trim() == "" || passwordv.value.trim() == "") {
    boutonAjouter.disabled = true;
    return;
  }
  
  const passportValue = passport.value;
  const regex = /^[a-zA-Z][0-9]{7}$/;
  const isValidPassport = regex.test(passportValue);
  
  if (!isValidPassport) {
    boutonAjouter.disabled = true;
    
    return;
  }
  
  if ((password.value !== passwordv.value) || (password.value.length < 6) || (passwordv.value.length < 6)) {
    boutonAjouter.disabled = true;
    return;
  }
  
  boutonAjouter.disabled = false;
}
Name.addEventListener("input", checkConditions);
lastname.addEventListener("input", checkConditions);
country.addEventListener("input", checkConditions);
city.addEventListener("input", checkConditions);
passport.addEventListener("input", checkConditions);
email.addEventListener("input", checkConditions);
password.addEventListener("input", checkConditions);
passwordv.addEventListener("input", checkConditions);
passport.addEventListener('keyup', checkConditions);
passwordv.addEventListener('keyup', checkConditions);

passport.addEventListener("keyup",(e)=>  {
  const passportInput = document.getElementById('passport');
  const passportValidationIcon = document.getElementById('passportValidationIcon');
  const passportRegex = /^[A-Z][0-9]{7}$/i;
  
  if (passportRegex.test(passportInput.value)) {
    passportValidationIcon.className = 'fas fa-check-circle col-lg-1 col-md-1 col-sm-1';
  } else {
    passportValidationIcon.className = 'fas fa-times-circle col-lg-1 col-md-1 col-sm-1';
  }
})
const Name = document.getElementById('name');
const lastname= document.getElementById('lastname');
const country = document.getElementById('country');
const city= document.getElementById('city');
const passport= document.getElementById('passport');
const email= document.getElementById('email');
const password= document.getElementById('password');
const passwordv= document.getElementById('passwordv');
const boutonAjouter = document.querySelector('#ajouter');
const passportValue = passport.value;
const regex = /^[a-zA-Z][0-9]{7}$/;
const isValid = regex.test(passportValue);

Name.addEventListener("input", (e) => {
    if ((!(isValid)) && (password.value == passwordv.value) &&(Name.value.trim() == "" || lastname.value.trim() == "" || country.value.trim() == "" || city.value.trim() == "" || passport.value.trim() == "" || email.value.trim() == "" || password.value.trim() == "" || passwordv.value.trim() == ""))
       { boutonAjouter.disabled = true;
       }
    else {boutonAjouter.disabled = false;
      console.log("hello");}

})
lastname.addEventListener("input", (e) => {
  if ((!isValid) && (password.value == passwordv.value) &&(Name.value.trim() == "" || lastname.value.trim() == "" || country.value.trim() == "" || city.value.trim() == "" || passport.value.trim() == "" || email.value.trim() == "" || password.value.trim() == "" || passwordv.value.trim() == ""))
        boutonAjouter.disabled = true;
    else boutonAjouter.disabled = false;

})
country.addEventListener("input", (e) => {
  if ((!isValid) && (password.value == passwordv.value) &&(Name.value.trim() == "" || lastname.value.trim() == "" || country.value.trim() == "" || city.value.trim() == "" || passport.value.trim() == "" || email.value.trim() == "" || password.value.trim() == "" || passwordv.value.trim() == ""))
        boutonAjouter.disabled = true;
    else boutonAjouter.disabled = false;

})
city.addEventListener("input", (e) => {
  if ((!isValid) && (password.value == passwordv.value) &&(Name.value.trim() == "" || lastname.value.trim() == "" || country.value.trim() == "" || city.value.trim() == "" || passport.value.trim() == "" || email.value.trim() == "" || password.value.trim() == "" || passwordv.value.trim() == ""))
        boutonAjouter.disabled = true;
    else boutonAjouter.disabled = false;

})
passport.addEventListener("input", (e) => {
  
    if ((isValid) && (password.value == passwordv.value) && (Name.value.trim() == "" || lastname.value.trim() == "" || country.value.trim() == "" || city.value.trim() == "" || passport.value.trim() == "" || email.value.trim() == "" || password.value.trim() == "" || passwordv.value.trim() == ""))
    {
      passportValidationIcon.className = 'fas fa-check-circle col-lg-1 col-md-1 col-sm-1';

      boutonAjouter.disabled = false;
    } else {
      boutonAjouter.disabled = true && boutonAjouter.disabled;
      passportValidationIcon.className = 'fas fa-times-circle col-lg-1 col-md-1 col-sm-1';
    }

})
email.addEventListener("input", (e) => {
  if ((!isValid) && (password.value == passwordv.value) &&(Name.value.trim() == "" || lastname.value.trim() == "" || country.value.trim() == "" || city.value.trim() == "" || passport.value.trim() == "" || email.value.trim() == "" || password.value.trim() == "" || passwordv.value.trim() == ""))
        boutonAjouter.disabled = true;
    else boutonAjouter.disabled = false;

})
password.addEventListener("input", (e) => {
  if ((!isValid) && (password.value == passwordv.value) &&(Name.value.trim() == "" || lastname.value.trim() == "" || country.value.trim() == "" || city.value.trim() == "" || passport.value.trim() == "" || email.value.trim() == "" || password.value.trim() == "" || passwordv.value.trim() == ""))
        boutonAjouter.disabled = true;
    else boutonAjouter.disabled = false;

})
passwordv.addEventListener("input", (e) => {
    if ((password.value == passwordv.value)&& (!isValid) && (Name.value.trim() == "" || lastname.value.trim() == "" || country.value.trim() == "" || city.value.trim() == "" || passport.value.trim() == "" || email.value.trim() == "" || password.value.trim() == "" || passwordv.value.trim() == ""))
        boutonAjouter.disabled = true;
    else boutonAjouter.disabled = false;

})
/*
 passport.addEventListener("keyup", function() {
    const passportValue = passport.value;
    const regex = /^[a-zA-Z][0-9]{7}$/;
    const isValid = regex.test(passportValue);
  
    if (isValid) {
      boutonAjouter.disabled = true;
    } else {
      boutonAjouter.disabled = true;
    }
  });
  
 
function validatePassport() {
    const passportValidationIcon = document.getElementById('passportValidationIcon');
    const passportRegex = /^[A-Z][0-9]{7}$/;
  if (passportRegex.test(passport.value)) {
      passportValidationIcon.className = 'fas fa-check-circle col-lg-1 col-md-1 col-sm-1';
      boutonAjouter.disabled = true;
    } else {
      passportValidationIcon.className = 'fas fa-times-circle col-lg-1 col-md-1 col-sm-1';
      boutonAjouter.disabled = false;
    }
  }
  passport.addEventListener('keyup', validatePassport);
  

function validatePassport() {
  const passportValue = passport.value;
  const regex = /^[a-zA-Z][0-9]{7}$/;
  const isValid = regex.test(passportValue);
  if (isValid) {
    boutonAjouter.disabled = false;
    
  } else {
    boutonAjouter.disabled = true;
  }
}

passport.addEventListener('input', function(){
    const passportValue = passport.value;
    const regex = /^[a-zA-Z][0-9]{7}$/;
    const isValid = regex.test(passportValue);
    if (isValid) {
      passportValidationIcon.className = 'fas fa-check-circle col-lg-1 col-md-1 col-sm-1';

      boutonAjouter.disabled = false;
    } else {
      boutonAjouter.disabled = true && boutonAjouter.disabled;
      passportValidationIcon.className = 'fas fa-times-circle col-lg-1 col-md-1 col-sm-1';
    }
});
*/
const password= document.getElementById('password');
const passwordv= document.getElementById('passwordv');
const boutonAjouter = document.querySelector('#ajouter');

function checkConditions() {
    if (password.value.trim() == "" || passwordv.value.trim() == "") {
      boutonAjouter.disabled = true;
      return;
    }
    if ((password.value !== passwordv.value) || (password.value.length < 6) || (passwordv.value.length < 6)) {
        boutonAjouter.disabled = true;
        return;
      }
      boutonAjouter.disabled = false;
}
password.addEventListener("input", checkConditions);
passwordv.addEventListener("input", checkConditions);
passport.addEventListener('keyup', checkConditions);
passwordv.addEventListener('keyup', checkConditions);
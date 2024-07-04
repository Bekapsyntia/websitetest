const form = document.getElementById('registerForm');
const name = document.getElementById('name');
const email = document.getElementById('email');
const password = document.getElementById('password');
const password1 = document.getElementById('password');

form.addEventListener('submit', e=>{
    e.preventDefault();
    validateInputs();
}
);
const setSuccess = element => {
    const registerGroup = element.parentElement;
    const errorDisplay = registerGroup.querySelector('.error');
   
    errorDisplay.innerText = '';
    registerGroup.classList.add('success');
    registerGroup.classList.remove('error');
}

const validateInputs = ()=> {
    const nameValue = name.value.trial();
    const emailValue = email.value.trial();
    const passwordValue = password.value.trial();
    const password1Value = password1.value.trial();
}

if(nameValue === '') {
   setError(name, "Nme is required");
}else{

}

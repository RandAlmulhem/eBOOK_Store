
const form = document.getElementById('signup');
const email = document.getElementById('email');
const psw1 = document.getElementById('password');
const psw2 = document.getElementById('Conf_pass');

function validate(){
	checkAll();
}
function checkAll() {
	// removing whitespaces by trim
	const passwordVal = psw1.value.trim();
	const password2Val = psw2.value.trim();
    const emailVal = email.value.trim();
	
	if(passwordVal !== password2Val) {
		setError(psw2, 'Passwords dont match');
		event.preventDefault();
	} else{
		setSuccess(psw2);
	}

    if (!checkEmail(emailVal)) {
		setError(email, 'Please enter a valid email');
		event.preventDefault();
	} else {
		setSuccess(email);
	}
}
function setError(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'field error';
	small.innerText = message;
}
function setSuccess(input) {
	const formControl = input.parentElement;
	formControl.className = 'field success';
}	
function checkEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}
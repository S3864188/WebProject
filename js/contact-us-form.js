// Select Option in Contact days
function selectOnlyThis(id) {
    for (var i = 1;i <= 7; i++)
    {
        document.getElementById("Check" + i).checked = false;
    }
    document.getElementById(id).checked = true;
}

//Validation
const form = document.getElementById('form');
const firstname = document.getElementById('firstname');
const lastname = document.getElementById('lastname');
const email = document.getElementById('email');
const phone = document.getElementById('phone');
const comment = document.getElementById('comment');

function checkInputs() {
	// trim to remove the whitespaces
	const firstnameValue = firstname.value.trim();
    const lastnameValue = lastname.value.trim();
	const emailValue = email.value.trim();
	const phoneValue = phone.value.trim();
	const commentValue = comment.value.trim();
	//First Name
	if(firstnameValue === '') {
		setErrorFor(firstname, 'Username cannot be blank');
	} else {
		setSuccessFor(firstname, '');
	}
	//Last Name
    if(lastnameValue === '') {
		setErrorFor(lastname, 'Username cannot be blank');
	} else {
		setSuccessFor(lastname, '');
	}
	//Email
	if(emailValue === '') {
		setErrorFor(email, 'Email cannot be blank');
	} else if (!isEmail(emailValue)) {
		setErrorFor(email, 'Not a valid email');
	} else {
		setSuccessFor(email, '');
	}
	//Phone
	if(phoneValue === '') {
		setErrorFor(phone, 'Phone cannot be blank');
	} else if (!isPhone(phoneValue)) {
		setErrorFor(phone, 'Not a valid phone number');
	} else {
		setSuccessFor(phone, '');
	}
	//Comment

	if(commentValue === '') {
		setErrorFor(comment, 'Comment cannot be blank');
	} else if(commentValue.length < 50) {
		setErrorFor(comment, 'Comment must be longer than 50 characters');
	} else if(commentValue.length > 500) {
		setErrorFor(comment, 'Comment must be less than 500 characters');
	} else {
		setSuccessFor(comment, 'You can type more characters');
	}
}


function firstValuename(){
	var firstnameValue = firstname.value.trim();
	if(firstnameValue === '') {
		setErrorFor(firstname, 'Username cannot be blank');
	} else {
		setSuccessFor(firstname, '');
	}
}

function lastValuename(){
	var lastnameValue = lastname.value.trim();
    if(lastnameValue === '') {
		setErrorFor(lastname, 'Username cannot be blank');
	} else {
		setSuccessFor(lastname, '');
	}
}

function emailValue(){
	 var emailValue = email.value.trim();
	 if(emailValue === '') {
		setErrorFor(email, 'Email cannot be blank');
	} else if (!isEmail(emailValue)) {
		setErrorFor(email, 'Not a valid email');
	} else {
		setSuccessFor(email, '');
	}
}

function phoneValue(){
	var phoneValue = phone.value.trim();
	if(phoneValue === '') {
		setErrorFor(phone, 'Phone cannot be blank');
	} else if (!isPhone(phoneValue)) {
		setErrorFor(phone, 'Not a valid phone number');
	} else {
		setSuccessFor(phone, '');
	}
}

function commentValue(){
	var commentValue = comment.value.trim();
	if(commentValue === '') {
		setErrorFor(comment, 'Comment cannot be blank');
	} else if(commentValue.length < 50) {
		setErrorFor(comment, 'Comment must be longer than 50 characters');
	} else if(commentValue.length > 500) {
		setErrorFor(comment, 'Comment must be less than 500 characters');
	} else {
		setSuccessFor(comment, 'You can type more characters');
	}
}

firstname.addEventListener('input', firstValuename)
lastname.addEventListener('input', lastValuename)
email.addEventListener('input', emailValue)
phone.addEventListener('input', phoneValue)
comment.addEventListener('input', commentValue)


form.addEventListener('submit', e => {
	e.preventDefault();
	
	checkInputs();
	
});


function setErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'input-box error';
	small.innerText = message;
}

function setSuccessFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'input-box success';
	small.innerText = message;
}
	
function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"){3,})@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|((\.?[a-zA-Z\-0-9])+(\.+[a-zA-Z]{2,5}){1}))$/.test(email);
}

function isPhone(phone) {
	return /^(?:\+?\d)?([-, ]?[0-9]){8,10}$/.test(phone);
}
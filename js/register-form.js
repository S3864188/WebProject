// Profile Picture Selection

const imgDiv = document.querySelector('.profile-pic');
const img = document.querySelector('#photo');
const file = document.querySelector('#file');
const uploadBtn = document.querySelector('#uploadBtn');

//if user hover on profile div
imgDiv.addEventListener('mouseenter',function(){
    uploadBtn.style.display = "block";
})

//if user hover out from profile div
imgDiv.addEventListener('mouseleave',function(){
    uploadBtn.style.display = "none";
})

//when we choose a file to upload
file.addEventListener('change', function(){
    const chooseFile = this.files[0];

    if(chooseFile) {
        const reader = new FileReader();

        reader.addEventListener('load', function(){
            img.setAttribute('src', reader.result);
        });

        reader.readAsDataURL(chooseFile);
    }
})

//Register Validation
function Validation(formSelector){
	var _this = this;
	var formRules = {};

	function getParent(element, selector) {
		while (element.parentElement) {
			if (element.parentElement.matches(selector)) {
				return element.parentElement;
			}
			element = element.parentElement;
		}
	}
	/* 
	- Error ? => return 'error message'
	- No Error => return 'undefined'
	*/
	var validatorRules = {
		required: function (value) {
			return value ? undefined : 'You need to enter this form';
		},
		//Email rules
		email: function (value) {
			var regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"){3,})@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|((\.?[a-zA-Z\-0-9])+(\.+[a-zA-Z]{2,5}){1}))$/;
			return regex.test(value) ? undefined : 'This email is not valid';
		},
		//Phone No rules
		//+ Area Code
		areacode: function (value) {
			var regex = /^+?\d{2,3}$/;
			return regex.test(value) ? undefined : 'Invalid Area Code';
		},
		//+ Phone Number
		phone: function (value) {
			var regex = /^\d([-, ]?[0-9]){8,10}$/;
			return regex.test(value) ? undefined : 'Invalid Phone Number';
		},
		//Password rules
		//+Password
		password: function (value) {
			var regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&])[A-Za-z\d!@#$%^&]{8,20}$/;
			return regex.test(value) ? undefined : 'Invalid Password';
		},
		//+Corfimed Password
		isConfirmed: function (getConfirmValue) {
			return document.querySelector('#password').value === getConfirmValue ? undefined : 'Wrong Confirmed Password';	
		},
		//Min rules
		min: function (min) {
			return function (value){
				return value.length >= min ? undefined : "Please enter at least 3 character";
			}
		},
		//Zip Code rule
		isZipCode: function (value) {
			var regex = /^\d{4,6}$/;
			return regex.test(value) ? undefined : 'Invalid Zip Code';
		},

	};

	var formElement = document.querySelector(formSelector);

	if (formElement) {
		var inputs = formElement.querySelectorAll('[name][rules]');
		for (var input of inputs) {
			
			var rules = input.getAttribute('rules').split('|');
			for (var rule of rules) {
				var ruleInfo;
				var isRuleHasValue = rule.includes(':');

				if (isRuleHasValue) {
					ruleInfo = rule.split(':');
					rule = ruleInfo[0];
				}

				var ruleFunc = validatorRules[rule];

				if (isRuleHasValue) {
					ruleFunc = ruleFunc(ruleInfo[1]);
				}

				if(Array.isArray(formRules[input.name])) {
					formRules[input.name].push(ruleFunc);
				} else {
					formRules[input.name] = [ruleFunc];
				}
			}


			input.onblur = handleValidate;
			input.oninput = handleClearError;
		}

		function handleValidate(event) {
			var rules = formRules[event.target.name];
			var errorMessage;

			for (var rule of rules) {
				errorMessage = rule(event.target.value);
				if(errorMessage) break;
			}


			if (errorMessage) {
				var formGroup = getParent(event.target, '.form-group')
				if (formGroup) {
					formGroup.classList.add('invalid');

					var formMessage = formGroup.querySelector('.form-message');
					if(formMessage) {
						formMessage.innerText = errorMessage;
					}
				}
			}

			return !errorMessage;
		}

		// Clear error message
		function handleClearError(event) {
			var formGroup = getParent(event.target, '.form-group');
			if (formGroup.classList.contains('invalid')) {
				formGroup.classList.remove('invalid');
				var formMessage = formGroup.querySelector('.form-message');

				if (formMessage) {
					formMessage.innerText = ''
				}
			}
		}
	}


	formElement.onsubmit = function (event) {
		event.preventDefault();

		var input = formElement.querySelectorAll('[name][rules]');
		var isValid = true;

		for (var input of inputs) {
			if (!handleValidate({ target: input })) {
				isValid = false;
			}
		}

		if (isValid) {
			if (typeof _this.onsubmit === 'function') {
				var enableInputs = formElement.querySelectorAll('[name]');
				var formValues = Array.from(enableInputs).reduce(function (values, input) {
					
					switch(input.type) {
						case 'radio':
							values[input.name] = formElement.querySelector('input[name="' + input.name + '"]:checked').value;
							break;
						case 'checkbox':
							if (!input.matches(':checked')) {
								values[input.name] = '';
								return values;
							}
							if (!Array.isArray(values[input.name])) {
								values[input.name] = [];
							}
							values[input.name].push(input.value);
							break;
						case 'file':
							values[input.name] = input.files;
							break;
						default:
							values[input.name] = input.value;
					}

					return values;
				}, {});

				_this.onSubmit(formValues);
			} else {
				formElement.submit();
			}
		}
	}
}

jQuery(document).ready(function () {
	let element = document.getElementById('phone');
	let maskOptions = {
		mask: '+{7}(000)000-00-00'
	};
	if (element !== null) {
		IMask(element, maskOptions);
	}
});

jQuery(document).on('submit', '#contact-form', function (e) {
	e.preventDefault();
	let phone = jQuery('#phone').val();
	let email = jQuery('#email').val();
	if (validatePhone(phone) && validateEmail(email)) {
		sendContactForm(phone, email);
	}
});

function validatePhone(phone) {
	let regexp = /^\+?7[(]7[0124567][0-9][)]\d{3}[-]\d{2}[-]\d{2}$/g;
	if (regexp.test(phone)) {
		return true;
	}
	alert('Вы ввели некорректный номер телефона');
	return false;
}

function validateEmail(email) {
	let regexp = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/g;
	if (regexp.test(email)) {
		return true;
	}
	alert('Вы ввели некорректный Email');
	return false;
}

function sendContactForm(phone, email) {
	jQuery.ajax({
		url: ajaxurl,
		type: 'post',
		data: {
			action: 'handle_contact_form',
			response: 'yes',
			phone: phone,
			email: email
		},
		success: function (response) {
			alert(response);
		},
		error: function () {
			alert('Произошла ошибка. Пожалуйста проверьте - включен ли плагин');
		}
	});
}
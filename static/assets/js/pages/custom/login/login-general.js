"use strict";

// Class Definition
var KTLogin = function () {
	var _login;

	var _showForm = function (form) {
		var cls = 'login-' + form + '-on';
		var form = 'kt_login_' + form + '_form';

		_login.removeClass('login-forgot-on');
		_login.removeClass('login-signin-on');
		_login.removeClass('login-signup-on');

		_login.addClass(cls);

		KTUtil.animateClass(KTUtil.getById(form), 'animate__animated animate__backInUp');
	}

	var _handleSignInForm = function () {
		var validation;

		// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
		validation = FormValidation.formValidation(
			KTUtil.getById('kt_login_signin_form'),
			{
				fields: {
					username: {
						validators: {
							notEmpty: {
								message: 'Usuario requerido'
							}
						}
					},
					password: {
						validators: {
							notEmpty: {
								message: 'Contraseña requerida'
							}
						}
					}
				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger(),
					submitButton: new FormValidation.plugins.SubmitButton(),
					//defaultSubmit: new FormValidation.plugins.DefaultSubmit(), // Uncomment this line to enable normal button submit after form validation
					bootstrap: new FormValidation.plugins.Bootstrap()
				}
			}
		);

		$('#kt_login_signin_submit').on('click', function (e) {
			e.preventDefault();

			validation.validate().then(function (status) {
				if (status == 'Valid') {
					$("#kt_login_signin_form").submit();
				} else {
					swal.fire({
						text: "Lo sentimos, parece que hay algunos errores, por favor intente nuevamente.",
						icon: "error",
						buttonsStyling: false,
						confirmButtonText: "Ok, lo tengo!",
						customClass: {
							confirmButton: "btn font-weight-bold btn-light-primary"
						}
					}).then(function () {
						KTUtil.scrollTop();
					});
				}
			});
		});

		// Handle forgot button
		$('#kt_login_forgot').on('click', function (e) {
			e.preventDefault();
			_showForm('forgot');
		});

		// Handle signup
		$('#kt_login_signup').on('click', function (e) {
			e.preventDefault();
			_showForm('signup');
		});
	}

	var _handleSignUpForm = function (e) {
		var validation;
		var form = KTUtil.getById('kt_login_signup_form');

		// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
		validation = FormValidation.formValidation(
			form,
			{
				fields: {
					username: {
						validators: {
							notEmpty: {
								message: 'Usuario requerido'
							}
						}
					},
					password1: {
						validators: {
							notEmpty: {
								message: 'Contraseña requerida'
							}
						}
					},
					password2: {
						validators: {
							notEmpty: {
								message: 'Contraseña requerida'
							},
							identical: {
								compare: function () {
									return form.querySelector('[name="password1"]').value;
								},
								message: 'Las contraseñas no coinciden'
							}
						}
					},
					agree: {
						validators: {
							notEmpty: {
								message: 'Debes aceptar los términos y condiciones'
							}
						}
					},
				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger(),
					bootstrap: new FormValidation.plugins.Bootstrap()
				}
			}
		);

		$('#kt_login_signup_submit').on('click', function (e) {
			e.preventDefault();

			validation.validate().then(function (status) {
				if (status == 'Valid') {
					$("#kt_login_signup_form").submit();
				} else {
					swal.fire({
						text: "Lo sentimos, parece que hay algunos errores, por favor intente nuevamente.",
						icon: "error",
						buttonsStyling: false,
						confirmButtonText: "Ok, lo tengo!",
						customClass: {
							confirmButton: "btn font-weight-bold btn-light-primary"
						}
					}).then(function () {
						KTUtil.scrollTop();
					});
				}
			});
		});
	}

	var _handleForgotForm = function (e) {
		var validation;

		// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
		validation = FormValidation.formValidation(
			KTUtil.getById('kt_login_forgot_form'),
			{
				fields: {
					email: {
						validators: {
							notEmpty: {
								message: 'Email requerido'
							},
							emailAddress: {
								message: "No es una dirección de correo electrónico válida"
							}
						}
					}
				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger(),
					bootstrap: new FormValidation.plugins.Bootstrap()
				}
			}
		);

		// Handle submit button
		$('#kt_login_forgot_submit').on('click', function (e) {
			e.preventDefault();

			validation.validate().then(function (status) {
				if (status == 'Valid') {
					$("#kt_login_forgot_form").submit();
				} else {
					swal.fire({
						text: "Lo sentimos, parece que hay algunos errores, por favor intente nuevamente.",
						icon: "error",
						buttonsStyling: false,
						confirmButtonText: "Ok, lo tengo!",
						customClass: {
							confirmButton: "btn font-weight-bold btn-light-primary"
						}
					}).then(function () {
						KTUtil.scrollTop();
					});
				}
			});
		});

		// Handle cancel button
		$('#kt_login_forgot_cancel').on('click', function (e) {
			e.preventDefault();

			_showForm('signin');
		});
	}

	var _handleResetPasswordForm = function (e) {
		var validation;
		var form = KTUtil.getById('kt_login_forgot_form');

		// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
		validation = FormValidation.formValidation(
			form,
			{
				fields: {
					new_password1: {
						validators: {
							notEmpty: {
								message: 'Contraseña requerida'
							}
						}
					},
					new_password2: {
						validators: {
							notEmpty: {
								message: 'Contraseña requerida'
							},
							identical: {
								compare: function () {
									return form.querySelector('[name="new_password1"]').value;
								},
								message: 'Las contraseñas no coinciden'
							}
						}
					},
				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger(),
					bootstrap: new FormValidation.plugins.Bootstrap()
				}
			}
		);

		$('#kt_login_reset_submit').on('click', function (e) {
			e.preventDefault();

			validation.validate().then(function (status) {
				console.log(status)
				if (status == 'Valid') {
					$("#kt_login_forgot_form").submit();
				} else {
					swal.fire({
						text: "Lo sentimos, parece que hay algunos errores, por favor intente nuevamente.",
						icon: "error",
						buttonsStyling: false,
						confirmButtonText: "Ok, lo tengo!",
						customClass: {
							confirmButton: "btn font-weight-bold btn-light-primary"
						}
					}).then(function () {
						KTUtil.scrollTop();
					});
				}
			});
		});
	}


	// Public Functions
	return {
		// public functions
		init: function () {
			_login = $('#kt_login');

			if (KTUtil.getById('kt_login_signin_form')) {
				_handleSignInForm();
			} else if (KTUtil.getById('kt_login_signup_form')) {
				_handleSignUpForm();
			} else if (KTUtil.getById('kt_login_forgot_form')) {
				if (KTUtil.getById('kt_login_forgot_submit')) {
					_handleForgotForm();
				} else if (KTUtil.getById('kt_login_reset_submit')) {
					_handleResetPasswordForm();
				}
			}
		}
	};
}();

// Class Initialization
jQuery(document).ready(function () {
	KTLogin.init();
});

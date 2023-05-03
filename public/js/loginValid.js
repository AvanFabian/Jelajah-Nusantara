const form = document.querySelector('form');
const emailInput = form.querySelector('#email');
const passwordInput = form.querySelector('#password');
const rpassInput = form.querySelector('#rpass');

emailInput.addEventListener('input', function() {
  const emailValue = emailInput.value.trim();

  if (!isEmail(emailValue)) {
	emailInput.classList.add('is-invalid');
	emailInput.nextElementSibling.textContent = 'Please enter a valid email address.';
  } else {
	emailInput.classList.remove('is-invalid');
	emailInput.nextElementSibling.textContent = '';
  }
});

passwordInput.addEventListener('input', function() {
  const passwordValue = passwordInput.value.trim();

  if (!isPasswordValid(passwordValue)) {
	passwordInput.classList.add('is-invalid');
	passwordInput.nextElementSibling.textContent = 'Please enter a valid password. It must be 8 characters minimum, contain at least one uppercase letter, one number, and one symbol.';
  } else {
	passwordInput.classList.remove('is-invalid');
	passwordInput.nextElementSibling.textContent = '';
  }
});

rpassInput.addEventListener('input', function() {
  const passwordValue = passwordInput.value.trim();
  const rpassValue = rpassInput.value.trim();

  if (passwordValue !== rpassValue) {
	rpassInput.classList.add('is-invalid');
	rpassInput.nextElementSibling.textContent = 'Password confirmation does not match.';
  } else {
	rpassInput.classList.remove('is-invalid');
	rpassInput.nextElementSibling.textContent = '';
  }
});

function isEmail(email) {
  // email regex pattern
  const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return regex.test(email);
}

function isPasswordValid(password) {
  // password regex pattern
  const regex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^\w\d\s:])([^\s]){8,}$/;
  return regex.test(password);
}
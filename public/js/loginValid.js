// Show password checkbox
const showPassword = document.getElementById('showPass');
const passwordInput = document.getElementById('password');

showPassword.addEventListener('click', function() {
  if (passwordInput.type === 'password') {
    passwordInput.type = 'text';
  } else {
    passwordInput.type = 'password';
  }
});
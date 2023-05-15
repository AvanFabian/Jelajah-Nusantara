// Show password checkbox
const showPassword = document.getElementById('showPass');
const passwordInput = document.getElementById('password');
const confirmPass = document.getElementById('rpass');

showPassword.addEventListener('click', function() {
  if (passwordInput.type === 'password' && confirmPass.type === 'password') {
    passwordInput.type = 'text';
    confirmPass.type = 'text';
  } else {
    passwordInput.type = 'password';
    confirmPass.type = 'password';
  }
});
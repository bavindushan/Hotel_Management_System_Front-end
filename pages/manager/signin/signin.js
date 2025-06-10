function togglePassword(inputId) {
  const input = document.getElementById(inputId);
  const icon = input.nextElementSibling.querySelector('.eye-icon');
  
  if (input.type === 'password') {
    input.type = 'text';
    icon.src = '/HolidayGetaway/assets/images/logo/eye-slash-icon.png';
  } else {
    input.type = 'password';
    icon.src = '/HolidayGetaway/assets/images/logo/eye-icon.png';
  }
}

// Sign In Form submission
document.getElementById('signinForm').addEventListener('submit', function(e) {
  e.preventDefault();
  
  const email = document.getElementById('email').value;
  const password = document.getElementById('password').value;
  
  // Here you would normally validate credentials with your backend
  if (email && password) {
    alert('Sign in successful! Redirecting to dashboard...');
    window.location.href = '../index.php'; // or dashboard.php
  }
});

// Forgot Password Form submission
document.getElementById('forgotPasswordForm').addEventListener('submit', function(e) {
  e.preventDefault();
  
  const email = document.getElementById('resetEmail').value;
  
  if (email) {
    alert('Password reset link sent to your email!');
    bootstrap.Modal.getInstance(document.getElementById('forgotPasswordModal')).hide();
  }
});
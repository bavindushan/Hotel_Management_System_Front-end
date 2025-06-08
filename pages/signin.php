<?php
// pages/signin.php
include_once '../includes/header.php';
?>

<div class="auth-container mt-5 pt-5">
  <!-- Background Video -->
  <video autoplay muted loop class="bg-video">
    <source src="../assets/images/background/hero-bg.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>
  
  <!-- Dark Overlay -->
  <div class="video-overlay"></div>
  
  <div class="container py-5 position-relative">
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-6">
        <div class="auth-card card shadow-lg border-0">
          <div class="card-body p-5">
            <!-- Header -->
            <div class="text-center mb-4">
              <img src="/HolidayGetaway/assets/images/background/logo.png" alt="Hotel Getaway" class="auth-logo mb-3">
              <h2 class="auth-title">Welcome Back</h2>
              <p class="auth-subtitle text-muted">Sign in to access your account</p>
            </div>

            <!-- Sign In Form -->
            <form id="signinForm" class="auth-form">
              <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>

              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <div class="password-input-group">
                  <input type="password" class="form-control" id="password" name="password" required>
                  <button type="button" class="password-toggle" onclick="togglePassword('password')">
                    <img src="../images/eye-icon.svg" alt="Show/Hide" class="eye-icon">
                  </button>
                </div>
              </div>

              <!-- Remember Me & Forgot Password -->
              <div class="d-flex justify-content-between align-items-center mb-4">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="rememberMe" name="rememberMe">
                  <label class="form-check-label" for="rememberMe">
                    Remember me
                  </label>
                </div>
                <a href="#" class="forgot-password-link" data-bs-toggle="modal" data-bs-target="#forgotPasswordModal">
                  Forgot Password?
                </a>
              </div>

              <button type="submit" class="btn btn-warning w-100 py-2 mb-3">Sign In</button>

              <!-- Social Sign In -->
              <div class="social-auth">
                <div class="text-center mb-3">
                  <span class="text-muted">Or sign in with</span>
                </div>
                <div class="row">
                  <div class="col-6">
                    <button type="button" class="btn btn-outline-primary w-100">
                      <img src="/HolidayGetaway/assets/images/logo/google-plus.png" alt="Google" class="social-icon me-2">
                      Google
                    </button>
                  </div>
                  <div class="col-6">
                    <button type="button" class="btn btn-outline-primary w-100">
                      <img src="/HolidayGetaway/assets/images/logo/facebook.png" alt="Facebook" class="social-icon me-2">
                      Facebook
                    </button>
                  </div>
                </div>
              </div>
            </form>

            <!-- Sign Up Link -->
            <div class="text-center mt-4 pt-3 border-top">
              <p class="mb-0">Don't have an account? <a href="signup.php" class="text-warning fw-medium">Sign Up</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Forgot Password Modal -->
<div class="modal fade" id="forgotPasswordModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header border-0">
        <h5 class="modal-title">Reset Password</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <p class="text-muted mb-3">Enter your email address and we'll send you a link to reset your password.</p>
        <form id="forgotPasswordForm">
          <div class="mb-3">
            <label for="resetEmail" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="resetEmail" name="resetEmail" required>
          </div>
          <button type="submit" class="btn btn-warning w-100">Send Reset Link</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Custom Styles -->
<style>
.auth-container {
  min-height: 100vh;
  position: relative;
  display: flex;
  align-items: center;
  overflow: hidden;
}

.bg-video {
  position: fixed;
  top: 0;
  left: 0;
  min-width: 100%;
  min-height: 100%;
  width: auto;
  height: auto;
  object-fit: cover;
  z-index: -2;
}

.video-overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(
    135deg,
    rgba(0, 0, 0, 0.7) 0%,
    rgba(33, 37, 41, 0.8) 50%,
    rgba(0, 0, 0, 0.7) 100%
  );
  z-index: -1;
}

.auth-card {
  border-radius: 20px;
  backdrop-filter: blur(15px);
  background: rgba(255, 255, 255, 0.95);
  box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3);
  border: 1px solid rgba(255, 255, 255, 0.2);
}

.auth-logo {
  width: 60px;
  height: auto;
}

.auth-title {
  color: #333;
  font-weight: 600;
  margin-bottom: 8px;
}

.auth-subtitle {
  font-size: 14px;
}

.form-control, .form-select {
  border-radius: 8px;
  border: 1px solid #ddd;
  padding: 12px 15px;
  transition: all 0.3s ease;
  background: rgba(255, 255, 255, 0.9);
}

.form-control:focus, .form-select:focus {
  border-color: #ffc107;
  box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.25);
  background: rgba(255, 255, 255, 1);
}

.password-input-group {
  position: relative;
}

.password-toggle {
  position: absolute;
  right: 12px;
  top: 50%;
  transform: translateY(-50%);
  background: none;
  border: none;
  padding: 0;
  cursor: pointer;
}

.eye-icon {
  width: 16px;
  height: 16px;
  opacity: 0.6;
}

.social-icon {
  width: 16px;
  height: 16px;
}

.btn-warning {
  border-radius: 8px;
  font-weight: 500;
  background: linear-gradient(135deg, #ff9f1c 0%, #febb02 100%);
  border: none;
  transition: all 0.3s ease;
}

.btn-warning:hover {
  background: linear-gradient(135deg, #febb02 0%, #ff9f1c 100%);
  transform: translateY(-2px);
  box-shadow: 0 8px 25px rgba(255, 159, 28, 0.4);
}

.form-check-input:checked {
  background-color: #ffc107;
  border-color: #ffc107;
}

.text-warning {
  color: #ffc107 !important;
}

.text-warning:hover {
  color: #e0a800 !important;
  text-decoration: underline;
}

.forgot-password-link {
  color: #6c757d;
  text-decoration: none;
  font-size: 14px;
}

.forgot-password-link:hover {
  color: #ffc107;
  text-decoration: underline;
}

.modal-content {
  border-radius: 15px;
  backdrop-filter: blur(10px);
  background: rgba(255, 255, 255, 0.95);
}

.btn-close {
  background: none;
  opacity: 0.6;
}

.btn-close:hover {
  opacity: 1;
}

.btn-outline-primary {
  border-color: rgba(13, 110, 253, 0.5);
  color: #0d6efd;
  background: rgba(255, 255, 255, 0.8);
}

.btn-outline-primary:hover {
  background: rgba(13, 110, 253, 0.1);
  border-color: #0d6efd;
}

/* Mobile Responsiveness */
@media (max-width: 768px) {
  .auth-card {
    margin: 1rem;
    border-radius: 15px;
  }
  
  .card-body {
    padding: 2rem !important;
  }
  
  .auth-title {
    font-size: 1.5rem;
  }
  
  .btn-warning {
    padding: 12px !important;
  }
}
</style>

<!-- JavaScript -->
<script>
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
</script>

<?php include_once '../includes/footer.php'; ?>
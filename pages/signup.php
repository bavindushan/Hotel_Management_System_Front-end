<?php
// pages/signup.php
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
      <div class="col-lg-5 col-md-7">
        <div class="auth-card card shadow-lg border-0">
          <div class="card-body p-5">
            <!-- Header -->
            <div class="text-center mb-4">
              <img src="/HolidayGetaway/assets/images/background/logo.png" alt="Hotel Getaway" class="auth-logo mb-3">
              <h2 class="auth-title">Create Account</h2>
              <p class="auth-subtitle text-muted">Join us for exclusive offers and seamless booking</p>
            </div>

            <!-- Sign Up Form -->
            <form id="signupForm" class="auth-form">
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="firstName" class="form-label">First Name</label>
                  <input type="text" class="form-control" id="firstName" name="firstName" required>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="lastName" class="form-label">Last Name</label>
                  <input type="text" class="form-control" id="lastName" name="lastName" required>
                </div>
              </div>

              <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>

              <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="tel" class="form-control" id="phone" name="phone" required>
              </div>

              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <div class="password-input-group">
                  <input type="password" class="form-control" id="password" name="password" required>
                  <button type="button" class="password-toggle" onclick="togglePassword('password')">
                    <img src="../images/eye-icon.svg" alt="Show/Hide" class="eye-icon">
                  </button>
                </div>
                <div class="password-strength mt-1">
                  <div class="password-strength-bar">
                    <div class="strength-indicator" id="strengthIndicator"></div>
                  </div>
                  <small class="text-muted">Password must be at least 8 characters</small>
                </div>
              </div>

              <div class="mb-3">
                <label for="confirmPassword" class="form-label">Confirm Password</label>
                <div class="password-input-group">
                  <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
                  <button type="button" class="password-toggle" onclick="togglePassword('confirmPassword')">
                    <img src="../images/eye-icon.svg" alt="Show/Hide" class="eye-icon">
                  </button>
                </div>
              </div>

              <div class="mb-3">
                <label for="dateOfBirth" class="form-label">Date of Birth</label>
                <input type="date" class="form-control" id="dateOfBirth" name="dateOfBirth">
              </div>

              <div class="mb-3">
                <label for="country" class="form-label">Country</label>
                <select class="form-select" id="country" name="country" required>
                  <option value="">Select Country</option>
                  <option value="US">United States</option>
                  <option value="UK">United Kingdom</option>
                  <option value="CA">Canada</option>
                  <option value="AU">Australia</option>
                  <option value="LK">Sri Lanka</option>
                  <option value="IN">India</option>
                  <option value="other">Other</option>
                </select>
              </div>

              <!-- Preferences -->
              <div class="mb-4">
                <h6 class="form-label">Preferences (Optional)</h6>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="newsletter" name="preferences[]" value="newsletter">
                  <label class="form-check-label" for="newsletter">
                    Receive newsletter and special offers
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="sms" name="preferences[]" value="sms">
                  <label class="form-check-label" for="sms">
                    Receive SMS notifications for bookings
                  </label>
                </div>
              </div>

              <!-- Terms and Conditions -->
              <div class="mb-4">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="terms" name="terms" required>
                  <label class="form-check-label" for="terms">
                    I agree to the <a href="#" class="text-warning">Terms of Service</a> and <a href="#" class="text-warning">Privacy Policy</a>
                  </label>
                </div>
              </div>

              <button type="submit" class="btn btn-warning w-100 py-2 mb-3">Create Account</button>

              <!-- Social Sign Up -->
              <div class="social-auth">
                <div class="text-center mb-3">
                  <span class="text-muted">Or sign up with</span>
                </div>
                <div class="row">
                  <div class="col-6">
                    <button type="button" class="btn btn-outline-primary w-100">
                      <img src="../images/google-icon.svg" alt="Google" class="social-icon me-2">
                      Google
                    </button>
                  </div>
                  <div class="col-6">
                    <button type="button" class="btn btn-outline-primary w-100">
                      <img src="../images/facebook-icon.svg" alt="Facebook" class="social-icon me-2">
                      Facebook
                    </button>
                  </div>
                </div>
              </div>
            </form>

            <!-- Sign In Link -->
            <div class="text-center mt-4 pt-3 border-top">
              <p class="mb-0">Already have an account? <a href="signin.php" class="text-warning fw-medium">Sign In</a></p>
            </div>
          </div>
        </div>
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

.password-strength-bar {
  height: 4px;
  background: rgba(233, 236, 239, 0.8);
  border-radius: 2px;
  overflow: hidden;
}

.strength-indicator {
  height: 100%;
  transition: all 0.3s ease;
  border-radius: 2px;
}

.strength-weak { background: #dc3545; width: 25%; }
.strength-fair { background: #fd7e14; width: 50%; }
.strength-good { background: #20c997; width: 75%; }
.strength-strong { background: #28a745; width: 100%; }

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
  
  .col-md-6 {
    margin-bottom: 1rem;
  }
}

/* Reduce spacing for mobile */
@media (max-width: 576px) {
  .auth-container {
    padding-top: 2rem !important;
    padding-bottom: 2rem !important;
  }
  
  .mb-3 {
    margin-bottom: 1rem !important;
  }
  
  .mb-4 {
    margin-bottom: 1.5rem !important;
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
    icon.src = '../images/eye-slash-icon.svg';
  } else {
    input.type = 'password';
    icon.src = '../images/eye-icon.svg';
  }
}

// Password strength checker
document.getElementById('password').addEventListener('input', function() {
  const password = this.value;
  const indicator = document.getElementById('strengthIndicator');
  let strength = 0;
  
  if (password.length >= 8) strength++;
  if (/[a-z]/.test(password)) strength++;
  if (/[A-Z]/.test(password)) strength++;
  if (/[0-9]/.test(password)) strength++;
  if (/[^A-Za-z0-9]/.test(password)) strength++;
  
  indicator.className = 'strength-indicator';
  if (strength <= 2) indicator.classList.add('strength-weak');
  else if (strength === 3) indicator.classList.add('strength-fair');
  else if (strength === 4) indicator.classList.add('strength-good');
  else indicator.classList.add('strength-strong');
});

// Form submission
document.getElementById('signupForm').addEventListener('submit', function(e) {
  e.preventDefault();
  
  const password = document.getElementById('password').value;
  const confirmPassword = document.getElementById('confirmPassword').value;
  
  if (password !== confirmPassword) {
    alert('Passwords do not match!');
    return;
  }
  
  // Here you would normally send the data to your backend
  alert('Account created successfully! Please check your email for verification.');
  window.location.href = 'signin.php';
});
</script>

<?php include_once '../includes/footer.php'; ?>
<?php
// pages/reservation.php
include_once '../includes/header.php';
?>

<div class="reservation-container mt-5 pt-5">
  <!-- Background Video -->
  <video autoplay muted loop class="bg-video">
    <source src="../assets/images/background/hero-bg.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>
  
  <!-- Dark Overlay -->
  <div class="video-overlay"></div>
  
  <div class="container py-5 position-relative">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-10">
        <div class="reservation-card card shadow-lg border-0">
          <div class="card-body p-5">
            <!-- Header -->
            <div class="text-center mb-4">
              <img src="/HolidayGetaway/assets/images/background/logo.png" alt="Hotel Getaway" class="reservation-logo mb-3">
              <h2 class="reservation-title">Make Your Reservation</h2>
              <p class="reservation-subtitle text-muted">Book your perfect stay with us</p>
            </div>

            <!-- Reservation Form -->
            <form id="reservationForm" class="reservation-form">
              <div class="row">
                <!-- Personal Information -->
                <div class="col-md-6 mb-3">
                  <label for="fullName" class="form-label">Full Name *</label>
                  <input type="text" class="form-control" id="fullName" name="fullName" required>
                </div>

                <div class="col-md-6 mb-3">
                  <label for="email" class="form-label">Email Address *</label>
                  <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="col-md-6 mb-3">
                  <label for="phone" class="form-label">Phone Number *</label>
                  <input type="tel" class="form-control" id="phone" name="phone" required>
                </div>

                <div class="col-md-6 mb-3">
                  <label for="roomType" class="form-label">Room Type *</label>
                  <select class="form-select" id="roomType" name="roomType" required>
                    <option value="">Select Room Type</option>
                    <option value="standard">Standard Room - $120/night</option>
                    <option value="deluxe">Deluxe Room - $180/night</option>
                    <option value="suite">Suite - $280/night</option>
                    <option value="presidential">Presidential Suite - $450/night</option>
                    <option value="residential">Residential Suite - Weekly/Monthly</option>
                  </select>
                </div>

                <!-- Stay Details -->
                <div class="col-md-4 mb-3">
                  <label for="guests" class="form-label">Number of Guests *</label>
                  <select class="form-select" id="guests" name="guests" required>
                    <option value="">Select Guests</option>
                    <option value="1">1 Guest</option>
                    <option value="2">2 Guests</option>
                    <option value="3">3 Guests</option>
                    <option value="4">4 Guests</option>
                    <option value="5">5+ Guests</option>
                  </select>
                </div>

                <div class="col-md-4 mb-3">
                  <label for="checkinDate" class="form-label">Check-in Date *</label>
                  <input type="date" class="form-control" id="checkinDate" name="checkinDate" required>
                </div>

                <div class="col-md-4 mb-3">
                  <label for="checkoutDate" class="form-label">Check-out Date *</label>
                  <input type="date" class="form-control" id="checkoutDate" name="checkoutDate" required>
                </div>

                <!-- Special Requests -->
                <div class="col-12 mb-4">
                  <label for="specialRequests" class="form-label">Special Requests</label>
                  <textarea class="form-control" id="specialRequests" name="specialRequests" rows="3" placeholder="Any special requirements or preferences..."></textarea>
                </div>

                <!-- Payment Options -->
                <div class="col-12 mb-4">
                  <h5 class="payment-section-title mb-3">Payment Options</h5>
                  
                  <div class="payment-options">
                    <div class="form-check mb-3">
                      <input class="form-check-input" type="radio" id="withCreditCard" name="paymentOption" value="creditCard" checked>
                      <label class="form-check-label" for="withCreditCard">
                        <strong>Secure with Credit Card</strong>
                        <small class="d-block text-muted">Guarantee your reservation</small>
                      </label>
                    </div>

                    <div class="form-check mb-3">
                      <input class="form-check-input" type="radio" id="withoutCreditCard" name="paymentOption" value="noCreditCard">
                      <label class="form-check-label" for="withoutCreditCard">
                        <strong>Book without Credit Card</strong>
                        <small class="d-block text-warning">⚠️ Reservation will be cancelled at 7 PM daily if not secured</small>
                      </label>
                    </div>
                  </div>
                </div>

                <!-- Credit Card Details (Hidden by default) -->
                <div class="col-12 mb-4" id="creditCardSection">
                  <div class="credit-card-section p-4 border rounded">
                    <h6 class="mb-3">Credit Card Information</h6>
                    <div class="row">
                      <div class="col-md-6 mb-3">
                        <label for="cardNumber" class="form-label">Card Number</label>
                        <input type="text" class="form-control" id="cardNumber" name="cardNumber" placeholder="1234 5678 9012 3456">
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="cardName" class="form-label">Cardholder Name</label>
                        <input type="text" class="form-control" id="cardName" name="cardName" placeholder="Name on Card">
                      </div>
                      <div class="col-md-4 mb-3">
                        <label for="expiryMonth" class="form-label">Expiry Month</label>
                        <select class="form-select" id="expiryMonth" name="expiryMonth">
                          <option value="">MM</option>
                          <option value="01">01</option>
                          <option value="02">02</option>
                          <option value="03">03</option>
                          <option value="04">04</option>
                          <option value="05">05</option>
                          <option value="06">06</option>
                          <option value="07">07</option>
                          <option value="08">08</option>
                          <option value="09">09</option>
                          <option value="10">10</option>
                          <option value="11">11</option>
                          <option value="12">12</option>
                        </select>
                      </div>
                      <div class="col-md-4 mb-3">
                        <label for="expiryYear" class="form-label">Expiry Year</label>
                        <select class="form-select" id="expiryYear" name="expiryYear">
                          <option value="">YYYY</option>
                          <option value="2025">2025</option>
                          <option value="2026">2026</option>
                          <option value="2027">2027</option>
                          <option value="2028">2028</option>
                          <option value="2029">2029</option>
                          <option value="2030">2030</option>
                        </select>
                      </div>
                      <div class="col-md-4 mb-3">
                        <label for="cvv" class="form-label">CVV</label>
                        <input type="text" class="form-control" id="cvv" name="cvv" placeholder="123" maxlength="4">
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Terms and Conditions -->
                <div class="col-12 mb-4">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="termsAccepted" name="termsAccepted" required>
                    <label class="form-check-label" for="termsAccepted">
                      I agree to the <a href="#" class="text-warning">Terms and Conditions</a> and <a href="#" class="text-warning">Privacy Policy</a>
                    </label>
                  </div>
                </div>

                <!-- Submit Button -->
                <div class="col-12">
                  <button type="submit" class="btn btn-warning w-100 py-3 mb-3">
                    <span class="btn-text">Submit Reservation</span>
                    <span class="btn-icon ms-2">🏨</span>
                  </button>
                </div>
              </div>
            </form>

            <!-- Additional Info -->
            <div class="additional-info mt-4 pt-3 border-top">
              <div class="row text-center">
                <div class="col-md-4">
                  <div class="info-item">
                    <img src="/HolidayGetaway/assets/images/logo/phone-icon.png" alt="Phone" class="info-icon mb-2">
                    <p class="mb-1"><strong>Need Help?</strong></p>
                    <p class="text-muted small">Call: +94 77 678 6535</p>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="info-item">
                    <img src="/HolidayGetaway/assets/images/logo/email-icon.png" alt="Email" class="info-icon mb-2">
                    <p class="mb-1"><strong>Email Support</strong></p>
                    <p class="text-muted small">info@onitha.com</p>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="info-item">
                    <p class="mb-1"><strong>Cancellation</strong></p>
                    <p class="text-muted small">Free cancellation up to 24 hours</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Custom Styles -->
<style>
.reservation-container {
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

.reservation-card {
  border-radius: 20px;
  backdrop-filter: blur(15px);
  background: rgba(255, 255, 255, 0.95);
  box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3);
  border: 1px solid rgba(255, 255, 255, 0.2);
}

.reservation-logo {
  width: 60px;
  height: auto;
}

.reservation-title {
  color: #333;
  font-weight: 600;
  margin-bottom: 8px;
}

.reservation-subtitle {
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

.form-label {
  font-weight: 500;
  color: #333;
  margin-bottom: 6px;
}

.payment-section-title {
  color: #333;
  font-weight: 600;
  border-bottom: 2px solid #ffc107;
  padding-bottom: 8px;
}

.payment-options {
  background: rgba(248, 249, 250, 0.8);
  border-radius: 12px;
  padding: 20px;
}

.form-check-input:checked {
  background-color: #ffc107;
  border-color: #ffc107;
}

.credit-card-section {
  background: rgba(255, 255, 255, 0.8);
  border-color: #e9ecef !important;
}

.btn-warning {
  border-radius: 12px;
  font-weight: 600;
  background: linear-gradient(135deg, #ff9f1c 0%, #febb02 100%);
  border: none;
  transition: all 0.3s ease;
  position: relative;
  overflow: hidden;
}

.btn-warning::before {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
  transition: left 0.5s;
}

.btn-warning:hover::before {
  left: 100%;
}

.btn-warning:hover {
  background: linear-gradient(135deg, #febb02 0%, #ff9f1c 100%);
  transform: translateY(-2px);
  box-shadow: 0 8px 25px rgba(255, 159, 28, 0.4);
}

.text-warning {
  color: #ffc107 !important;
}

.text-warning:hover {
  color: #e0a800 !important;
  text-decoration: underline;
}

.additional-info {
  background: rgba(248, 249, 250, 0.6);
  border-radius: 12px;
  padding: 20px;
}

.info-item {
  padding: 10px;
}

.info-icon {
  width: 24px;
  height: 24px;
  opacity: 0.8;
}

/* Hide credit card section by default */
#creditCardSection {
  display: block;
}

/* Mobile Responsiveness */
@media (max-width: 768px) {
  .reservation-card {
    margin: 1rem;
    border-radius: 15px;
  }
  
  .card-body {
    padding: 2rem !important;
  }
  
  .reservation-title {
    font-size: 1.5rem;
  }
  
  .btn-warning {
    padding: 15px !important;
  }

  .payment-options,
  .additional-info {
    padding: 15px;
  }
}
</style>

<!-- JavaScript -->
<script>
// Handle payment option changes
document.querySelectorAll('input[name="paymentOption"]').forEach(radio => {
  radio.addEventListener('change', function() {
    const creditCardSection = document.getElementById('creditCardSection');
    const cardFields = creditCardSection.querySelectorAll('input, select');
    
    if (this.value === 'creditCard') {
      creditCardSection.style.display = 'block';
      // Make credit card fields required
      cardFields.forEach(field => {
        if (['cardNumber', 'cardName', 'expiryMonth', 'expiryYear', 'cvv'].includes(field.id)) {
          field.required = true;
        }
      });
    } else {
      creditCardSection.style.display = 'none';
      // Remove required attribute from credit card fields
      cardFields.forEach(field => {
        field.required = false;
      });
    }
  });
});

// Set minimum date to today
document.addEventListener('DOMContentLoaded', function() {
  const today = new Date().toISOString().split('T')[0];
  document.getElementById('checkinDate').min = today;
  document.getElementById('checkoutDate').min = today;
});

// Update checkout date when checkin date changes
document.getElementById('checkinDate').addEventListener('change', function() {
  const checkinDate = new Date(this.value);
  const nextDay = new Date(checkinDate);
  nextDay.setDate(checkinDate.getDate() + 1);
  
  const checkoutInput = document.getElementById('checkoutDate');
  checkoutInput.min = nextDay.toISOString().split('T')[0];
  
  // Clear checkout date if it's before new minimum
  if (checkoutInput.value && new Date(checkoutInput.value) <= checkinDate) {
    checkoutInput.value = '';
  }
});

// Format card number input
document.getElementById('cardNumber').addEventListener('input', function() {
  let value = this.value.replace(/\s/g, '').replace(/[^0-9]/gi, '');
  let formattedValue = value.match(/.{1,4}/g)?.join(' ') || value;
  this.value = formattedValue;
});

// CVV input restriction
document.getElementById('cvv').addEventListener('input', function() {
  this.value = this.value.replace(/[^0-9]/g, '');
});

// Reservation Form submission
document.getElementById('reservationForm').addEventListener('submit', function(e) {
  e.preventDefault();
  
  const formData = new FormData(this);
  const paymentOption = formData.get('paymentOption');
  
  // Basic validation
  const requiredFields = ['fullName', 'email', 'phone', 'roomType', 'guests', 'checkinDate', 'checkoutDate'];
  let isValid = true;
  
  requiredFields.forEach(field => {
    if (!formData.get(field)) {
      isValid = false;
      document.getElementById(field).classList.add('is-invalid');
    } else {
      document.getElementById(field).classList.remove('is-invalid');
    }
  });
  
  // Validate credit card fields if payment option is credit card
  if (paymentOption === 'creditCard') {
    const cardFields = ['cardNumber', 'cardName', 'expiryMonth', 'expiryYear', 'cvv'];
    cardFields.forEach(field => {
      if (!formData.get(field)) {
        isValid = false;
        document.getElementById(field).classList.add('is-invalid');
      } else {
        document.getElementById(field).classList.remove('is-invalid');
      }
    });
  }
  
  if (isValid) {
    if (paymentOption === 'noCreditCard') {
      alert('⚠️ Reservation submitted successfully!\n\nIMPORTANT: Your reservation will be automatically cancelled at 7 PM daily unless secured with a credit card.\n\nReservation Details:\n- Name: ' + formData.get('fullName') + '\n- Room: ' + formData.get('roomType') + '\n- Check-in: ' + formData.get('checkinDate') + '\n- Check-out: ' + formData.get('checkoutDate'));
    } else {
      alert('🎉 Reservation confirmed successfully!\n\nYour reservation has been secured with your credit card.\n\nReservation Details:\n- Name: ' + formData.get('fullName') + '\n- Room: ' + formData.get('roomType') + '\n- Check-in: ' + formData.get('checkinDate') + '\n- Check-out: ' + formData.get('checkoutDate') + '\n\nA confirmation email will be sent shortly.');
    }
    
    // In a real application, you would redirect to a confirmation page
    // window.location.href = 'reservation-confirmation.php';
  } else {
    alert('Please fill in all required fields.');
  }
});
</script>

<?php include_once '../includes/footer.php'; ?>
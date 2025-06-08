<?php
// pages/dashboard.php
include_once '../includes/header.php';
?>

<div class="dashboard-container mt-5 pt-5">
  <!-- Background Video -->
  <video autoplay muted loop class="bg-video">
    <source src="../assets/images/background/hero-bg.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>
  
  <!-- Dark Overlay -->
  <div class="video-overlay"></div>
  
  <div class="container py-5 position-relative">
    <div class="row">
      <!-- Welcome Section -->
      <div class="col-12 mb-4">
        <div class="welcome-card card shadow-lg border-0">
          <div class="card-body p-4">
            <div class="row align-items-center">
              <div class="col-md-8">
                <h2 class="dashboard-title mb-2">Welcome back, John Doe!</h2>
                <p class="dashboard-subtitle text-muted mb-0">Manage your reservations and bookings</p>
              </div>
              <div class="col-md-4 text-md-end">
                <a href="reservation.php" class="btn btn-warning px-4 py-2">
                  <span class="btn-text">Make New Reservation</span>
                  <span class="btn-icon ms-2">🏨</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Quick Stats -->
      <div class="col-12 mb-4">
        <div class="row">
          <div class="col-md-4 mb-3">
            <div class="stat-card card border-0 shadow-sm">
              <div class="card-body text-center p-3">
                <div class="stat-icon mb-2">🏨</div>
                <h4 class="stat-number mb-1">3</h4>
                <p class="stat-label mb-0">Active Reservations</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="stat-card card border-0 shadow-sm">
              <div class="card-body text-center p-3">
                <div class="stat-icon mb-2">📅</div>
                <h4 class="stat-number mb-1">12</h4>
                <p class="stat-label mb-0">Total Bookings</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="stat-card card border-0 shadow-sm">
              <div class="card-body text-center p-3">
                <div class="stat-icon mb-2">💰</div>
                <h4 class="stat-number mb-1">$2,340</h4>
                <p class="stat-label mb-0">Total Spent</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Current Reservations -->
      <div class="col-12 mb-4">
        <div class="reservations-section card shadow-lg border-0">
          <div class="card-header bg-transparent border-0 p-4">
            <h4 class="section-title mb-0">Current Reservations</h4>
          </div>
          <div class="card-body p-4">
            <!-- Reservation 1 - Upcoming -->
            <div class="reservation-block mb-4">
              <div class="row align-items-center">
                <div class="col-md-8">
                  <div class="reservation-info">
                    <h5 class="reservation-title mb-2">Deluxe Room - Ocean View</h5>
                    <div class="reservation-details">
                      <span class="detail-item">
                        <i class="detail-icon">📅</i>
                        <strong>Check-in:</strong> June 15, 2025
                      </span>
                      <span class="detail-item">
                        <i class="detail-icon">📅</i>
                        <strong>Check-out:</strong> June 18, 2025
                      </span>
                      <span class="detail-item">
                        <i class="detail-icon">👥</i>
                        <strong>Guests:</strong> 2 Adults
                      </span>
                    </div>
                    <div class="reservation-meta mt-2">
                      <span class="reservation-id">Reservation ID: HTL-2025-001</span>
                      <span class="status-badge status-confirmed ms-3">Confirmed</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 text-md-end">
                  <div class="action-buttons">
                    <button class="btn btn-outline-primary btn-sm me-2 mb-2" onclick="changeReservation('HTL-2025-001')">
                      <span>Change</span>
                    </button>
                    <button class="btn btn-outline-danger btn-sm me-2 mb-2" onclick="cancelReservation('HTL-2025-001')">
                      <span>Cancel</span>
                    </button>
                    <button class="btn btn-success btn-sm mb-2" onclick="checkIn('HTL-2025-001')">
                      <span>Check-In</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <!-- Reservation 2 - Upcoming -->
            <div class="reservation-block mb-4">
              <div class="row align-items-center">
                <div class="col-md-8">
                  <div class="reservation-info">
                    <h5 class="reservation-title mb-2">Presidential Suite</h5>
                    <div class="reservation-details">
                      <span class="detail-item">
                        <i class="detail-icon">📅</i>
                        <strong>Check-in:</strong> July 22, 2025
                      </span>
                      <span class="detail-item">
                        <i class="detail-icon">📅</i>
                        <strong>Check-out:</strong> July 25, 2025
                      </span>
                      <span class="detail-item">
                        <i class="detail-icon">👥</i>
                        <strong>Guests:</strong> 4 Adults
                      </span>
                    </div>
                    <div class="reservation-meta mt-2">
                      <span class="reservation-id">Reservation ID: HTL-2025-002</span>
                      <span class="status-badge status-confirmed ms-3">Confirmed</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 text-md-end">
                  <div class="action-buttons">
                    <button class="btn btn-outline-primary btn-sm me-2 mb-2" onclick="changeReservation('HTL-2025-002')">
                      <span>Change</span>
                    </button>
                    <button class="btn btn-outline-danger btn-sm me-2 mb-2" onclick="cancelReservation('HTL-2025-002')">
                      <span>Cancel</span>
                    </button>
                    <button class="btn btn-success btn-sm mb-2" onclick="checkIn('HTL-2025-002')">
                      <span>Check-In</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <!-- Reservation 3 - Pending (No Credit Card) -->
            <div class="reservation-block mb-4">
              <div class="row align-items-center">
                <div class="col-md-8">
                  <div class="reservation-info">
                    <h5 class="reservation-title mb-2">Standard Room</h5>
                    <div class="reservation-details">
                      <span class="detail-item">
                        <i class="detail-icon">📅</i>
                        <strong>Check-in:</strong> August 10, 2025
                      </span>
                      <span class="detail-item">
                        <i class="detail-icon">📅</i>
                        <strong>Check-out:</strong> August 13, 2025
                      </span>
                      <span class="detail-item">
                        <i class="detail-icon">👥</i>
                        <strong>Guests:</strong> 1 Adult
                      </span>
                    </div>
                    <div class="reservation-meta mt-2">
                      <span class="reservation-id">Reservation ID: HTL-2025-003</span>
                      <span class="status-badge status-pending ms-3">Pending (No Credit Card)</span>
                    </div>
                    <div class="warning-note mt-2">
                      <small class="text-warning">⚠️ This reservation will be cancelled at 7 PM daily unless secured with a credit card</small>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 text-md-end">
                  <div class="action-buttons">
                    <button class="btn btn-warning btn-sm me-2 mb-2" onclick="secureReservation('HTL-2025-003')">
                      <span>Secure Now</span>
                    </button>
                    <button class="btn btn-outline-danger btn-sm mb-2" onclick="cancelReservation('HTL-2025-003')">
                      <span>Cancel</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Past Reservations -->
      <div class="col-12 mb-4">
        <div class="reservations-section card shadow-lg border-0">
          <div class="card-header bg-transparent border-0 p-4">
            <h4 class="section-title mb-0">Past Reservations</h4>
          </div>
          <div class="card-body p-4">
            <!-- Past Reservation 1 - Completed -->
            <div class="reservation-block mb-4">
              <div class="row align-items-center">
                <div class="col-md-8">
                  <div class="reservation-info">
                    <h5 class="reservation-title mb-2">Suite - Garden View</h5>
                    <div class="reservation-details">
                      <span class="detail-item">
                        <i class="detail-icon">📅</i>
                        <strong>Stay:</strong> May 15-18, 2025
                      </span>
                      <span class="detail-item">
                        <i class="detail-icon">👥</i>
                        <strong>Guests:</strong> 2 Adults
                      </span>
                      <span class="detail-item">
                        <i class="detail-icon">💰</i>
                        <strong>Total:</strong> $840.00
                      </span>
                    </div>
                    <div class="reservation-meta mt-2">
                      <span class="reservation-id">Reservation ID: HTL-2025-004</span>
                      <span class="status-badge status-completed ms-3">Completed</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 text-md-end">
                  <div class="action-buttons">
                    <button class="btn btn-outline-info btn-sm me-2 mb-2" onclick="viewInvoice('HTL-2025-004')">
                      <span>View Invoice</span>
                    </button>
                    <button class="btn btn-outline-secondary btn-sm mb-2" onclick="rebookStay('HTL-2025-004')">
                      <span>Book Again</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <!-- Past Reservation 2 - Cancelled -->
            <div class="reservation-block mb-4">
              <div class="row align-items-center">
                <div class="col-md-8">
                  <div class="reservation-info">
                    <h5 class="reservation-title mb-2">Deluxe Room</h5>
                    <div class="reservation-details">
                      <span class="detail-item">
                        <i class="detail-icon">📅</i>
                        <strong>Was for:</strong> April 20-23, 2025
                      </span>
                      <span class="detail-item">
                        <i class="detail-icon">👥</i>
                        <strong>Guests:</strong> 3 Adults
                      </span>
                      <span class="detail-item">
                        <i class="detail-icon">💰</i>
                        <strong>Refund:</strong> $540.00
                      </span>
                    </div>
                    <div class="reservation-meta mt-2">
                      <span class="reservation-id">Reservation ID: HTL-2025-005</span>
                      <span class="status-badge status-cancelled ms-3">Cancelled</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 text-md-end">
                  <div class="action-buttons">
                    <button class="btn btn-outline-secondary btn-sm mb-2" onclick="rebookStay('HTL-2025-005')">
                      <span>Book Again</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <!-- Past Reservation 3 - No Show -->
            <div class="reservation-block">
              <div class="row align-items-center">
                <div class="col-md-8">
                  <div class="reservation-info">
                    <h5 class="reservation-title mb-2">Standard Room</h5>
                    <div class="reservation-details">
                      <span class="detail-item">
                        <i class="detail-icon">📅</i>
                        <strong>Was for:</strong> March 10-12, 2025
                      </span>
                      <span class="detail-item">
                        <i class="detail-icon">👥</i>
                        <strong>Guests:</strong> 1 Adult
                      </span>
                      <span class="detail-item">
                        <i class="detail-icon">💰</i>
                        <strong>Charged:</strong> $240.00
                      </span>
                    </div>
                    <div class="reservation-meta mt-2">
                      <span class="reservation-id">Reservation ID: HTL-2025-006</span>
                      <span class="status-badge status-no-show ms-3">No-Show</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 text-md-end">
                  <div class="action-buttons">
                    <button class="btn btn-outline-info btn-sm me-2 mb-2" onclick="viewInvoice('HTL-2025-006')">
                      <span>View Invoice</span>
                    </button>
                    <button class="btn btn-outline-secondary btn-sm mb-2" onclick="rebookStay('HTL-2025-006')">
                      <span>Book Again</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Quick Actions -->
      <div class="col-12">
        <div class="quick-actions-section card shadow-lg border-0">
          <div class="card-header bg-transparent border-0 p-4">
            <h4 class="section-title mb-0">Quick Actions</h4>
          </div>
          <div class="card-body p-4">
            <div class="row">
              <div class="col-md-3 col-sm-6 mb-3">
                <a href="reservation.php" class="quick-action-card">
                  <div class="quick-action-icon">🏨</div>
                  <h6 class="quick-action-title">New Reservation</h6>
                  <p class="quick-action-desc">Book another stay</p>
                </a>
              </div>
              <div class="col-md-3 col-sm-6 mb-3">
                <a href="billing.php" class="quick-action-card">
                  <div class="quick-action-icon">🧾</div>
                  <h6 class="quick-action-title">View Bills</h6>
                  <p class="quick-action-desc">Check billing history</p>
                </a>
              </div>
              <div class="col-md-3 col-sm-6 mb-3">
                <a href="suite_booking.php" class="quick-action-card">
                  <div class="quick-action-icon">🏘️</div>
                  <h6 class="quick-action-title">Suite Booking</h6>
                  <p class="quick-action-desc">Long-term stays</p>
                </a>
              </div>
              <div class="col-md-3 col-sm-6 mb-3">
                <a href="#" class="quick-action-card" onclick="contactSupport()">
                  <div class="quick-action-icon">📞</div>
                  <h6 class="quick-action-title">Contact Support</h6>
                  <p class="quick-action-desc">Get help & support</p>
                </a>
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
.dashboard-container {
  min-height: 100vh;
  position: relative;
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

.welcome-card, .reservations-section, .quick-actions-section {
  border-radius: 20px;
  backdrop-filter: blur(15px);
  background: rgba(255, 255, 255, 0.95);
  box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3);
  border: 1px solid rgba(255, 255, 255, 0.2);
}

.stat-card {
  border-radius: 15px;
  backdrop-filter: blur(10px);
  background: rgba(255, 255, 255, 0.9);
  transition: transform 0.3s ease;
}

.stat-card:hover {
  transform: translateY(-5px);
}

.dashboard-title {
  color: #333;
  font-weight: 600;
}

.dashboard-subtitle {
  font-size: 16px;
}

.section-title {
  color: #333;
  font-weight: 600;
  border-bottom: 2px solid #ffc107;
  padding-bottom: 8px;
  display: inline-block;
}

.stat-icon {
  font-size: 2rem;
  margin-bottom: 10px;
}

.stat-number {
  color: #333;
  font-weight: 700;
  font-size: 1.8rem;
}

.stat-label {
  color: #666;
  font-size: 14px;
  font-weight: 500;
}

.reservation-block {
  border-bottom: 1px solid rgba(0, 0, 0, 0.1);
  padding-bottom: 20px;
}

.reservation-block:last-child {
  border-bottom: none;
  padding-bottom: 0;
}

.reservation-title {
  color: #333;
  font-weight: 600;
  margin-bottom: 10px;
}

.reservation-details {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
  margin-bottom: 10px;
}

.detail-item {
  display: flex;
  align-items: center;
  color: #666;
  font-size: 14px;
}

.detail-icon {
  margin-right: 6px;
  font-size: 14px;
}

.reservation-meta {
  display: flex;
  align-items: center;
  flex-wrap: wrap;
}

.reservation-id {
  color: #888;
  font-size: 13px;
  font-weight: 500;
}

.status-badge {
  padding: 4px 12px;
  border-radius: 20px;
  font-size: 12px;
  font-weight: 600;
  text-transform: uppercase;
}

.status-confirmed {
  background: rgba(40, 167, 69, 0.1);
  color: #28a745;
  border: 1px solid rgba(40, 167, 69, 0.2);
}

.status-pending {
  background: rgba(255, 193, 7, 0.1);
  color: #ffc107;
  border: 1px solid rgba(255, 193, 7, 0.2);
}

.status-completed {
  background: rgba(23, 162, 184, 0.1);
  color: #17a2b8;
  border: 1px solid rgba(23, 162, 184, 0.2);
}

.status-cancelled {
  background: rgba(108, 117, 125, 0.1);
  color: #6c757d;
  border: 1px solid rgba(108, 117, 125, 0.2);
}

.status-no-show {
  background: rgba(220, 53, 69, 0.1);
  color: #dc3545;
  border: 1px solid rgba(220, 53, 69, 0.2);
}

.action-buttons {
  display: flex;
  flex-wrap: wrap;
  justify-content: flex-end;
  gap: 5px;
}

.btn {
  border-radius: 8px;
  font-weight: 500;
  transition: all 0.3s ease;
}

.btn-warning {
  background: linear-gradient(135deg, #ff9f1c 0%, #febb02 100%);
  border: none;
}

.btn-warning:hover {
  background: linear-gradient(135deg, #febb02 0%, #ff9f1c 100%);
  transform: translateY(-2px);
  box-shadow: 0 5px 15px rgba(255, 159, 28, 0.4);
}

.warning-note {
  background: rgba(255, 193, 7, 0.1);
  padding: 8px 12px;
  border-radius: 8px;
  border-left: 3px solid #ffc107;
}

.quick-action-card {
  display: block;
  padding: 20px;
  text-align: center;
  background: rgba(255, 255, 255, 0.8);
  border-radius: 15px;
  text-decoration: none;
  color: inherit;
  transition: all 0.3s ease;
  border: 1px solid rgba(0, 0, 0, 0.1);
}

.quick-action-card:hover {
  background: rgba(255, 255, 255, 0.95);
  transform: translateY(-5px);
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
  color: inherit;
  text-decoration: none;
}

.quick-action-icon {
  font-size: 2.5rem;
  margin-bottom: 10px;
}

.quick-action-title {
  color: #333;
  font-weight: 600;
  margin-bottom: 5px;
}

.quick-action-desc {
  color: #666;
  font-size: 13px;
  margin: 0;
}

/* Mobile Responsiveness */
@media (max-width: 768px) {
  .dashboard-container .card {
    margin: 0.5rem;
    border-radius: 15px;
  }
  
  .card-body {
    padding: 1.5rem !important;
  }
  
  .dashboard-title {
    font-size: 1.5rem;
  }
  
  .reservation-details {
    flex-direction: column;
    gap: 8px;
  }
  
  .action-buttons {
    justify-content: flex-start;
    margin-top: 15px;
  }
  
  .quick-action-card {
    padding: 15px;
  }
  
  .quick-action-icon {
    font-size: 2rem;
  }
}

@media (max-width: 576px) {
  .stat-card .card-body {
    padding: 1rem !important;
  }
  
  .stat-number {
    font-size: 1.5rem;
  }
  
  .reservation-meta {
    flex-direction: column;
    align-items: flex-start;
    gap: 5px;
  }
}
</style>

<!-- JavaScript -->
<script>
// Reservation management functions (non-functional for UI demo)
function changeReservation(reservationId) {
  alert(`Change reservation functionality would be implemented here.\nReservation ID: ${reservationId}\n\nThis would redirect to a form to modify dates, room type, or guest count.`);
}

function cancelReservation(reservationId) {
  if (confirm(`Are you sure you want to cancel reservation ${reservationId}?\n\nCancellation may be subject to fees depending on your booking terms.`)) {
    alert(`Reservation ${reservationId} would be cancelled.\n\nIn a real application, this would:\n- Update the reservation status\n- Process any applicable refunds\n- Send confirmation email`);
  }
}

function checkIn(reservationId) {
  alert(`Check-in functionality would be implemented here.\nReservation ID: ${reservationId}\n\nThis would:\n- Verify reservation details\n- Assign room number\n- Generate room key\n- Update reservation status`);
}

function secureReservation(reservationId) {
  alert(`Secure reservation functionality would redirect to payment page.\nReservation ID: ${reservationId}\n\nThis would:\n- Collect credit card information\n- Process payment authorization\n- Update reservation status to confirmed`);
}

function viewInvoice(reservationId) {
  alert(`Invoice viewer would be implemented here.\nReservation ID: ${reservationId}\n\nThis would display detailed billing information including:\n- Room charges\n- Additional services\n- Taxes and fees\n- Payment history`);
}

function rebookStay(reservationId) {
  alert(`Rebook functionality would be implemented here.\nOriginal Reservation ID: ${reservationId}\n\nThis would:\n- Pre-fill reservation form with previous details\n- Allow date and room modifications\n- Create new reservation`);
}

function contactSupport() {
  alert(`Contact Support options:\n\n📞 Phone: +94 77 678 6535\n📧 Email: info@onitha.com\n💬 Live Chat: Available 24/7\n\nIn a real application, this would open:\n- Live chat widget\n- Support ticket system\n- Contact form`);
}

// Initialize dashboard
document.addEventListener('DOMContentLoaded', function() {
  // Add any initialization code here
  console.log('Customer Dashboard loaded successfully');
  
  // Simulate real-time updates for demonstration
  // In a real application, this would connect to your backend API
});

// Auto-refresh functionality (for demo purposes)
function simulateDataRefresh() {
  // In a real application, this would fetch latest reservation data
  console.log('Refreshing reservation data...');
}

// Set up periodic refresh (commented out for demo)
// setInterval(simulateDataRefresh, 300000); // Refresh every 5 minutes
</script>

<?php include_once '../includes/footer.php'; ?>
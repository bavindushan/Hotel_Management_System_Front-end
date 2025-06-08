<?php
// pages/billing.php
include_once '../includes/header.php';
?>

<div class="billing-container mt-5 pt-5">
  <!-- Background Video -->
  <video autoplay muted loop class="bg-video">
    <source src="../assets/images/background/hero-bg.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>
  
  <!-- Dark Overlay -->
  <div class="video-overlay"></div>
  
  <div class="container py-5 position-relative">
    <div class="row">
      <!-- Page Header -->
      <div class="col-12 mb-4">
        <div class="billing-header card shadow-lg border-0">
          <div class="card-body p-4">
            <div class="row align-items-center">
              <div class="col-md-8">
                <h2 class="billing-title mb-2">Billing History</h2>
                <p class="billing-subtitle text-muted mb-0">View and manage your billing records and payment history</p>
              </div>
              <div class="col-md-4 text-md-end">
                <div class="billing-summary">
                  <div class="summary-item">
                    <span class="summary-label">Total Paid:</span>
                    <span class="summary-value text-success">$2,340.00</span>
                  </div>
                  <div class="summary-item">
                    <span class="summary-label">Pending:</span>
                    <span class="summary-value text-warning">$480.00</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Filter Controls -->
      <div class="col-12 mb-4">
        <div class="filter-section card shadow-lg border-0">
          <div class="card-body p-4">
            <div class="row align-items-center">
              <div class="col-md-8">
                <h5 class="filter-title mb-3">Filter Bills</h5>
                <div class="filter-buttons">
                  <button class="btn btn-filter active" data-filter="all" onclick="filterBills('all')">
                    <span class="filter-icon">📋</span>
                    <span class="filter-text">All Bills</span>
                    <span class="filter-count">(6)</span>
                  </button>
                  <button class="btn btn-filter" data-filter="paid" onclick="filterBills('paid')">
                    <span class="filter-icon">✅</span>
                    <span class="filter-text">Paid</span>
                    <span class="filter-count">(3)</span>
                  </button>
                  <button class="btn btn-filter" data-filter="unpaid" onclick="filterBills('unpaid')">
                    <span class="filter-icon">⏳</span>
                    <span class="filter-text">Unpaid</span>
                    <span class="filter-count">(2)</span>
                  </button>
                  <button class="btn btn-filter" data-filter="no-show" onclick="filterBills('no-show')">
                    <span class="filter-icon">❌</span>
                    <span class="filter-text">No-Show</span>
                    <span class="filter-count">(1)</span>
                  </button>
                </div>
              </div>
              <div class="col-md-4 text-md-end">
                <div class="date-filter">
                  <label for="date-range" class="form-label">Date Range:</label>
                  <select id="date-range" class="form-select" onchange="filterByDate(this.value)">
                    <option value="all">All Time</option>
                    <option value="30">Last 30 Days</option>
                    <option value="90">Last 3 Months</option>
                    <option value="365">Last Year</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Billing Table -->
      <div class="col-12 mb-4">
        <div class="billing-table-section card shadow-lg border-0">
          <div class="card-header bg-transparent border-0 p-4">
            <h4 class="section-title mb-0">Billing Records</h4>
          </div>
          <div class="card-body p-0">
            <div class="table-responsive">
              <table class="table billing-table mb-0">
                <thead>
                  <tr>
                    <th>Reservation ID</th>
                    <th>Room Type</th>
                    <th>Stay Duration</th>
                    <th>Services</th>
                    <th>Total Cost</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- Paid Bill 1 -->
                  <tr class="bill-row" data-status="paid">
                    <td>
                      <div class="reservation-info">
                        <strong class="reservation-id">HTL-2025-004</strong>
                        <small class="reservation-date">May 15-18, 2025</small>
                      </div>
                    </td>
                    <td>
                      <div class="room-info">
                        <span class="room-type">Suite - Garden View</span>
                        <small class="room-details">2 Adults</small>
                      </div>
                    </td>
                    <td>
                      <span class="duration">3 Nights</span>
                    </td>
                    <td>
                      <div class="services-list">
                        <span class="service-item">Room Service: $45</span>
                        <span class="service-item">Laundry: $25</span>
                        <span class="service-item">Restaurant: $120</span>
                      </div>
                    </td>
                    <td>
                      <div class="cost-breakdown">
                        <strong class="total-cost">$840.00</strong>
                        <small class="cost-details">Room: $650 + Services: $190</small>
                      </div>
                    </td>
                    <td>
                      <span class="status-badge status-paid">Paid</span>
                      <small class="payment-date">Paid on May 18, 2025</small>
                    </td>
                    <td>
                      <div class="action-buttons">
                        <button class="btn btn-outline-info btn-sm" onclick="viewInvoice('HTL-2025-004')">
                          <span>View Invoice</span>
                        </button>
                        <button class="btn btn-outline-secondary btn-sm" onclick="downloadReceipt('HTL-2025-004')">
                          <span>Download</span>
                        </button>
                      </div>
                    </td>
                  </tr>

                  <!-- Unpaid Bill 1 -->
                  <tr class="bill-row" data-status="unpaid">
                    <td>
                      <div class="reservation-info">
                        <strong class="reservation-id">HTL-2025-001</strong>
                        <small class="reservation-date">June 15-18, 2025</small>
                      </div>
                    </td>
                    <td>
                      <div class="room-info">
                        <span class="room-type">Deluxe Room - Ocean View</span>
                        <small class="room-details">2 Adults</small>
                      </div>
                    </td>
                    <td>
                      <span class="duration">3 Nights</span>
                    </td>
                    <td>
                      <div class="services-list">
                        <span class="service-item">No additional services</span>
                      </div>
                    </td>
                    <td>
                      <div class="cost-breakdown">
                        <strong class="total-cost">$720.00</strong>
                        <small class="cost-details">Room: $720</small>
                      </div>
                    </td>
                    <td>
                      <span class="status-badge status-unpaid">Unpaid</span>
                      <small class="payment-date">Due: June 18, 2025</small>
                    </td>
                    <td>
                      <div class="action-buttons">
                        <button class="btn btn-warning btn-sm" onclick="payBill('HTL-2025-001')">
                          <span>Pay Now</span>
                        </button>
                        <button class="btn btn-outline-info btn-sm" onclick="viewInvoice('HTL-2025-001')">
                          <span>View</span>
                        </button>
                      </div>
                    </td>
                  </tr>

                  <!-- Paid Bill 2 -->
                  <tr class="bill-row" data-status="paid">
                    <td>
                      <div class="reservation-info">
                        <strong class="reservation-id">HTL-2025-002</strong>
                        <small class="reservation-date">July 22-25, 2025</small>
                      </div>
                    </td>
                    <td>
                      <div class="room-info">
                        <span class="room-type">Presidential Suite</span>
                        <small class="room-details">4 Adults</small>
                      </div>
                    </td>
                    <td>
                      <span class="duration">3 Nights</span>
                    </td>
                    <td>
                      <div class="services-list">
                        <span class="service-item">Room Service: $85</span>
                        <span class="service-item">Spa: $200</span>
                        <span class="service-item">Mini Bar: $65</span>
                      </div>
                    </td>
                    <td>
                      <div class="cost-breakdown">
                        <strong class="total-cost">$1,500.00</strong>
                        <small class="cost-details">Room: $1,150 + Services: $350</small>
                      </div>
                    </td>
                    <td>
                      <span class="status-badge status-paid">Paid</span>
                      <small class="payment-date">Paid on July 25, 2025</small>
                    </td>
                    <td>
                      <div class="action-buttons">
                        <button class="btn btn-outline-info btn-sm" onclick="viewInvoice('HTL-2025-002')">
                          <span>View Invoice</span>
                        </button>
                        <button class="btn btn-outline-secondary btn-sm" onclick="downloadReceipt('HTL-2025-002')">
                          <span>Download</span>
                        </button>
                      </div>
                    </td>
                  </tr>

                  <!-- No-Show Bill -->
                  <tr class="bill-row" data-status="no-show">
                    <td>
                      <div class="reservation-info">
                        <strong class="reservation-id">HTL-2025-006</strong>
                        <small class="reservation-date">March 10-12, 2025</small>
                      </div>
                    </td>
                    <td>
                      <div class="room-info">
                        <span class="room-type">Standard Room</span>
                        <small class="room-details">1 Adult</small>
                      </div>
                    </td>
                    <td>
                      <span class="duration">2 Nights</span>
                    </td>
                    <td>
                      <div class="services-list">
                        <span class="service-item no-show-note">No services (No-Show)</span>
                      </div>
                    </td>
                    <td>
                      <div class="cost-breakdown">
                        <strong class="total-cost">$240.00</strong>
                        <small class="cost-details">No-Show Charge: $240</small>
                      </div>
                    </td>
                    <td>
                      <span class="status-badge status-no-show">No-Show</span>
                      <small class="payment-date">Charged on March 11, 2025</small>
                    </td>
                    <td>
                      <div class="action-buttons">
                        <button class="btn btn-outline-info btn-sm" onclick="viewInvoice('HTL-2025-006')">
                          <span>View Invoice</span>
                        </button>
                        <button class="btn btn-outline-secondary btn-sm" onclick="downloadReceipt('HTL-2025-006')">
                          <span>Download</span>
                        </button>
                      </div>
                    </td>
                  </tr>

                  <!-- Unpaid Bill 2 -->
                  <tr class="bill-row" data-status="unpaid">
                    <td>
                      <div class="reservation-info">
                        <strong class="reservation-id">HTL-2025-003</strong>
                        <small class="reservation-date">August 10-13, 2025</small>
                      </div>
                    </td>
                    <td>
                      <div class="room-info">
                        <span class="room-type">Standard Room</span>
                        <small class="room-details">1 Adult</small>
                      </div>
                    </td>
                    <td>
                      <span class="duration">3 Nights</span>
                    </td>
                    <td>
                      <div class="services-list">
                        <span class="service-item">Telephone: $15</span>
                      </div>
                    </td>
                    <td>
                      <div class="cost-breakdown">
                        <strong class="total-cost">$375.00</strong>
                        <small class="cost-details">Room: $360 + Services: $15</small>
                      </div>
                    </td>
                    <td>
                      <span class="status-badge status-unpaid">Unpaid</span>
                      <small class="payment-date">Due: August 13, 2025</small>
                    </td>
                    <td>
                      <div class="action-buttons">
                        <button class="btn btn-warning btn-sm" onclick="payBill('HTL-2025-003')">
                          <span>Pay Now</span>
                        </button>
                        <button class="btn btn-outline-info btn-sm" onclick="viewInvoice('HTL-2025-003')">
                          <span>View</span>
                        </button>
                      </div>
                    </td>
                  </tr>

                  <!-- Paid Bill 3 -->
                  <tr class="bill-row" data-status="paid">
                    <td>
                      <div class="reservation-info">
                        <strong class="reservation-id">HTL-2025-007</strong>
                        <small class="reservation-date">April 5-8, 2025</small>
                      </div>
                    </td>
                    <td>
                      <div class="room-info">
                        <span class="room-type">Deluxe Room</span>
                        <small class="room-details">2 Adults</small>
                      </div>
                    </td>
                    <td>
                      <span class="duration">3 Nights</span>
                    </td>
                    <td>
                      <div class="services-list">
                        <span class="service-item">Restaurant: $95</span>
                        <span class="service-item">Parking: $30</span>
                      </div>
                    </td>
                    <td>
                      <div class="cost-breakdown">
                        <strong class="total-cost">$705.00</strong>
                        <small class="cost-details">Room: $580 + Services: $125</small>
                      </div>
                    </td>
                    <td>
                      <span class="status-badge status-paid">Paid</span>
                      <small class="payment-date">Paid on April 8, 2025</small>
                    </td>
                    <td>
                      <div class="action-buttons">
                        <button class="btn btn-outline-info btn-sm" onclick="viewInvoice('HTL-2025-007')">
                          <span>View Invoice</span>
                        </button>
                        <button class="btn btn-outline-secondary btn-sm" onclick="downloadReceipt('HTL-2025-007')">
                          <span>Download</span>
                        </button>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <!-- Billing Summary Stats -->
      <div class="col-12 mb-4">
        <div class="row">
          <div class="col-md-3 mb-3">
            <div class="stat-card card border-0 shadow-sm">
              <div class="card-body text-center p-3">
                <div class="stat-icon">💰</div>
                <h4 class="stat-number">$4,380.00</h4>
                <p class="stat-label">Total Billed</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="stat-card card border-0 shadow-sm">
              <div class="card-body text-center p-3">
                <div class="stat-icon">✅</div>
                <h4 class="stat-number">$3,045.00</h4>
                <p class="stat-label">Total Paid</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="stat-card card border-0 shadow-sm">
              <div class="card-body text-center p-3">
                <div class="stat-icon">⏳</div>
                <h4 class="stat-number">$1,095.00</h4>
                <p class="stat-label">Pending</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="stat-card card border-0 shadow-sm">
              <div class="card-body text-center p-3">
                <div class="stat-icon">❌</div>
                <h4 class="stat-number">$240.00</h4>
                <p class="stat-label">No-Show Charges</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Important Notes -->
      <div class="col-12">
        <div class="notes-section card shadow-lg border-0">
          <div class="card-header bg-transparent border-0 p-4">
            <h4 class="section-title mb-0">Important Notes</h4>
          </div>
          <div class="card-body p-4">
            <div class="alert alert-warning mb-3">
              <strong>⚠️ Note:</strong> No functional logic included - This is a UI demonstration only.
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="note-item mb-3">
                  <h6 class="note-title">💳 Payment Options</h6>
                  <p class="note-text">Bills can be paid using credit card or cash at checkout. Online payment processing would be integrated in the full system.</p>
                </div>
                <div class="note-item mb-3">
                  <h6 class="note-title">🕐 No-Show Policy</h6>
                  <p class="note-text">No-show customers are automatically charged for their reservation. Bills are generated daily at 7:00 PM.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="note-item mb-3">
                  <h6 class="note-title">📊 Additional Services</h6>
                  <p class="note-text">Optional charges include restaurant, room service, laundry, telephone, parking, and club facility access.</p>
                </div>
                <div class="note-item mb-3">
                  <h6 class="note-title">🏢 Travel Company Bills</h6>
                  <p class="note-text">Corporate bookings through travel companies are billed directly to the company account.</p>
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
.billing-container {
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

.billing-header, .filter-section, .billing-table-section, .notes-section {
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

.billing-title {
  color: #333;
  font-weight: 600;
}

.billing-subtitle {
  font-size: 16px;
}

.section-title {
  color: #333;
  font-weight: 600;
  border-bottom: 2px solid #ffc107;
  padding-bottom: 8px;
  display: inline-block;
}

.billing-summary {
  text-align: right;
}

.summary-item {
  display: block;
  margin-bottom: 5px;
}

.summary-label {
  font-size: 14px;
  color: #666;
  margin-right: 10px;
}

.summary-value {
  font-size: 18px;
  font-weight: 600;
}

.filter-title {
  color: #333;
  font-weight: 600;
  margin-bottom: 15px;
}

.filter-buttons {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
}

.btn-filter {
  background: rgba(255, 255, 255, 0.8);
  border: 1px solid rgba(0, 0, 0, 0.1);
  border-radius: 10px;
  padding: 8px 16px;
  transition: all 0.3s ease;
  display: flex;
  align-items: center;
  gap: 8px;
}

.btn-filter:hover, .btn-filter.active {
  background: linear-gradient(135deg, #ff9f1c 0%, #febb02 100%);
  border-color: #ff9f1c;
  color: white;
  transform: translateY(-2px);
  box-shadow: 0 5px 15px rgba(255, 159, 28, 0.4);
}

.filter-icon {
  font-size: 16px;
}

.filter-text {
  font-weight: 500;
}

.filter-count {
  font-size: 12px;
  opacity: 0.8;
}

.date-filter label {
  font-size: 14px;
  color: #666;
  margin-bottom: 5px;
}

.billing-table {
  border-collapse: separate;
  border-spacing: 0;
}

.billing-table thead th {
  background: rgba(248, 249, 250, 0.8);
  color: #333;
  font-weight: 600;
  border: none;
  padding: 15px;
  font-size: 14px;
  text-transform: uppercase;
  letter-spacing: 0.5px;
}

.billing-table tbody tr {
  border-bottom: 1px solid rgba(0, 0, 0, 0.05);
  transition: background-color 0.3s ease;
}

.billing-table tbody tr:hover {
  background: rgba(255, 193, 7, 0.05);
}

.billing-table td {
  padding: 20px 15px;
  vertical-align: middle;
  border: none;
}

.reservation-info {
  display: flex;
  flex-direction: column;
}

.reservation-id {
  color: #333;
  font-size: 14px;
  font-weight: 600;
}

.reservation-date {
  color: #666;
  font-size: 12px;
  margin-top: 2px;
}

.room-info {
  display: flex;
  flex-direction: column;
}

.room-type {
  color: #333;
  font-size: 14px;
  font-weight: 500;
}

.room-details {
  color: #666;
  font-size: 12px;
  margin-top: 2px;
}

.duration {
  color: #333;
  font-weight: 500;
}

.services-list {
  display: flex;
  flex-direction: column;
  gap: 2px;
}

.service-item {
  font-size: 12px;
  color: #666;
}

.no-show-note {
  color: #dc3545;
  font-style: italic;
}

.cost-breakdown {
  display: flex;
  flex-direction: column;
}

.total-cost {
  color: #333;
  font-size: 16px;
  font-weight: 600;
}

.cost-details {
  color: #666;
  font-size: 11px;
  margin-top: 2px;
}

.status-badge {
  padding: 4px 12px;
  border-radius: 20px;
  font-size: 12px;
  font-weight: 600;
  text-transform: uppercase;
  display: inline-block;
}

.status-paid {
  background: rgba(40, 167, 69, 0.1);
  color: #28a745;
  border: 1px solid rgba(40, 167, 69, 0.2);
}

.status-unpaid {
  background: rgba(255, 193, 7, 0.1);
  color: #ffc107;
  border: 1px solid rgba(255, 193, 7, 0.2);
}

.status-no-show {
  background: rgba(220, 53, 69, 0.1);
  color: #dc3545;
  border: 1px solid rgba(220, 53, 69, 0.2);
}

.payment-date {
  display: block;
  color: #666;
  font-size: 11px;
  margin-top: 4px;
}

.action-buttons {
  display: flex;
  flex-direction: column;
  gap: 5px;
}

.btn {
  border-radius: 8px;
  font-weight: 500;
  transition: all 0.3s ease;
  font-size: 12px;
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

.stat-icon {
  font-size: 2rem;
  margin-bottom: 10px;
}

.stat-number {
  color: #333;
  font-weight: 700;
  font-size: 1.5rem;
}

.stat-label {
  color: #666;
  font-size: 14px;
  font-weight: 500;
}

.note-item {
  padding: 15px;
  background: rgba(248, 249, 250, 0.5);
  border-radius: 10px;
  border-left: 4px solid #ffc107;
}

.note-title {
  color: #333;
  font-weight: 600;
  margin-bottom: 8px;
}

.note-text {
  color: #666;
  font-size: 14px;
  margin: 0;
}

</style>



<script>

// Billing Page JavaScript Functionality

// Filter bills by status
function filterBills(status) {
    const rows = document.querySelectorAll('.bill-row');
    const buttons = document.querySelectorAll('.btn-filter');
    
    // Update active button
    buttons.forEach(btn => btn.classList.remove('active'));
    document.querySelector(`[data-filter="${status}"]`).classList.add('active');
    
    // Show/hide rows based on status
    rows.forEach(row => {
        if (status === 'all') {
            row.style.display = 'table-row';
        } else {
            if (row.getAttribute('data-status') === status) {
                row.style.display = 'table-row';
            } else {
                row.style.display = 'none';
            }
        }
    });
    
    // Update filter counts
    updateFilterCounts();
    
    // Add smooth transition effect
    rows.forEach(row => {
        row.style.opacity = '0';
        setTimeout(() => {
            if (row.style.display !== 'none') {
                row.style.opacity = '1';
            }
        }, 100);
    });
}

// Filter bills by date range
function filterByDate(days) {
    const rows = document.querySelectorAll('.bill-row');
    const currentDate = new Date();
    
    rows.forEach(row => {
        const dateText = row.querySelector('.reservation-date').textContent;
        const billDate = parseDateFromText(dateText);
        
        if (days === 'all') {
            row.style.display = 'table-row';
        } else {
            const daysDiff = Math.ceil((currentDate - billDate) / (1000 * 60 * 60 * 24));
            
            if (daysDiff <= parseInt(days)) {
                row.style.display = 'table-row';
            } else {
                row.style.display = 'none';
            }
        }
    });
    
    updateFilterCounts();
}

// Parse date from text format (e.g., "May 15-18, 2025")
function parseDateFromText(dateText) {
    // This is a simplified parser for the demo
    const year = dateText.match(/\d{4}/)[0];
    const monthNames = ["January", "February", "March", "April", "May", "June",
        "July", "August", "September", "October", "November", "December"];
    
    let month = 0;
    monthNames.forEach((monthName, index) => {
        if (dateText.includes(monthName.substring(0, 3))) {
            month = index;
        }
    });
    
    const dayMatch = dateText.match(/(\d{1,2})-?\d*/);
    const day = dayMatch ? parseInt(dayMatch[1]) : 1;
    
    return new Date(year, month, day);
}

// Update filter button counts
function updateFilterCounts() {
    const allRows = document.querySelectorAll('.bill-row');
    const visibleRows = document.querySelectorAll('.bill-row[style*="table-row"], .bill-row:not([style*="none"])');
    
    // Count by status
    let paidCount = 0, unpaidCount = 0, noShowCount = 0;
    
    visibleRows.forEach(row => {
        const status = row.getAttribute('data-status');
        switch(status) {
            case 'paid': paidCount++; break;
            case 'unpaid': unpaidCount++; break;
            case 'no-show': noShowCount++; break;
        }
    });
    
    // Update button counts
    document.querySelector('[data-filter="all"] .filter-count').textContent = `(${visibleRows.length})`;
    document.querySelector('[data-filter="paid"] .filter-count').textContent = `(${paidCount})`;
    document.querySelector('[data-filter="unpaid"] .filter-count').textContent = `(${unpaidCount})`;
    document.querySelector('[data-filter="no-show"] .filter-count').textContent = `(${noShowCount})`;
}

// View invoice function
function viewInvoice(reservationId) {
    // Create modal for invoice view
    const modal = createModal('Invoice Details', `
        <div class="invoice-content">
            <div class="invoice-header">
                <h4>Hotel Invoice</h4>
                <p><strong>Reservation ID:</strong> ${reservationId}</p>
            </div>
            <div class="invoice-body">
                <p>Invoice details would be displayed here...</p>
                <div class="alert alert-info">
                    <strong>Note:</strong> This is a UI demonstration. 
                    In a full system, detailed invoice information would be fetched from the database.
                </div>
            </div>
        </div>
    `);
    
    showModal(modal);
}

// Download receipt function
function downloadReceipt(reservationId) {
    // Simulate download process
    showNotification(`Downloading receipt for ${reservationId}...`, 'info');
    
    setTimeout(() => {
        showNotification(`Receipt for ${reservationId} downloaded successfully!`, 'success');
    }, 2000);
}

// Pay bill function
function payBill(reservationId) {
    const modal = createModal('Payment', `
        <div class="payment-form">
            <h5>Pay Bill for ${reservationId}</h5>
            <form>
                <div class="mb-3">
                    <label class="form-label">Payment Method</label>
                    <select class="form-select" id="paymentMethod">
                        <option value="credit">Credit Card</option>
                        <option value="cash">Cash</option>
                    </select>
                </div>
                <div class="mb-3" id="cardDetails">
                    <label class="form-label">Card Number</label>
                    <input type="text" class="form-control" placeholder="1234 5678 9012 3456">
                </div>
                <div class="row mb-3" id="cardExtraDetails">
                    <div class="col-6">
                        <label class="form-label">Expiry</label>
                        <input type="text" class="form-control" placeholder="MM/YY">
                    </div>
                    <div class="col-6">
                        <label class="form-label">CVV</label>
                        <input type="text" class="form-control" placeholder="123">
                    </div>
                </div>
                <div class="alert alert-warning">
                    <strong>Note:</strong> This is a UI demonstration only. No actual payment processing occurs.
                </div>
            </form>
        </div>
    `, 'Process Payment');
    
    showModal(modal);
    
    // Add event listener for payment method change
    document.getElementById('paymentMethod').addEventListener('change', function() {
        const cardDetails = document.getElementById('cardDetails');
        const cardExtraDetails = document.getElementById('cardExtraDetails');
        
        if (this.value === 'cash') {
            cardDetails.style.display = 'none';
            cardExtraDetails.style.display = 'none';
        } else {
            cardDetails.style.display = 'block';
            cardExtraDetails.style.display = 'flex';
        }
    });
}

// Create modal function
function createModal(title, content, buttonText = 'Close') {
    const modalHtml = `
        <div class="modal fade" id="dynamicModal" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">${title}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        ${content}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        ${buttonText !== 'Close' ? `<button type="button" class="btn btn-warning">${buttonText}</button>` : ''}
                    </div>
                </div>
            </div>
        </div>
    `;
    
    return modalHtml;
}

// Show modal function
function showModal(modalHtml) {
    // Remove existing modal if any
    const existingModal = document.getElementById('dynamicModal');
    if (existingModal) {
        existingModal.remove();
    }
    
    // Add modal to body
    document.body.insertAdjacentHTML('beforeend', modalHtml);
    
    // Show modal (assuming Bootstrap is available)
    const modal = document.getElementById('dynamicModal');
    modal.classList.add('show');
    modal.style.display = 'block';
    document.body.classList.add('modal-open');
    
    // Add backdrop
    const backdrop = document.createElement('div');
    backdrop.className = 'modal-backdrop fade show';
    document.body.appendChild(backdrop);
    
    // Close modal function
    const closeModal = () => {
        modal.classList.remove('show');
        modal.style.display = 'none';
        document.body.classList.remove('modal-open');
        backdrop.remove();
        setTimeout(() => modal.remove(), 300);
    };
    
    // Add event listeners for closing
    modal.querySelectorAll('[data-bs-dismiss="modal"], .btn-close').forEach(btn => {
        btn.addEventListener('click', closeModal);
    });
    
    backdrop.addEventListener('click', closeModal);
}

// Show notification function
function showNotification(message, type = 'info') {
    const notification = document.createElement('div');
    notification.className = `alert alert-${type} notification-toast`;
    notification.innerHTML = `
        <div class="d-flex align-items-center">
            <div class="flex-grow-1">${message}</div>
            <button type="button" class="btn-close btn-close-sm ms-2"></button>
        </div>
    `;
    
    // Add styles for notification
    notification.style.cssText = `
        position: fixed;
        top: 20px;
        right: 20px;
        z-index: 9999;
        min-width: 300px;
        animation: slideIn 0.3s ease;
    `;
    
    document.body.appendChild(notification);
    
    // Auto remove after 5 seconds
    setTimeout(() => {
        notification.style.animation = 'slideOut 0.3s ease';
        setTimeout(() => notification.remove(), 300);
    }, 5000);
    
    // Manual close
    notification.querySelector('.btn-close').addEventListener('click', () => {
        notification.style.animation = 'slideOut 0.3s ease';
        setTimeout(() => notification.remove(), 300);
    });
}

// Add CSS animations for notifications
const style = document.createElement('style');
style.textContent = `
    @keyframes slideIn {
        from {
            transform: translateX(100%);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }
    
    @keyframes slideOut {
        from {
            transform: translateX(0);
            opacity: 1;
        }
        to {
            transform: translateX(100%);
            opacity: 0;
        }
    }
    
    .notification-toast {
        box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        border-radius: 10px;
        backdrop-filter: blur(10px);
    }
    
    .bill-row {
        transition: opacity 0.3s ease;
    }
    
    .modal-content {
        border-radius: 15px;
        backdrop-filter: blur(15px);
        background: rgba(255, 255, 255, 0.95);
        border: 1px solid rgba(255, 255, 255, 0.2);
    }
    
    .invoice-content, .payment-form {
        padding: 20px;
    }
    
    .invoice-header {
        border-bottom: 1px solid #eee;
        padding-bottom: 15px;
        margin-bottom: 20px;
    }
`;
document.head.appendChild(style);

// Initialize page on load
document.addEventListener('DOMContentLoaded', function() {
    // Set initial filter counts
    updateFilterCounts();
    
    // Add smooth hover effects for table rows
    const rows = document.querySelectorAll('.bill-row');
    rows.forEach(row => {
        row.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.01)';
            this.style.transition = 'transform 0.2s ease';
        });
        
        row.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1)';
        });
    });
    
    // Add loading animation for action buttons
    const actionButtons = document.querySelectorAll('.action-buttons .btn');
    actionButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            const originalText = this.innerHTML;
            this.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Loading...';
            this.disabled = true;
            
            setTimeout(() => {
                this.innerHTML = originalText;
                this.disabled = false;
            }, 1000);
        });
    });
    
    // Initialize tooltips for status badges
    const statusBadges = document.querySelectorAll('.status-badge');
    statusBadges.forEach(badge => {
        badge.title = `Status: ${badge.textContent}`;
    });
    
    console.log('Billing page JavaScript initialized successfully!');
});

// Export functions for global access
window.filterBills = filterBills;
window.filterByDate = filterByDate;
window.viewInvoice = viewInvoice;
window.downloadReceipt = downloadReceipt;
window.payBill = payBill;

</script>
<?php include_once '../includes/footer.php'; ?>
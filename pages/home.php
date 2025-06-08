<?php
?> 
 <!-- Hero Section with Background Video -->
  <section id="hero" class="position-relative text-white d-flex align-items-center justify-content-center">
    <video autoplay muted loop playsinline class="bg-video">
      <source src="assets/images/background/hero-bg.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
    <div class="overlay"></div>
    <div class="container text-center hero-content hero-padding">
      <h1>Experience Holiday Getaway Worldwide</h1>
      <p class="lead">Premium accommodations across multiple destinations with consistent luxury and exceptional service</p>
      
      <!-- Branch Selection Call-to-Action -->
      <div class="branch-selector-hero mt-4 mb-4">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="branch-quick-select">
              <h5 class="text-white mb-3">Choose Your Destination</h5>
              <div class="branch-buttons d-flex flex-wrap justify-content-center gap-3">
                <button class="btn btn-outline-light branch-btn" data-branch="colombo">
                  <span class="branch-icon">🏙️</span>
                  <span>Colombo</span>
                </button>
                <button class="btn btn-outline-light branch-btn" data-branch="kandy">
                  <span class="branch-icon">🏔️</span>
                  <span>Kandy</span>
                </button>
                <button class="btn btn-outline-light branch-btn" data-branch="galle">
                  <span class="branch-icon">🏖️</span>
                  <span>Galle</span>
                </button>
                <button class="btn btn-outline-light branch-btn" data-branch="nuwara-eliya">
                  <span class="branch-icon">🌿</span>
                  <span>Nuwara Eliya</span>
                </button>
                <button class="btn btn-warning branch-btn" data-branch="all" id="viewAllBranches">
                  <span class="branch-icon">🗺️</span>
                  <span>View All Locations</span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <a href="pages/reservation.php" class="btn btn-warning btn-lg px-5 py-3">Reserve Now</a>
    </div>
  </section>

  <!-- Branch Selection and Booking Form -->
  <section class="booking-form position-relative booking-section-spacing">
    <div class="container">
      <div class="card shadow-lg p-4 booking-card">
        <!-- Branch Selection Header -->
        <div class="branch-selection-header text-center mb-4">
          <h4 class="booking-title">Find Your Perfect Stay</h4>
          <p class="text-muted">Select your preferred Holiday Getaway location and check availability</p>
        </div>

        <!-- Branch Selector -->
        <div class="branch-selector mb-4">
          <div class="row">
            <div class="col-md-12">
              <label for="branchSelect" class="form-label fw-bold">Choose Holiday Getaway Location</label>
              <select class="form-select form-select-lg" id="branchSelect" onchange="updateBranchInfo()">
                <option value="">Select a Holiday Getaway Location</option>
                <option value="colombo">Holiday Getaway Colombo - Business District</option>
                <option value="kandy">Holiday Getaway Kandy - Cultural Heritage</option>
                <option value="galle">Holiday Getaway Galle - Coastal Paradise</option>
                <option value="nuwara-eliya">Holiday Getaway Nuwara Eliya - Hill Country</option>
                <option value="ella">Holiday Getaway Ella - Mountain Views</option>
                <option value="sigiriya">Holiday Getaway Sigiriya - Ancient Wonders</option>
              </select>
            </div>
          </div>
        </div>

        <!-- Branch Info Display -->
        <div class="branch-info-display" id="branchInfoDisplay" style="display: none;">
          <div class="row mb-4">
            <div class="col-md-8">
              <div class="branch-details">
                <h5 class="branch-name" id="branchName"></h5>
                <p class="branch-description" id="branchDescription"></p>
                <div class="branch-features" id="branchFeatures"></div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="branch-stats">
                <div class="stat-item">
                  <span class="stat-label">Available Rooms:</span>
                  <span class="stat-value" id="availableRooms">-</span>
                </div>
                <div class="stat-item">
                  <span class="stat-label">Starting From:</span>
                  <span class="stat-value text-warning" id="startingPrice">-</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Member Login Prompt -->
        <div class="member-login-prompt text-center mb-3">
          <p class="mb-2 text-muted">
            <small>Already a member? <a href="pages/signin.php" class="text-warning">Sign in</a> for faster booking and exclusive member rates!</small>
          </p>
        </div>

        <!-- Booking Form -->
        <form class="row g-3 align-items-center" id="quickBookingForm">
          <div class="col-md-3">
            <label for="arrivalDate" class="form-label visually-hidden">Arrival Date</label>
            <div class="input-group">
              <span class="input-group-text"><img src="images/calendar.svg" alt="" class="icon"></span>
              <input type="date" class="form-control" id="arrivalDate" placeholder="Arrival Date">
            </div>
          </div>
          <div class="col-md-3">
            <label for="departureDate" class="form-label visually-hidden">Departure Date</label>
            <div class="input-group">
              <span class="input-group-text"><img src="images/calendar.svg" alt="" class="icon"></span>
              <input type="date" class="form-control" id="departureDate" placeholder="Departure Date">
            </div>
          </div>
          <div class="col-md-2">
            <select class="form-select" id="adults">
              <option selected>Adults</option>
              <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option>
            </select>
          </div>
          <div class="col-md-2">
            <select class="form-select" id="children">
              <option selected>Children</option>
              <option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option>
            </select>
          </div>
          <div class="col-md-2">
            <button type="submit" class="btn btn-warning w-100">Check Availability</button>
          </div>
        </form>
      </div>
    </div>
  </section>

  <!-- Holiday Getaway Locations Section -->
  <section class="featured-locations py-5">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="section-title">Our Premium Locations</h2>
        <p class="section-subtitle">Discover Holiday Getaway properties across Sri Lanka's most stunning destinations</p>
        <!-- Member Exclusive Notice -->
        <div class="member-exclusive-notice">
          <small class="text-muted">
            🌟 <a href="pages/signup.php" class="text-warning">Join as a member</a> to unlock additional 15% discount on all locations!
          </small>
        </div>
      </div>
      <div class="row g-4">
        <!-- Colombo Location -->
        <div class="col-lg-4 col-md-6">
          <div class="location-card">
            <div class="location-image-container">
              <img src="assets/images/locations/colombo.jpg" alt="Holiday Getaway Colombo" class="location-image">
              <div class="location-overlay">
                <a href="pages/reservation.php?branch=colombo" class="btn btn-light btn-sm">Book Now</a>
              </div>
            </div>
            <div class="location-details">
              <h4>Holiday Getaway Colombo</h4>
              <p class="location-type">Business & Shopping District</p>
              <div class="location-amenities">
                <span class="amenity">🏢 Business Center</span>
                <span class="amenity">🛍️ Shopping Access</span>
                <span class="amenity">✈️ Airport Shuttle</span>
              </div>
              <div class="location-price">
                <span class="price">From $149</span>
                <span class="per-night">/night</span>
              </div>
              <div class="location-rating">
                <div class="stars">★★★★★</div>
                <span class="rating-text">4.8 (245 reviews)</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Galle Location -->
        <div class="col-lg-4 col-md-6">
          <div class="location-card">
            <div class="location-image-container">
              <img src="assets/images/locations/galle.jpg" alt="Holiday Getaway Galle" class="location-image">
              <div class="location-overlay">
                <a href="pages/reservation.php?branch=galle" class="btn btn-light btn-sm">Book Now</a>
              </div>
            </div>
            <div class="location-details">
              <h4>Holiday Getaway Galle</h4>
              <p class="location-type">Coastal Resort & Beach</p>
              <div class="location-amenities">
                <span class="amenity">🏖️ Private Beach</span>
                <span class="amenity">🏄 Water Sports</span>
                <span class="amenity">🌅 Ocean Views</span>
              </div>
              <div class="location-price">
                <span class="price">From $199</span>
                <span class="per-night">/night</span>
              </div>
              <div class="location-rating">
                <div class="stars">★★★★★</div>
                <span class="rating-text">4.9 (189 reviews)</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Kandy Location -->
        <div class="col-lg-4 col-md-6">
          <div class="location-card">
            <div class="location-image-container">
              <img src="assets/images/locations/kandy.jpg" alt="Holiday Getaway Kandy" class="location-image">
              <div class="location-overlay">
                <a href="pages/reservation.php?branch=kandy" class="btn btn-light btn-sm">Book Now</a>
              </div>
            </div>
            <div class="location-details">
              <h4>Holiday Getaway Kandy</h4>
              <p class="location-type">Cultural Heritage & Lakes</p>
              <div class="location-amenities">
                <span class="amenity">🏛️ Temple Access</span>
                <span class="amenity">🚤 Lake Views</span>
                <span class="amenity">🎭 Cultural Shows</span>
              </div>
              <div class="location-price">
                <span class="price">From $129</span>
                <span class="per-night">/night</span>
              </div>
              <div class="location-rating">
                <div class="stars">★★★★☆</div>
                <span class="rating-text">4.7 (156 reviews)</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Nuwara Eliya Location -->
        <div class="col-lg-4 col-md-6">
          <div class="location-card">
            <div class="location-image-container">
              <img src="assets/images/locations/nuwara-eliya.jpg" alt="Holiday Getaway Nuwara Eliya" class="location-image">
              <div class="location-overlay">
                <a href="pages/reservation.php?branch=nuwara-eliya" class="btn btn-light btn-sm">Book Now</a>
              </div>
            </div>
            <div class="location-details">
              <h4>Holiday Getaway Nuwara Eliya</h4>
              <p class="location-type">Hill Country & Tea Estates</p>
              <div class="location-amenities">
                <span class="amenity">🍃 Tea Tours</span>
                <span class="amenity">🏔️ Mountain Views</span>
                <span class="amenity">🌡️ Cool Climate</span>
              </div>
              <div class="location-price">
                <span class="price">From $109</span>
                <span class="per-night">/night</span>
              </div>
              <div class="location-rating">
                <div class="stars">★★★★☆</div>
                <span class="rating-text">4.6 (134 reviews)</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Ella Location -->
        <div class="col-lg-4 col-md-6">
          <div class="location-card">
            <div class="location-image-container">
              <img src="assets/images/locations/ella.jpg" alt="Holiday Getaway Ella" class="location-image">
              <div class="location-overlay">
                <a href="pages/reservation.php?branch=ella" class="btn btn-light btn-sm">Book Now</a>
              </div>
            </div>
            <div class="location-details">
              <h4>Holiday Getaway Ella</h4>
              <p class="location-type">Mountain Adventure & Nature</p>
              <div class="location-amenities">
                <span class="amenity">🥾 Hiking Trails</span>
                <span class="amenity">🚂 Train Rides</span>
                <span class="amenity">🌄 Sunrise Views</span>
              </div>
              <div class="location-price">
                <span class="price">From $119</span>
                <span class="per-night">/night</span>
              </div>
              <div class="location-rating">
                <div class="stars">★★★★★</div>
                <span class="rating-text">4.8 (167 reviews)</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Sigiriya Location -->
        <div class="col-lg-4 col-md-6">
          <div class="location-card">
            <div class="location-image-container">
              <img src="assets/images/locations/sigiriya.jpg" alt="Holiday Getaway Sigiriya" class="location-image">
              <div class="location-overlay">
                <a href="pages/reservation.php?branch=sigiriya" class="btn btn-light btn-sm">Book Now</a>
              </div>
            </div>
            <div class="location-details">
              <h4>Holiday Getaway Sigiriya</h4>
              <p class="location-type">Ancient Heritage & Wildlife</p>
              <div class="location-amenities">
                <span class="amenity">🏛️ Ancient Sites</span>
                <span class="amenity">🦌 Safari Access</span>
                <span class="amenity">🎨 Cave Paintings</span>
              </div>
              <div class="location-price">
                <span class="price">From $139</span>
                <span class="per-night">/night</span>
              </div>
              <div class="location-rating">
                <div class="stars">★★★★☆</div>
                <span class="rating-text">4.7 (198 reviews)</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center mt-4">
        <a href="pages/all-locations.php" class="btn btn-warning btn-lg">Explore All Locations</a>
      </div>
    </div>
  </section>

  <!-- Room Categories Section -->
  <section class="room-categories py-5 bg-light">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="section-title">Consistent Luxury Across All Locations</h2>
        <p class="section-subtitle">Experience the same premium room types and amenities at every Holiday Getaway property</p>
      </div>
      <div class="row g-4">
        <div class="col-lg-4 col-md-6">
          <div class="room-card">
            <div class="room-image-container">
              <img src="assets/images/home/deluxe-room.jpg" alt="Deluxe Room" class="room-image">
              <div class="room-overlay">
                <a href="pages/rooms.php?type=deluxe" class="btn btn-light btn-sm">View Details</a>
              </div>
            </div>
            <div class="room-details">
              <h4>Deluxe Room</h4>
              <p class="room-type-desc">Available at all Holiday Getaway locations</p>
              <div class="room-amenities">
                <span class="amenity"><i class="icon-wifi"></i> Free WiFi</span>
                <span class="amenity"><i class="icon-ac"></i> Air Conditioning</span>
                <span class="amenity"><i class="icon-tv"></i> Smart TV</span>
              </div>
              <div class="room-price">
                <span class="price">$109-149</span>
                <span class="per-night">/night*</span>
              </div>
              <div class="room-rating">
                <div class="stars">★★★★☆</div>
                <span class="rating-text">*Varies by location</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="room-card">
            <div class="room-image-container">
              <img src="assets/images/home/suite-room.jpg" alt="Executive Suite" class="room-image">
              <div class="room-overlay">
                <a href="pages/rooms.php?type=suite" class="btn btn-light btn-sm">View Details</a>
              </div>
            </div>
            <div class="room-details">
              <h4>Executive Suite</h4>
              <p class="room-type-desc">Premium suites with location-specific views</p>
              <div class="room-amenities">
                <span class="amenity"><i class="icon-balcony"></i> Private Balcony</span>
                <span class="amenity"><i class="icon-minibar"></i> Mini Bar</span>
                <span class="amenity"><i class="icon-spa"></i> Spa Access</span>
              </div>
              <div class="room-price">
                <span class="price">$189-259</span>
                <span class="per-night">/night*</span>
              </div>
              <div class="room-rating">
                <div class="stars">★★★★★</div>
                <span class="rating-text">*Ocean/Mountain/Lake views</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="room-card">
            <div class="room-image-container">
              <img src="assets/images/home/presidential-suite.jpg" alt="Presidential Suite" class="room-image">
              <div class="room-overlay">
                <a href="pages/rooms.php?type=presidential" class="btn btn-light btn-sm">View Details</a>
              </div>
            </div>
            <div class="room-details">
              <h4>Presidential Suite</h4>
              <p class="room-type-desc">Ultimate luxury with signature experiences</p>
              <div class="room-amenities">
                <span class="amenity"><i class="icon-jacuzzi"></i> Private Jacuzzi</span>
                <span class="amenity"><i class="icon-butler"></i> Butler Service</span>
                <span class="amenity"><i class="icon-view"></i> Panoramic Views</span>
              </div>
              <div class="room-price">
                <span class="price">$359-459</span>
                <span class="per-night">/night*</span>
              </div>
              <div class="room-rating">
                <div class="stars">★★★★★</div>
                <span class="rating-text">*Signature location experiences</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center mt-4">
        <a href="pages/rooms.php" class="btn btn-warning btn-lg">Compare Rooms Across Locations</a>
      </div>
    </div>
  </section>

  <!-- Why Choose Holiday Getaway Section -->
  <section class="why-choose-us py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="why-choose-content">
            <h2 class="section-title">Why Choose Holiday Getaway?</h2>
            <p class="section-subtitle">Experience consistent excellence across our hotel chain with world-class amenities and exceptional service at every location</p>
            
            <div class="feature-list">
              <div class="feature-item">
                <div class="feature-icon">
                  <img src="assets/images/home/multi-location.svg" alt="Multiple Locations" class="feature-icon-img">
                </div>
                <div class="feature-content">
                  <h5>Multiple Prime Locations</h5>
                  <p>Six strategically located properties across Sri Lanka's most beautiful destinations, from bustling cities to serene mountains and pristine beaches.</p>
                </div>
              </div>
              
              <div class="feature-item">
                <div class="feature-icon">
                  <img src="assets/images/home/consistent-service.svg" alt="Consistent Service" class="feature-icon-img">
                </div>
                <div class="feature-content">
                  <h5>Consistent Premium Service</h5>
                  <p>Enjoy the same high standards of service, amenities, and comfort at every Holiday Getaway location, ensuring a familiar luxury experience.</p>
                </div>
              </div>
              
              <div class="feature-item">
                <div class="feature-icon">
                  <img src="assets/images/home/member-benefits.svg" alt="Member Benefits" class="feature-icon-img">
                </div>
                <div class="feature-content">
                  <h5>Chain-wide Member Benefits</h5>
                  <p>Earn points and enjoy exclusive benefits across all our properties. Members get priority booking, room upgrades, and special discounts.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="why-choose-image">
            <img src="assets/images/home/hotel-chain-collage.jpg" alt="Holiday Getaway Locations" class="img-fluid rounded shadow-lg">
            <div class="stats-overlay">
              <div class="stat-item">
                <h3>6</h3>
                <p>Premium Locations</p>
              </div>
              <div class="stat-item">
                <h3>200+</h3>
                <p>Luxury Rooms</p>
              </div>
              <div class="stat-item">
                <h3>98%</h3>
                <p>Guest Satisfaction</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Chain-wide Facilities Section -->
  <section class="facilities py-5 bg-light">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="section-title">World-Class Facilities at Every Location</h2>
        <p class="section-subtitle">Enjoy premium amenities and services across all Holiday Getaway properties</p>
      </div>
      <div class="row g-4">
        <div class="col-lg-3 col-md-6">
          <div class="facility-card text-center">
            <div class="facility-icon">
              <img src="assets/images/home/swimming-pool.jpg" alt="Swimming Pool" class="facility-image">
            </div>
            <h5>Premium Swimming Pools</h5>
            <p>Infinity pools with location-specific views - ocean, mountain, or cityscape</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="facility-card text-center">
            <div class="facility-icon">
              <img src="assets/images/home/spa-wellness.jpg" alt="Spa & Wellness" class="facility-image">
            </div>
            <h5>Signature Spa Experiences</h5>
            <p>Full-service spas featuring traditional treatments unique to each location</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="facility-card text-center">
            <div class="facility-icon">
              <img src="assets/images/home/fine-dining.jpg" alt="Fine Dining" class="facility-image">
            </div>
            <h5>Local & International Cuisine</h5>
            <p>Award-winning restaurants serving regional specialties and international favorites</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="facility-card text-center">
            <div class="facility-icon">
              <img src="assets/images/home/activities.jpg" alt="Location Activities" class="facility-image">
            </div>
            <h5>Unique Location Experiences</h5>
            <p>Curated activities specific to each destination - from cultural tours to adventure sports</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Multi-Location Guest Reviews Section -->
  <section class="guest-reviews py-5">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="section-title">Guests Love Our Chain-wide Excellence</h2>
        <p class="section-subtitle">Real reviews from guests across all Holiday Getaway locations</p>
      </div>
      <div class="row g-4">
        <div class="col-lg-4">
          <div class="review-card">
            <div class="review-rating">
              <div class="stars">★★★★★</div>
              <span class="rating-score">9.5</span>
            </div>
            <p class="review-text">"Stayed at Holiday Getaway Galle for our honeymoon and later at Nuwara Eliya. Same amazing service quality, different beautiful experiences. Highly recommend the chain!"</p>
            <div class="reviewer-info">
              <img src="assets/images/home/guest-1.jpg" alt="Sarah Johnson" class="reviewer-avatar">
              <div class="reviewer-details">
                <h6>Sarah Johnson</h6>
                <span>Multi-location Guest</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="review-card">
            <div class="review-rating">
              <div class="stars">★★★★★</div>
              <span class="rating-score">9.2</span>
            </div>
            <p class="review-text">"Business meetings in Colombo, then weekend in Kandy. The consistency in quality and service across both properties was impressive. Great chain!"</p>
            <div class="reviewer-info">
              <img src="assets/images/home/guest-2.jpg" alt="Michael Chen" class="reviewer-avatar">
              <div class="reviewer-details">
                <h6>Michael Chen</h6>
                <span>Business Traveler</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="review-card">
            <div class="review-rating">
              <div class="stars">★★★★★</div>
              <span class="rating-score">9.8</span>
            </div>
            <p class="review-text">"Toured Sri Lanka staying at different Holiday Getaway properties. Each location offered unique experiences while maintaining the same luxury standards."</p>
            <div class="reviewer-info">
              <img src="assets/images/home/guest-3.jpg" alt="Emma Rodriguez" class="reviewer-avatar">
              <div class="reviewer-details">
                <h6>Emma Rodriguez</h6>
                <span>Chain Explorer</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center mt-4">
        <a href="pages/reviews.php" class="btn btn-outline-warning">Read Reviews by Location</a>
      </div>
    </div>
  </section>

  <!-- Newsletter Section -->
  <section class="newsletter-section py-5 bg-warning">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <h3 class="text-dark mb-2">Stay Connected with Holiday Getaway</h3>
          <p class="text-dark mb-0">Subscribe to our newsletter for exclusive offers across all our locations and be the first to know about new properties and experiences</p>
        </div>
        <div class="col-lg-6">
          <form class="newsletter-form d-flex gap-2 mt-3 mt-lg-0">
            <input type="email" class="form-control" placeholder="Enter your email address" required>
            <button type="submit" class="btn btn-dark px-4">Subscribe</button>
          </form>
        </div>
      </div>
    </div>
  </section>

<style>
/* Fixed layout and spacing issues */

/* Hero section with proper header spacing */
#hero {
  height: 100vh;
  position: relative;
  overflow: hidden;
  padding-top: 120px; /* Add space for fixed header */
}

.hero-padding {
  padding-top: 2rem; /* Additional padding for content */
}

/* Booking form section proper spacing */
.booking-section-spacing {
  margin-top: -80px; /* Adjusted overlap */
  position: relative;
  z-index: 4;
  padding-bottom: 3rem;
}

.booking-card {
  border-radius: 20px;
  border: none;
  box-shadow: 0 15px 35px rgba(0,0,0,0.1) !important;
  background: rgba(255, 255, 255, 0.98);
  backdrop-filter: blur(10px);
}

/* Branch Selection Hero Styles */
.branch-selector-hero {
  background: rgba(0, 0, 0, 0.3);
  border-radius: 20px;
  padding: 2rem;
  backdrop-filter: blur(10px);
  border: 1px solid rgba(255, 255, 255, 0.2);
}

.branch-quick-select h5 {
  font-weight: 600;
  text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
}

.branch-buttons {
  max-width: 100%;
}

.branch-btn {
  border-radius: 15px;
  padding: 12px 20px;
  font-weight: 500;
  transition: all 0.3s ease;
  backdrop-filter: blur(5px);
  border: 2px solid rgba(255, 255, 255, 0.3);
  min-width: 140px;
}

.branch-btn:hover {
  transform: translateY(-3px);
  box-shadow: 0 8px 25px rgba(255, 255, 255, 0.2);
  border-color: rgba(255, 255, 255, 0.6);
}

.branch-btn.btn-warning {
  background: linear-gradient(135deg, #ff9f1c 0%, #febb02 100%);
  border-color: #ff9f1c;
  color: white;
}

.branch-btn.btn-warning:hover {
  background: linear-gradient(135deg, #febb02 0%, #ff9f1c 100%);
  box-shadow: 0 8px 25px rgba(255, 159, 28, 0.4);
}

.branch-icon {
  font-size: 1.2rem;
  margin-right: 8px;
}

/* Booking Form Enhancements */
.booking-title {
  color: #333;
  font-weight: 600;
  margin-bottom: 0.5rem;
}

.branch-selector {
  background: rgba(248, 249, 250, 0.8);
  border-radius: 15px;
  padding: 1.5rem;
  margin-bottom: 1rem;
}

.branch-info-display {
  background: linear-gradient(135deg, rgba(255, 159, 28, 0.1) 0%, rgba(254, 187, 2, 0.1) 100%);
  border-radius: 15px;
  padding: 1.5rem;
  border: 1px solid rgba(255, 159, 28, 0.2);
}

.branch-details h5 {
  color: #333;
  font-weight: 600;
  margin-bottom: 0.5rem;
}

.branch-description {
  color: #666;
  font-size: 14px;
  margin-bottom: 1rem;
}

.branch-features {
  display: flex;
  flex-wrap: wrap;
  gap: 0.5rem;
}

.branch-feature {
  background: rgba(255, 255, 255, 0.8);
  padding: 0.3rem 0.8rem;
  border-radius: 15px;
  font-size: 0.8rem;
  color: #666;
  border: 1px solid rgba(255, 159, 28, 0.2);
}

.branch-stats {
  background: rgba(255, 255, 255, 0.9);
  border-radius: 12px;
  padding: 1rem;
}

.stat-item {
  display: flex;
  justify-content: space-between;
  margin-bottom: 0.5rem;
  padding-bottom: 0.5rem;
  border-bottom: 1px solid rgba(0, 0, 0, 0.1);
}

.stat-item:last-child {
  border-bottom: none;
  margin-bottom: 0;
}

.stat-label {
  color: #666;
  font-size: 14px;
}

.stat-value {
  font-weight: 600;
  color: #333;
}

/* Location Cards */
.featured-locations {
  background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
}

.location-card {
  background: white;
  border-radius: 20px;
  overflow: hidden;
  box-shadow: 0 10px 30px rgba(0,0,0,0.1);
  transition: all 0.3s ease;
  height: 100%;
}

.location-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 20px 40px rgba(0,0,0,0.15);
}

.location-image-container {
  position: relative;
  overflow: hidden;
  height: 250px;
}

.location-image {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.3s ease;
}

.location-card:hover .location-image {
  transform: scale(1.1);
}

.location-overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(0,0,0,0.5);
  display: flex;
  align-items: center;
  justify-content: center;
  opacity: 0;
  transition: opacity 0.3s ease;
}

.location-card:hover .location-overlay {
  opacity: 1;
}

.location-details {
  padding: 1.5rem;
}

.location-details h4 {
  font-size: 1.3rem;
  font-weight: 600;
  margin-bottom: 0.3rem;
  color: #2c3e50;
}

.location-type {
  color: #ff9f1c;
  font-size: 0.9rem;
  font-weight: 500;
  margin-bottom: 1rem;
}

.location-amenities {
  display: flex;
  flex-wrap: wrap;
  gap: 0.5rem;
  margin-bottom: 1rem;
}

.location-amenities .amenity {
  background: #f8f9fa;
  padding: 0.3rem 0.8rem;
  border-radius: 15px;
  font-size: 0.8rem;
  color: #666;
  border: 1px solid #e9ecef;
}

.location-price {
  display: flex;
  align-items: baseline;
  margin-bottom: 1rem;
}

.location-price .price {
  font-size: 1.5rem;
  font-weight: 700;
  color: #ff9f1c;
}

.location-price .per-night {
  color: #6c757d;
  margin-left: 0.3rem;
  font-size: 0.9rem;
}

.location-rating {
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.location-rating .stars {
  color: #ffc107;
  font-size: 1.1rem;
}

.location-rating .rating-text {
  font-size: 0.8rem;
  color: #6c757d;
}

/* Room Categories Enhancements */
.room-type-desc {
  color: #ff9f1c;
  font-size: 0.9rem;
  font-weight: 500;
  margin-bottom: 1rem;
}

/* Enhanced Why Choose Us Section */
.feature-item {
  display: flex;
  align-items: flex-start;
  margin-bottom: 2rem;
  padding: 1.5rem;
  background: linear-gradient(135deg, rgba(255, 159, 28, 0.05) 0%, rgba(254, 187, 2, 0.05) 100%);
  border-radius: 15px;
  transition: all 0.3s ease;
  border: 1px solid rgba(255, 159, 28, 0.1);
}

.feature-item:hover {
  transform: translateX(10px);
  box-shadow: 0 10px 30px rgba(255, 159, 28, 0.15);
  border-color: rgba(255, 159, 28, 0.2);
}

/* Responsive Design Enhancements */
@media (max-width: 992px) {
  #hero {
    padding-top: 100px;
    height: 90vh;
  }
  
  .hero-padding {
    padding-top: 1rem;
  }
  
  .booking-section-spacing {
    margin-top: -60px;
    padding: 0 1rem 2rem;
  }
  
  .branch-buttons {
    justify-content: center;
  }
  
  .branch-btn {
    min-width: 120px;
    margin-bottom: 0.5rem;
  }
  
  .branch-stats {
    margin-top: 1.5rem;
  }
}

@media (max-width: 768px) {
  #hero {
    padding-top: 80px;
    height: 85vh;
  }
  
  .hero-content h1 {
    font-size: 2.2rem;
    line-height: 1.3;
  }
  
  .branch-selector-hero {
    padding: 1.5rem;
    margin: 1rem 0.5rem;
  }
  
  .branch-btn {
    min-width: 100px;
    padding: 10px 15px;
    font-size: 0.9rem;
  }
  
  .branch-icon {
    font-size: 1rem;
    margin-right: 5px;
  }
  
  .booking-card {
    margin: 0.5rem;
    border-radius: 15px;
    padding: 1.5rem !important;
  }
  
  .branch-info-display {
    margin: 0.5rem 0;
    padding: 1rem;
  }
  
  .branch-details,
  .branch-stats {
    text-align: center;
  }
  
  .branch-features {
    justify-content: center;
  }
  
  .stat-item {
    flex-direction: column;
    text-align: center;
    gap: 0.25rem;
  }
  
  .location-card {
    margin-bottom: 1.5rem;
  }
}

@media (max-width: 576px) {
  #hero {
    padding-top: 70px;
    height: 80vh;
  }
  
  .hero-content h1 {
    font-size: 1.8rem;
  }
  
  .hero-content .lead {
    font-size: 1rem;
  }
  
  .branch-buttons {
    flex-direction: column;
    align-items: center;
  }
  
  .branch-btn {
    min-width: 200px;
    margin-bottom: 0.75rem;
  }
  
  .booking-section-spacing {
    margin-top: -40px;
    padding: 0 0.5rem 1.5rem;
  }
  
  .booking-card {
    padding: 1rem !important;
  }
  
  .booking-title {
    font-size: 1.25rem;
  }
  
  .branch-selector {
    padding: 1rem;
  }
  
  .branch-info-display {
    padding: 1rem;
  }
  
  .branch-features {
    flex-direction: column;
    gap: 0.3rem;
    align-items: center;
  }
  
  .branch-feature {
    text-align: center;
    min-width: 120px;
  }
  
  .location-amenities {
    flex-direction: column;
    gap: 0.3rem;
  }
  
  /* Quick booking form adjustments */
  .row.g-3 {
    gap: 0.75rem !important;
  }
  
  .col-md-3, .col-md-2 {
    width: 100%;
    margin-bottom: 0.5rem;
  }
}

/* Animation for branch selection */
@keyframes branchSelect {
  0% {
    opacity: 0;
    transform: translateY(20px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}

.branch-info-display.show {
  animation: branchSelect 0.5s ease-out;
}

/* Loading states */
.loading-overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(255, 255, 255, 0.9);
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 15px;
  z-index: 10;
}

.loading-spinner {
  width: 40px;
  height: 40px;
  border: 4px solid #f3f3f3;
  border-top: 4px solid #ff9f1c;
  border-radius: 50%;
  animation: spin 1s linear infinite;
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Member benefits highlight */
.member-exclusive-notice {
  background: linear-gradient(135deg, rgba(255, 159, 28, 0.1) 0%, rgba(254, 187, 2, 0.1) 100%);
  padding: 0.75rem 1.5rem;
  border-radius: 20px;
  border: 1px solid rgba(255, 159, 28, 0.2);
  margin-top: 1rem;
  display: inline-block;
}

/* Enhanced hover effects for interactive elements */
.btn:hover {
  transform: translateY(-2px);
}

.form-control:focus, .form-select:focus {
  border-color: #ff9f1c;
  box-shadow: 0 0 0 0.2rem rgba(255, 159, 28, 0.25);
}

/* Special effects for hero section */
.hero-content {
  animation: fadeInUp 1s ease-out;
  position: relative;
  z-index: 3;
}

@keyframes fadeInUp {
  0% {
    opacity: 0;
    transform: translateY(30px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}

/* Ensure proper video positioning */
.bg-video {
  position: absolute;
  top: 0;
  left: 0;
  object-fit: cover;
  width: 100%;
  height: 100%;
  z-index: 0;
}

#hero .overlay {
  position: absolute;
  inset: 0;
  background: rgba(0, 0, 0, 0.5);
  z-index: 1;
}

/* Fix form alignment issues */
.row.g-3.align-items-center {
  align-items: end !important;
}

.form-control, .form-select {
  border-radius: 8px;
  border: 1px solid #ddd;
  padding: 12px 15px;
  transition: all 0.3s ease;
  background: rgba(255, 255, 255, 0.95);
  height: 48px;
}

.input-group-text {
  background: rgba(255, 255, 255, 0.95);
  border: 1px solid #ddd;
  border-right: none;
  border-radius: 8px 0 0 8px;
  height: 48px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.input-group .form-control {
  border-left: none;
  border-radius: 0 8px 8px 0;
}

.btn.w-100 {
  height: 48px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: 600;
}
</style>

<script>
// JavaScript for Holiday Getaway Chain Features

// Branch data for dynamic content
const branchData = {
  colombo: {
    name: "Holiday Getaway Colombo",
    description: "Located in the heart of Sri Lanka's commercial capital, perfect for business travelers and urban explorers. Walking distance to major shopping centers and business districts.",
    features: ["🏢 Business Center", "🛍️ Shopping Access", "✈️ Airport Shuttle", "🌆 City Views", "🍽️ Rooftop Dining"],
    availableRooms: "28",
    startingPrice: "$149/night",
    image: "assets/images/locations/colombo.jpg"
  },
  kandy: {
    name: "Holiday Getaway Kandy",
    description: "Immerse yourself in Sri Lanka's cultural heart with views of the sacred Temple of the Tooth and beautiful Kandy Lake. Rich heritage and serene landscapes await.",
    features: ["🏛️ Temple Access", "🚤 Lake Views", "🎭 Cultural Shows", "🌸 Royal Gardens", "🎨 Art Gallery"],
    availableRooms: "22",
    startingPrice: "$129/night",
    image: "assets/images/locations/kandy.jpg"
  },
  galle: {
    name: "Holiday Getaway Galle",
    description: "Beachfront paradise combining colonial charm with modern luxury. Steps away from the UNESCO World Heritage Galle Fort and pristine beaches.",
    features: ["🏖️ Private Beach", "🏄 Water Sports", "🌅 Ocean Views", "🏰 Fort Access", "🐠 Diving Center"],
    availableRooms: "35",
    startingPrice: "$199/night",
    image: "assets/images/locations/galle.jpg"
  },
  "nuwara-eliya": {
    name: "Holiday Getaway Nuwara Eliya",
    description: "Escape to the cool climate of Sri Lanka's hill country. Surrounded by tea plantations and colonial architecture in 'Little England'.",
    features: ["🍃 Tea Tours", "🏔️ Mountain Views", "🌡️ Cool Climate", "🚂 Train Station", "🏌️ Golf Course"],
    availableRooms: "18",
    startingPrice: "$109/night",
    image: "assets/images/locations/nuwara-eliya.jpg"
  },
  ella: {
    name: "Holiday Getaway Ella",
    description: "Adventure seeker's paradise nestled in the mountains. Famous for hiking trails, scenic train rides, and breathtaking sunrise views.",
    features: ["🥾 Hiking Trails", "🚂 Train Rides", "🌄 Sunrise Views", "🐒 Wildlife", "☕ Coffee Tours"],
    availableRooms: "15",
    startingPrice: "$119/night",
    image: "assets/images/locations/ella.jpg"
  },
  sigiriya: {
    name: "Holiday Getaway Sigiriya",
    description: "Experience ancient wonders and wildlife adventures. Gateway to the famous Sigiriya Rock Fortress and Dambulla Cave Temples.",
    features: ["🏛️ Ancient Sites", "🦌 Safari Access", "🎨 Cave Paintings", "🌳 Nature Walks", "🦅 Bird Watching"],
    availableRooms: "20",
    startingPrice: "$139/night",
    image: "assets/images/locations/sigiriya.jpg"
  }
};

// Update branch information when selection changes
function updateBranchInfo() {
  const select = document.getElementById('branchSelect');
  const display = document.getElementById('branchInfoDisplay');
  const branchValue = select.value;
  
  if (branchValue && branchData[branchValue]) {
    const branch = branchData[branchValue];
    
    // Update content
    document.getElementById('branchName').textContent = branch.name;
    document.getElementById('branchDescription').textContent = branch.description;
    document.getElementById('availableRooms').textContent = branch.availableRooms;
    document.getElementById('startingPrice').textContent = branch.startingPrice;
    
    // Update features
    const featuresContainer = document.getElementById('branchFeatures');
    featuresContainer.innerHTML = '';
    branch.features.forEach(feature => {
      const featureSpan = document.createElement('span');
      featureSpan.className = 'branch-feature';
      featureSpan.textContent = feature;
      featuresContainer.appendChild(featureSpan);
    });
    
    // Show the display with animation
    display.style.display = 'block';
    display.classList.add('show');
    
    // Store selected branch for form submission
    sessionStorage.setItem('selectedBranch', branchValue);
    
  } else {
    display.style.display = 'none';
    display.classList.remove('show');
    sessionStorage.removeItem('selectedBranch');
  }
}

// Handle hero branch button clicks
document.addEventListener('DOMContentLoaded', function() {
  // Set minimum dates for booking form
  const today = new Date().toISOString().split('T')[0];
  document.getElementById('arrivalDate').min = today;
  document.getElementById('departureDate').min = today;
  
  // Handle arrival date change
  document.getElementById('arrivalDate').addEventListener('change', function() {
    const arrivalDate = new Date(this.value);
    const nextDay = new Date(arrivalDate);
    nextDay.setDate(arrivalDate.getDate() + 1);
    
    const departureInput = document.getElementById('departureDate');
    departureInput.min = nextDay.toISOString().split('T')[0];
    
    // Clear departure date if it's before new minimum
    if (departureInput.value && new Date(departureInput.value) <= arrivalDate) {
      departureInput.value = '';
    }
  });
  
  // Handle hero branch button clicks
  const branchButtons = document.querySelectorAll('.branch-btn[data-branch]');
  branchButtons.forEach(button => {
    button.addEventListener('click', function() {
      const branchValue = this.getAttribute('data-branch');
      
      if (branchValue === 'all') {
        // Scroll to locations section
        document.querySelector('.featured-locations').scrollIntoView({
          behavior: 'smooth'
        });
      } else {
        // Select the branch and scroll to booking form
        document.getElementById('branchSelect').value = branchValue;
        updateBranchInfo();
        
        // Scroll to booking form
        document.querySelector('.booking-form').scrollIntoView({
          behavior: 'smooth'
        });
        
        // Add visual feedback
        this.style.transform = 'scale(0.95)';
        setTimeout(() => {
          this.style.transform = '';
        }, 150);
      }
    });
  });
  
  // Handle quick booking form submission
  document.getElementById('quickBookingForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const selectedBranch = document.getElementById('branchSelect').value;
    const arrivalDate = document.getElementById('arrivalDate').value;
    const departureDate = document.getElementById('departureDate').value;
    const adults = document.getElementById('adults').value;
    const children = document.getElementById('children').value;
    
    if (!selectedBranch) {
      alert('Please select a Holiday Getaway location first.');
      document.getElementById('branchSelect').focus();
      return;
    }
    
    if (!arrivalDate || !departureDate) {
      alert('Please select both arrival and departure dates.');
      return;
    }
    
    // Store booking parameters
    const bookingParams = {
      branch: selectedBranch,
      arrival: arrivalDate,
      departure: departureDate,
      adults: adults !== 'Adults' ? adults : '2',
      children: children !== 'Children' ? children : '0'
    };
    
    sessionStorage.setItem('bookingParams', JSON.stringify(bookingParams));
    
    // Redirect to reservation page with parameters
    const params = new URLSearchParams(bookingParams);
    window.location.href = `pages/reservation.php?${params.toString()}`;
  });
  
  // Add smooth scrolling for all internal links
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        target.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
      }
    });
  });
  
  // Add loading states for location cards
  const locationCards = document.querySelectorAll('.location-card');
  locationCards.forEach(card => {
    const bookButton = card.querySelector('.btn');
    if (bookButton) {
      bookButton.addEventListener('click', function(e) {
        // Show loading state
        const originalText = this.innerHTML;
        this.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Loading...';
        this.disabled = true;
        
        // Restore after a short delay (in real app, this would be when page loads)
        setTimeout(() => {
          this.innerHTML = originalText;
          this.disabled = false;
        }, 1000);
      });
    }
  });
  
  // Newsletter form handling
  const newsletterForm = document.querySelector('.newsletter-form');
  if (newsletterForm) {
    newsletterForm.addEventListener('submit', function(e) {
      e.preventDefault();
      
      const email = this.querySelector('input[type="email"]').value;
      const submitBtn = this.querySelector('button[type="submit"]');
      
      // Show loading state
      const originalText = submitBtn.textContent;
      submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Subscribing...';
      submitBtn.disabled = true;
      
      // Simulate subscription process
      setTimeout(() => {
        alert(`Thank you for subscribing to Holiday Getaway updates! You'll receive exclusive offers across all our locations at ${email}`);
        this.reset();
        submitBtn.textContent = originalText;
        submitBtn.disabled = false;
      }, 2000);
    });
  }
  
  // Add parallax effect to hero section (optional)
  window.addEventListener('scroll', function() {
    const scrolled = window.pageYOffset;
    const hero = document.getElementById('hero');
    const video = hero.querySelector('.bg-video');
    
    if (video && scrolled < hero.offsetHeight) {
      video.style.transform = `translateY(${scrolled * 0.5}px)`;
    }
  });
  
  // Initialize any saved branch selection
  const savedBranch = sessionStorage.getItem('selectedBranch');
  if (savedBranch) {
    document.getElementById('branchSelect').value = savedBranch;
    updateBranchInfo();
  }
  
  console.log('Holiday Getaway Chain home page initialized successfully!');
});

// Global functions for external access
window.updateBranchInfo = updateBranchInfo;

// Utility function to get selected branch
function getSelectedBranch() {
  return document.getElementById('branchSelect').value;
}

// Utility function to check availability (placeholder)
function checkRoomAvailability(branch, dates) {
  // This would connect to your backend API
  console.log(`Checking availability for ${branch} from ${dates.arrival} to ${dates.departure}`);
  return new Promise(resolve => {
    setTimeout(() => {
      resolve({
        available: true,
        rooms: Math.floor(Math.random() * 20) + 5,
        prices: {
          standard: 89,
          deluxe: 129,
          suite: 199,
          presidential: 359
        }
      });
    }, 1000);
  });
}

// Export for other pages
window.HolidayGetawayChain = {
  branchData,
  getSelectedBranch,
  checkRoomAvailability
};
</script>
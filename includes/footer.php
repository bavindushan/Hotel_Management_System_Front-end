<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Holiday Getaway</title>
  <style>
    .footer {
      background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);
      font-family: 'Inter', sans-serif;
      position: relative;
    }

    .footer::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 1px;
      background: linear-gradient(90deg, transparent, #ff9f1c, transparent);
    }

    /* Footer Brand */
    .footer-brand .footer-logo {
      width: 40px;
      height: auto;
    }

    .footer-brand .brand-text {
      color: #fff;
      font-weight: 700;
      font-size: 1.25rem;
      letter-spacing: 1px;
      text-transform: uppercase;
      margin-bottom: 0;
    }

    .footer-description {
      color: rgba(255, 255, 255, 0.7);
      font-size: 0.9rem;
      line-height: 1.6;
      margin-bottom: 0;
    }

    /* Footer Titles */
    .footer-title {
      color: #ff9f1c;
      font-weight: 600;
      font-size: 1rem;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      margin-bottom: 1rem;
      position: relative;
    }

    .footer-title::after {
      content: '';
      position: absolute;
      bottom: -5px;
      left: 0;
      width: 30px;
      height: 2px;
      background-color: #ff9f1c;
      border-radius: 1px;
    }

    /* Footer Links */
    .footer-links {
      margin: 0;
      padding: 0;
    }

    .footer-links li {
      margin-bottom: 8px;
    }

    .footer-link {
      color: rgba(255, 255, 255, 0.7);
      text-decoration: none;
      font-size: 0.9rem;
      transition: color 0.3s ease, padding-left 0.3s ease;
    }

    .footer-link:hover {
      color: #ff9f1c;
      padding-left: 5px;
      text-decoration: none;
    }

    /* Social Links */
    .footer-social {
      margin-top: 1rem;
    }

    .social-link {
      display: inline-block;
      transition: transform 0.3s ease, opacity 0.3s ease;
    }

    .social-link:hover {
      transform: translateY(-3px);
      opacity: 0.8;
    }

    .social-icon {
      width: 24px;
      height: 24px;
      filter: brightness(0) invert(1);
    }

    .social-link:hover .social-icon {
      filter: brightness(0) saturate(100%) invert(64%) sepia(94%) saturate(1552%) hue-rotate(21deg) brightness(101%) contrast(101%);
    }

    /* Contact Information */
    .contact-info {
      margin-top: 1rem;
    }

    .contact-item {
      display: flex;
      align-items: flex-start;
      color: rgba(255, 255, 255, 0.7);
      font-size: 0.9rem;
      line-height: 1.5;
    }

    .contact-icon {
      width: 16px;
      height: 16px;
      margin-top: 2px;
      filter: brightness(0) invert(1);
      opacity: 0.7;
    }

    /* Newsletter Signup */
    .newsletter-signup {
      margin-top: 1.5rem;
    }

    .newsletter-signup h6 {
      color: #ff9f1c;
      font-weight: 600;
      margin-bottom: 0.5rem;
    }

    .newsletter-signup p {
      color: rgba(255, 255, 255, 0.6);
      font-size: 0.8rem;
    }

    .newsletter-form .form-control {
      background-color: rgba(255, 255, 255, 0.1);
      border: 1px solid rgba(255, 255, 255, 0.2);
      color: #fff;
      font-size: 0.85rem;
    }

    .newsletter-form .form-control::placeholder {
      color: rgba(255, 255, 255, 0.5);
    }

    .newsletter-form .form-control:focus {
      background-color: rgba(255, 255, 255, 0.15);
      border-color: #ff9f1c;
      box-shadow: 0 0 0 0.2rem rgba(255, 159, 28, 0.25);
      color: #fff;
    }

    .newsletter-form .btn-warning {
      background-color: #ff9f1c;
      border-color: #ff9f1c;
      font-weight: 600;
      font-size: 0.85rem;
    }

    .newsletter-form .btn-warning:hover {
      background-color: #febb02;
      border-color: #febb02;
      transform: translateY(-1px);
    }

    /* Footer Bottom */
    .footer-bottom {
      background-color: #000;
      border-top: 1px solid rgba(255, 255, 255, 0.1);
    }

    .footer-bottom p {
      color: rgba(255, 255, 255, 0.6);
      font-size: 0.85rem;
    }

    .footer-bottom-links {
      margin-top: 0.5rem;
    }

    .footer-bottom-link {
      color: rgba(255, 255, 255, 0.6);
      text-decoration: none;
      font-size: 0.85rem;
      transition: color 0.3s ease;
    }

    .footer-bottom-link:hover {
      color: #ff9f1c;
      text-decoration: none;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .footer {
        padding: 3rem 0 2rem;
      }
      
      .footer-title {
        font-size: 0.95rem;
        margin-bottom: 0.75rem;
      }
      
      .footer-link {
        font-size: 0.85rem;
      }
      
      .newsletter-form {
        margin-top: 1rem;
      }
      
      .footer-awards,
      .payment-methods {
        margin-top: 1.5rem;
      }
      
      .award-badge,
      .payment-icon {
        margin: 0.25rem;
      }
      
      .footer-bottom-links {
        text-align: center;
        margin-top: 1rem;
      }
    }
  </style>
</head>

<body>
<!-- Footer Section -->
<footer class="footer bg-dark text-light py-5">
  <div class="container">
    <div class="row">
      <!-- Hotel Information -->
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="footer-brand mb-3">
          <img src="/HolidayGetaway/assets/images/background/logo.png" alt="Hotel Getaway" class="footer-logo mb-2">
          <h5 class="brand-text">Holiday Getaway</h5>
        </div>
        <p class="footer-description">
          Experience luxury and comfort at Holiday Getaway. Your perfect destination for unforgettable holidays and business stays.
        </p>
        <div class="footer-social mt-3">
          <a href="#" class="social-link me-3"><img src="/HolidayGetaway/assets/images/logo/facebook.png" alt="Facebook" class="social-icon"></a>
          <a href="#" class="social-link me-3"><img src="/HolidayGetaway/assets/images/logo/twitter.png" alt="Twitter" class="social-icon"></a>
          <a href="#" class="social-link me-3"><img src="/HolidayGetaway/assets/images/logo/google-plus.png" alt="Google+" class="social-icon"></a>
          <a href="#" class="social-link me-3"><img src="/HolidayGetaway/assets/images/logo/linkedin.png" alt="LinkedIn" class="social-icon"></a>
        </div>
      </div>

      <!-- Quick Links -->
      <div class="col-lg-2 col-md-6 mb-4">
        <h6 class="footer-title mb-3">Quick Links</h6>
        <ul class="footer-links list-unstyled">
          <li><a href="#" class="footer-link">Home</a></li>
          <li><a href="#" class="footer-link">About Us</a></li>
          <li><a href="#" class="footer-link">Rooms & Suites</a></li>
          <li><a href="#" class="footer-link">Facilities</a></li>
          <li><a href="#" class="footer-link">Gallery</a></li>
          <li><a href="#" class="footer-link">Contact Us</a></li>
        </ul>
      </div>

      <!-- Services -->
      <div class="col-lg-2 col-md-6 mb-4">
        <h6 class="footer-title mb-3">Services</h6>
        <ul class="footer-links list-unstyled">
          <li><a href="#" class="footer-link">Restaurant</a></li>
          <li><a href="#" class="footer-link">Spa & Wellness</a></li>
          <li><a href="#" class="footer-link">Conference Hall</a></li>
          <li><a href="#" class="footer-link">Swimming Pool</a></li>
          <li><a href="#" class="footer-link">Fitness Center</a></li>
          <li><a href="#" class="footer-link">Room Service</a></li>
        </ul>
      </div>

      <!-- Policies & Support -->
      <div class="col-lg-2 col-md-6 mb-4">
        <h6 class="footer-title mb-3">Policies</h6>
        <ul class="footer-links list-unstyled">
          <li><a href="#" class="footer-link">Privacy Policy</a></li>
          <li><a href="#" class="footer-link">Terms of Service</a></li>
          <li><a href="#" class="footer-link">Cancellation Policy</a></li>
          <li><a href="#" class="footer-link">COVID-19 Safety</a></li>
          <li><a href="#" class="footer-link">Guest Reviews</a></li>
          <li><a href="#" class="footer-link">Help Center</a></li>
        </ul>
      </div>

      <!-- Contact Information -->
      <div class="col-lg-3 col-md-6 mb-4">
        <h6 class="footer-title mb-3">Contact Info</h6>
        <div class="contact-info">
          <div class="contact-item mb-2">
            <span>123 Resort Avenue, Hill Station, Country 12345</span>
          </div>
          <div class="contact-item mb-2">
            <span>+94 77 678 6535</span>
          </div>
          <div class="contact-item mb-2">
            <span>info@onitha.com</span>
          </div>
          <div class="contact-item mb-3">
            <span>24/7 Reception</span>
          </div>
        </div>
        
        <!-- Newsletter Signup -->
        <div class="newsletter-signup mt-4">
          <h6 class="mb-2">Newsletter</h6>
          <p class="small mb-2">Subscribe for special offers and updates</p>
          <form class="newsletter-form">
            <div class="input-group">
              <input type="email" class="form-control form-control-sm" placeholder="Your email address" required>
              <button class="btn btn-warning btn-sm" type="submit">Subscribe</button>
            </div>
          </form>
        </div>
      </div>
    </div>

</footer>

<!-- Footer Bottom -->
<div class="footer-bottom bg-black text-light py-3">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <p class="mb-0 small">&copy; <?php echo date('Y'); ?> Holiday Getaway. All rights reserved.</p>
      </div>
      <div class="col-md-6 text-md-end">
        <div class="footer-bottom-links">
          <a href="#" class="footer-bottom-link me-3">Privacy</a>
          <a href="#" class="footer-bottom-link me-3">Terms</a>
          <a href="#" class="footer-bottom-link me-3">Cookies</a>
          <a href="#" class="footer-bottom-link">Sitemap</a>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>

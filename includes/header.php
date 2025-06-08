<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Holiday Getaway</title>

  <!-- Fonts & Bootstrap -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
        /* 1. Remove extra spacing in the top‐bar and navbar */
    #site-header .top-bar,
    #site-header .navbar {
      padding-top:    0 !important;
      padding-bottom: 0 !important;
      margin-bottom:  0 !important;
    }

    /* 2. Make the brand link a true flex‐container */
    #site-header .navbar-brand {
      display:      flex;
      align-items:  center;  /* vertical centering */
      padding:      0;       /* no extra around it */
    }

    /* 3. Only scale the logo itself */
    .navbar-logo {
      height:      90px;  /* ← bump this up or down as you like */
      width:       auto;
      display:     block;
      margin:      0;
    }

    .navbar-logo-user {
      height:      50px;  /* ← bump this up or down as you like */
      width:       auto;
      display:     block;
      margin-left:      20px; /* Adjust as needed */
    }
        /* Smooth transition for nav links and Book Now button */
    .navbar .nav-link,
    .btn-book {
      transition: color 0.2s ease, transform 0.2s ease, box-shadow 0.2s ease;
    }

    /* Nav link hover: color shift + slight lift */
    .navbar .nav-link:hover {
      color: #febb02;                /* Golden hover color */
      transform: translateY(-2px);   /* Lift up 2px */
    }

    /* Active nav link: persistent golden underline */
    .navbar .nav-link.active {
      position: relative;
    }
    .navbar .nav-link.active::after {
      content: "";
      position: absolute;
      left: 0; right: 0; bottom: -4px;
      height: 2px;
      background-color: #febb02;
      border-radius: 1px;
    }

    /* Top-bar icon hover: scale up slightly */
    .top-bar .icon,
    .top-bar a img.icon {
      transition: transform 0.2s ease, opacity 0.2s ease;
    }
    .top-bar .icon:hover,
    .top-bar a img.icon:hover {
      transform: scale(1.2);
      opacity: 0.8;
    }


    /*-----------------------------------
      Translucent Top Bar
    -----------------------------------*/
    .top-bar {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 40px;
      padding: 0.5rem 2rem;
      background-color: rgba(33, 37, 41, 0.6) !important;
      backdrop-filter: blur(6px);
      border-bottom: 1px solid rgba(255, 255, 255, 0.2);
      z-index: 1000;

      /* typography */
      font-family: 'Inter', sans-serif;
      color: rgba(255,255,255,0.9);
      font-size: 0.875rem;       
      font-weight: 500;
      letter-spacing: 0.5px;
      text-transform: uppercase;
    }

    /*-----------------------------------
      Translucent Navbar
    -----------------------------------*/
    .navbar {
      position: absolute;
      top: 40px;                  /* offset by top-bar height */
      left: 0;
      width: 100%;
      padding: 1rem 2rem;
      background-color: rgba(33, 37, 41, 0.5) !important;
      backdrop-filter: blur(6px);
      z-index: 1000;

      /* typography */
      font-family: 'Inter', sans-serif;
      color: rgba(255,255,255,0.9);
    }

    /* ensure links inherit */
    .top-bar a,
    .navbar a {
      color: inherit !important;
      text-decoration: none;
    }

    /* navbar brand styling */
    .navbar .navbar-brand .brand-text {
      font-size: 1.5rem;          /* 24px */
      font-weight: 700;
      letter-spacing: 1px;
      text-transform: uppercase;
    }

    /* navbar nav‐links */
    .navbar .nav-link {
      font-size: 1rem;            /* 16px */
      font-weight: 500;
      letter-spacing: 0.5px;
      text-transform: uppercase;
      color: rgba(255,255,255,0.8) !important;
      transition: color 0.2s;
    }
    .navbar .nav-link:hover,
    .navbar .nav-link.active {
      color: #ff9f1c !important;
      text-shadow: 0 1px 2px rgba(0,0,0,0.3);
    }

    /* icon sizing */
    .icon {
      width: 16px;
      height: 16px;
    }

    /* Enhanced Book Now Button */
    .btn-warning {
      background: linear-gradient(135deg, #ff9f1c 0%, #febb02 100%);
      border: none;
      border-radius: 25px;
      padding: 0.75rem 2rem;
      font-weight: 600;
      font-size: 0.9rem;
      text-transform: uppercase;
      letter-spacing: 1px;
      color: #2c3e50;
      position: relative;
      overflow: hidden;
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
      box-shadow: 0 4px 15px rgba(255, 159, 28, 0.3);
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
      transform: translateY(-3px) scale(1.05);
      box-shadow: 0 12px 30px rgba(255, 159, 28, 0.5);
      color: #2c3e50;
    }

    .btn-warning:active {
      transform: translateY(-1px) scale(1.02);
      box-shadow: 0 6px 20px rgba(255, 159, 28, 0.4);
    }
  </style>
</head>

<body>
    <header id="site-header">
    <!-- Top Bar -->
    <div class="top-bar d-none d-lg-flex justify-content-between align-items-center">
        <ul class="list-inline mb-0">
        <li class="list-inline-item">
            <img src="/HolidayGetaway/assets/images/logo/phone-icon.png" alt="Phone" class="icon"> +94 77 678 6535
        </li>
        <li class="list-inline-item ms-4">
            <img src="/HolidayGetaway/assets/images/logo/email-icon.png" alt="Email" class="icon"> info@onitha.com
        </li>
        </ul>
        <ul class="list-inline mb-0">
        <li class="list-inline-item"><a href="#"><img src="/HolidayGetaway/assets/images/logo/facebook.png" alt="Facebook" class="icon"></a></li>
        <li class="list-inline-item"><a href="#"><img src="/HolidayGetaway/assets/images/logo/twitter.png" alt="Twitter" class="icon"></a></li>
        <li class="list-inline-item"><a href="#"><img src="/HolidayGetaway/assets/images/logo/google-plus.png" alt="Google+" class="icon"></a></li>
        <li class="list-inline-item"><a href="#"><img src="/HolidayGetaway/assets/images/logo/linkedin.png" alt="LinkedIn" class="icon"></a></li>
        </ul>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark px-5">
        <a class="navbar-brand d-flex align-items-center" href="#">
        <img src="/HolidayGetaway/assets/images/background/logo.png" alt="Holiday Getaway" class="navbar-logo">
        <span class="brand-text ms-2">Holiday Getaway</span>
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarNav">
        <ul class="navbar-nav me-3">
            <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Rooms</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Pages</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
            <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
        </ul>
        <a href="#" class="me-3"><img src="/HolidayGetaway/assets/images/logo/search.png" alt="Search" class="icon"></a>
        <a href="#" class="btn btn-warning px-4 py-2">Book Now</a>
        <a href="#"><img src="/HolidayGetaway/assets/images/logo/user.png" alt="user" class="navbar-logo-user"></a>
        
        </div>
    </nav>
    </header>
</body>
</html>

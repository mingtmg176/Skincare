<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Nurture&Nourish - Products</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <style>
    :root {
      --primary-color: #b35d5d;
      --background-color: #fffaf5;
      --text-color: #4e2f2f;
      --hover-bg: #fcdede;
      --footer-bg: #4e2f2f;
    }

/* product buttons */
.product-link {
  display: inline-block;
  background: #f8f9fa;
  border: 1px solid #ddd;
  color: #333;
  padding: 5px 10px;
  margin: 5px;
  border-radius: 4px;
  cursor: pointer;
  text-decoration: none;
}

.product-link:hover {
  background: #e9ecef;
}
/* Wishlist button styling */
.product-link:nth-child(1) {
  background-color: #ffffff;
  color: #6c757d;
  border-color: #dee2e6;
}

/* Add to Cart button styling */
.product-link:nth-child(2) {
  background-color: #28a745;
  color: white;
}

/* Hover effects */
.product-link:nth-child(1):hover {
  background-color: #f8f9fa;
  border-color: #adb5bd;
}

.product-link:nth-child(2):hover {
  background-color: #218838;
}

/* Active state effects */
.product-link:active {
  transform: translateY(1px);
}

/* Focus state for accessibility */
.product-link:focus {
  outline: 2px solid rgba(0, 123, 255, 0.5);
  outline-offset: 2px;
}
    .star-rating {
  color: #ffc107; /* Gold color for stars */
  margin: 5px 0;
  font-size: 14px;
}
.star-rating span {
  color: #666;
  margin-left: 5px;
}
    /* Skin Type Section Styling */
.skin-type-section {
  padding: 60px 0;
  background: #f9f3f0;
  text-align: center;
}

.skin-type-cards {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 20px;
  margin: 40px 0;
}

.skin-card {
  width: 180px;
  padding: 25px 15px;
  background: white;
  border-radius: 12px;
  cursor: pointer;
  transition: all 0.3s ease;
  box-shadow: 0 4px 12px rgba(0,0,0,0.05);
}

.skin-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 16px rgba(0,0,0,0.1);
}

.skin-card img {
  width: 60px;
  height: 60px;
  margin-bottom: 15px;
}

.skin-type-quiz-cta {
  margin-top: 30px;
}

.cta-button {
  display: inline-block;
  padding: 12px 30px;
  background: #ff6b81;
  color: white;
  border-radius: 30px;
  text-decoration: none;
  font-weight: 600;
  margin-top: 15px;
}

/* Modal Styling */
.modal {
  display: none;
  position: fixed;
  z-index: 100;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0,0,0,0.5);
}

.modal-content {
  background: white;
  margin: 5% auto;
  padding: 30px;
  width: 60%;
  max-width: 700px;
  border-radius: 15px;
  position: relative;
}

.close {
  position: absolute;
  right: 25px;
  top: 15px;
  font-size: 28px;
  cursor: pointer;
}
/* Modern Animated Styles */
.section {
  background: linear-gradient(135deg, #fff9f7 0%, #fdf0f0 100%);
  padding: 40px 20px;
  margin: 30px 0;
  position: relative;
  border-radius: 16px;
  box-shadow: 0 8px 32px rgba(255, 143, 143, 0.1);
  overflow: hidden;
}

.section::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 4px;
  background: linear-gradient(90deg, #ff9a9e 0%, #fad0c4 100%);
}

.section-header {
  text-align: center;
  margin-bottom: 25px;
}

.section h2 {
  font-size: 28px;
  margin-bottom: 8px;
  color: #333;
  font-weight: 700;
  display: inline-block;
  background: linear-gradient(90deg, #ff6b6b, #ff8e8e);
  -webkit-background-clip: text;
  background-clip: text;
  color: transparent;
}

.pulse {
  display: inline-block;
  animation: pulse 1.5s infinite;
}

.subtitle {
  color: #888;
  font-size: 14px;
  margin-top: 0;
}

.search-tag {
  background: var(--tag-color);
  padding: 12px 20px;
  border-radius: 30px;
  font-size: 15px;
  cursor: pointer;
  transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  flex: 0 0 auto;
  white-space: nowrap;
  display: flex;
  align-items: center;
  gap: 8px;
  box-shadow: 0 4px 15px rgba(0,0,0,0.05);
  position: relative;
  overflow: hidden;
  border: none;
  color: #333;
  font-weight: 500;
}

.search-tag::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(rgba(255,255,255,0.3), rgba(255,255,255,0));
  opacity: 0;
  transition: opacity 0.3s ease;
}

.search-tag:hover {
  transform: translateY(-5px) scale(1.03);
  box-shadow: 0 8px 25px rgba(0,0,0,0.1);
}

.search-tag:hover::after {
  opacity: 1;
}

.search-tag:active {
  transform: translateY(-2px) scale(0.98);
}

.tag-icon {
  font-size: 18px;
  transition: transform 0.3s ease;
}

.search-tag:hover .tag-icon {
  transform: rotate(15deg) scale(1.2);
}

.carousel-container {
  position: relative;
  display: flex;
  align-items: center;
  gap: 5px;
}

.carousel {
  width: 100%;
  overflow: hidden;
  padding: 10px 0;
}

.carousel-track {
  display: flex;
  gap: 15px;
  transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
}

.carousel-btn {
  background: white;
  border: none;
  border-radius: 50%;
  width: 44px;
  height: 44px;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  box-shadow: 0 4px 12px rgba(0,0,0,0.1);
  transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  z-index: 1;
  position: relative;
}

.carousel-btn::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  border-radius: 50%;
  background: linear-gradient(135deg, #ff9a9e 0%, #fad0c4 100%);
  z-index: -1;
  opacity: 0;
  transition: opacity 0.3s ease;
}

.carousel-btn:hover {
  transform: scale(1.1);
}

.carousel-btn:hover::before {
  opacity: 1;
}

.carousel-btn svg {
  fill: #ff6b6b;
  transition: fill 0.3s ease;
}

.carousel-btn:hover svg {
  fill: white;
}

.carousel-btn.prev-btn {
  margin-right: -15px;
}

.carousel-btn.next-btn {
  margin-left: -15px;
}

.carousel-dots {
  display: flex;
  justify-content: center;
  gap: 10px;
  margin-top: 20px;
}

.carousel-dot {
  width: 10px;
  height: 10px;
  border-radius: 50%;
  background: #e0e0e0;
  cursor: pointer;
  transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  position: relative;
  overflow: hidden;
}

.carousel-dot::before {
  content: "";
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(90deg, #ff9a9e 0%, #fad0c4 100%);
  transition: left 0.4s ease;
}

.carousel-dot.active {
  transform: scale(1.3);
}

.carousel-dot.active::before {
  left: 0;
}

@keyframes pulse {
  0% { transform: scale(1); }
  50% { transform: scale(1.2); }
  100% { transform: scale(1); }
}

/* Responsive adjustments */
@media (max-width: 768px) {
  .carousel-btn {
    width: 36px;
    height: 36px;
  }
  
  .carousel-btn svg {
    width: 18px;
    height: 18px;
  }
  
  .search-tag {
    padding: 10px 16px;
    font-size: 14px;
  }
}

    /* Offer Popup */
    .offer-popup {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: white;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 5px 30px rgba(0,0,0,0.2);
      z-index: 1000;
      max-width: 400px;
      width: 90%;
      text-align: center;
      display: none;
    }

    .offer-popup h3 {
      color: var(--primary-color);
      margin-bottom: 15px;
      font-size: 24px;
    }

    .offer-popup p {
      margin-bottom: 20px;
    }

    .offer-popup .close-btn {
      position: absolute;
      top: 10px;
      right: 15px;
      font-size: 24px;
      cursor: pointer;
      color: #888;
    }

    .offer-popup .popup-btn {
      background-color: var(--primary-color);
      color: white;
      border: none;
      padding: 10px 25px;
      border-radius: 25px;
      cursor: pointer;
      font-weight: 500;
      transition: background-color 0.3s;
    }

    .offer-popup .popup-btn:hover {
      background-color: #9a4a4a;
    }

    .overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0,0,0,0.5);
      z-index: 999;
      display: none;
    }

    /* Header/Navbar Styles */
    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 50px;
      background: #fcebea;
      flex-wrap: wrap;
    }

    .logo {
      font-size: 28px;
      font-weight: bold;
      color: var(--primary-color);
    }

    nav {
      display: flex;
      align-items: center;
      gap: 25px;
      flex-wrap: wrap;
    }

    nav a {
      padding: 10px;
      text-decoration: none;
      color: var(--text-color);
      transition: color 0.2s;
    }

    nav > a:hover {
      color: var(--primary-color);
    }

    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown > a {
      cursor: pointer;
    }

    .dropdown > a:hover {
      color: var(--primary-color);
    }

    .content {
      display: block;
      opacity: 0;
      visibility: hidden;
      transform: translateY(10px);
      transition: all 0.3s ease;
      position: absolute;
      background-color: var(--background-color);
      min-width: 160px;
      box-shadow: 0px 8px 16px rgba(0,0,0,0.1);
      z-index: 1;
      border-radius: 8px;
    }

    .content a {
      color: var(--text-color);
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      transition: background-color 0.2s;
    }

    .content a:hover {
      background-color: var(--hover-bg);
      border-radius: 10px;
    }

    .dropdown:hover .content {
      opacity: 1;
      visibility: visible;
      transform: translateY(0);
    }

    .utilities {
      display: flex;
      align-items: center;
      gap: 15px;
      flex-wrap: wrap;
    }

    .search-container {
      display: flex;
      align-items: center;
    }

    .search-bar {
      padding: 5px 10px;
      border: 1px solid #ccc;
      border-radius: 20px;
      width: 0;
      opacity: 0;
      transition: all 0.3s ease;
    }

    .search-bar.active {
      width: 150px;
      opacity: 1;
      margin-right: 5px;
    }

    .utilities button {
      background: var(--primary-color);
      color: white;
      padding: 5px 15px;
      border: none;
      border-radius: 20px;
      cursor: pointer;
    }

    svg {
      width: 45px;
      height: 45px;
      fill: var(--primary-color);
      background-color: transparent;
      padding: 10px;
      border-radius: 50%;
      transition: background-color 0.3s ease, fill 0.3s ease;
      cursor: pointer;
    }

    svg:hover {
      fill: var(--background-color);
      background-color: var(--primary-color);
    }

    .account-dropdown {
      position: relative;
      display: inline-block;
      background-color: var(--primary-color);
      color: var(--background-color);
      border-radius: 10px;
    }

    .account-dropdown-content {
      display: none;
      position: absolute;
      background-color: var(--background-color);
      min-width: 160px;
      box-shadow: 0 8px 16px rgba(0,0,0,0.15);
      z-index: 1;
      border-radius: 10px;
      animation: fadeIn 0.3s ease-in-out;
    }

    .account-dropdown-content a {
      color: #333;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      font-family: 'Segoe UI', sans-serif;
      transition: background-color 0.2s;
    }

    .account-dropdown-content a:hover {
      background-color: var(--hover-bg);
      border-radius: 10px;
    }

    .account-dropdown:hover .account-dropdown-content {
      display: block;
      animation: fadeIn 0.3s ease-in-out;
    }

    .ml-20 {
      margin-left: 20px;
    }

    /* Main Content Styles */
    .hero {
      text-align: center;
      padding: 80px 0;
      background: linear-gradient(rgba(219, 206, 193, 0.9), rgba(255,250,245,0.9)), 
                  url('media/Makeup\ cosmetics\ and\ products\ mockup\,\ pink\ background_\ Generative\ AI\ stock\ image.jpeg');
      background-size: cover;
      background-position: center;
    }

    .hero h2 {
      font-size: 42px;
      margin-bottom: 20px;
      color: var(--primary-color);
    }

    .hero p {
      font-size: 20px;
      max-width: 700px;
      margin: 0 auto 30px;
      color: var(--text-color);
    }

    /* Bestselling Products */
    .featured {
      padding: 60px 0;
      position: relative;
      overflow: hidden;
      background-color: #fffaf5;
    }

    .section-title {
      text-align: center;
      font-size: 32px;
      margin-bottom: 40px;
      color: var(--primary-color);
    }

    .product-slider-container {
      width: 100%;
      overflow: hidden;
      position: relative;
    }

    .product-slider {
      display: flex;
      transition: transform 0.5s ease-in-out;
      width: 100%;
      padding: 0 40px; /* Space for arrows */
    }

    .product-card {
      background: white;
      padding: 25px;
      border-radius: 12px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.08);
      text-align: center;
      min-width: 280px;
      margin: 0 15px;
      flex: 0 0 auto;
      transition: transform 0.3s, box-shadow 0.3s;
      animation: fadeInUp 0.5s ease-out;
    }

    .product-card:hover {
      transform: translateY(-10px) scale(1.02);
      box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    }

    .product-image {
      width: 100%;
      height: 220px;
      object-fit: cover;
      border-radius: 8px;
      margin-bottom: 20px;
      transition: transform 0.3s;
    }

    .product-card:hover .product-image {
      transform: scale(1.05);
    }

    .product-card h4 {
      margin-bottom: 10px;
      color: var(--primary-color);
      font-size: 20px;
    }

    .product-price {
      color: #888;
      margin-bottom: 15px;
      font-size: 18px;
    }

    .product-link {
      background-color: var(--primary-color);
      color: white;
      text-decoration: none;
      padding: 10px 20px;
      border-radius: 25px;
      display: inline-block;
      margin-top: 15px;
      transition: background-color 0.3s, transform 0.3s;
      font-weight: 500;
    }

    .product-link:hover {
      background-color: #9a4a4a;
      transform: translateY(-2px);
    }

    /* Slider Navigation Arrows */
    .slider-nav {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      width: 40px;
      height: 40px;
      background: white;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      z-index: 10;
      transition: all 0.3s;
      border: none;
      color: var(--primary-color);
    }

    .slider-nav:hover {
      background: var(--primary-color);
      color: white;
      transform: translateY(-50%) scale(1.1);
    }

    .slider-nav.prev {
      left: 0;
    }

    .slider-nav.next {
      right: 0;
    }

    .slider-nav.disabled {
      opacity: 0.3;
      cursor: not-allowed;
    }

    /* Sale Section */
    .sale {
      background-color: var(--primary-color);
      color: white;
      padding: 50px 0;
      text-align: center;
    }

    .sale h2 {
      font-size: 32px;
      margin-bottom: 15px;
    }

    .sale p {
      max-width: 600px;
      margin: 0 auto 25px;
      font-size: 16px;
    }

    .cta-button {
      background-color: white;
      color: var(--primary-color);
      padding: 10px 25px;
      border-radius: 25px;
      text-decoration: none;
      font-weight: bold;
      transition: all 0.3s;
      display: inline-block;
      margin-bottom: 20px;
    }

    .cta-button:hover {
      transform: scale(1.05);
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    /* Footer */
    footer {
      padding: 40px 0;
      text-align: center;
      background-color: var(--footer-bg);
      color: white;
    }

    .footer-links {
      display: flex;
      justify-content: center;
      gap: 20px;
      margin-bottom: 20px;
      flex-wrap: wrap;
    }

    .footer-links a {
      color: white;
      text-decoration: none;
      text-transform: uppercase;
      font-size: 13px;
      letter-spacing: 1px;
      transition: color 0.2s;
    }

    .footer-links a:hover {
      color: var(--hover-bg);
    }

    .social-icons {
      display: flex;
      justify-content: center;
      gap: 15px;
      margin: 20px 0;
    }

    .social-icons a {
      color: white;
      font-size: 22px;
      transition: transform 0.3s, color 0.3s;
    }

    .social-icons a:hover {
      transform: translateY(-5px);
      color: var(--hover-bg);
    }

    .follow-us {
      margin-bottom: 10px;
      font-size: 16px;
    }

    .copyright {
      font-size: 13px;
      opacity: 0.8;
      margin-top: 10px;
    }

    /* Offers Section */
    .offers-section {
      padding: 30px 20px;
      text-align: center;
    }

    .offers-section h2 {
      font-size: 28px;
      margin-bottom: 20px;
      color: white;
    }

    .offer-cards {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 15px;
    }

    .offer-card {
      border: 1px solid white;
      border-radius: 10px;
      padding: 15px;
      margin: 5px;
      background-color: rgba(255,255,255,0.1);
      width: 280px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .offer-card:hover {
      transform: translateY(-5px) scale(1.03);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
    }

    .offer-title {
      font-size: 18px;
      color: white;
      margin-bottom: 8px;
    }

    .offer-description {
      font-size: 14px;
      color: rgba(255,255,255,0.8);
    }

    @keyframes fadeIn {
      from {opacity: 0; transform: translateY(10px);}
      to {opacity: 1; transform: translateY(0);}
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes slideIn {
      from {
        opacity: 0;
        transform: translateY(50px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @media (max-width: 768px) {
      header {
        flex-direction: column;
        align-items: flex-start;
        padding: 20px;
      }

      nav {
        flex-direction: column;
        align-items: flex-start;
        gap: 10px;
        margin-top: 10px;
      }

      .utilities {
        flex-direction: column;
        align-items: flex-start;
        margin-top: 15px;
      }
      
      .search-bar.active {
        width: 120px;
      }

      .hero {
        padding: 60px 20px;
      }

      .hero h2 {
        font-size: 32px;
      }

      .product-card {
        min-width: 240px;
      }

      .offer-popup {
        padding: 20px;
      }

      .footer-links {
        gap: 15px;
      }

      .footer-links a {
        font-size: 12px;
      }
      
      .slider-nav {
        width: 30px;
        height: 30px;
        font-size: 14px;
      }
    }
  </style>
</head>
<body>
<!-- Offer Popup -->
<div class="overlay" id="overlay"></div>
<div class="offer-popup" id="offerPopup">
  <span class="close-btn" id="closePopup">&times;</span>
  <h3>Special Offer!</h3>
  <p>Get 20% off your first purchase when you sign up for our newsletter!</p>
  <button class="popup-btn">Claim Offer</button>
</div>

<header>
  <div class="logo">Nurture&Nourish</div>

  <nav>
    <a href="home.php">Home</a>
    <div class="dropdown" aria-haspopup="true">
      <a href="products.php">Products</a>
      <div class="content" aria-label="submenu">
        <a href="#container0">Cleanser</a>
        <a href="#container1">Serum</a>
        <a href="#container2">Sunscreen</a>
        <a href="#container3">Moisturizer</a>
        <a href="#container4">Face Masks</a>
        <a href="#container5">Toner</a>
        <a href="#container6">Lip Care</a>
      </div>
    </div>
    <a href="home.php">Offers</a>
    <a href="home.php">About Us</a>
    <a href="user_login.php">Contact</a>
  </nav>

  <div class="utilities">
    <div class="search-container">
      <input type="text" class="search-bar" placeholder="Search products..." aria-label="Search" />
      <svg id="search-icon" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Search Icon" viewBox="0 0 16 16">
        <title>Search</title>
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
      </svg>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Notifications" viewBox="0 0 16 16">
      <title>Notifications</title>
      <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2m.995-14.901a1 1 0 1 0-1.99 0A5 5 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901"/>
    </svg>

    <div class="account-dropdown ml-20" aria-haspopup="true">
      <button style="background: none; border: none; font-size: 16px; cursor: pointer; font-weight: bold;">SIGNUP</button>  
      <div class="account-dropdown-content" aria-label="Account Options">
        <a href="user_login.php">USER</a>
        <a href="admin_login.php">ADMIN</a>
      </div>
      </div>
    </div>
  </div>
</header>
    
<section class="hero">
  <div class="container">
    <h2>Glow Like Never Before!</h2>
    <p>Discover our natural, organic products that enhance your natural beauty without harsh chemicals.</p>
  </div>
</section>

<div class="section" id="top-searches">
  <div class="section-header">
    <h2><center>Trending Now</center></h2>
    <p class="subtitle"><center>What everyone's searching for</center></p>
  </div>
  
  <div class="carousel-container">
    <button class="carousel-btn prev-btn" aria-label="Previous">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
        <path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z"/>
      </svg>
    </button>
    
    <div class="carousel">
      <div class="carousel-track">
        <div class="search-tag" style="--tag-color: #FF9E9E">
          <span class="tag-icon">✨</span> Vitamin C Serum
        </div>
        <div class="search-tag" style="--tag-color: #FFD6A5">
          <span class="tag-icon">☀️</span> SPF 50 Sunscreen
        </div>
        <div class="search-tag" style="--tag-color: #CBFFA9">
          <span class="tag-icon">💧</span> Oil-Free Moisturizer
        </div>
        <div class="search-tag" style="--tag-color: #A0E7E5">
          <span class="tag-icon">🧪</span> 10% Niacinamide
        </div>
        <div class="search-tag" style="--tag-color: #B5EAEA">
          <span class="tag-icon">👄</span> Lip Scrubs
        </div>
        <div class="search-tag" style="--tag-color: #FFAAA7">
          <span class="tag-icon">🎭</span> Exfoliating Mask
        </div>
        <div class="search-tag" style="--tag-color: #B5EAD7">
          <span class="tag-icon">🍃</span> Green Tea Toner
        </div>
        <div class="search-tag" style="--tag-color: #C7CEEA">
          <span class="tag-icon">🌿</span> Cica Calming Cream
        </div>
        <div class="search-tag" style="--tag-color: #E2F0CB">
          <span class="tag-icon">🖤</span> Charcoal Mask
        </div>
        <div class="search-tag" style="--tag-color: #FFDAC1">
          <span class="tag-icon">⚗️</span> AHA/BHA Serum
        </div>
        <div class="search-tag" style="--tag-color: #F6C6EA">
          <span class="tag-icon">💋</span> Lip Oils
        </div>
        <div class="search-tag" style="--tag-color: #FDFD96">
          <span class="tag-icon">🌞</span> Hyphen Sunscreen
        </div>
        <div class="search-tag" style="--tag-color: #84A9AC">
          <span class="tag-icon">🧼</span> Exfoliating Cleanser
        </div>
      </div>
    </div>
    
    <button class="carousel-btn next-btn" aria-label="Next">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
        <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"/>
      </svg>
    </button>
  </div>
  
  <div class="carousel-dots"></div>
</div>

<section class="featured">
  <div class="container">
    <h2 class="section-title">Best Selling Products</h2>
    <div class="product-slider-container">
      <button class="slider-nav prev" aria-label="Previous products">
        <i class="fas fa-chevron-left"></i>
      </button>
      <div class="product-slider" id="bestSellingSlider">
        <div class="product-card">
          <img src="media/sunscreen/Beauty of Joseon Rice.jpeg" alt="Organic Face Cream" class="product-image">
          <h4>Beauty of Joseon</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
            <span>(4.5)</span>
          </div>
          <p class="product-price">₹1,249</p>
          <p>Relief Sun - Rice & Probiotics <br> Sunscreen SPF50+ <br>PA++++ 50 ml</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
        <div class="product-card">
          <img src="media/serum/serum7.jpg" alt="Face Serum" class="product-image">
          <h4>CBD Calming <br>Relief Serum</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
            <span>(4.0)</span>
          </div>
          <p class="product-price">₹2,899</p>
          <p>Soothes irritation and redness <br>with anti-inflammatory CBD.</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
        <div class="product-card">
          <img src="media/moisturizer/Sensitive Moisturiser.jpeg" alt="Face Serum" class="product-image">
          <h4>Cica-Calming <br>Recovery Cream</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            <span>(5.0)</span>
          </div>
          <p class="product-price">₹2,499</p>
          <p>Soothes redness and irritation <br>with tiger grass and panthenol.</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
        <div class="product-card">
          <img src="media/face mask/The Best Korean Face Mask for Your Skin Type to Get ‘Glass Skin’.jpeg" alt="Cucumber Cooling Gel Mask" class="product-image">
          <h4>Cucumber Cooling <br>Gel Mask</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
            <span>(4.5)</span>
          </div>
          <p class="product-price">₹1,799</p>
          <p>Depuffs and refreshes tired skin <br>with a burst of hydration</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
        <div class="product-card">
          <img src="media/toner/Peach Serum Tightens (2 pieces).jpeg" alt="Charcoal Detox Purifying Toner" class="product-image">
          <h4>Charcoal Detox <br>Purifying Toner</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
            <span>(4.0)</span>
          </div>
          <p class="product-price">₹1,599</p>
          <p>Draws out impurities with <br>activated charcoal and witch hazel</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
        <div class="product-card">
          <img src="media/lip care/Gisou _ Honey infused haircare from the Mirsalehi Bee Garden.jpeg" alt="Matte Lip Treatment Stick" class="product-image">
          <h4>Berry Tinted Lip <br>Oil</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            <span>(5.0)</span>
          </div>
          <p class="product-price">₹1,199</p>
          <p>Sheer wash of color with <br>jojoba oil for glossy, hydrated lips</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
        <div class="product-card">
          <img src="media/toner/1025 Dokdo Toner.jpeg" alt="Green Tea Clarifying Toner" class="product-image">
          <h4>Green Tea Clarifying <br>Toner</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
            <span>(4.5)</span>
          </div>
          <p class="product-price">₹1,549</p>
          <p>Reduces shine and minimizes pores <br>with antioxidant-rich green tea</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
        <div class="product-card">
          <img src="media/sunscreen/Sakura Sunscreen Cream Spf50.jpeg" alt="Clay Mask" class="product-image">
          <h4>Japan Sakura</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
            <span>(4.0)</span>
          </div>
          <p class="product-price">₹1,649</p>
          <p>Spf 50 Essence <br>Cream, Breathable, <br>Non-greasy</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
      </div>
      <button class="slider-nav next" aria-label="Next products">
        <i class="fas fa-chevron-right"></i>
      </button>
    </div>
  </div>
</section>

<section class="featured">
  <div class="container">
    <h2 class="section-title">New Launches</h2>
    <div class="product-slider-container">
      <button class="slider-nav prev" aria-label="Previous products">
        <i class="fas fa-chevron-left"></i>
      </button>
      <div class="product-slider" id="newLaunchesSlider">
        <div class="product-card">
          <img src="media/serum/serum2.jpg" alt="Natural Lipstick" class="product-image">
          <h4>Hyaluronic Hydra <br>Boost Serum</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
            <span>(4.5)</span>
          </div>
          <p class="product-price">₹1,499</p>
          <p>Deeply plumps and hydrates skin <br>with hyaluronic acid for a dewy finish.</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
        <div class="product-card">
          <img src="media/sunscreen/Hyphen Matte Max Velvet Touch Sunscreen.jpeg" alt="Natural Lipstick" class="product-image">
          <h4>Hyphen Matte Max</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
            <span>(4.0)</span>
          </div>
          <p class="product-price">₹1,549</p>
          <p>Matte Max Velvet Touch <br> Sunscreen SPF 70+ <br>PA++++</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
        <div class="product-card">
          <img src="media/moisturizer/The Best Moisturizer for Dry Skin.jpeg" alt="Mascara" class="product-image">
          <h4>Peptide Plump Pillow <br>Cream</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            <span>(5.0)</span>
          </div>
          <p class="product-price">₹1,399</p>
          <p>Firms while it hydrates with <br>collagen-boosting peptides.</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
        <div class="product-card">
          <img src="media/face mask/✨✨✨.jpeg" alt="Lava Scrub Exfoliating Mask" class="product-image">
          <h4>Lava Scrub Exfoliating <br>Mask</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
            <span>(4.5)</span>
          </div>
          <p class="product-price">₹1,299</p>
          <p>Gently buffs away impurities <br>with volcanic ash and enzymes</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
        <div class="product-card">
          <img src="media/lip care/preppy laneige.jpeg" alt="Vanilla Sugar Lip Scrub" class="product-image">
          <h4>Vanilla Sugar <br>Lip Scrub</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
            <span>(4.0)</span>
          </div>
          <p class="product-price">₹999</p>
          <p>Gently exfoliates with sugar crystals <br>while vanilla extract conditions</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
        <div class="product-card">
          <img src="media/toner/1025 Dokdo Toner.jpeg" alt="Green Tea Clarifying Toner" class="product-image">
          <h4>Green Tea Clarifying <br>Toner</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
            <span>(4.5)</span>
          </div>
          <p class="product-price">₹1,549</p>
          <p>Reduces shine and minimizes pores <br>with antioxidant-rich green tea</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
        <div class="product-card">
          <img src="media/moisturizer/download (11).jpeg" alt="Clay Mask" class="product-image">
          <h4>Gold Radiance <br>Illuminating Cream</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            <span>(5.0)</span>
          </div>
          <p class="product-price">₹1,699</p>
          <p>Vitamin E and light-reflecting <br>pearls for a lit-from-within glow.</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
        <div class="product-card">
          <img src="media/serum/serum4.jpg" alt="Bamboo Brush" class="product-image">
          <h4>Niacinamide Blemish <br>Control Serum</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
            <span>(4.0)</span>
          </div>
          <p class="product-price">₹1,249</p>
          <p>Reduces redness, acne, and <br>pores with calming niacinamide.</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
      </div>
      <button class="slider-nav next" aria-label="Next products">
        <i class="fas fa-chevron-right"></i>
      </button>
    </div>
  </div>
</section>

<section class="sale">
  <div class="container">
    <h2>Spring Beauty Sale Up to 40% Off</h2>
    <p>Discover amazing deals on your favorite organic beauty products. Limited time offer!</p>
    <a href="#" class="cta-button">Shop Now</a>
    <div class="offers-section">
      <h2>Ongoing Offers</h2>
      <div class="offer-cards">
        <div class="offer-card">
          <div class="offer-title">15% Off On All Skincare Products</div>
          <div class="offer-description">Revamp your makeup game with our exclusive products!</div>
        </div>
        <div class="offer-card">
          <div class="offer-title">Buy 1 Get 1 Free on Your First Purchase</div>
          <div class="offer-description">Steal deal!! Grab the offer asap!!</div>
        </div>
        <div class="offer-card">
          <div class="offer-title">Free Makeup Bag with Any Purchase</div>
          <div class="offer-description">Get a stylish makeup bag with every order!</div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="featured">
  <div class="container" id="container0">
    <h2 class="section-title">Cleansers</h2>
    <div class="product-slider-container">
      <button class="slider-nav prev" aria-label="Previous products">
        <i class="fas fa-chevron-left"></i>
      </button>
      <div class="product-slider" id="serumsSlider">
        <div class="product-card">
          <img src="media/cleanser/IMG-20250426-WA0050.jpg" alt="Green Tea Purifying Foam Cleanser" class="product-image">
          <h4>Hydra-Sooth <br>Milky Cleanser</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
            <span>(4.5)</span>
          </div>
          <p class="product-price">₹1,799</p>
          <p>Creamy formula calms sensitive skin <br>while maintaining moisture balance</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
        <div class="product-card">
          <img src="media/cleanser/IMG-20250426-WA0051.jpg" alt="Hydra-Sooth Milky Cleanser" class="product-image">
          <h4>Green Tea Purifying <br>Foam Cleanser</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
            <span>(4.0)</span>
          </div>
          <p class="product-price">₹1,399</p>
          <p>Gently removes impurities with<br>antioxidant-rich green tea</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
        <div class="product-card">
          <img src="media/cleanser/IMG-20250426-WA0052.jpg" alt="Charcoal Detox Gel Cleanser" class="product-image">
          <h4>Charcoal Detox <br>Gel Cleanser</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            <span>(5.0)</span>
          </div>
          <p class="product-price">₹2,199</p>
          <p>Deep-cleans pores with activated <br>charcoal, ideal for oily/acne-prone skin</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
        <div class="product-card">
          <img src="media/cleanser/IMG-20250426-WA0053.jpg" alt="Vitamin C Brightening Wash" class="product-image">
          <h4>Vitamin C <br>Brightening Wash</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
            <span>(4.5)</span>
          </div>
          <p class="product-price">₹1,099</p>
          <p>Boosts radiance while cleansing with <br>stabilized vitamin C and citrus extracts</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
        <div class="product-card">
          <img src="media/cleanser/IMG-20250426-WA0054.jpg" alt="AHA/BHA Exfoliating Cleanser" class="product-image">
          <h4>AHA/BHA <br>Exfoliating Cleanser</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
            <span>(4.0)</span>
          </div>
          <p class="product-price">₹1,499</p>
          <p>Dual-action formula that dissolves <br>dead skin cells and unclogs pores</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
        <div class="product-card">
          <img src="media/cleanser/IMG-20250426-WA0055.jpg" alt="Cica Repair Foaming Cleanser" class="product-image">
          <h4>Cica Repair <br>Foaming Cleanser</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            <span>(5.0)</span>
          </div>
          <p class="product-price">₹1,699</p>
          <p>Soothes redness and irritation with <br>centella asiatica and panthenol</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
        <div class="product-card">
          <img src="media/cleanser/IMG-20250426-WA0056.jpg" alt="Oil-to-Milk Makeup Melter" class="product-image">
          <h4>Oil-to-Milk <br>Makeup Melter</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
            <span>(4.5)</span>
          </div>
          <p class="product-price">₹2,599</p>
          <p>Transforms from oil to milky texture <br>to dissolve even waterproof makeup</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
        <div class="product-card">
          <img src="media/cleanser/IMG-20250426-WA0057.jpg" alt="Probiotic Balance Cleanser" class="product-image">
          <h4>Probiotic <br>Balance Cleanser</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
            <span>(4.0)</span>
          </div>
          <p class="product-price">₹1,249</p>
          <p>Prebiotics and postbiotics support <br>skin's microbiome for healthier skin</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
      </div>
      <button class="slider-nav next" aria-label="Next products">
        <i class="fas fa-chevron-right"></i>
      </button>
    </div>
  </div>
</section>

<section class="featured">
  <div class="container" id="container1">
    <h2 class="section-title">Serums</h2>
    <div class="product-slider-container">
      <button class="slider-nav prev" aria-label="Previous products">
        <i class="fas fa-chevron-left"></i>
      </button>
      <div class="product-slider" id="serumsSlider">
        <div class="product-card">
          <img src="media/serum/serum1.jpg" alt="Organic Face Cream" class="product-image">
          <h4>Glow Drops Vitamin <br>C Serum</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
            <span>(4.5)</span>
          </div>
          <p class="product-price">₹1,799</p>
          <p>Brightens skin and fades dark <br>spots with antioxidant-rich vitamin C</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
        <div class="product-card">
          <img src="media/serum/serum2.jpg" alt="Natural Lipstick" class="product-image">
          <h4>Hyaluronic Hydra <br>Boost Serum</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
            <span>(4.0)</span>
          </div>
          <p class="product-price">₹1,399</p>
          <p>Deeply plumps and hydrates skin <br>with hyaluronic acid for a dewy finish.</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
        <div class="product-card">
          <img src="media/serum/serum3.jpg" alt="Essential Oils" class="product-image">
          <h4>Retinol Renewal <br>Night Serum</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            <span>(5.0)</span>
          </div>
          <p class="product-price">₹2,199</p>
          <p>Smooths wrinkles and boosts cell <br>turnover with potent retinol.</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
        <div class="product-card">
          <img src="media/serum/serum4.jpg" alt="Bamboo Brush" class="product-image">
          <h4>Niacinamide Blemish <br>Control Serum</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
            <span>(4.5)</span>
          </div>
          <p class="product-price">₹1,099</p>
          <p>Reduces redness, acne, and <br>pores with calming niacinamide.</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
        <div class="product-card">
          <img src="media/serum/serum5.jpg" alt="Clay Mask" class="product-image">
          <h4>Peptide Firming <br>Complex Serum</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
            <span>(4.0)</span>
          </div>
          <p class="product-price">₹1,499</p>
          <p>Lifts and firms skin with <br>collagen-stimulating peptides.</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
        <div class="product-card">
          <img src="media/serum/serum6.jpg" alt="Body Oil" class="product-image">
          <h4>AHA Exfoliating <br>Glow Serum</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            <span>(5.0)</span>
          </div>
          <p class="product-price">₹1,699</p>
          <p>Gently dissolves dead skin cells <br>for a radiant, smooth complexion.</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
        <div class="product-card">
          <img src="media/serum/serum7.jpg" alt="Face Serum" class="product-image">
          <h4>CBD Calming <br>Relief Serum</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
            <span>(4.5)</span>
          </div>
          <p class="product-price">₹2,599</p>
          <p>Soothes irritation and redness <br>with anti-inflammatory CBD.</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
        <div class="product-card">
          <img src="media/serum/serum8.jpg" alt="Mascara" class="product-image">
          <h4>Brightening Tranexamic <br>Acid Serum</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
            <span>(4.0)</span>
          </div>
          <p class="product-price">₹1,249</p>
          <p>Targets hyperpigmentation and <br>uneven tone for a luminous look.</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
      </div>
      <button class="slider-nav next" aria-label="Next products">
        <i class="fas fa-chevron-right"></i>
      </button>
    </div>
  </div>
</section>

<section class="featured">
  <div class="container" id="container2">
    <h2 class="section-title">Sunscreen</h2>
    <div class="product-slider-container">
      <button class="slider-nav prev" aria-label="Previous products">
        <i class="fas fa-chevron-left"></i>
      </button>
      <div class="product-slider" id="sunscreenSlider">
        <div class="product-card">
          <img src="media/sunscreen/sunscreen1jpg.jpg" alt="Organic Face Cream" class="product-image">
          <h4>Looks&MEII</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
            <span>(4.5)</span>
          </div>
          <p class="product-price">₹1,799</p>
          <p>UV Protection Moist Peach <br>Sun Cream [SPF50+/PA++++]</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
        <div class="product-card">
          <img src="media/sunscreen/Hyphen Matte Max Velvet Touch Sunscreen.jpeg" alt="Natural Lipstick" class="product-image">
          <h4>Hyphen Matte Max</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
            <span>(4.0)</span>
          </div>
          <p class="product-price">₹1,399</p>
          <p>Matte Max Velvet Touch <br> Sunscreen SPF 70+ PA++++</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
        <div class="product-card">
          <img src="media/sunscreen/sunscreen3.jpg" alt="Essential Oils" class="product-image">
          <h4>LabNo Vegan</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            <span>(5.0)</span>
          </div>
          <p class="product-price">₹2,199</p>
          <p>Water Moist Sun Cream <br> SPF50+ PA++++ 50ml</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
        <div class="product-card">
          <img src="media/sunscreen/Beauty of Joseon Rice.jpeg" alt="Bamboo Brush" class="product-image">
          <h4>Beauty of Joseon</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
            <span>(4.5)</span>
          </div>
          <p class="product-price">₹1,099</p>
          <p>Relief Sun - Rice & Probiotics <br> Sunscreen SPF50+ PA++++ 50 ml</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
        <div class="product-card">
          <img src="media/sunscreen/Sakura Sunscreen Cream Spf50.jpeg" alt="Clay Mask" class="product-image">
          <h4>Japan Sakura</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
            <span>(4.0)</span>
          </div>
          <p class="product-price">₹1,499</p>
          <p>Spf 50 Essence Cream, <br> Breathable, Non-greasy</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
        <div class="product-card">
          <img src="media/sunscreen/sunscreen2.jpg" alt="Body Oil" class="product-image">
          <h4>ISNTREE</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            <span>(5.0)</span>
          </div>
          <p class="product-price">₹1,699</p>
          <p>Yam Root Milk Tone <br> Up Sun Cream SPF50+ PA++++</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
        <div class="product-card">
          <img src="media/sunscreen/Onion Newpair Sunscreen 50mL.jpeg" alt="Face Serum" class="product-image">
          <h4>ISNtree</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
            <span>(4.5)</span>
          </div>
          <p class="product-price">₹2,599</p>
          <p>Purple Protector, Onion Newpair <br> Sunscreen SPF 40 (50 ml)</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
        <div class="product-card">
          <img src="media/sunscreen/sunscreen4.jpg" alt="Mascara" class="product-image">
          <h4>DEleventh</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
            <span>(4.0)</span>
          </div>
          <p class="product-price">₹1,249</p>
          <p>Aqueous and Non-Greasy SPF 50+ <br> PA+++ Sunscreen Cream 50g</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
      </div>
      <button class="slider-nav next" aria-label="Next products">
        <i class="fas fa-chevron-right"></i>
      </button>
    </div>
  </div>
</section>

<section class="featured">
  <div class="container" id="container3">
    <h2 class="section-title">Moisturizer</h2>
    <div class="product-slider-container">
      <button class="slider-nav prev" aria-label="Previous products">
        <i class="fas fa-chevron-left"></i>
      </button>
      <div class="product-slider" id="moisturizerSlider">
        <div class="product-card">
          <img src="media/moisturizer/20 hydrating moisturizers that won’t add extra shine to oily skin.jpeg" alt="Organic Face Cream" class="product-image">
          <h4>Dew Dream Hydrating <br>Gel Cream</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
            <span>(4.5)</span>
          </div>
          <p class="product-price">₹1,799</p>
          <p>A featherlight gel that floods <br>skin with hydration sans greasiness</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
        <div class="product-card">
          <img src="media/moisturizer/The Summer Fridays Cloud Dew Moisturizer Was the Secret Weapon I Needed for Winter.jpeg" alt="Natural Lipstick" class="product-image">
          <h4>Midnight Recovery <br>Overnight Mask</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
            <span>(4.0)</span>
          </div>
          <p class="product-price">₹1,399</p>
          <p>Sleep your way to plump skin with <br>this ceramide-infused night treatment.</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
        <div class="product-card">
          <img src="media/moisturizer/somebymi - SOMEBYMI - 𝗗Snail Truecica Miracle Repair Cream.jpeg" alt="Essential Oils" class="product-image">
          <h4>Cloud Cushion <br>Silk Moisturizer</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            <span>(5.0)</span>
          </div>
          <p class="product-price">₹2,199</p>
          <p>A whipped, airy formula that melts <br>into sensitive skin like a veil.</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
        <div class="product-card">
          <img src="media/moisturizer/download (10).jpeg" alt="Bamboo Brush" class="product-image">
          <h4>Green Tea Oil-Free <br>Moisturizer</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
            <span>(4.5)</span>
          </div>
          <p class="product-price">₹1,099</p>
          <p>Mattifies and calms breakout-prone <br>skin with antioxidant power.</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
        <div class="product-card">
          <img src="media/moisturizer/download (11).jpeg" alt="Clay Mask" class="product-image">
          <h4>Gold Radiance <br>Illuminating Cream</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
            <span>(4.0)</span>
          </div>
          <p class="product-price">₹1,499</p>
          <p>Vitamin E and light-reflecting <br>pearls for a lit-from-within glow.</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
        <div class="product-card">
          <img src="media/moisturizer/Best Korean Sunscreen.jpeg" alt="Body Oil" class="product-image">
          <h4>Barrier Repair Balm</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            <span>(5.0)</span>
          </div>
          <p class="product-price">₹1,699</p>
          <p>A rich, buttery salve for <br>parched skin needing <br>intense TLC.</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
        <div class="product-card">
          <img src="media/moisturizer/Sensitive Moisturiser.jpeg" alt="Face Serum" class="product-image">
          <h4>Cica-Calming <br>Recovery Cream</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
            <span>(4.5)</span>
          </div>
          <p class="product-price">₹2,599</p>
          <p>Soothes redness and irritation <br>with tiger grass and panthenol.</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
        <div class="product-card">
          <img src="media/moisturizer/The Best Moisturizer for Dry Skin.jpeg" alt="Mascara" class="product-image">
          <h4>Peptide Plump Pillow <br>Cream</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
            <span>(4.0)</span>
          </div>
          <p class="product-price">₹1,249</p>
          <p>Firms while it hydrates with <br>collagen-boosting peptides.</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
      </div>
      <button class="slider-nav next" aria-label="Next products">
        <i class="fas fa-chevron-right"></i>
      </button>
    </div>
  </div>
</section>

<section class="featured">
  <div class="container" id="container4">
    <h2 class="section-title">Face Masks</h2>
    <div class="product-slider-container">
      <button class="slider-nav prev" aria-label="Previous products">
        <i class="fas fa-chevron-left"></i>
      </button>
      <div class="product-slider" id="faceMasksSlider">
        <div class="product-card">
          <img src="media/face mask/Bio Collagen-Real Deep Mask (4 Pack).jpeg" alt="Charcoal Detox Clay Mask" class="product-image">
          <h4>Charcoal Detox <br>Clay Mask</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
            <span>(4.5)</span>
          </div>
          <p class="product-price">₹1,799</p>
          <p>Deep-cleans pores and absorbs <br>excess oil with activated charcoal</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
        <div class="product-card">
          <img src="media/face mask/Grace & Stella Eye Mask Review.jpeg" alt="Honey Glow Smoothing Mask" class="product-image">
          <h4>Honey Glow <br>Smoothing Mask</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
            <span>(4.0)</span>
          </div>
          <p class="product-price">₹1,399</p>
          <p>Hydrates and brightens with <br>raw honey and antioxidants</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
        <div class="product-card">
          <img src="media/face mask/download (7).jpeg" alt="Matcha Green Tea Calming Mask" class="product-image">
          <h4>Matcha Green Tea <br>Calming Mask</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            <span>(5.0)</span>
          </div>
          <p class="product-price">₹2,199</p>
          <p>Soothes redness and irritation <br>with anti-inflammatory matcha</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
        <div class="product-card">
          <img src="media/face mask/Revolution Skincare Face Masks - Violet Hollow.jpeg" alt="Overnight Hydra-Sleep Mask" class="product-image">
          <h4>Overnight Hydra-Sleep <br>Mask</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
            <span>(4.5)</span>
          </div>
          <p class="product-price">₹1,099</p>
          <p>Plumps skin with hyaluronic <br>acid while you sleep</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
        <div class="product-card">
          <img src="media/face mask/Sorry, Santa but We Found the 100 Best Stocking Stuffer Ideas Under $10.jpeg" alt="Pore Refining AHA Peel Mask" class="product-image">
          <h4>Pore Refining AHA <br>Peel Mask</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
            <span>(4.0)</span>
          </div>
          <p class="product-price">₹1,499</p>
          <p>Exfoliates dead skin for a <br>smoother, refined texture</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
        <div class="product-card">
          <img src="media/face mask/The Best and The Worst_ Face Mask Edition - Society19.jpeg" alt="Rose Quartz Radiance Mask" class="product-image">
          <h4>Rose Quartz <br>Radiance Mask</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            <span>(5.0)</span>
          </div>
          <p class="product-price">₹1,699</p>
          <p>Illuminates dull skin with <br>rose extract and vitamin C</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
        <div class="product-card">
          <img src="media/face mask/The Best Korean Face Mask for Your Skin Type to Get ‘Glass Skin’.jpeg" alt="Cucumber Cooling Gel Mask" class="product-image">
          <h4>Cucumber Cooling <br>Gel Mask</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
            <span>(4.5)</span>
          </div>
          <p class="product-price">₹2,599</p>
          <p>Depuffs and refreshes tired skin <br>with a burst of hydration</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
        <div class="product-card">
          <img src="media/face mask/✨✨✨.jpeg" alt="Lava Scrub Exfoliating Mask" class="product-image">
          <h4>Lava Scrub Exfoliating <br>Mask</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
            <span>(4.0)</span>
          </div>
          <p class="product-price">₹1,249</p>
          <p>Gently buffs away impurities <br>with volcanic ash and enzymes</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
      </div>
      <button class="slider-nav next" aria-label="Next products">
        <i class="fas fa-chevron-right"></i>
      </button>
    </div>
  </div>
</section>

<section class="featured">
  <div class="container" id="container5">
    <h2 class="section-title">Toner</h2>
    <div class="product-slider-container">
      <button class="slider-nav prev" aria-label="Previous products">
        <i class="fas fa-chevron-left"></i>
      </button>
      <div class="product-slider" id="tonerSlider">
        <div class="product-card">
          <img src="media/toner/10 beauty secrets every woman should know.jpeg" alt="Rosewater Hydrating Mist" class="product-image">
          <h4>Rosewater Hydrating <br>Mist</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
            <span>(4.5)</span>
          </div>
          <p class="product-price">₹1,799</p>
          <p>Refreshes and balances pH with <br>pure rose distillate for dewy skin</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
        <div class="product-card">
          <img src="media/toner/1025 Dokdo Toner.jpeg" alt="Green Tea Clarifying Toner" class="product-image">
          <h4>Green Tea Clarifying <br>Toner</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
            <span>(4.0)</span>
          </div>
          <p class="product-price">₹1,399</p>
          <p>Reduces shine and minimizes pores <br>with antioxidant-rich green tea</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
        <div class="product-card">
          <img src="media/toner/The Dreamiest Rose Toner.jpeg" alt="AHA/BHA Exfoliating Tonic" class="product-image">
          <h4>AHA/BHA Exfoliating <br>Toner</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            <span>(5.0)</span>
          </div>
          <p class="product-price">₹2,199</p>
          <p>Gently dissolves dead skin cells <br>with fruit acids for smoother texture</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
        <div class="product-card">
          <img src="media/toner/download (7).jpeg" alt="Cica Rescue Soothing Toner" class="product-image">
          <h4>Cica Rescue <br>Soothing Toner</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
            <span>(4.5)</span>
          </div>
          <p class="product-price">₹1,099</p>
          <p>Calms irritation and redness <br>with centella asiatica and panthenol</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
        <div class="product-card">
          <img src="media/toner/Korean Skincare.jpeg" alt="Hyaluronic Plumping Toner" class="product-image">
          <h4>Hyaluronic Plumping <br>Toner</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
            <span>(4.0)</span>
          </div>
          <p class="product-price">₹1,499</p>
          <p>Floods skin with hydration through <br>triple-weight hyaluronic acid</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
        <div class="product-card">
          <img src="media/toner/Peach Serum Tightens (2 pieces).jpeg" alt="Charcoal Detox Purifying Toner" class="product-image">
          <h4>Charcoal Detox <br>Purifying Toner</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            <span>(5.0)</span>
          </div>
          <p class="product-price">₹1,699</p>
          <p>Draws out impurities with <br>activated charcoal and witch hazel</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
        <div class="product-card">
          <img src="media/toner/Pine Tree Calming Cica Toner.jpeg" alt="Vitamin C Brightening Toner" class="product-image">
          <h4>Vitamin C Brightening <br>Toner</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
            <span>(4.5)</span>
          </div>
          <p class="product-price">₹2,599</p>
          <p>Evens skin tone and boosts <br>radiance with stabilized vitamin C</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
        <div class="product-card">
          <img src="media/toner/SKIN 1004 - Madagascar Centella Toning Toner.jpeg" alt="Lavender Moonlight Calming Toner" class="product-image">
          <h4>Lavender Moonlight <br>Calming Toner</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
            <span>(4.0)</span>
          </div>
          <p class="product-price">₹1,249</p>
          <p>Prepares skin for sleep with <br>lavender and chamomile extracts</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
      </div>
      <button class="slider-nav next" aria-label="Next products">
        <i class="fas fa-chevron-right"></i>
      </button>
    </div>
  </div>
</section>

<section class="featured">
  <div class="container" id="container6">
    <h2 class="section-title">Lip Care</h2>
    <div class="product-slider-container">
      <button class="slider-nav prev" aria-label="Previous products">
        <i class="fas fa-chevron-left"></i>
      </button>
      <div class="product-slider" id="lipCareSlider">
        <div class="product-card">
          <img src="media/lip care/colorgram Juicy Drop Tint.jpeg" alt="Honey Butter Lip Mask" class="product-image">
          <h4>SPF 30 Lip <br>Shield</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
            <span>(4.5)</span>
          </div>
          <p class="product-price">₹899</p>
          <p>Protective balm with zinc oxide <br>for broad-spectrum sun protection</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
        <div class="product-card">
          <img src="media/lip care/download (7).jpeg" alt="Peppermint Plump Balm" class="product-image">
          <h4>CBD Comfort Lip <br>Serum</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
            <span>(4.0)</span>
          </div>
          <p class="product-price">₹699</p>
          <p>Soothes chapped lips with <br>anti-inflammatory CBD and ceramides</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
        <div class="product-card">
          <img src="media/lip care/preppy laneige.jpeg" alt="Vanilla Sugar Lip Scrub" class="product-image">
          <h4>Vanilla Sugar <br>Lip Scrub</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            <span>(5.0)</span>
          </div>
          <p class="product-price">₹1,099</p>
          <p>Gently exfoliates with sugar crystals <br>while vanilla extract conditions</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
        <div class="product-card">
          <img src="media/lip care/Lip mask cklick the link to buy it 👄✨.jpeg" alt="SPF 30 Lip Shield" class="product-image">
          <h4>Honey Butter <br>Lip Mask</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i>
            <span>(3.5)</span>
          </div>
          <p class="product-price">₹549</p>
          <p>Overnight treatment melts onto lips <br>in nourishing honey & shea butter</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
        <div class="product-card">
          <img src="media/lip care/Summer Fridays.jpeg" alt="Berry Tinted Lip Oil" class="product-image">
          <h4>Matte Lip Treatment <br>Stick</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
            <span>(4.5)</span>
          </div>
          <p class="product-price">₹749</p>
          <p>Weightless balm that leaves a <br>velvety matte finish without drying</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
        <div class="product-card">
          <img src="media/lip care/save & follow.jpeg" alt="CBD Comfort Lip Serum" class="product-image">
          <h4>Peppermint Plump <br>Balm</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
            <span>(4.0)</span>
          </div>
          <p class="product-price">₹849</p>
          <p>Cooling formula with natural peptides <br>for a subtle, tingly plumping effect</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
        <div class="product-card">
          <img src="media/lip care/TikTok Swears By Ole Henriksen's Pout Preserve Peptide Lip Treatment for Plump, Shiny Lips.jpeg" alt="Coconut Luxe Lip Sleeping Mask" class="product-image">
          <h4>Coconut Luxe Lip <br>Sleeping Mask</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            <span>(5.0)</span>
          </div>
          <p class="product-price">₹1,299</p>
          <p>Ultra-rich overnight treatment <br>in a tropical coconut vanilla scent</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
        <div class="product-card">
          <img src="media/lip care/Gisou _ Honey infused haircare from the Mirsalehi Bee Garden.jpeg" alt="Matte Lip Treatment Stick" class="product-image">
          <h4>Berry Tinted Lip <br>Oil</h4>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
            <span>(4.0)</span>
          </div>
          <p class="product-price">₹649</p>
          <p>Sheer wash of color with <br>jojoba oil for glossy, hydrated lips</p>
          <button class="product-link">Wishlist</button>
          <button class="product-link">Add to Cart</button>
        </div>
      </div>
      <button class="slider-nav next" aria-label="Next products">
        <i class="fas fa-chevron-right"></i>
      </button>
    </div>
  </div>
</section>

<!-- Know Your Skin Type Section -->
<section class="skin-type-section">
  <div class="container">
    <h2 class="section-title">Not Sure What Your Skin Needs? <br>Discover Your Skin Type</h2>
    
    <div class="skin-type-cards">
      <!-- Normal Skin -->
      <div class="skin-card" onclick="showSkinDetails('normal')">
        <img src="media/Druni rebaja el corrector de Rimmel London que arrasa en ventas_ cubre completamente las ojeras y las manchas de la piel por menos de 6 euros.jpeg" alt="Normal skin illustration" style="height: 100px; width: 100px;">
        <h4>Normal Skin</h4>
        <p>Balanced · Few imperfections</p>
      </div>
      
      <!-- Dry Skin -->
      <div class="skin-card" onclick="showSkinDetails('dry')">
        <img src="media/Free Photo _ Close up on face pores texture.jpeg" alt="Dry skin illustration" style="height: 100px; width: 100px;">
        <h4>Dry Skin</h4>
        <p>Flaky · Tight feeling</p>
      </div>
      
      <!-- Oily Skin -->
      <div class="skin-card" onclick="showSkinDetails('oily')">
        <img src="media/Oily skin treatment secrets revealed.jpeg" alt="Oily skin illustration" style="height: 100px; width: 100px;">
        <h4>Oily Skin</h4>
        <p>Shiny · Enlarged pores</p>
      </div>
      
      <!-- Combination Skin -->
      <div class="skin-card" onclick="showSkinDetails('combination')">
        <img src="media/What Exactly Is Glossier Skin_.jpeg" alt="Combination skin illustration" style="height: 100px; width: 100px;">
        <h4>Combination</h4>
        <p>Oily T-zone · Dry cheeks</p>
      </div>
      
      <!-- Sensitive Skin -->
      <div class="skin-card" onclick="showSkinDetails('sensitive')">
        <img src="media/5 Random but Useful Acne Products for Anyone Who is Currently Breaking Out.jpeg" alt="Sensitive skin illustration" style="height: 100px; width: 100px;">
        <h4>Sensitive</h4>
        <p>Redness · Reacts easily</p>
      </div>
    </div>
    
    <div class="skin-type-quiz-cta">
      <p>Still unsure? Take our 2-minute skin quiz!</p>
      <a href="/skin-quiz" class="cta-button">Start Skin Quiz</a>
    </div>
  </div>
</section>

<!-- Skin Type Details Modal (hidden by default) -->
<div id="skinDetailsModal" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeModal()">&times;</span>
    <div id="skinTypeDetails">
      <!-- Content will be dynamically inserted here -->
    </div>
  </div>
</div>

<footer>
  <div class="container">
    <div class="footer-links">
      <a href="#">Ratings & Reviews</a>
      <a href="#">Terms & Conditions</a>
      <a href="#">Contact Us</a>
      <a href="#">Privacy Policy</a>
      <a href="#">Shipping & Returns</a>
      <a href="#">FAQ</a>
    </div>
    <div class="follow-us">Follow Us</div>
    <div class="social-icons">
      <a href="#" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
      <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
      <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
      <a href="#" aria-label="Pinterest"><i class="fab fa-pinterest"></i></a>
    </div>
    <p class="copyright">© 2024 Nurture&Nourish. All rights reserved.</p>
  </div>
</footer>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Search functionality
    const searchIcon = document.getElementById('search-icon');
    const searchBar = document.querySelector('.search-bar');
    
    searchIcon.addEventListener('click', function() {
      searchBar.classList.toggle('active');
      if (searchBar.classList.contains('active')) {
        searchBar.focus();
      }
    });
    
    // Close search bar when clicking outside
    document.addEventListener('click', function(event) {
      if (!searchBar.contains(event.target) && !searchIcon.contains(event.target)) {
        searchBar.classList.remove('active');
      }
    });

    // Initialize all sliders
    const sliders = [
      { id: 'bestSellingSlider', currentPosition: 0 },
      { id: 'newLaunchesSlider', currentPosition: 0 },
      { id: 'serumsSlider', currentPosition: 0 },
      { id: 'sunscreenSlider', currentPosition: 0 },
      { id: 'moisturizerSlider', currentPosition: 0 },
      { id: 'faceMasksSlider', currentPosition: 0 },
      { id: 'tonerSlider', currentPosition: 0 },
      { id: 'lipCareSlider', currentPosition: 0 }
    ];

    sliders.forEach(sliderData => {
      const slider = document.getElementById(sliderData.id);
      const container = slider.parentElement;
      const prevBtn = container.querySelector('.prev');
      const nextBtn = container.querySelector('.next');
      const productCards = slider.querySelectorAll('.product-card');
      const cardWidth = productCards[0].offsetWidth + 30; // width + margin
      const visibleCards = Math.floor(slider.offsetWidth / cardWidth);
      const maxPosition = -(cardWidth * (productCards.length - visibleCards));
      
      // Update slider position
      function updateSliderPosition() {
        slider.style.transform = `translateX(${sliderData.currentPosition}px)`;
        
        // Disable/enable buttons based on position
        prevBtn.classList.toggle('disabled', sliderData.currentPosition >= 0);
        nextBtn.classList.toggle('disabled', sliderData.currentPosition <= maxPosition);
      }
      
      // Next button click
      nextBtn.addEventListener('click', () => {
        if (sliderData.currentPosition > maxPosition) {
          sliderData.currentPosition -= cardWidth * visibleCards;
          if (sliderData.currentPosition < maxPosition) {
            sliderData.currentPosition = maxPosition;
          }
          updateSliderPosition();
        }
      });
      
      // Previous button click
      prevBtn.addEventListener('click', () => {
        if (sliderData.currentPosition < 0) {
          sliderData.currentPosition += cardWidth * visibleCards;
          if (sliderData.currentPosition > 0) {
            sliderData.currentPosition = 0;
          }
          updateSliderPosition();
        }
      });
      
      // Initialize position
      updateSliderPosition();
      
      // Auto-slide every 5 seconds
      setInterval(() => {
        if (sliderData.currentPosition > maxPosition) {
          sliderData.currentPosition -= cardWidth;
          if (sliderData.currentPosition < maxPosition) {
            sliderData.currentPosition = 0;
          }
          updateSliderPosition();
        } else {
          sliderData.currentPosition = 0;
          updateSliderPosition();
        }
      }, 5000);
    });

    // Offer popup functionality
    const offerPopup = document.getElementById('offerPopup');
    const overlay = document.getElementById('overlay');
    const closePopup = document.getElementById('closePopup');

    // Show popup after 3 seconds
    setTimeout(() => {
      offerPopup.style.display = 'block';
      overlay.style.display = 'block';
    }, 3000);

    // Close popup when X is clicked
    closePopup.addEventListener('click', () => {
      offerPopup.style.display = 'none';
      overlay.style.display = 'none';
    });

    // Close popup when clicking outside
    overlay.addEventListener('click', () => {
      offerPopup.style.display = 'none';
      overlay.style.display = 'none';
    });
  });

  document.addEventListener('DOMContentLoaded', function() {
  const track = document.querySelector('.carousel-track');
  const items = document.querySelectorAll('.search-tag');
  const prevBtn = document.querySelector('.prev-btn');
  const nextBtn = document.querySelector('.next-btn');
  const dotsContainer = document.querySelector('.carousel-dots');
  
  let itemWidth = items[0].offsetWidth + 15; // width + gap
  let currentPosition = 0;
  let visibleItems = Math.floor(document.querySelector('.carousel').offsetWidth / itemWidth);
  let totalItems = items.length;
  
  // Create dots
  for (let i = 0; i < Math.ceil(totalItems / visibleItems); i++) {
    const dot = document.createElement('div');
    dot.classList.add('carousel-dot');
    if (i === 0) dot.classList.add('active');
    dot.addEventListener('click', () => {
      goToSlide(i);
    });
    dotsContainer.appendChild(dot);
  }
  
  const dots = document.querySelectorAll('.carousel-dot');
  
  function updateCarousel() {
    track.style.transform = `translateX(${currentPosition}px)`;
    updateDots();
  }
  
  function updateDots() {
    const activeDot = Math.abs(Math.floor(currentPosition / (itemWidth * visibleItems)));
    dots.forEach((dot, index) => {
      dot.classList.toggle('active', index === activeDot);
    });
  }
  
  function goToSlide(slideIndex) {
    currentPosition = -slideIndex * visibleItems * itemWidth;
    updateCarousel();
  }
  
  prevBtn.addEventListener('click', () => {
    if (currentPosition < 0) {
      currentPosition += itemWidth * visibleItems;
      updateCarousel();
    }
  });
  
  nextBtn.addEventListener('click', () => {
    const maxPosition = -(itemWidth * (totalItems - visibleItems));
    if (currentPosition > maxPosition) {
      currentPosition -= itemWidth * visibleItems;
      updateCarousel();
    }
  });
  
  // Handle window resize
  window.addEventListener('resize', () => {
    itemWidth = items[0].offsetWidth + 15;
    visibleItems = Math.floor(document.querySelector('.carousel').offsetWidth / itemWidth);
    updateCarousel();
  });
});

function showSkinDetails(skinType) {
  const modal = document.getElementById('skinDetailsModal');
  const content = document.getElementById('skinTypeDetails');
  
  // These would be your actual product recommendations
  const skinTypeData = {
    normal: {
      title: "Normal Skin",
      description: "Your skin is well-balanced with few imperfections. Maintain your healthy glow with gentle, hydrating products.",
      products: ["Hyaluronic Acid Serum", "Lightweight Moisturizer", "Antioxidant Day Cream"]
    },
    dry: {
      title: "Dry Skin",
      description: "Your skin craves moisture. Look for rich, nourishing formulas with ceramides and oils.",
      products: ["Ceramide Cream", "Honey Mask", "Facial Oil"]
    },
    oily: {
      title: "Oily Skin",
      description: "Your skin produces excess sebum. Oil-free, non-comedogenic products will help balance without over-drying.",
      products: ["Niacinamide Serum", "Clay Mask", "Matte Sunscreen"]
    },
    combination: {
      title: "Combination Skin",
      description: "You have both oily and dry areas. Multi-masking and targeted treatments work best.",
      products: ["Gel-Cream Moisturizer", "Pore Refining Toner", "Hydrating Serum"]
    },
    sensitive: {
      title: "Sensitive Skin",
      description: "Your skin reacts easily. Fragrance-free products with soothing ingredients are ideal.",
      products: ["Cica Cream", "Thermal Water Spray", "Mineral Sunscreen"]
    }
  };
  
  const data = skinTypeData[skinType];
  
  content.innerHTML = `
    <h3>${data.title}</h3>
    <p>${data.description}</p>
    <div class="recommended-products">
      <h4>Recommended Products:</h4>
      <ul>
        ${data.products.map(product => `<li>${product}</li>`).join('')}
      </ul>
    </div>
    <a href="/products?skin_type=${skinType}" class="cta-button">Shop ${data.title} Essentials</a>
  `;
  
  modal.style.display = "block";
}

function closeModal() {
  document.getElementById('skinDetailsModal').style.display = "none";
}

// Close modal when clicking outside content
window.onclick = function(event) {
  const modal = document.getElementById('skinDetailsModal');
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</body>
</html>
<?php
// Start session (if not already started)
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Nurture&Nourish</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        
     :root {
      --primary-color: #b35d5d;
      --background-color: #fffaf5;
      --text-color: #4e2f2f;
      --hover-bg: #fcdede;
      --footer-bg: #4e2f2f;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      animation: slideIn 1s ease;
      background: var(--background-color);
      color: var(--text-color);
    }

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
      border-radius: 0%;
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

    @keyframes fadeIn {
      from {opacity: 0; transform: translateY(10px);}
      to {opacity: 1; transform: translateY(0);}
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
        /* Add your existing styles here */
        :root {
            --primary-color: #b35d5d;
            --background-color: #fffaf5;
            --text-color: #4e2f2f;
            --hover-bg: #fcdede;
            --footer-bg: #4e2f2f;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background: var(--background-color);
            color: var(--text-color);
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        .checkout-container {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            margin-top: 30px;
        }
        
        .billing-form {
            flex: 2;
            min-width: 300px;
        }
        
        .order-summary {
            flex: 1;
            min-width: 300px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        
        input, select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        
        .billing-form-card,
        .order-summary-card {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
            margin-bottom: 20px;
        }
        
        .order-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
        }
        
        .order-total {
            font-weight: bold;
            font-size: 18px;
            margin-top: 20px;
            padding-top: 15px;
            border-top: 1px solid #eee;
        }
        
        .place-order-btn {
            background: var(--primary-color);
            color: white;
            border: none;
            padding: 12px 20px;
            width: 100%;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        
        .place-order-btn:hover {
            background: #9a4a4a;
        }
        
        .payment-methods {
            margin-top: 20px;
        }
        
        .payment-method {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .payment-method:hover {
            border-color: var(--primary-color);
            background-color: var(--hover-bg);
        }
        
        .payment-method input {
            width: auto;
            margin-right: 10px;
        }
        
        .payment-method label {
            display: flex;
            align-items: center;
            margin-bottom: 0;
            cursor: pointer;
            width: 100%;
        }
        
        .payment-icon {
            margin-right: 10px;
            font-size: 20px;
            color: #555;
        }
        
        .section-title {
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
        }
    </style>
</head>
<body>
<header>
  <div class="logo">Nurture&Nourish</div>

  <nav>
    <a href="home1.php">Home</a>
    <div class="dropdown" aria-haspopup="true">
      <a href="products1.php">Products</a>
    </div>
    <a href="home1.php">Offers</a>
    <a href="home1.php">About Us</a>
    <a href="contact.php">Contact</a>
  </nav>

  <div class="utilities">
    <div class="search-container">
      <input type="text" class="search-bar" placeholder="Search products..." aria-label="Search" />
      <svg id="search-icon" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Search Icon" viewBox="0 0 16 16">
        <title>Search</title>
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
      </svg>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
  <title>Wishlist</title>
</svg>

    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-check" viewBox="0 0 16 16">
      <title>Cart</title>
  <path d="M11.354 6.354a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0z"/>
  <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
</svg>

    <svg xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Notifications" viewBox="0 0 16 16">
      <title>Notifications</title>
      <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2m.995-14.901a1 1 0 1 0-1.99 0A5 5 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901"/>
    </svg>

    <div class="account-dropdown ml-20" aria-haspopup="true">
      <button style="background: none; border: none; font-size: 16px; cursor: pointer; font-weight: bold;" id="profileButton">My Profile</button>
    </div>
  </div>
</header>
    
    <div class="container">
        <h1><center>Checkout</center></h1>
        
        <div class="checkout-container">
            <div class="billing-form">
                <div class="billing-form-card">
                    <h2 class="section-title">Billing Details</h2>
                    <form id="checkoutForm">
                        <div class="form-group">
                            <label for="firstName">First Name *</label>
                            <input type="text" id="firstName" required>
                        </div>
                        <div class="form-group">
                            <label for="lastName">Last Name *</label>
                            <input type="text" id="lastName" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone *</label>
                            <input type="tel" id="phone" required>
                        </div>
                        <div class="form-group">
                            <label for="address">Address *</label>
                            <input type="text" id="address" required>
                        </div>
                        <div class="form-group">
                            <label for="apartment">Apartment, Street Name, Plot No. (optional)</label>
                            <input type="text" id="apartment">
                        </div>
                        <div class="form-group">
                            <label for="city">City *</label>
                            <input type="text" id="city" required>
                        </div>
                        <div class="form-group">
                            <label for="state">State *</label>
                            <input type="text" id="state" required>
                        </div>
                        <div class="form-group">
                            <label for="zip">PIN Code *</label>
                            <input type="text" id="zip" required>
                        </div>
                        <div class="form-group">
                            <label for="country">Country *</label>
                            <select id="country" required>
                                <option value="">Select Country</option>
                                <option value="India">India</option>
                                <option value="USA">USA</option>
                                <option value="UK">UK</option>
                                <!-- Add more countries as needed -->
                            </select>
                        </div>
                    </form>
                </div>
            </div>
            
            <div class="order-summary">
                <div class="order-summary-card">
                    <h2 class="section-title">Your Order</h2>
                    <div id="orderItems">
                        <!-- Order items will be loaded here by JavaScript -->
                    </div>
                </div>
                
                <div class="order-summary-card">
                    <h2 class="section-title">Payment Method</h2>
                    <div class="payment-methods">
                        <div class="payment-method">
                            <input type="radio" id="cod" name="payment" value="cod" checked>
                            <label for="cod">
                                <i class="fas fa-money-bill-wave payment-icon"></i>
                                Cash on Delivery
                            </label>
                        </div>
                        <div class="payment-method">
                            <input type="radio" id="card" name="payment" value="card">
                            <label for="card">
                                <i class="far fa-credit-card payment-icon"></i>
                                Credit/Debit Card
                            </label>
                        </div>
                        <div class="payment-method">
                            <input type="radio" id="upi" name="payment" value="upi">
                            <label for="upi">
                                <i class="fas fa-mobile-alt payment-icon"></i>
                                UPI Payment
                            </label>
                        </div>
                        <div class="payment-method">
                            <input type="radio" id="netbanking" name="payment" value="netbanking">
                            <label for="netbanking">
                                <i class="fas fa-university payment-icon"></i>
                                Net Banking
                            </label>
                        </div>
                    </div>
                    
                    <button class="place-order-btn" onclick="placeOrder()">PLACE ORDER</button>
                </div>
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
        // Load cart from localStorage
        let cart = JSON.parse(localStorage.getItem('cart')) || [];
        
        // Function to render order summary
        function renderOrderSummary() {
            const orderItems = document.getElementById('orderItems');
            
            if (cart.length === 0) {
                orderItems.innerHTML = '<p>Your cart is empty</p>';
                return;
            }
            
            let itemsHTML = '';
            let subtotal = 0;
            
            cart.forEach(item => {
                const itemTotal = item.price * item.quantity;
                subtotal += itemTotal;
                
                itemsHTML += `
                    <div class="order-item">
                        <span>${item.name} × ${item.quantity}</span>
                        <span>₹${itemTotal.toFixed(2)}</span>
                    </div>
                `;
            });
            
            orderItems.innerHTML = `
                ${itemsHTML}
                <div class="order-total">
                    <span>Total</span>
                    <span>₹${subtotal.toFixed(2)}</span>
                </div>
            `;
        }
        
        // Function to place order
        function placeOrder() {
            // Validate form
            const firstName = document.getElementById('firstName').value;
            const lastName = document.getElementById('lastName').value;
            const phone = document.getElementById('phone').value;
            const address = document.getElementById('address').value;
            const city = document.getElementById('city').value;
            const state = document.getElementById('state').value;
            const zip = document.getElementById('zip').value;
            const country = document.getElementById('country').value;
            
            if (!firstName || !lastName || !phone || !address || !city || !state || !zip || !country) {
                alert('Please fill in all required fields');
                return;
            }
            
            // Get selected payment method
            const paymentMethod = document.querySelector('input[name="payment"]:checked').value;
            
            // In a real application, you would send the order to your server here
            alert(`Order placed successfully with ${getPaymentMethodName(paymentMethod)}!`);
            
            // Clear cart
            localStorage.removeItem('cart');
            
            // Redirect to thank you page or home page
            window.location.href = 'thankyou.php';
        }
        
        // Helper function to get payment method name
        function getPaymentMethodName(method) {
            const methods = {
                'cod': 'Cash on Delivery',
                'card': 'Credit/Debit Card',
                'upi': 'UPI Payment',
                'netbanking': 'Net Banking'
            };
            return methods[method] || method;
        }
        
        // Initialize order summary on page load
        renderOrderSummary();
        
        // Get the button element
const profileButton = document.getElementById('profileButton');
        
        // Add click event listener
        profileButton.addEventListener('click', function() {
            // Replace 'profile.html' with the page you want to open
            window.location.href = 'user_profile.php';
            
            // Alternatively, you can use window.open() to open in a new tab/window
            // window.open('login.html', '_self');
        });
    </script>   
</body>
</html>
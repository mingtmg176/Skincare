<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Feedback - Nurture & Nourish</title>
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
    /* Navbar Styles */
    :root {
      --primary-color: #b35d5d;
      --background-color: #fffaf5;
      --text-color: #4e2f2f;
      --hover-bg: #fcdede;
    }
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }
    body {
      background: var(--background-color);
      color: var(--text-color);
      animation: slideIn 1s ease;
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
    @keyframes slideIn {
      from { opacity: 0; transform: translateY(50px); }
      to { opacity: 1; transform: translateY(0); }
    }
    @media (max-width: 768px) {
      header {
        flex-direction: column;
        align-items: flex-start;
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

    /* Contact Form Styles */
    .contact-info {
  margin-top: 15px;
  background-color: var(--hover-bg);
  padding: 15px;
  border-radius: 10px;
  color: var(--text-color);
  box-shadow: 0 2px 8px rgba(179, 93, 93, 0.1);
}

.contact-info p {
  margin: 8px 0;
  font-size: 16px;
}

.contact-info a {
  color: var(--primary-color);
  text-decoration: none;
  font-weight: bold;
}

.contact-info a:hover {
  text-decoration: underline;
}

   /* Feedback Form Styles (Updated to match Navbar Theme) */
.container {
  width: 80%;
  margin: 30px auto;
  background-color: var(--background-color);
  padding: 20px;
  border-radius: 15px;
  box-shadow: 0 4px 12px rgba(179, 93, 93, 0.2);
}

h2 {
  color: var(--primary-color);
  text-align: center;
  margin-bottom: 20px;
}

.feedback-section {
  margin: 20px 0;
}

label {
  font-weight: bold;
  color: var(--text-color);
}

.answer {
  margin: 10px 0;
  color: var(--text-color);
}

input[type="radio"] {
  margin-right: 10px;
}

textarea, input[type="text"] {
  width: 100%;
  padding: 10px;
  margin: 10px 0;
  border: 1px solid #d6b5b5;
  border-radius: 10px;
  background-color: #fff;
  color: var(--text-color);
}

textarea:focus, input[type="text"]:focus {
  outline: none;
  border-color: var(--primary-color);
  background-color: var(--hover-bg);
}

input[type="submit"] {
  background-color: var(--primary-color);
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 25px;
  cursor: pointer;
  font-size: 16px;
  margin-top: 20px;
  display: block;
  width: 100%;
  transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
  background-color: #a14e4e;
}

.feedback-section:nth-child(odd) {
  background-color: var(--hover-bg);
  padding: 15px;
  border-radius: 10px;
}

.faq-section {
  margin-top: 30px;
}

.faq-question {
  font-size: 18px;
  font-weight: bold;
  color: var(--primary-color);
  margin-bottom: 10px;
}

.faq-answer {
  color: var(--text-color);
  margin-bottom: 20px;
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

<!-- Feedback Form -->
<div class="container">
  <h2>We Value Your Feedback!</h2>

    <!-- Feedback Questions -->
    <form action="submit_feedback.php" method="POST">
        <div class="feedback-section">
            <label for="question1">1. How satisfied are you with our skincare products?</label>
            <div class="answer">
                <input type="radio" name="question1" value="Very Satisfied"> Very Satisfied<br>
                <input type="radio" name="question1" value="Satisfied"> Satisfied<br>
                <input type="radio" name="question1" value="Neutral"> Neutral<br>
                <input type="radio" name="question1" value="Dissatisfied"> Dissatisfied<br>
                <input type="radio" name="question1" value="Very Dissatisfied"> Very Dissatisfied
            </div>
        </div>

        <div class="feedback-section">
            <label for="question2">2. How can we improve our products?</label>
            <textarea name="question2" rows="4" placeholder="Your suggestions..."></textarea>
        </div>

        <div class="feedback-section">
            <label for="question3">3. Would you recommend our products to others?</label>
            <div class="answer">
                <input type="radio" name="question3" value="Yes"> Yes<br>
                <input type="radio" name="question3" value="No"> No
            </div>
        </div>

        <!-- Newly Added Questions -->
        <div class="feedback-section">
            <label for="question4">4. How can I better support the team's mission?</label>
            <textarea name="question4" rows="4" placeholder="Your thoughts..."></textarea>
        </div>

        <div class="feedback-section">
            <label for="question5">5. What skills should I develop to improve my work performance?</label>
            <textarea name="question5" rows="4" placeholder="Your suggestions..."></textarea>
        </div>

        <div class="feedback-section">
            <label for="question6">6. What areas could I improve upon?</label>
            <textarea name="question6" rows="4" placeholder="Your ideas..."></textarea>
        </div>

        <div class="feedback-section">
            <label for="question7">7. How would you describe my communication style, and is there anything I could do to improve it?</label>
            <textarea name="question7" rows="4" placeholder="Your feedback..."></textarea>
        </div>

        <div class="feedback-section">
            <label for="question8">8. Do you feel that I support the team effectively? If not, how could I improve?</label>
            <textarea name="question8" rows="4" placeholder="Your comments..."></textarea>
        </div>

        <div class="faq-section">
            <div class="faq-question">Frequently Asked Questions:</div>
            <div class="faq-answer">
                <p><strong>Q: How do I place an order?</strong></p>
                <p>A: You can place an order by visiting our online store and selecting your desired products.</p>
            </div>
            <div class="faq-answer">
                <p><strong>Q: What payment methods do you accept?</strong></p>
                <p>A: We accept credit/debit cards, Phonepe,Gpay, and bank transfers.</p>
            </div>
            <div class="faq-answer">
                <p><strong>Q: What is your company’s purpose?</strong></p>
                <p>A: Our purpose is to promote healthy, glowing skin through natural and effective skincare solutions.</p>
            </div>
            <div class="faq-answer">
                <p><strong>Q: What products or services do you offer?</strong></p>
                <p>A: We offer a range of skincare products including cleansers, moisturizers, serums, and sunscreens.</p>
            </div>
            <div class="faq-answer">
                <p><strong>Q: Where are you located?</strong></p>
                <p>A: We are headquartered in Bangaluru City, INDIA, but we ship worldwide.</p>
            </div>
            <div class="faq-answer">
                <p><strong>Q: How do users contact customer service or support?</strong></p>
                <p>A: Users can contact customer support through our Contact Us section or by emailing support@nurturenourish.com.</p>
            </div>
            <div class="faq-answer">
                <p><strong>Q: How can users upgrade their account?</strong></p>
                <p>A: Users can upgrade their accounts by visiting the Account Settings page and selecting the Upgrade option.</p>
            </div>
            <div class="faq-answer">
                <p><strong>Q: How do users contact sales?</strong></p>
                <p>A: Users can contact our sales team by emailing support@nurturenourish.com.</p>
            </div>
            <div class="faq-answer">
                <p><strong>Q: How do users change or reset password?</strong></p>
                <p>A: Users can change or reset their password by clicking on "Forgot Password" on the login page and following the instructions.</p>
            </div>
            <div class="faq-answer">
                <p><strong>Q: How do users check the status of an order?</strong></p>
                <p>A: Users can check their order status by logging into their account and visiting the "My Orders" section.</p>
            </div>
        </div>

        <div class="feedback-section">
            <label for="question9">Any additional comments or feedback?</label>
            <textarea name="question9" rows="6" placeholder="Your feedback..."></textarea>
        </div>

        <h2>Contact Us!</h2>
        <h3>For any queries reach out to us through...</h3>

<div class="contact-info">
    <p><strong>Email:</strong> <a href="mailto:Nurture&Nourish@gmail.com">Nurture&Nourish@gmail.com</a></p>
    <p><strong>Email:</strong> <a href="mailto:Nurture&Nourish_support@gmail.com">Nurture&Nourish_support@gmail.com</a></p>
    <p><strong>Insta:</strong> <a href="https://www.instagram.com/Nurture&Nourish_Official" target="_blank">Nurture&Nourish_Official</a></p>

</div>
<input type="submit" value="Submit Feedback">
</form>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
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
  });

  // Get the button element
  const profileButton = document.getElementById('profileButton');
        
        // Add click event listener
        profileButton.addEventListener('click', function() {
            // Replace 'profile.html' with the page you want to open
            window.location.href = 'user_profile.php';
            
            // Alternatively, you can use window.open() to open in a new tab/window
            // window.open('login.php', '_self');
        });
</script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nurture&Nourish</title>
  <link rel="stylesheet" href="path/to/bootstrap.min.css">
  <script src="path/to/bootstrap.bundle.min.js"></script>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      display:inherit;
      animation: slideIn 1s ease;
      background: #fffaf5;
      color: #4e2f2f;
    }

    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 50px;
      background: #fcebea;
      position: relative;
    }

    .logo {
      font-size: 30px;
      font-weight: bold;
      color: #b35d5d;
    }

    nav {
      display: flex;
      align-items: center;
      gap: 25px;
    }

    nav a {
      padding:12px;
      text-decoration: none;
      color: #4e2f2f;
    }
    nav > a:hover{
      color:#b35d5d;
    }


    .utilities {
      display: flex;
      align-items: center;
      gap: 20px;
    }

    .utilities input[type="text"] {
      padding: 5px 10px;
      border: 1px solid #ccc;
      border-radius: 20px;
    }

    .utilities button {
      background: #b35d5d;
      color: white;
      padding: 5px 15px;
      border: none;
      border-radius: 20px;
      cursor: pointer;
    }

    .sidebar {
      position: fixed;
      left: 0;
      top: 0;
      height: 100vh;
      width: 180px;
      background: #fcdede;
      padding: 20px;
    }

    .sidebar h4 {
      margin-bottom: 20px;
    }

    .sidebar ul {
      list-style: none;
    }

    .sidebar ul li {
      margin: 15px 0;
      font-weight: 500;
    }


    @media (max-width: 768px) {
      header {
        flex-direction: column;
        align-items: flex-start;
      }
    }

    svg {
      width: 45px;
      height: 45px;
      fill: #b35d5d;
      background-color: transparent;
      padding: 8px;
      border-radius: 50%;
      transition: background-color 0.3s ease, fill 0.3s ease;
      cursor: pointer;
    }

    svg:hover {
      fill:#fffaf5; /* icon color on hover */
      background-color:#b35d5d; /* background on hover */
    }

.dropdown{                             /* Product dropdown */
  position: relative;
  display: inline-block;
}
.dropdown > a:hover{
  color:#b35d5d;
}

.content {
  display: block;
  opacity: 0;
  visibility: hidden;
  transform: translateY(10px);
  transition: all 0.3s ease;
  position: absolute;
  background-color: #fffaf5;
  min-width: 160px;
  box-shadow: 0px 8px 16px rgba(0,0,0,0.1);
  z-index: 1;
  border-radius: 8px;
}
.content a {
  color: #4e2f2f;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  transition: background-color 0.2s;
}

.content a:hover {
    background-color: #fcdede;
    border-radius: 10px;
}
.dropdown:hover .content {
  opacity: 1;
  visibility: visible;
  transform: translateY(0);
}

.account-dropdown {
  padding:5px;
  position: relative;
  display: inline-block;
  background-color:#b35d5d;
  color:#fffaf5;
  border-radius:10px;
}
/* Dropdown content (hidden by default) */
.account-dropdown-content {                 
  display: none;
  position: absolute;
  background-color: #fffaf5;
  min-width: 160px;
  box-shadow: 0 8px 16px rgba(0,0,0,0.15);
  z-index: 1;
  border-radius: 10px;
  animation: fadeIn 0.3s ease-in-out;
}

/* Links inside the dropdown */
.account-dropdown-content a {
  color: #333;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  font-family: 'Segoe UI', sans-serif;
  transition: background-color 0.2s;
}

/* Hover effects */
.account-dropdown-content a:hover {
  background-color: #fcdede;
  border-radius: 10px;
}

/* Show the dropdown on hover */
.account-dropdown:hover .account-dropdown-content {
  opacity: 1;
  visibility: visible;
  transform: translateY(0);
  display: block;
  animation: fadeIn 0.3s ease-in-out;
}
@keyframes fadeIn 
{
  from {opacity: 0; transform: translateY(10px);}
  to {opacity: 1; transform: translateY(0);}
}

@keyframes slideIn 
{
  from {
    opacity: 0;
    transform: translateY(0px);
  }
  to {
    opacity: 1;
    transform: translateY(100);
  }
}


    /* SCROLL SECTIONS */
    .section {
      padding: 50px;
      font-size: 2rem;
      text-align: center;
      transition: all 1s ease;
      position: relative;
    }

    .slide-left {
      transform: translateX(-100px);
    }

    .slide-right {
      transform: translateX(100px);
    }

    .visible {
      opacity: 1;
      transform: translateX(0);
    }

    /* Animation Keyframes */
    @keyframes slideUp {
      from {
        opacity: 0;
        transform: translateY(100px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Responsive */
    @media (max-width: 768px) {

      .search-bar.active {
        width: 120px;
      }
    }
    .carousel-item img{
      height:550px;
      width:1800px;
    }

    .row{
      justify-content: center; 
      align-items:center;
      display:flex;
      gap:50px;
      
      white-space: nowrap;
      position: relative;
      animation: Loop 10s linear infinite ;
    }
    .row img{
      position: relative;
      border-radius:20px;
      height:300px;
      width:200px;
    }
    .card1 {
      justify-content: center;
      border-radius: 20px;
      padding: 20px;
      max-width: 600px;
      text-align: center;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .card1 a{
      text-decoration: none !important;
      color:black;
    }
    .card1 a:hover{
      text-decoration: none !important;
    }
    .card1:hover{
      transform: scale(1.1);
      transform: translateY(-10px) scale(1.05);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }


    .line-text {
      display: flex;
      align-items: center;
      text-align: center;
    }

    .line-text::before,
    .line-text::after {
      content: "";
      flex: 2;
      border-bottom: 5px solid #b35d5d; /* Adjust thickness here */
      margin: 0 15px; /* Space between line and text */
    }

    .line-text span {
      font-weight: bold;
      font-size: 30px;
    }

    /* Add or update this */
    #vid video {
      position: relative;
      width: 100%;
      width:1000;
      height: 300px;
      object-fit: cover;
      display: block;
    }

    .card-body{
      font-size:20px;
    }
    .card-reviews {
      margin-left:60px;
      border-radius: 20px;
      padding: 20px;
      max-width: 600px;
      text-align: center;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .card-reviews a{
      text-decoration: none !important;
      color:black;
    }
    .card-reviews a:hover{
      text-decoration: none !important;
      color:black;
    }
    .card-reviews:hover{
      transform: scale(1.1);
      transform: translateY(-10px) scale(1.05);
      box-shadow: 0 8px 9px rgba(0, 0, 0, 0.2);
    }

    
    .reviews{
      display:flex;
      gap:40px;
    }
    .reviews img{
      border-radius:20px;
      height:250px;
      width:200px;
    }


    .search-container {                         /*search */
      display: flex;
      align-items: center;
    }

    .search-bar {                                 /*search */
      padding: 5px 10px;
      border: 1px solid #ccc;
      border-radius: 20px;
      width: 0;
      opacity: 0;
      transition: all 0.3s ease;
    }

    .search-bar.active {                           /*search */
      width: 150px;
      opacity: 1;
      margin-right: 5px;
    }


    .review-rating {
            color: #ffc107;
            margin-bottom: 5px;
        }
        


/* Footer */
footer {
      padding: 20px;
      text-align: center;
      background-color: #4e2f2f;
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
      color: #fffaf5;
      text-decoration: none;
      text-transform: uppercase;
      font-size: 13px;
      letter-spacing: 1px;
      transition: color 0.2s;
    }

    .footer-links a:hover {
      color: #fcdede;
    }

    .social-icons {
      display: flex;
      justify-content: center;
      gap: 15px;
      margin: 20px;
    }

    .social-icons svg {
      fill:white;
      color: white;
      font-size: 30px;
      transition: transform 0.3s, color 0.3s;
    }

    .social-icons svg:hover {
      background-color: #4e2f2f;
      transform: translateY(-5px);
    }
    #insta svg{
      border-radius: 0px;
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
        
        .carousel-container {
            align-items: center;
            justify-content:center;
            width: 100%;
            position: relative;
            overflow: hidden;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            margin-bottom:5px;
        }
        
        .carousel {
            display: flex;
            transition: transform 0.7s cubic-bezier(0.645, 0.045, 0.355, 1);
        }
        
        .slide {
            flex: 0 0 100%;
            min-width: 100%;
            padding: 40px;
        }
        
        .card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            padding: 40px;
            text-align: center;
            max-width: 600px;
            margin: 0 auto;
            transition: all 0.3s ease;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.12);
        }
        
        .card img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
            border: 3px solid #4CAF50;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        
        .card h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: #2c3e50;
        }
        
        .position {
            color: #7f8c8d;
            font-size: 1rem;
            margin-bottom: 15px;
            font-weight: 500;
        }
        
        .rating {
            color: #ffc107;
            font-size: 1.4rem;
            margin-bottom: 20px;
            letter-spacing: 2px;
        }
        
        .card p {
            color: #555;
            line-height: 1.7;
            font-size: 1.05rem;
            font-style: italic;
        }
        
        .controls {
            position: absolute;
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
            z-index: 10;
            padding: 0 15px;
        }
        
        .controls button {
            background: #b35d5d;
            color: white;
            border: none;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            cursor: pointer;
            font-size: 1.3rem;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s;
            box-shadow: 0 3px 10px rgba(0,0,0,0.2);
        }
        
        .controls button:hover {
            background: #fffaf5;
            color:#b35d5d;
            transform: scale(1.1);
        }
        
        .indicators {
            display: flex;
            justify-content: center;
            margin-top: 10px;
            gap: 10px;
        }
        
        .indicator {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: #ddd;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .indicator.active {
            background: #b35d5d;
            transform: scale(1.2);
        }
        
        @media (max-width: 768px) {
            .slide {
                padding: 30px 20px;
            }
            
            .card {
                padding: 30px;
            }
            
            .controls button {
                width: 40px;
                height: 40px;
                font-size: 1.1rem;
            }
        }


  .row-container{
    width:100%;
    overflow:hidden;
    position: relative;
    text-align: center;
    padding:20px;
  }
  /* Animation Keyframes */
@keyframes Loop {
  0% {
    transform: translateX(0);
  }
  25% {
    transform: translateX(-30%); /* Move back to center */
  }
  50% {
    transform: translateX(0);
  }
  75% {
    transform: translateX(30%);
  }
  100% {
    transform: translateX(0);
  }
}

    .card2 {
      justify-content: center;
      border-radius: 20px;
      padding: 20px;
      max-width: 600px;
      text-align: center;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .card2 a{
      text-decoration: none !important;
      color:black;
    }
    .card2 a:hover{
      text-decoration: none !important;
      color:black;
    }
    .card2:hover{
      transform: translateY(-10px) scale(1.05);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }
    .top-container{
      width:100%;
      position: relative;
      text-align: center;
  }
    .top{
      justify-content: center; 
      align-items:center;
      display:flex;
      gap:50px;
      position: relative;
    }
    .top img{
      position: relative;
      border-radius:20px;
      height:300px;
      width:200px;
    }


      @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600&family=Montserrat:wght@300;400;500&display=swap');

        :root {
            --gold: #D4AF37;
            --rose-gold: #B76E79;
            --dark-gray: #333333;
            --medium-gray: #555555;
            --light-gray: #f8f8f8;
            --white: #ffffff;
            --transition: all 0.3s ease;
        }

        .offers-section {
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .section-header {
            text-align: center;
        }

        .section-header h2 {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            font-weight: 600;
            position: relative;
            display: inline-block;
        }

        .section-header h2::after {
            content: '';
            position: absolute;
            width: 50px;
            height: 3px;
            background: var(--rose-gold);
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
        }

        .offers-flex {
            display: flex;
            justify-content: center;
            gap: 40px;
        }

        .offer-card {
            background: var(--white);
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: var(--transition);
            padding: 30px;
            width: 350px;
            text-align: center;
        }

        .offer-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .offer-badge {
            background: var(--rose-gold);
            color: var(--white);
            padding: 5px 15px;
            font-size: 0.8rem;
            border-radius: 20px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
            display: inline-block;
            margin-bottom: 15px;
        }

        .offer-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.8rem;
            margin-bottom: 15px;
            color: var(--dark-gray);
        }

        .offer-price {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 20px 0;
            flex-wrap: wrap;
            gap: 10px;
        }

        .current-price {
            font-size: 2rem;
            font-weight: 600;
            color: var(--rose-gold);
        }

        .original-price {
            text-decoration: line-through;
            color: var(--medium-gray);
            font-size: 1.2rem;
        }

        .discount-percent {
            background: #f0e6e8;
            color: var(--rose-gold);
            padding: 5px 10px;
            border-radius: 4px;
            font-size: 1rem;
            font-weight: 600;
        }

        .bundle-offer {
            background: #f9f5f7;
            border-radius: 6px;
            padding: 35px;
            font-size: 1rem;
            line-height: 1.6;
        }

        .bundle-highlight {
            color: var(--rose-gold);
            font-weight: 600;
        }

        .offer-cta {
            display: block;
            width: 100%;
            padding: 15px;
            background: var(--dark-gray);
            color: var(--white);
            border: none;
            border-radius: 4px;
            font-size: 1rem;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
            cursor: pointer;
            transition: var(--transition);
            margin-top: 20px;
        }

        .offer-cta:hover {
            background: var(--rose-gold);
        }

        .promo-code {
            background: var(--gold);
            color: var(--dark-gray);
            padding: 5px 10px;
            border-radius: 4px;
            font-weight: 600;
            display: inline-block;
            margin-top: 10px;
        }

        @media (max-width: 768px) {
            .offers-section {
                padding: 50px 20px;
            }
            
            .offer-card {
                width: 100%;
                max-width: 400px;
            }
        }


        .section-header {
            text-align: center;
            margin-bottom: 60px;
            position: relative;
        }

        .section-title {
            font-family: 'Playfair Display', serif;
            font-size: 2.8rem;
            font-weight: 600;
            position: relative;
            display: inline-block;
        }

        .section-title::after {
            content: '';
            position: absolute;
            width: 80px;
            height: 4px;
            background: var(--rose-gold);
            bottom: -12px;
            left: 50%;
            transform: translateX(-50%);
        }

        .section-subtitle {
            font-size: 1.2rem;
            color: var(--medium-gray);
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
        }


        .reviews-header {
            text-align: center;
            max-width: 1200px;
            margin: 0 auto;
            position: relative;
            padding: 0 20px;
        }

        .reviews-title {
            font-family: 'Playfair Display', serif;
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 20px;
            position: relative;
            display: inline-block;
            color: var(--dark-gray);
            letter-spacing: 1px;
        }

        .reviews-title::before,
        .reviews-title::after {
            content: '';
            position: absolute;
            width: 50px;
            height: 2px;
            background: var(--gold);
            top: 50%;
        }

        .reviews-title::before {
            left: -70px;
        }

        .reviews-title::after {
            right: -70px;
        }

        .reviews-subtitle {
            font-size: 1.2rem;
            color: var(--medium-gray);
            max-width: 700px;
            margin: 0 auto;
            line-height: 1.7;
            font-weight: 300;
        }

        .stars {
            color: var(--gold);
            font-size: 1.5rem;
            letter-spacing: 5px;
        }

        .review-count {
            font-size: 0.9rem;
            color: var(--medium-gray);
            font-weight: 300;
            margin-bottom:5px;
        }


/* === HEADER STYLES === */
.section-header {
  text-align: center;
  margin-bottom: 60px;
  position: relative;
}

.section-title {
  font-family: 'Playfair Display', serif;
  font-size: 2.8rem;
  font-weight: 700;
  color: #1a1a1a;
  margin-bottom: 15px;
  letter-spacing: -0.5px;
  position: relative;
  display: inline-block;
}

.section-title::after {
  content: "";
  position: absolute;
  left: 50%;
  bottom: -12px;
  width: 80px;
  height: 3px;
  background: #8b6b4a; /* Earthy tone for skincare */
  transform: translateX(-50%);
  transition: width 0.3s ease;
}

.section-title:hover::after {
  width: 120px;
}

.section-subtitle {
  font-family: 'Montserrat', sans-serif;
  font-size: 1.1rem;
  color: black;
  letter-spacing: 0.8px;
  text-transform: uppercase;
  font-weight: 400;
}

/* === CONTENT STYLES === */

/* === FOUNDERS STYLES === */
.founders-heading {
  font-family: 'Playfair Display', serif;
  font-size: 1.8rem;
  color: #333;
  margin-bottom: 40px;
  text-align: center;
  position: relative;
}

.founders-heading::after {
  content: "";
  position: absolute;
  left: 50%;
  bottom: -10px;
  width: 60px;
  height: 2px;
  background: #8b6b4a;
  transform: translateX(-50%);
}

.founders-container {
  display: flex;
  justify-content: center;
  gap: 40px;
  margin: 50px 0;
}

.founder-column {
  text-align: center;
  flex: 1;
  max-width: 250px;
  transition: transform 0.3s ease;
}

.founder-column:hover {
  transform: translateY(-5px);
}

.founder-name {
  font-family: 'Montserrat', sans-serif;
  font-size: 1.3rem;
  font-weight: 600;
  color: #1a1a1a;
  margin-bottom: 8px;
  position: relative;
  display: inline-block;
}

.founder-name::after {
  content: "";
  position: absolute;
  left: 0;
  bottom: -3px;
  width: 0;
  height: 1px;
  background: #b35d5d;
  transition: width 0.3s ease;
}

.founder-column:hover .founder-name::after {
  width: 100%;
}

.founder-title {
  font-family: 'Montserrat', sans-serif;
  font-size: 0.85rem;
  color: #b35d5d;
  letter-spacing: 1.5px;
  text-transform: uppercase;
  margin-bottom: 15px;
  font-weight: 500;
}

/* === DETAILS SECTION === */
.founder-details {
  background: #fff;
  padding: 40px;
  border-radius: 8px;
  box-shadow: 0 10px 30px rgba(0,0,0,0.05);
  margin-top: 40px;
  border: 1px solid #f0f0f0;
}

.expertise-list {
  list-style: none;
  padding: 0;
  margin-top: 30px;
}

.expertise-list li {
  margin-bottom: 20px;
  padding-left: 30px;
  position: relative;
  font-family: 'Lora', serif;
  font-size: 1.05rem;
  line-height: 1.8;
  color: #555;
}

.expertise-list li::before {
  content: "•";
  color: #8b6b4a;
  font-size: 1.5rem;
  position: absolute;
  left: 5px;
  top: -3px;
}

.expertise-list strong {
  color: #333;
  font-weight: 600;
  font-family: 'Montserrat', sans-serif;
}

@media (max-width: 768px) {
  .section-title {
    font-size: 2.2rem;
  }
  
  .section-subtitle {
    font-size: 1rem;
  }
}



.container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 60px 30px;
      overflow-x: hidden;
    }
    
    /* ANIMATION STYLES */
    .subsection {
      opacity: 0;
      transform: translateX(-50px);
      transition: all 0.8s cubic-bezier(0.22, 1, 0.36, 1);
      margin-bottom: 100px;
    }
    
    .subsection.visible {
      opacity: 1;
      transform: translateX(0);
    }
    
    /* CONTENT STYLES */
    .subsection p {
      font-size: 1.1rem;
      line-height: 1.9;
      color: #444;
      margin-bottom: 25px;
    }
    
    /* CRITERIA LIST */
    .criteria-list {
      list-style: none;
      padding: 0;
      margin: 40px 0;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 25px;
    }
    
    .criteria-list li {
      background: #fff;
      padding: 25px;
      border-radius: 5px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.03);
      border-left: 3px solid #b35d5d;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .criteria-list li:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0,0,0,0.08);
    }
    
    .criteria-list strong {
      display: block;
      font-family: 'Montserrat', sans-serif;
      font-size: 1rem;
      color: #b35d5d;
      letter-spacing: 0.5px;
      margin-bottom: 8px;
    }
    
    /* FOUNDERS SECTION */
    .founders-heading {
      font-family: 'Playfair Display', serif;
      font-size: 1.8rem;
      color: #333;
      margin-bottom: 40px;
      text-align: center;
      position: relative;
    }
    
    .founders-heading::after {
      content: "";
      position: absolute;
      left: 50%;
      bottom: -10px;
      width: 60px;
      height: 2px;
      background: #8b6b4a;
      transform: translateX(-50%);
    }
    
    .founders-container {
      display: flex;
      justify-content: center;
      gap: 40px;
      margin: 50px 0;
    }
    
    .founder-column {
      text-align: center;
      flex: 1;
      max-width: 250px;
      transition: transform 0.3s ease;
    }
    
    .founder-column:hover {
      transform: translateY(-5px);
    }
    
    .founder-name {
      font-family: 'Montserrat', sans-serif;
      font-size: 1.3rem;
      font-weight: 600;
      color: #1a1a1a;
      margin-bottom: 8px;
      position: relative;
      display: inline-block;
    }
    
    .founder-name::after {
      content: "";
      position: absolute;
      left: 0;
      bottom: -3px;
      width: 0;
      height: 1px;
      background: #b35d5d;
      transition: width 0.3s ease;
    }
    
    .founder-column:hover .founder-name::after {
      width: 100%;
    }
    
    .founder-title {
      font-family: 'Montserrat', sans-serif;
      font-size: 0.85rem;
      color: #b35d5d;
      letter-spacing: 1.5px;
      text-transform: uppercase;
      margin-bottom: 15px;
      font-weight: 500;
    }
    
    /* MISSION STATEMENT */
    .mission-statement {
      text-align: center;
      background: #b35d5d;
      padding: 30px;
      border-radius: 10px;
      margin-top: 40px;
      position: relative;
    }
    
    .mission-statement h4 {
      font-family: 'Montserrat', sans-serif;
      font-size: 1.1rem;
      color: #fff;
      margin-bottom: 15px;
      letter-spacing: 1px;
      text-transform: uppercase;
    }
    
    .mission-statement p {
      font-family: 'Playfair Display', serif;
      font-size: 1.3rem;
      color: #fff;
      line-height: 1.7;
      font-style: italic;
      position: relative;
      z-index: 1;
      margin-bottom: 0;
    }
    
    /* RESPONSIVE STYLES */
    @media (max-width: 992px) {
      .founders-container {
        flex-wrap: wrap;
      }
      
      .founder-column {
        min-width: 200px;
        margin-bottom: 30px;
      }
    }
    
    @media (max-width: 768px) {
      .container {
        padding: 40px 20px;
      }
      
      .criteria-list {
        grid-template-columns: 1fr;
      }
      
      .subsection {
        margin-bottom: 70px;
      }
      
      .founders-heading {
        font-size: 1.5rem;
      }
      
      .mission-statement p {
        font-size: 1.1rem;
      }
    }
  </style>
</head>
<body>

  <!-- HEADER -->
  <header>
    <div class="logo">Nurture & Nourish</div>
      <nav>
        <a href="home.php">Home</a>
        <a href="products.php">Products</a>
        <a href="#offer">Offers</a>
        <a href="#about">About Us</a>
        <a href="user_login.php">Contact</a>
    </div>
    </div>
  
</nav>
    <div class="utilities">
    <div class="search-container">
      <input type="text" class="search-bar" placeholder="Search products..." aria-label="Search" />
      <svg id="search-icon" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Search Icon" viewBox="0 0 16 16">
        <title>Search</title>
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
      </svg>
    </div>
<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="white" class="bi bi-bell-fill" viewBox="0 0 16 16">
    <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2m.995-14.901a1 1 0 1 0-1.99 0A5 5 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901"/>
    </svg>
    <div class="account-dropdown" style="margin-left: 20px;">
  <button style="background: none; border: none; font-size: 16px; cursor: pointer; font-weight: bold;">SIGNUP</button>
    <div class="account-dropdown-content">
    <a href="user_login.php">USER</a>
    <a href="admin_login.php">ADMIN</a>
  </div>
</div>
    </div>
</header>

    <div id="vid">
    <video autoplay loop muted src="pics/vid.mp4"></video>
    <div>
   <!-- SCROLL SECTIONS -->
    <div class="section slide-left">
      <div class="reviews-header">
            <h2 class="reviews-title">EXPERT'S CHOICE</h2>
            <p class="reviews-subtitle">Curated selection of skincare essentials recommended by dermatologists and beauty experts</p>
      </div>
      <div class="row-container">
        <div class="row">
          <!-- Card 1 -->
          <div class="col-md-4 mb-4">
            <div class="card1">
              <img src="pics/product.jpg" class="card-img-top" alt="Product Image">
              <div class="card-body">
                <div class="stars">★★★★★</div>
                <div class="review-count">4.9/5 from 12,870 reviews</div>
                <h6 class="card-title"><a href="#">Aqua Logia Glow+ Sunscreen</a></h6>
                <p class="card-text">₹999/-</p>
              </div>
            </div>
          </div>
          
          <!-- Cart 2 -->
          <div class="col-md-4 mb-4">
            <div class="card1">
              <img src="pics/product1.jpg" class="card-img-top" alt="Product Image">
              <div class="card-body">
                <div class="stars">★★★★★</div>
                <div class="review-count">4.9/5 from 12,870 reviews</div>
                <h6 class="card-title"><a href="#">ANUA Niacinamide Serum</a></h6>
                <p class="card-text">₹1999/-</p>
              </div>
            </div>
          </div>
          
          <!-- Cart 3 -->
          <div class="col-md-4 mb-4">
            <div class="card1">
              <img src="pics/product2.jpg" class="card-img-top" alt="Product Image">
              <div class="card-body">
                <div class="stars">★★★★★</div>
                <div class="review-count">4.9/5 from 12,870 reviews</div>
                <h6 class="card-title"><a href="#">Medicube Collagen Night Mask</a></h6>
                <p class="card-text">₹1499/-</p>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-4">
            <div class="card1">
              <img src="pics/product3.jpg" class="card-img-top" alt="Product Image">
              <div class="card-body">
                <div class="stars">★★★★★</div>
                <div class="review-count">4.9/5 from 12,870 reviews</div>
                <h6 class="card-title"><a href="#">Laneige Grapefruit Sleeping Mask</a></h6>
                <p class="card-text">₹1299/-</p>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-4">
            <div class="card1">
              <img src="pics/product4.jpg" class="card-img-top" alt="Product Image">
              <div class="card-body">
                <div class="stars">★★★★★</div>
                <div class="review-count">4.9/5 from 12,870 reviews</div>
                <h6 class="card-title"><a href="#">Laneige Water Bank Sleeping Mask</a></h6>
                <p class="card-text">₹1299/-</p>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-4">
            <div class="card1">
              <img src="pics/product5.jpg" class="card-img-top" alt="Product Image">
              <div class="card-body">
                <div class="stars">★★★★★</div>
                <div class="review-count">4.9/5 from 12,870 reviews</div>
                <h6 class="card-title"><a href="#">I'm From Rice Toner</a></h6>
                <p class="card-text">₹1999/-</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

      <div class="section slide-right">
        <div class="reviews-header">
            <h2 class="reviews-title">OUR TOP PRODUCTS</h2>
            <p class="reviews-subtitle">Discover our customer favorites and best-selling skincare essentials</p>
        </div>
        <div class="section slide-left">
          <div class="top-container">
            <div class="top">
              <!-- Card 1 -->
              <div class="col-md-4 mb-4">
                <div class="card2">
                  <img src="pics/top.jpg" class="card-img-top" alt="Product Image">
                  <div class="card-body">
                    <div class="stars">★★★★★</div>
                    <div class="review-count">4.9/5 from 12,870 reviews</div>
                    <h5 class="card-title"><a href="#">SKIN1004 Madagascar<br>Centella Toner</a></h5>
                    <p class="card-text">₹1299/-</p>
                  </div>
                </div>
              </div>
            
              <!-- Cart 2 -->
              <div class="col-md-4 mb-4">
                <div class="card2">
                  <img src="pics/top1.jpg" class="card-img-top" alt="Product Image">
                  <div class="card-body">
                    <div class="stars">★★★★★</div>
                    <div class="review-count">4.9/5 from 12,870 reviews</div>
                    <h5 class="card-title"><a href="#">Indirescence Rose Glow<br>Purifying Cleanser</a></h5>
                    <p class="card-text">₹1499/-</p>
                  </div>
                </div>
              </div>
            
              <!-- Cart 3 -->
              <div class="col-md-4 mb-4">
                <div class="card2">
                  <img src="pics/product4.jpg" class="card-img-top" alt="Product Image">
                  <div class="card-body">
                    <div class="stars">★★★★★</div>
                    <div class="review-count">4.9/5 from 12,870 reviews</div>
                    <h5 class="card-title"><a href="#">Laneige Water Bank<br>Sleeping Mask</a></h5>
                    <p class="card-text">₹1299/-</p>
                  </div>
                </div>
              </div>
              <!-- Card 4 -->
              <div class="col-md-4 mb-4">
                <div class="card2">
                  <img src="pics/sun1.jpg" class="card-img-top" alt="Product Image">
                  <div class="card-body">
                    <div class="stars">★★★★★</div>
                    <div class="review-count">4.9/5 from 12,870 reviews</div>
                    <h5 class="card-title"><a href="#">AHC Natural Perfection<br>Sun Cream SPF50+</a></h5>
                    <p class="card-text">₹1299/-</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="top">
              <!-- Card 1 -->
              <div class="col-md-4 mb-4">
                <div class="card2">
                  <img src="pics/top4.jpg" class="card-img-top" alt="Product Image">
                  <div class="card-body">
                    <div class="stars">★★★★★</div>
                    <div class="review-count">4.9/5 from 12,870 reviews</div>
                    <h5 class="card-title"><a href="#">Super Rich Coconut<br>Whitening Cream</a></h5>
                    <p class="card-text">₹1249/-</p>
                  </div>
                </div>
              </div>
            
              <!-- Cart 2 -->
              <div class="col-md-4 mb-4">
                <div class="card2">
                  <img src="pics/top5.jpg" class="card-img-top" alt="Product Image">
                  <div class="card-body">
                    <div class="stars">★★★★★</div>
                    <div class="review-count">4.9/5 from 12,870 reviews</div>
                    <h5 class="card-title"><a href="#">Youth to the People<br>Superfood Cleanser</a></h5>
                    <p class="card-text">₹1599/-</p>
                  </div>
                </div>
              </div>
            
              <!-- Cart 3 -->
              <div class="col-md-4 mb-4">
                <div class="card2">
                  <img src="pics/top6.jpg" class="card-img-top" alt="Product Image">
                  <div class="card-body">
                    <div class="stars">★★★★★</div>
                    <div class="review-count">4.9/5 from 12,870 reviews</div>
                    <h5 class="card-title"><a href="#">Alua Peach to<br>Niacin Serum</a></h5>
                    <p class="card-text">₹1299/-</p>
                  </div>
                </div>
              </div>
              <!-- Card 4 -->
              <div class="col-md-4 mb-4">
                <div class="card2">
                  <img src="pics/top7.jpg" class="card-img-top" alt="Product Image">
                  <div class="card-body">
                    <div class="stars">★★★★★</div>
                    <div class="review-count">4.9/5 from 12,870 reviews</div>
                    <h5 class="card-title"><a href="#">Beauty of Joseon Relief<br>Sun : Rice + Probiotics</a></h5>
                    <p class="card-text">₹1499/-</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
   
   
      <div class="section slide-left" id=offer>
        <div class="reviews-header">
            <h1 class="reviews-title">OFFERS</h1>
            <p class="reviews-subtitle">Limited-time offers for radiant, healthy skin</p>
        </div>
        <div class="offers-flex">
            <!-- Offer 1 -->
            <div class="offer-card">
                <div class="offer-badge">Early Bird Special</div>
                <h3 class="offer-title">PRODUCTS</h3>
                
                <div class="offer-price">
                    <span class="current-price">₹599</span>
                    <span class="original-price">₹699</span>
                    <span class="discount-percent">15% OFF</span>
                </div>
                
                <div class="bundle-offer">
                    <div class="bundle-highlight">BUY ANY 2 GET 1 FREE</div>
                    <div>Use code: <span class="promo-code">B4U2</span></div>
                </div>
                
                <button class="offer-cta">Shop Now</button>
            </div>

            <!-- Offer 2 -->
            <div class="offer-card">
                <div class="offer-badge">Bundle Deal</div>
                <h3 class="offer-title">SLOW NEUTR</h3>
                
                <div class="offer-price">
                    <span class="current-price">₹799</span>
                    <span class="original-price">₹999</span>
                    <span class="discount-percent">20% OFF</span>
                </div>
                
                <div class="bundle-offer">
                    <div><span class="bundle-highlight">BUY 2:</span> ₹799</div>
                    <div><span class="bundle-highlight">BUY 3:</span> ₹1149</div>
                </div>
                
                <button class="offer-cta">Shop Now</button>
            </div>

            <!-- Offer 3 -->
            <div class="offer-card">
                <div class="offer-badge">Best Value</div>
                <h3 class="offer-title">COMPLETE SET</h3>
                
                <div class="offer-price">
                    <span class="current-price">₹1799</span>
                    <span class="original-price">₹2299</span>
                    <span class="discount-percent">22% OFF</span>
                </div>
                
                <div class="bundle-offer">
                    <div class="bundle-highlight">Includes:</div>
                    <div>• ELIXIR Serum (50ml)</div>
                    <div>• Slow NEUTR (30ml)</div>
                    <div>• Free Travel Kit</div>
                </div>
                
                <button class="offer-cta">Shop Now</button>
            </div>
        </div>
      </div>
   


<div class="section slide-right">
<div class="reviews-header">
        <h1 class="reviews-title">REVIEWS</h1>
        <p class="reviews-subtitle">Hear what our customers say about our premium skincare products</p>
        <div class="stars-container">
            <div class="stars">★★★★★</div>
            <div class="review-count">4.9/5 from 12,870 reviews</div>
        </div>
    </div>
  
    <div class="carousel-container">
        <div class="carousel">
            <!-- Slide 1 -->
            <div class="slide">
                <div class="card">
                    <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Sarah Johnson">
                    <h3>Sarah Johnson</h3>
                    <div class="position">Marketing Director</div>
                    <div class="rating">★★★★★</div>
                    <p>"The team exceeded all our expectations. Their attention to detail and creative approach helped us achieve a 30% increase in customer engagement."</p>
                </div>
            </div>
            
            <!-- Slide 2 -->
            <div class="slide">
                <div class="card">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Michael Chen">
                    <h3>Michael Chen</h3>
                    <div class="position">Tech Startup Founder</div>
                    <div class="rating">★★★★☆</div>
                    <p>"Reliable service with great communication. We've seen a noticeable improvement in our workflow efficiency since implementing their solution."</p>
                </div>
            </div>
            
            <!-- Slide 3 -->
            <div class="slide">
                <div class="card">
                    <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Emily Rodriguez">
                    <h3>Emily Rodriguez</h3>
                    <div class="position">Small Business Owner</div>
                    <div class="rating">★★★★★</div>
                    <p>"As a small business, we needed cost-effective solutions. They delivered exactly what we needed at a price we could afford. Highly recommended!"</p>
                </div>
            </div>
            
            <!-- Slide 4 -->
            <div class="slide">
                <div class="card">
                    <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="David Wilson">
                    <h3>David Wilson</h3>
                    <div class="position">Financial Consultant</div>
                    <div class="rating">★★★★★</div>
                    <p>"Exceptional service from start to finish. The team was professional, responsive, and delivered results ahead of schedule."</p>
                </div>
            </div>
            
            <!-- Slide 5 -->
            <div class="slide">
                <div class="card">
                    <img src="https://randomuser.me/api/portraits/women/12.jpg" alt="Jessica Kim">
                    <h3>Jessica Kim</h3>
                    <div class="position">E-commerce Manager</div>
                    <div class="rating">★★★★☆</div>
                    <p>"Great partnership that helped us streamline our online operations. The only reason it's not 5 stars is because we had one minor delay."</p>
                </div>
            </div>
            
            <!-- Slide 6 -->
            <div class="slide">
                <div class="card">
                    <img src="https://randomuser.me/api/portraits/men/90.jpg" alt="Robert Taylor">
                    <h3>Robert Taylor</h3>
                    <div class="position">Non-Profit Director</div>
                    <div class="rating">★★★★★</div>
                    <p>"They understood our unique needs as a non-profit and worked within our budget constraints to deliver outstanding results. Truly a pleasure to work with."</p>
                </div>
            </div>
        </div>
        
        <div class="controls">
            <button class="prev-btn">❮</button>
            <button class="next-btn">❯</button>
        </div>
        
        <div class="indicators">
            <div class="indicator active" data-index="0"></div>
            <div class="indicator" data-index="1"></div>
            <div class="indicator" data-index="2"></div>
            <div class="indicator" data-index="3"></div>
            <div class="indicator" data-index="4"></div>
            <div class="indicator" data-index="5"></div>
        </div>
    </div>
</div>

<div class="section slide-left" id=about>
  <div class="reviews-header">
    <h2 class="reviews-title">ABOUT US</h2>
    <p class="reviews-subtitle">Pioneering clinical skincare with radical transparency since 2018</p>
  </div>
</div>  
<div class="container">
    <!-- Enhanced Website Description -->
    <div class="subsection">
      <p>Born from a shared frustration with overpriced, overpromising skincare, we set out to create a different kind of beauty company. Our founders—a cosmetic chemist, dermatologist, and sustainability expert—combined their disciplines to develop formulations that actually work, without the luxury markup or misleading claims.</p>
      
      <p>Every product in our line must pass three rigorous criteria:</p>
      <ul class="criteria-list">
        <li><strong>Clinical Proof:</strong> Ingredients must demonstrate measurable benefits in peer-reviewed studies</li>
        <li><strong>Skin Intelligence:</strong> Formulas adapt to different skin types and concerns</li>
        <li><strong>Clean Ethics:</strong> Vegan, cruelty-free, and environmentally responsible</li>
      </ul>
    </div>
    
    <!-- Founders Section -->
    <div class="subsection founders">
      <h3 class="founders-heading">The Visionaries</h3>
      <div class="founders-container">
        <div class="founder-column">
          <div class="founder-name">Madhu Tamang</div>
          <div class="founder-title">Co-Founder</div>
        </div>
        <div class="founder-column">
          <div class="founder-name">Neha Thakuri</div>
          <div class="founder-title">Co-Founder</div>
        </div>
        <div class="founder-column">
          <div class="founder-name">Pritha Bhattacharjee</div>
          <div class="founder-title">Co-Founder</div>
        </div>
      </div>
      <div class="mission-statement">
        <h4>Our Shared Mission</h4>
        <p>"To democratize clinical-grade skincare through education, ethical pricing, and uncompromising efficacy."</p>
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
      <a href="#" aria-label="Facebook">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
          <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
        </svg>
      </a>
      <a href="#" aria-label="Instagram" id="insta">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
          <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
        </svg>
      </a>
      <a href="#" aria-label="Twitter">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
          <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15"/>
        </svg>
      </a>
      <a href="#" aria-label="Pinterest">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pinterest" viewBox="0 0 16 16">
          <path d="M8 0a8 8 0 0 0-2.915 15.452c-.07-.633-.134-1.606.027-2.297.146-.625.938-3.977.938-3.977s-.239-.479-.239-1.187c0-1.113.645-1.943 1.448-1.943.682 0 1.012.512 1.012 1.127 0 .686-.437 1.712-.663 2.663-.188.796.4 1.446 1.185 1.446 1.422 0 2.515-1.5 2.515-3.664 0-1.915-1.377-3.254-3.342-3.254-2.276 0-3.612 1.707-3.612 3.471 0 .688.265 1.425.595 1.826a.24.24 0 0 1 .056.23c-.061.252-.196.796-.222.907-.035.146-.116.177-.268.107-1-.465-1.624-1.926-1.624-3.1 0-2.523 1.834-4.84 5.286-4.84 2.775 0 4.932 1.977 4.932 4.62 0 2.757-1.739 4.976-4.151 4.976-.811 0-1.573-.421-1.834-.919l-.498 1.902c-.181.695-.669 1.566-.995 2.097A8 8 0 1 0 8 0"/>
        </svg>
      </a>
    </div>
    <p class="copyright">© 2024 Nurture&Nourish. All rights reserved.</p>
  </div>
</footer>
  <!-- JAVASCRIPT: Reveal on Scroll -->
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




    const sections = document.querySelectorAll('.section');

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
        }
      });
    }, { threshold: 0.2 });

    sections.forEach(section => observer.observe(section));




    document.addEventListener('DOMContentLoaded', function() {
            const carousel = document.querySelector('.carousel');
            const slides = document.querySelectorAll('.slide');
            const prevBtn = document.querySelector('.prev-btn');
            const nextBtn = document.querySelector('.next-btn');
            const indicators = document.querySelectorAll('.indicator');
            const totalSlides = slides.length;
            let currentSlide = 0;
            let interval;
            let isHovering = false;
            
            // Initialize carousel
            updateCarousel();
            startInterval();
            
            function startInterval() {
                clearInterval(interval);
                interval = setInterval(() => {
                    if (!isHovering) {
                        nextSlide();
                    }
                }, 4000); // Rotate every 4 seconds
            }
            
            function nextSlide() {
                currentSlide = (currentSlide + 1) % totalSlides;
                updateCarousel();
            }
            
            function prevSlide() {
                currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
                updateCarousel();
            }
            
            function goToSlide(index) {
                currentSlide = index;
                updateCarousel();
            }
            
            function updateCarousel() {
                carousel.style.transform = `translateX(-${currentSlide * 100}%)`;
                
                // Update indicators
                indicators.forEach((indicator, index) => {
                    indicator.classList.toggle('active', index === currentSlide);
                });
            }
            
            // Button controls
            nextBtn.addEventListener('click', () => {
                nextSlide();
                startInterval();
            });
            
            prevBtn.addEventListener('click', () => {
                prevSlide();
                startInterval();
            });
            
            // Indicator controls
            indicators.forEach(indicator => {
                indicator.addEventListener('click', () => {
                    const slideIndex = parseInt(indicator.getAttribute('data-index'));
                    goToSlide(slideIndex);
                    startInterval();
                });
            });
            
            // Pause on hover
            carousel.addEventListener('mouseenter', () => {
                isHovering = true;
            });
            
            // Resume when mouse leaves
            carousel.addEventListener('mouseleave', () => {
                isHovering = false;
                startInterval();
            });
            
            // Keyboard navigation
            document.addEventListener('keydown', (e) => {
                if (e.key === 'ArrowRight') {
                    nextSlide();
                    startInterval();
                } else if (e.key === 'ArrowLeft') {
                    prevSlide();
                    startInterval();
                }
            });
            
            // Touch events for mobile
            let touchStartX = 0;
            let touchEndX = 0;
            
            carousel.addEventListener('touchstart', (e) => {
                touchStartX = e.changedTouches[0].screenX;
            }, {passive: true});
            
            carousel.addEventListener('touchend', (e) => {
                touchEndX = e.changedTouches[0].screenX;
                handleSwipe();
            }, {passive: true});
            
            function handleSwipe() {
                if (touchEndX < touchStartX - 50) {
                    nextSlide(); // Swipe left
                } else if (touchEndX > touchStartX + 50) {
                    prevSlide(); // Swipe right
                }
                startInterval();
            }
        });




        document.addEventListener('DOMContentLoaded', function() {
      // Select all elements to animate
      const animateElements = document.querySelectorAll('.subsection');
      
      // Create intersection observer
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            
            // Add delay between animations for staggered effect
            const delay = entry.target.dataset.delay || 0;
            entry.target.style.transitionDelay = `${delay}ms`;
            
            // Stop observing after animation
            observer.unobserve(entry.target);
          }
        });
      }, {
        threshold: 0.1,
        rootMargin: '0px 0px -100px 0px'
      });
      
      // Observe each element with staggered delay
      animateElements.forEach((element, index) => {
        element.dataset.delay = index * 150; // 150ms between each animation
        observer.observe(element);
      });
      
      // Check for elements already in view on load
      const checkVisibleOnLoad = () => {
        animateElements.forEach(element => {
          const rect = element.getBoundingClientRect();
          const isVisible = rect.top < window.innerHeight * 0.8;
          if (isVisible) {
            element.classList.add('visible');
            element.style.transitionDelay = `${element.dataset.delay}ms`;
          }
        });
      };
      
      window.addEventListener('load', checkVisibleOnLoad);
    });
  </script>

</body>

</html>
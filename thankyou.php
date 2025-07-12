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
    <title>Order Success - Nurture&Nourish</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Add your existing styles here */
        :root {
            --primary-color: #b35d5d;
            --background-color: #fffaf5;
            --text-color: #4e2f2f;
            --hover-bg: #fcdede;
            --footer-bg: #4e2f2f;
            --success-color: #4CAF50;
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
            text-align: center;
        }
        
        .thank-you-message {
            padding: 50px 0;
        }
        
        .continue-shopping {
            display: inline-block;
            margin-top: 20px;
            background: var(--primary-color);
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .continue-shopping:hover {
            background: #9a4c4c;
            transform: translateY(-2px);
        }
        
        /* Checkmark animation styles */
        .checkmark-circle {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: var(--success-color);
            margin: 0 auto 30px;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: scaleIn 0.5s ease-out;
        }
        
        .checkmark {
            width: 50px;
            height: 50px;
        }
        
        .checkmark-check {
            animation: drawCheck 0.8s ease-out forwards;
            stroke-dasharray: 100;
            stroke-dashoffset: 100;
            stroke: white;
            stroke-width: 6;
            stroke-linecap: round;
            stroke-miterlimit: 10;
            fill: none;
        }
        
        @keyframes scaleIn {
            0% {
                transform: scale(0);
                opacity: 0;
            }
            80% {
                transform: scale(1.1);
                opacity: 1;
            }
            100% {
                transform: scale(1);
            }
        }
        
        @keyframes drawCheck {
            0% {
                stroke-dashoffset: 100;
            }
            100% {
                stroke-dashoffset: 0;
            }
        }
    </style>
</head>
<body>
    
    <div class="container">
        <div class="thank-you-message">
            <div class="checkmark-circle">
                <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                    <path class="checkmark-check" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                </svg>
            </div>
            <h1>Order Placed Successfully!</h1>
            <h6>Your order has been received and is being processed. You will receive a confirmation email shortly.<br>Thank you for shopping with us.</h6>
            <a href="products1.php" class="continue-shopping">Happy Shopping</a>
        </div>
    </div>
    
</body>
</html>
<?php
include "db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin Login</title>
  <style>
    * {
      box-sizing: border-box;
      padding: 0;
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      background-color: #fffaf5;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      perspective: 1500px;
      flex-direction: column;
    }

    .card-container {
      width: 350px;
      height: 480px;
      position: relative;
      transform-style: preserve-3d;
    }

    .card {
      width: 100%;
      height: 100%;
      transition: transform 0.8s ease-in-out;
      transform-style: preserve-3d;
      position: relative;
    }

    .login-container, .forgot-container {
      background-color: #fffaf5;
      border: 1px solid #b35d5d;
      border-radius: 20px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
      padding: 40px;
      width: 100%;
      height: 100%;
      text-align: center;
      position: absolute;
      top: 0;
      left: 0;
      backface-visibility: hidden;
      transform-style: preserve-3d;
    }

    .forgot-container {
      transform: rotateY(-180deg);
    }

    .card.flipped {
      transform: rotateY(-180deg);
    }

    h2 {
      margin-bottom: 30px;
      color: #b35d5d;
      font-size: 24px;
    }

    .input-group {
      margin-bottom: 20px;
      text-align: left;
    }

    .input-group label {
      display: block;
      margin-bottom: 6px;
      color: #b35d5d;
    }

    .input-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #b35d5d;
      border-radius: 8px;
      background-color: #fffaf5;
      color: #333;
      outline: none;
    }

    .login-btn {
      background-color: #b35d5d;
      color: #fffaf5;
      padding: 10px 20px;
      border: none;
      border-radius: 10px;
      cursor: pointer;
      font-size: 16px;
      transition: background-color 0.3s ease;
    }

    .login-btn:hover {
      background-color: #a64e4e;
    }

    .link {
      display: block;
      margin-top: 15px;
      color: #b35d5d;
      cursor: pointer;
      text-decoration: underline;
      font-size: 14px;
    }

    .close-btn {
      position: absolute;
      top: 10px;
      right: 15px;
      font-size: 20px;
      color: #b35d5d;
      cursor: pointer;
      font-weight: bold;
    }

    .message {
      margin-top: 15px;
      font-size: 14px;
      color: #b35d5d;
      font-weight: bold;
    }

    @keyframes fadeSlideIn {
  from {
    opacity: 0;
    transform: translateY(-50px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

@keyframes fadeSlideOut {
  from {
    opacity: 1;
    transform: translateY(0);
  }
  to {
    opacity: 0;
    transform: translateY(50px);
  }
}

/* Common class to apply on load */
.card-container.animate-in {
  animation: fadeSlideIn 0.6s ease forwards;
}

/* Common class to apply on exit */
.card-container.animate-out {
  animation: fadeSlideOut 0.5s ease forwards;
}


  </style>
</head>
<body>
  <div class="card-container">
    <div class="card" id="card">
      <div class="login-container">
        <div class="close-btn" onclick="closeForm()">&times;</div>
        <h2>Admin Login</h2>
        <form id="login-form" action="admin_login.php" method="POST">
          <div class="input-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required />
          </div>
          <div class="input-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required />
          </div>
          <button class="login-btn" type="login" name="login">Login</button>
          <div class="message" id="login-message"></div>
        </form>
<?php
if(isset($_POST['login']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];  
    
    
    $sql = "SELECT * FROM users WHERE username = '$username' and password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<script>window.location.href='admin_panel.php';alert('Login Successfull');</script>";
    } else {
        echo "<script>alert('Invalid username or password');</script>";
    }
} 
?>
        <span class="link" onclick="flipCard()">Can't access your account?</span>
      </div>

      <div class="forgot-container">
        <div class="close-btn" onclick="closeForm()">&times;</div>
        <h2>Reset Password</h2>
        <form id="reset_form" action="admin_login.php" method="POST">
          <div class="input-group">
            <label for="username">Username</label>
            <input type="text" id="reset_username" name="username" required />
          </div>
          <div class="input-group">
            <label for="new_password">New Password</label>
            <input type="password" id="new_password" name="new_password" required />
          </div>
          <div class="input-group">
            <label for="confirm_password">Confirm Password</label>
            <input type="password" id="confirm_password" name="confirm_password" required />
          </div>
          <button class="login-btn" type="submit" name="reset">Reset</button>
          <div class="message" id="reset-message"></div>
        </form>

<?php
if(isset($_POST['reset']))
{
$username = $_POST['username'];
$new_password = $_POST['new_password'];
$confirm_password = $_POST['confirm_password'];

$sql = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    if ($new_password == $confirm_password) {
        $update = "UPDATE users SET password='$confirm_password' WHERE username='$username'";
        if (mysqli_query($conn, $update)) {
            echo "<script>alert('Password updated successfully!');</script>";

        } else {
            echo "<script>alert('Something went wrong while updating password.');</script>";
        }
    } 
    else {
        echo "<script>alert('Passwords do not match.');</script>";
    }
} 
else {
    echo "<script>alert('Invalid username or password.');</script>";
}

}
?>
        <span class="link" onclick="flipCard()">Back to Login</span>
      </div>
    </div>
  </div>




<script>
    function flipCard() {
      document.getElementById('card').classList.toggle('flipped');
    }

    function closeForm() {
      window.location.href = 'home1.php';
    }

    // Fade-in on load
window.addEventListener('DOMContentLoaded', () => {
  const container = document.querySelector('.card-container');
  container.classList.add('animate-in');
});

// Fade-out on close and redirect
function closeForm() {
  const container = document.querySelector('.card-container');
  container.classList.remove('animate-in'); // just in case
  container.classList.add('animate-out');

  setTimeout(() => {
    window.location.href = 'home1.php';
  }, 500); // match with fadeSlideOut duration
}

  </script>
</body>
</html>
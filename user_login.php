<?php
session_start();
require_once "conn.php";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepared statement to avoid SQL injection
    $stmt = $conn->prepare("SELECT * FROM signup WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();

    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user) {
        echo "Entered: " . $password . "<br>";
        echo "From DB: " . $user['password'] . "<br>";

        // This compares entered password with hashed password from DB
        if (password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user['username'];
            header("Location: home1.php"); 
            exit();
        } else {
            echo "<script>alert('Wrong password'); window.location.href='user_login.php';</script>";
            exit(); // Stop further execution
            
        }
    } else {
        echo "<script>alert('Username not found'); window.location.href='user_login.php';</script>";
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="user_login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <header>
        
    </header>
    <div class="wrapper">
        <span class="bg-animate">

        </span>
        <span class="bg-animate2"></span>
        <div class="form-box login">
            <h2 class="animation" style="--i:0; --j:21">Login</h2>
            <form action="user_login.php" method="post">
                <div class="input-box animation " style="--i:1; --j:22">
                    <input type="text" name="username" required>
                    <label>Username</label>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box animation" style="--i:2;  --j:23">
                    <input type="password" name="password" required>
                    <label>Password</label>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <button type="submit" class="btn animation" name='login' style="--i:03;  --j:24">Login</button>
                <div class="logreg-link animation" style="--i:4; --j:25">
                    <p>Don't have an account? <a href="#" class="register-link">Sign Up</a></p>
                </div>
            </form>
        </div>
        <div class="info-text login">
            <h2 class="animation" style="--i:0;
            --j:20">Welcome Back!</h2>
            <p class="animation" style="--i:1; --j:21">We've missed you... Ready to dive in?</p>
        </div>
        <div class="form-box register">
            <h2 class="animation" style="--i:17; --j:0">Sign Up</h2>
            <form action="user_signup.php" method="post">
                <div class="input-box animation" style="--i:18; --j:1">
                    <input type="text" name="username" required>
                    <label>Username</label>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box animation" style="--i:19; --j:2">
                    <input type="text" name="email" required>
                    <label>Email</label>
                    <i class='bx bxs-envelope'></i>
                </div>
                <div class="input-box animation" style="--i:20; --j:3">
                    <input type="password" name="password" required>
                    <label>Password</label>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <button type="submit" class="btn animation" name='signup' style="--i:21; --j:4">Sign Up</button>
                <div class="logreg-link animation" style="--i:22; --j:5">
                    <p>Already have an account? <a href="#" class="login-link">Login</a></p>
                </div>
            </form>
        </div>
        <div class="info-text register">
            <h2 class="animation" style="--i:17; --j:0">Welcome</h2>
            <p class="animation" style="--i:18; --j:1">New here? Join us to avail crazy deals.. Hurry!!</p>
        </div>
    </div>
    <script>
        const wrapper = document.querySelector('.wrapper');
        const registerlink = document.querySelector('.register-link');
        const loginlink = document.querySelector('.login-link');

        registerlink.onclick = () => {
            wrapper.classList.add('active');
        }
        loginlink.onclick = () => {
            wrapper.classList.remove('active');
        }

    </script>
</body>

</html>
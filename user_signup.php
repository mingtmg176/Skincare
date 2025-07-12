<?php
if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $conn = new mysqli('localhost', 'root', '', 'nn');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prevent duplicate usernames
    $check = $conn->prepare("SELECT * FROM signup WHERE username = ?");
    $check->bind_param("s", $username);
    $check->execute();
    $result = $check->get_result();

    if ($result->num_rows > 0) {
        echo "<script>alert('Username already exists'); window.location.href='user_login.php';</script>";
    } else {
        $stmt = $conn->prepare("INSERT INTO signup (username, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $email, $password);
        $stmt->execute();
        echo "<script>alert('Signed up successfully'); window.location.href='user_login.php';</script>";
        $stmt->close();
    }

    $conn->close();
}
?>

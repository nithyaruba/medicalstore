<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacy Store Login</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 350px;
            text-align: center;
        }

        .login-container img {
            width: 100px;
            margin-bottom: 20px;
        }

        .login-container h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        .btn {
            display: inline-block;
            width: 100%;
            padding: 12px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #218838;
        }

        .footer {
            margin-top: 20px;
            font-size: 12px;
            color: #aaa;
        }
    </style>
</head>
<body>
    <?php
    session_start();
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "gasbooking";
    $con = new mysqli($server, $username, $password, $database);
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'] ?? '';
        $newpassword = $_POST['newpassword'] ?? '';
        if (!empty($email) && !empty($newpassword)) {
            $stmt = $con->prepare("SELECT * FROM signup WHERE email = ? AND newpassword = ?");
            $stmt->bind_param("ss", $email, $newpassword);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($result->num_rows > 0) {
                $_SESSION['email'] = $email;
                header("Location: homepage2.php");
                exit();
            } else {
                echo "<script>showError('Invalid email or password.');</script>";
            }
            $stmt->close();
        } else {
            echo "<script>showError('Please fill in all fields.');</script>";
        }
    }
    $con->close();
    ?>
    <div class="login-form">
        <form action="login.php" method="post">
            <h1 class="login-title">Login</h1>
            <div class="input-box">
                <input type="email" id="email" name="email" placeholder="Email" required>
                <i class='bx bx-user'></i>
            </div>
            <div class="input-box">
                <input type="password" id="newpassword" name="newpassword" placeholder="Password" required>
                <i class='bx bx-lock-alt'></i>
            </div>
            <div class="remember-forgot-box">
                <label for="remember">
                    <input type="checkbox" id="remember" name="remember">
                    Remember me
                </label>
                <a href="Forgetpassword.html">Forgot Password</a>
            </div>
            <button class="login-btn" type="submit" name="submit">Login</button><br><br>
            <button class="back" formaction="homepage1.html">Back</button>
            <p class="register">
                Don't have an account?
                <a href="signup.html">Register</a>
            </p>
        </form>
    </div>
</body>
</html>
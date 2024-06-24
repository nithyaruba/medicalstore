<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Store Signup</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #e0f7fa; /* Light cyan background for the page */
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.signup-container {
    background-color: #ffffff; /* White background for the form container */
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    margin-bottom: 20px;
    text-align: center;
    color: #00796b; /* Dark cyan color for the heading */
}

.form-group {
    margin-bottom: 15px;
}

label {
    display: block;
    margin-bottom: 5px;
    color: #004d40; /* Darker cyan color for labels */
}

input {
    width: 100%;
    padding: 8px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
    background-color: #f1f8e9; /* Light green background for input fields */
}

button {
    width: 100%;
    padding: 10px;
    background-color: #00796b; /* Dark cyan background for the button */
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #004d40; /* Darker cyan color for the button on hover */
}

    </style>
</head>
<body>
    <?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "medical";
    $con = mysqli_connect($server, $username, $password, $database);
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
    if (isset($_POST['submit'])) {
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $address = mysqli_real_escape_string($con, $_POST['address']);
        $newpassword = mysqli_real_escape_string($con, $_POST['newpassword']);
        $reenterpassword = mysqli_real_escape_string($con, $_POST['reenterpassword']);
        if ($newpassword !== $reenterpassword) {
            echo "<div class='message'>
                    <p>Passwords do not match, try again!</p>
                    <button class='btn' onclick='javascript:self.history.back()'>Go Back &amp; Try Again</button>
                </div><br>";
        } else {
            $verify_query = mysqli_query($con, "SELECT email FROM signup WHERE email='$email'");
            if (mysqli_num_rows($verify_query) != 0) {
                echo "<div class='message'>
                        <p>This email is already used, try another!</p>
                    </div><br>";
            } 
            else {
                $insert_query = mysqli_query($con, "INSERT INTO signup (name, email, address, newpassword) VALUES ('$name', '$email', '$address', '$newpassword')");
                
                if ($insert_query) {
                    echo "<script>showSuccessMessage();</script>";
                } 
                else {
                    die("Error: " . mysqli_error($con));
                }
            }
        }
    }
    ?>
    <div class="login-form">
        <form action="" method="POST">
            <h1 class="login-title">Sign-Up</h1>
            <div class="input-box">
                <input type="text" id="name" name="name" placeholder="Name" required>
                <i class='bx bx-user'></i>
            </div>
            <div class="input-box">
                <input type="email" id="email" name="email" placeholder="Email" required>
                <i class='bx bx-envelope'></i>
            </div>
            <div class="input-box">
                <input type="text" id="address" name="address" placeholder="Address" required>
                <i class='bx bx-home'></i>
            </div>
            <div class="input-box">
                <input type="password" id="newpassword" name="newpassword" placeholder="Password" minlength="5" maxlength="15" pattern="[a-zA-Z0-9]+" required>
                <i class='bx bx-lock-alt'></i>
            </div>
            <div class="input-box">
                <input type="password" id="reenterpassword" name="reenterpassword" placeholder="Re-enter password" minlength="5" maxlength="15" pattern="[a-zA-Z0-9]+" required>
                <i class='bx bx-lock-alt'></i>
            </div>
            <button class="sign-up-btn" type="submit" name="submit">Sign-up</button>
            <br><br>
        </form>
    </div>
</body>
</html>
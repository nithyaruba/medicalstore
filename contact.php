<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Pharmacy</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f0f0;
}

.container {
    width: 80%;
    margin: 0 auto;
}

header {
    background-color: #00796b;
    color: white;
    padding: 10px 0;
}

header h1 {
    text-align: center;
}

nav ul {
    list-style-type: none;
    padding: 0;
    text-align: center;
}

nav ul li {
    display: inline;
    margin: 0 15px;
}

nav ul li a {
    color: white;
    text-decoration: none;
}

.hero {
    background-color: #e0f7fa;
    text-align: center;
    padding: 50px 0;
}

.hero h2 {
    color: #00796b;
}

.hero p {
    font-size: 1.2em;
}

.contact {
    background-color: white;
    padding: 50px 0;
}

.contact h3 {
    text-align: center;
    color: #00796b;
}

.contact .container {
    display: flex;
    justify-content: space-between;
}

.contact-form {
    flex-basis: 45%;
}

.contact-form form {
    max-width: 400px;
    margin: 0 auto;
    background-color: #f1f8e9;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
}

.form-group input,
.form-group textarea {
    width: 100%;
    padding: 10px;
    font-size: 1em;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.form-group textarea {
    resize: vertical;
}

.btn {
    display: inline-block;
    padding: 10px 20px;
    background-color: #00796b;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    margin-top: 20px;
    cursor: pointer;
}

.btn:hover {
    background-color: #004d40;
}

.contact-info {
    flex-basis: 45%;
    background-color: #f1f8e9;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.contact-info h3 {
    color: #00796b;
    text-align: center;
    margin-bottom: 15px;
}

.contact-info p {
    margin-bottom: 10px;
}

footer {
    background-color: #00796b;
    color: white;
    text-align: center;
    padding: 10px 0;
}

    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>Welcome to Our Pharmacy</h1>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="hero">
        <div class="container">
            <h2>Contact Us</h2>
            <p>We are here to assist you. Reach out to us with any questions or concerns.</p>
        </div>
    </section>

    <section class="contact">
        <div class="container">
            <div class="contact-form">
                <h3>Send Us a Message</h3>
                <form action="#" method="POST">
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Your Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Your Message</label>
                        <textarea id="message" name="message" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn">Send Message</button>
                </form>
            </div>
            <div class="contact-info">
                <h3>Contact Information</h3>
                <p><strong>Address:</strong> 123 Pharmacy Street, City, State, ZIP</p>
                <p><strong>Phone:</strong> +1 234-567-8901</p>
                <p><strong>Email:</strong> info@pharmacy.com</p>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 Pharmacy. All rights reserved.</p>
        </div>
    </footer>

    <script src="scripts.js"></script>
</body>
</html>
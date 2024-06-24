<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacy Products</title>
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

.btn {
    display: inline-block;
    padding: 10px 20px;
    background-color: #00796b;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    margin-top: 20px;
}

.btn:hover {
    background-color: #004d40;
}

.featured-products {
    background-color: white;
    padding: 50px 0;
}

.featured-products h2 {
    text-align: center;
    color: #00796b;
}

.product-grid {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
}

.product-item {
    background-color: #f1f8e9;
    padding: 20px;
    margin: 10px;
    text-align: center;
    border-radius: 5px;
    flex-basis: 30%;
}

.product-item img {
    max-width: 100%;
    border-radius: 5px;
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
            <h2>Our Featured Pharmacy Products</h2>
            <p>Discover a wide range of medical products tailored to your needs.</p>
            <a href="#" class="btn">Shop Now</a>
        </div>
    </section>

    <section class="featured-products">
        <div class="container">
            <h2>Featured Products</h2>
            <div class="product-grid">
                <div class="product-item">
                    <img src="C:\Users\nithy\Downloads\pain killer.jpg" alt="Pain Reliever">
                    <h3>Pain Reliever</h3>
                    <p>Effective relief for headaches, muscle pain, and more.</p>
                    <a href="#" class="btn">Buy Now</a>
                </div>
                <div class="product-item">
                    <img src="file:///C:/Users/nithy/Downloads/cough%20syrup.webp" alt="Cough Syrup">
                    <h3>Cough Syrup</h3>
                    <p>Soothes your throat and relieves cough symptoms.</p>
                    <a href="#" class="btn">Buy Now</a>
                </div>
                <div class="product-item">
                    <img src="C:\Users\nithy\Downloads\vitamin.jpg" alt="Vitamin Supplements">
                    <h3>Vitamin Supplements</h3>
                    <p>Boost your immune system with essential vitamins.</p>
                    <a href="#" class="btn">Buy Now</a>
                </div>
                <div class="product-item">
                    <img src="file:///C:/Users/nithy/Downloads/allergy.webp" alt="Allergy Medicine">
                    <h3>Allergy Medicine</h3>
                    <p>Relief from allergy symptoms like sneezing and itching.</p>
                    <a href="#" class="btn">Buy Now</a>
                </div>
                <div class="product-item">
                    <img src="C:\Users\nithy\Downloads\first aid kit.png" alt="First Aid Kit">
                    <h3>First Aid Kit</h3>
                    <p>Essential supplies for minor injuries and emergencies.</p>
                    <a href="#" class="btn">Buy Now</a>
                </div>
                <div class="product-item">
                    <img src="C:\Users\nithy\Downloads\antiseptic.avif" alt="Antiseptic Cream">
                    <h3>Antiseptic Cream</h3>
                    <p>Prevents infections and aids in the healing of wounds.</p>
                    <a href="#" class="btn">Buy Now</a>
                </div>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Store Home</title>
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

        .hero img {
            max-width: 100%;
            height: auto;
            margin-top: 20px;
            border-radius: 8px;
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

        .featured-products, .services {
            background-color: white;
            padding: 50px 0;
        }

        .featured-products h2, .services h2 {
            text-align: center;
            color: #00796b;
        }

        .product-grid, .services-grid {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .product-item, .service-item {
            background-color: #f1f8e9;
            padding: 20px;
            margin: 10px;
            text-align: center;
            border-radius: 5px;
            flex-basis: 30%;
        }

        .product-item img, .service-item img {
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
            <h1>Welcome to Our Medical Store</h1>
            <nav>
                <ul>
                    <li><a href="home.html">Home</a></li>
                    <li><a href="products.html">Products</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="medicine.html">Medicines</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="signup.html">Signup</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="hero">
        <div class="container">
            <h2>Your Health, Our Priority</h2>
            <p>Discover a wide range of medical products and services tailored to your needs.</p>
            <div class="button-container">
                <a href="#" class="btn">Shop Now</a>
            </div>
            <img src="C:\Users\nithy\Downloads\main picture.jpg" alt="Medical Professional">
        </div>
    </section>

    <section class="featured-products">
        <div class="container">
            <h2>Featured Products</h2>
            <div class="product-grid">
                <div class="product-item">
                    <img src="C:\Users\nithy\Downloads\protect 1.jpg" alt="Product 1">
                    <h3>Product 1</h3>
                    <p>Description of Product 1</p>
                    <a href="#" class="btn">Buy Now</a>
                </div>
                <div class="product-item">
                    <img src="C:\Users\nithy\Downloads\product 2.jpeg" alt="Product 2">
                    <h3>Product 2</h3>
                    <p>Description of Product 2</p>
                    <a href="#" class="btn">Buy Now</a>
                </div>
                <div class="product-item">
                    <img src="C:\Users\nithy\Downloads\product 3.jpeg" alt="Product 3">
                    <h3>Product 3</h3>
                    <p>Description of Product 3</p>
                    <a href="#" class="btn">Buy Now</a>
                </div>
            </div>
        </div>
    </section>
    <section class="services">
        <div class="container">
            <h2>Our Services</h2>
            <div class="services-grid">
                <div class="service-item">
                    <img src="C:\Users\nithy\Downloads\per 1.jpg" alt="Prescription Services">
                    <h3>Prescription Services</h3>
                    <p>Prescription filling and refilling, medication counseling, and prescription delivery.</p>
                </div>
                <div class="service-item">
                    <img src="C:\Users\nithy\Downloads\per 2.jpg" alt="Over-the-Counter Medication">
                    <h3>Over-the-Counter Medication</h3>
                    <p>Sale of common OTC medications, health supplements, and vitamins.</p>
                </div>
                <div class="service-item">
                    <img src="C:\Users\nithy\Downloads\per 3.jpg" alt="Health and Wellness Products">
                    <h3>Health and Wellness Products</h3>
                    <p>Personal care products, medical devices, and equipment.</p>
                </div>
                <div class="service-item">
                    <img src="C:\Users\nithy\Downloads\per 4.jpeg" alt="Consultation Services">
                    <h3>Consultation Services</h3>
                    <p>Pharmacist consultations and health screenings (blood pressure, glucose levels, etc.).</p>
                </div>
                <div class="service-item">
                    <img src="C:\Users\nithy\Downloads\per 5.png" alt="Vaccination Services">
                    <h3>Vaccination Services</h3>
                    <p>Flu shots, travel vaccines, and routine immunizations.</p>
                </div>
                <div class="service-item">
                    <img src="C:\Users\nithy\Downloads\per 6.jpg" alt="Home Health Care">
                    <h3>Home Health Care</h3>
                    <p>Home delivery of medications and supplies, rental of medical equipment.</p>
                </div>
                <div class="service-item">
                    <img src="C:\Users\nithy\Downloads\per 7.jpg" alt="Specialty Services">
                    <h3>Specialty Services</h3>
                    <p>Compounding medications, chronic disease management, and smoking cessation programs.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="about">
        <div class="container">
            <h2>About Us</h2>
            <p>Welcome to Our Medical Store! We are dedicated to providing you with high-quality medical products and services to support your health and well-being. Our experienced team is here to help you find the right products and provide expert advice. Your health is our top priority.</p>
        </div>
    </section>

    <section class="testimonials">
        <div class="container">
            <h2>Customer Testimonials</h2>
            <div class="testimonials-grid">
                <div class="testimonial-item">
                    <img src="C:\Users\nithy\Downloads\customer 1.png" alt="customer 1" width="100" height="100">
                    <p>"The best medical store in town! Excellent service and a wide range of products. Highly recommend!"</p>
                    <p><strong>- Jane Doe</strong></p>
                    <p>★★★★★</p>
                </div>
                <div class="testimonial-item">
                    <img src="C:\Users\nithy\Downloads\customer 2.webp" alt="customer 2" width="100" height="100">
                    <p>"Friendly staff and quick delivery. They always have what I need. Thank you for your great service!"</p>
                    <p><strong>- John Smith</strong></p>
                    <p>★★★★★</p>
                </div>
                <div class="testimonial-item">
                    <img src="C:\Users\nithy\Downloads\customer 3.jpg" alt="Customer 3" width="100" height="100">
                    <p>"Amazing consultation services. The pharmacists are knowledgeable and very helpful. Five stars!"</p>
                    <p><strong>- Emily Johnson</strong></p>
                    <p>★★★★★</p>
                </div>
                <div class="testimonial-item">
                    <img src="C:\Users\nithy\Downloads\customer 4.jpg" alt="Customer 4" width="100" height="100">
                    <p>"I appreciate the variety of health products available. The prices are also very reasonable."</p>
                    <p><strong>- Michael Brown</strong></p>
                    <p>★★★★★</p>
                </div>
                <div class="testimonial-item">
                    <img src="C:\Users\nithy\Downloads\customer 5.jpg" alt="Customer 5" width="100" height="100">
                    <p>"Excellent customer service and fast shipping. This store is my go-to for all my medical needs."</p>
                    <p><strong>- Sarah Davis</strong></p>
                    <p>★★★★★</p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="newsletter">
        <div class="container">
            <h2>Subscribe to Our Newsletter</h2>
            <p>Stay updated with the latest news, health tips, and special offers from our store. Subscribe now and get a 10% discount on your next purchase!</p>
            <form action="subscribe.html" method="POST">
                <input type="email" name="email" placeholder="Enter your email" required>
                <button type="submit" class="btn">Subscribe</button>
            </form>
            <p>We respect your privacy. Your information is safe and will never be shared.</p>
            <div class="social-proof">
                <p>Join over <strong>10,000</strong> satisfied subscribers!</p>
            </div>
        </div>
    </section>
    
    <footer>
        <div class="container">
            <p>&copy; 2024 Medical Store. All rights reserved.</p>
        </div>
    </footer>
    

    <script src="scripts.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacy Services</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            color: #333;
        }

        .container {
            width: 80%;
            margin: 0 auto;
        }

        header {
            background-color: #00796b;
            color: white;
            padding: 20px 0;
        }

        header h1 {
            text-align: center;
            margin: 0;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            text-align: center;
            margin: 10px 0 0 0;
        }

        nav ul li {
            display: inline;
            margin: 0 15px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        .hero {
            background-color: #e0f7fa;
            text-align: center;
            padding: 50px 20px;
        }

        .hero h2 {
            color: #00796b;
            margin: 0;
        }

        .hero p {
            font-size: 1.2em;
            margin: 20px 0 0 0;
        }

        .services {
            background-color: white;
            padding: 50px 20px;
        }

        .services h2 {
            text-align: center;
            color: #00796b;
            margin: 0 0 30px 0;
        }

        .services-grid {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .service-item {
            background-color: #f1f8e9;
            padding: 20px;
            margin: 10px;
            text-align: center;
            border-radius: 5px;
            flex-basis: 30%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .service-item img {
            max-width: 100%;
            border-radius: 5px;
        }

        .service-item h3 {
            color: #00796b;
            margin: 10px 0 10px 0;
        }

        .service-item p {
            font-size: 1em;
            color: #555;
        }

        .info-section {
            background-color: #f9f9f9;
            padding: 30px 20px;
            margin: 30px 0;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .info-section h2 {
            text-align: center;
            color: #00796b;
            margin-bottom: 20px;
        }

        .info-section p {
            margin: 0;
            font-size: 1em;
            color: #555;
        }

        .info-section ul {
            list-style-type: none;
            padding: 0;
            margin-top: 10px;
        }

        .info-section ul li {
            margin-bottom: 5px;
        }

        .order-section {
            background-color: #f9f9f9;
            padding: 30px 20px;
            margin: 30px 0;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .order-section h2 {
            text-align: center;
            color: #00796b;
            margin-bottom: 20px;
        }

        .order-section p {
            margin: 0;
            font-size: 1em;
            color: #555;
        }

        footer {
            background-color: #00796b;
            color: white;
            text-align: center;
            padding: 10px 0;
            margin-top: 30px;
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
            <h2>Our Pharmacy Services</h2>
            <p>Explore the services we offer to support your health and well-being.</p>
        </div>
    </section>

    <section class="services">
        <div class="container">
            <h2>Services We Provide</h2>
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

    <section class="info-section">
        <div class="container">
            <h2>Important Information</h2>
            <ul>
                <li><strong>Opening Hours:</strong> Monday to Friday, 9:00 AM to 7:00 PM</li>
                <li><strong>Delivery Periods:</strong> Same-day delivery available within city limits.</li>
                <li><strong>Modes of Payment:</strong> We accept cash, credit/debit cards, and mobile payments.</li>
            </ul>
        </div>
    </section>

    <section class="order-section">
        <div class="container">
            <h2>Order Prescription Drugs</h2>
            <p>To order prescription drugs, please visit our pharmacy or contact us directly:</p>
            <p>Phone: +1-123-456-7890<br>Email: info@yourpharmacy.com</p>
        </div>
    </section>
    <section class="comments-section">
        <div class="container">
            <h2>What Our Customers Say</h2>
            <div class="comment">
                <h3>Mary Johnson</h3>
                <p>"The home health care service was a lifesaver for my family. The staff was professional and compassionate."</p>
            </div>
            <div class="comment">
                <h3>Paul Walker</h3>
                <p>"I was impressed by the range of health and wellness products available. I found exactly what I needed!"</p>
            </div>
            <div class="comment">
                <h3>Laura Wilson</h3>
                <p>"The consultation services provided by the pharmacists helped me manage my medications more effectively."</p>
            </div>
        </div>
    </section>

    <section class="search-section">
        <div class="container">
            <h2>Find a Pharmacy Near You</h2>
            <form action="search.html" method="GET">
                <input type="text" name="search" placeholder="Enter your location">
                <button type="submit">Search</button>
            </form>
        </div>
    </section>
    <footer>
        <div class="container">
            <p>&copy; 2024 Pharmacy. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
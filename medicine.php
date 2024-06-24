<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medicines Information</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');

        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        .container {
            width: 80%;
            margin: 0 auto;
        }

        header {
            background-color: #00796b;
            color: white;
            padding: 15px 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            text-align: center;
            font-weight: 700;
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
            font-weight: 500;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        .medicine-info {
            background-color: white;
            padding: 50px 0;
        }

        .medicine-info h2 {
            text-align: center;
            color: #00796b;
            font-size: 2em;
            margin-bottom: 30px;
        }

        .medicine-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .medicine-item {
            background-color: #f1f8e9;
            padding: 20px;
            text-align: center;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .medicine-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .medicine-item h3 {
            color: #00796b;
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        .medicine-item p {
            font-size: 1em;
            color: #555;
        }

        .search-container {
            text-align: center;
            margin-bottom: 20px;
        }

        .search-box {
            width: 60%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1em;
            transition: border-color 0.3s;
        }

        .search-box:focus {
            outline: none;
            border-color: #00796b;
        }

        footer {
            background-color: #00796b;
            color: white;
            text-align: center;
            padding: 15px 0;
            margin-top: 30px;
            box-shadow: 0 -2px 4px rgba(0, 0, 0, 0.1);
        }

        @media (max-width: 600px) {
            .container {
                width: 90%;
            }

            nav ul li {
                display: block;
                margin: 5px 0;
            }

            .search-box {
                width: 100%;
            }
        }
        
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>Medicine Information</h1>
            <nav>
                <ul>
                    <li><a href="home.html">Home</a></li>
                    <li><a href="products.html">Products</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="medicines.html">Medicines</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="signup.html">Signup</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <header>
        <div class="container">
            <h1>Medicine Availability</h1>
        </div>
    </header>

    <section class="medicine-list">
        <div class="container">
            <h2>Check Medicine Availability</h2>
            <ul id="medicineAvailability">
                <!-- JavaScript will populate this list -->
            </ul>
        </div>
    </section>
    <section class="medicine-info">
        <div class="container">
            <div class="search-container">
                <input type="text" class="search-box" id="searchInput" placeholder="Search medicines...">
            </div>
            <h2>Medicines and Their Uses</h2>
            <div class="medicine-grid" id="medicineGrid">
                <div class="medicine-item">
                    <h3>Paracetamol</h3>
                    <p>Used for pain relief and fever reduction.</p>
                </div>
                <div class="medicine-item">
                    <h3>Amoxicillin</h3>
                    <p>Antibiotic used to treat bacterial infections.</p>
                </div>
                <div class="medicine-item">
                    <h3>Lisinopril</h3>
                    <p>Used to treat high blood pressure and heart failure.</p>
                </div>
                <div class="medicine-item">
                    <h3>Omeprazole</h3>
                    <p>Used for gastroesophageal reflux disease (GERD) and other stomach issues.</p>
                </div>
                <div class="medicine-item">
                    <h3>Simvastatin</h3>
                    <p>Used to lower cholesterol and reduce the risk of heart disease.</p>
                </div>
                <div class="medicine-item">
                    <h3>Metformin</h3>
                    <p>Used to control blood sugar levels in people with type 2 diabetes.</p>
                </div>
                <div class="medicine-item">
                    <h3>Ibuprofen</h3>
                    <p>Nonsteroidal anti-inflammatory drug (NSAID) used for pain relief and inflammation reduction.</p>
                </div>
                <div class="medicine-item">
                    <h3>Levothyroxine</h3>
                    <p>Used to treat hypothyroidism (underactive thyroid).</p>
                </div>
                <div class="medicine-item">
                    <h3>Ciprofloxacin</h3>
                    <p>Antibiotic used to treat various bacterial infections.</p>
                </div>
                <div class="medicine-item">
                    <h3>Diazepam</h3>
                    <p>Used for anxiety, muscle spasms, seizures, and other conditions.</p>
                </div>
                <div class="medicine-item">
                    <h3>Warfarin</h3>
                    <p>Anticoagulant (blood thinner) used to prevent blood clots.</p>
                </div>
                <div class="medicine-item">
                    <h3>Hydrochlorothiazide</h3>
                    <p>Diuretic used to treat high blood pressure and fluid retention (edema).</p>
                </div>
                <div class="medicine-item">
                    <h3>Atorvastatin</h3>
                    <p> Lowers cholesterol levels and reduces the risk of heart disease.</p>
                </div>
                <div class="medicine-item">
                    <h3>Ranitidine</h3>
                    <p>Treats and prevents ulcers in the stomach and intestines.</p>
                </div>
                <div class="medicine-item">
                    <h3>Clarithromycin</h3>
                    <P>Antibiotic used to treat bacterial infections like pneumonia and bronchitis.</P>
                </div>
                <div class="medicine-item">
                    <h3>Morphine</h3>
                    <p>Powerful pain reliever used to manage severe pain.</p>
                </div>
                <div class="medicine-item">
                    <h3>Albuterol</h3>
                    <p> Relieves bronchospasm associated with asthma and chronic obstructive pulmonary disease (COPD).</p>
                </div>
                <div class="medicine-item">
                    <h3>Insulin</h3>
                    <p>Hormone used to treat diabetes mellitus to control blood sugar levels.</p>
                </div>
                <div class="medicine-item">
                    <h3>Fluoxetine</h3>
                    <p>Antidepressant used to treat major depressive disorder, bulimia nervosa, and panic disorder.</p>
                </div>
                <div class="medicine-item">
                    <h3>Acetaminophen</h3>
                    <p>Used for pain relief and fever reduction, similar to paracetamol.</p>
                </div>
                <div class="medicine-item">
                    <h3>Aspirin</h3>
                    <p>Reduces pain, fever, inflammation, and prevents heart attacks and strokes by thinning the blood.</p>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 Medical Store. All rights reserved.</p>
        </div>
    </footer>

    <script>
        // JavaScript for filtering medicine items based on search input
        const searchInput = document.getElementById('searchInput');
        const medicineItems = document.querySelectorAll('.medicine-item');

        searchInput.addEventListener('input', function() {
            const searchTerm = searchInput.value.toLowerCase();

            medicineItems.forEach(item => {
                const text = item.textContent.toLowerCase();

                if (text.includes(searchTerm)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>
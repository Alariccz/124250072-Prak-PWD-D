<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <title> Smart Waste Management System</title>
</head>
<body>
    <div>
    <nav>
        <a href="index.html"><img src = "assets/logo2.jpeg" class="logo"></img></a>
        <input type="checkbox" id="menu-toggle">
        <label for="menu-toggle" class="hamburger">☰</label>
        <!-- <ul class="li-unused">
            <li><a href="index.html">Home</a></li>
            <li><a href="landing.html">Features</a></li>
            <li><a href="form.html">Register</a></li>
        </ul> -->
        <ul>
            <li><a href="fitur.html" class="get">Get Started</a></li>
            <li><a href="form.php" class="sign">Sign Up</a></li>
        </ul>
    </nav>
    </div>

    <div class="landing">
        <div class="success-icon">✓</div>
        <h1>Registration Successful</h1>
        <p>
            Thank you <b><?php echo $_GET['nama']; ?></b> for registering.<br>
            Your waste category: <b><?php echo $_GET['kategori']; ?></b><br>
            Selected package: <b><?php echo $_GET['paket']; ?></b>
        </p>

        <a href="index.html" class="btn-back">Back to Home</a>
    </div>

    <div class="cards">
        <div class="card">
            <h3>Real-Time Monitoring</h3>
            <p>Monitor waste levels and improve collection efficiency.</p>
        </div>

        <div class="card">
            <h3>IoT Integration</h3>
            <p>Smart bins connected with sensor technology.</p>
        </div>

        <div class="card">
            <h3>Eco Friendly</h3>
            <p>Reduce environmental impact with smart solutions.</p>
        </div>
    </div>
</body>

<footer>
    <div class="footer">
        <p>© 2026 Smart City Solutions</p>

        <div class="footerlink">
            <a href="index.html">Home</a>
            <a href="fitur.html">Features</a>
            <a href="form.php">Register</a>
        </div>
    </div>
</footer>
</html>
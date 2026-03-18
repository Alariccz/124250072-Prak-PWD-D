<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <title> Smart Waste Management System</title>
</head>
<body class="body2">
    <div>
    <nav>
        <a href="index.html"><img src = "assets/logo2.jpeg" class="logo"></img></a>
        <input type="checkbox" id="menu-toggle">
        <label for="menu-toggle" class="hamburger">☰</label>
        <!-- <ul class="li-unused">
            <li><a href="index.html">Home</a></li>
            <li><a href="landing.php">Features</a></li>
            <li><a href="form.php">Register</a></li>
        </ul> -->
        <ul>
            <li><a href="fitur.html" class="get">Get Started</a></li>
            <li><a href="form.php" class="sign">Sign Up</a></li>
        </ul>
    </nav>
    </div>
    <div class="form-container">
    <h1>Smart Waste Management Registration</h1>
    <p>Join us in building a waste-free and greener city.</p>

    <form action="proses.php" method="POST">

        <label>Company / User Name</label>
        <input type="text" placeholder="Enter your name or company name" name="nama" required>

        <label>Email Address</label>
        <input type="email" placeholder="Enter your email" name="email" required>

        <label>Password</label>
        <input type="password" placeholder="Create password" name="password" required>

        <label>Estimated Waste Capacity (kg/day)</label>
        <input type="number" placeholder="Enter capacity" name="capacity" required>

        <label>Service Package</label>
        <select name="package" required>
            <option value="">Select Package</option>
            <option>Basic Monitoring</option>
            <option>Smart Bin + Sensor</option>
            <option>Full IoT Integration</option>
        </select>

        <label>Membership Type</label>
        <div class="radio-group">
            <label class="radio-item">
                <input type="radio" name="member" value="Government" required>
                <span>Government</span>
            </label>

            <label class="radio-item">
                <input type="radio" name="member" value="Private Company">
                <span>Private Company</span>
            </label>
        </div>

        <div class="checkbox">
            <label class="checkbox-item">
                <input type="checkbox" required>
                <span>I agree to the terms and conditions</span>
            </label>
        </div>

        <div class="buttons">
            <button type="submit">Submit</button>
            <button type="reset">Reset</button>
        </div>
    </form>
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
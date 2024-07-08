<!DOCTYPE html>
<html>
<head>
<title>Services</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/service.css">
</head>
<style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f9f9f9; /* Light gray */
        }
        .banner {
            background-color: #003366; /* Dark blue */
            color: #fff;
            text-align: center;
            padding: 20px;
        }
        .navbar {
            background-color: #333; /* Dark gray */
            padding: 10px 0;
			display: flex;
			justify-content: center;
			align-items :center;		
        }
        .navbar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        .navbar li {
            display: inline;
            margin: 0 10px;
        }
        .navbar li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
        }
        .navbar li a:hover {
            text-decoration: underline;
        }
        .content {
            padding: 20px;
            text-align: center;
        }
        h1 {
            font-size: 36px;
            margin-bottom: 20px;
        }
        p {
            font-size: 18px;
            margin-bottom: 20px;
        }
        .diagrams {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-top: 30px;
        }
        .diagram {
            width: 30%;
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #fff;
            text-align: center;
            transition: transform 0.3s ease-in-out;
        }
        .diagram h3 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        .diagram img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            transition: transform 0.3s ease-in-out;
        }
        .diagram:hover {
            transform: translateY(-5px);
        }
        .diagram:hover img {
            transform: scale(1.05);
        }
        .label {
            font-size: 16px;
            font-weight: bold;
            margin-top: 10px;
            color: #003366; /* Dark blue */
        }
    </style>
<body>
<div class="navbar">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="contacts.php">Contacts</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="products.php">Products</a></li>
            </ul>
        </div>
	<header>
		<h1><u>Our Services</u></h1>
	</header>
	
	<main>
		<section id="services">
			<div class="container">
				<div class="row">
					<div class="col-sm">
							<h2>Football Training</h2>
							<p>We offer professional football training for players of all ages and skill levels. Our experienced coaches will help you improve your skills, build your confidence, and reach your full potential.</p>
					</div>
					<div class="col-sm">
							<h2>Football Equipment</h2>
							<p>We offer a wide range of high-quality football equipment, including balls, shoes, jerseys, and more. Our equipment is designed to help you perform at your best and stay safe on the field.</p>

					</div>
					<div class="col-sm">
							<h2>Football Events</h2>
						
							<p>We organize and host football events, such as tournaments, leagues, and camps. Our events are a great way to meet other football enthusiasts, compete against other teams, and have fun.</p>
					</div>
				</div>
				<div class="body">
			
				</div>
			</div>
			
			</div>
		</section>
	</main>
	<footer>
		<p>&copy; 2023 Football Company</p>
	</footer>
	<script src="script.js"></script>
</body>
</html>
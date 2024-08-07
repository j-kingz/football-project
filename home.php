<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elite Kickers Academy</title>
    <link rel="stylesheet" href="home.css">
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
</head>
<body>
<div class="banner">
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
        <div class="content">
            <h1>ELITE KICKERS ACADEMY</h1>
            <p>Subscribe to YouTube for more content.</p><p><br> Below is a video showing the life of a young football player in our academy</br></p>
            <details>
                <summary class="dropdown-toggle"><span class="link-icon"></span>You tube Link</summary>
                <video controls autoplay  ="images/y2mate.com - Football Dreams The Academy Channel 4 trailer_720p.mp4" width="500">
                    <source src="images/y2mate.com - Football Dreams The Academy Channel 4 trailer_720p.mp4">
                </video>
            </details>
        
            <div class="diagrams">
                <div class="diagram">
                    <h3>Tactics</h3>
                    <img src="images/ball.jpg" alt="Tactics ">
                    <div class="label">Tactics Section</div>
                </div>
                <div class="diagram">
                    <h3>Skills Training</h3>
                    <img src="images/shoe.jpg" alt="Skills Training ">
                    <div class="label">Skills Training Section</div>
                </div>
                <div class="diagram">
                    <h3>Goalkeeping</h3>
                    <img src="images/success.jpg" alt="Success">
                    <div class="label">Goalkeeping Section</div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="comment-section">
    <h2>Comments</h2>
        <div class="comments">
            <!-- Comments will be loaded dynamically using JavaScript -->
        </div>
        <div class="comment-form">
            <form id="commentForm">
                <textarea id="commentText" placeholder="Write your comment here..." required></textarea>
                <br>
                <input type="submit" value="Post Comment">
            </form>
        </div>
        
    </div>
   
   <footer>&copy; 2024 Football Company. All rights reserved.</footer>


    
   
</body>
</html>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elite Kickers Academy - Contacts</title>
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
        .contact {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
            text-align: left;
        }
        .contact p {
            font-size: 16px;
            margin-bottom: 10px;
        }
        .contact h3 {
            color: #003366; /* Dark blue */
        }
    </style>
</head>

<?php require_once("sql/connection.php")?>

<body>
    <div class="banner">
        <div class="navbar">
            <ul>
                <li><a href="home.html">Home</a></li>
                <li><a href="contacts.html">Contacts</a></li>
                <li><a href="comments.html">Comments</a></li>
                <li><a href="about.html">About</a></li>
            </ul>
        </div>
        <div class="content">
            <h1>Contacts</h1>
            <div class="contact">
                <h3>General Inquiries</h3>
                <p>Email: info@elitekickers.com</p>
                <p>Phone: +1 (123) 456-7890</p>
            </div>
            <div class="contact">
                <h3>Media Enquiries</h3>
                <p>Email: media@elitekickers.com</p>
                <p>Phone: +1 (123) 456-7891</p>
            </div>
            <!-- Add more contacts as needed -->
        </div>
    </div>
</body>
</html>

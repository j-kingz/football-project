<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELITE KICKERS Academy</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        .banner {
            background-image: url('images/tactics.jpg'); 
            background-size: cover;
            color: #fff;
            text-align: center;
            padding: 20px;
        }
        .container {
            background-color: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            color: #fff; /* Text color white */
            margin-bottom: 30px;
        }
        .input-group {
            margin-bottom: 20px;
            text-align: left;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        .check {
            margin-bottom: 20px;
            text-align: left;
        }
        .check input[type="checkbox"] {
            margin-right: 10px;
        }
        button[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #003366; /* Dark blue */
            color: #fff;
            font-size: 18px;
            cursor: pointer;
        }
        button[type="submit"]:hover {
            background-color: #002245; /* Darker blue */
        }
        .linker {
            margin-top: 10px;
            text-align: left;
        }
        .linker a {
            color: #003366; /* Dark blue */
            text-decoration: none;
        }
        .linker a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="banner">
        <h1>ELITE KICKERS ACADEMY</h1>
    </div>
    <div class="container">
        <h1>Login</h1>
        <form>
            <div class="input-group">
                <input type="text" placeholder="Username" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" required>
            </div>
            <div class="check">
                <input type="checkbox" id="remember"><label for="remember">Remember me</label>
            </div>
            <div class="linker">
                <p><a href="#">Forgot password</a></p>
            </div>
            <button class="bg-primary" type="submit">Login</button>
            <div>
                <p><a href="register.php">Sign up</a></p>
            </div>
        </form>
    </div>
</body>
</html>

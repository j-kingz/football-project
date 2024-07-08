<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="css/products.css">
</head>
<body>
    <div class="header">
        <h1>ELITE KICKERS ACADEMY</h1>
    </div>
    
    <div class="content-1">
        <h2>What We Offer:</h2>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Service</th>
                        <th>Description</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Coaching Sessions</td>
                        <td>Professional coaching for all age groups.</td>
                        <td>$50 per session</td>
                    </tr>
                    <tr>
                        <td>Equipment Rental</td>
                        <td>Rent football equipment for personal or team use.</td>
                        <td>$30 per day</td>
                    </tr>
                    <tr>
                        <td>Field Booking</td>
                        <td>Book our state-of-the-art football fields.</td>
                        <td>$100 per hour</td>
                    </tr>
                    <tr>
                        <td>Team Building Events</td>
                        <td>Organize corporate team building activities.</td>
                        <td>$500 per event</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div> 
<div class="content-2">
    <h3>Service Details Form</h3>
    <form action="/submit_service" method="post">
    <form action="">
        <div class="inputs">
            <label for="service">Service:
                <select name="service" id="service">
                    <option value="Coaching Sessions">Couching sessions</option>
                    <option value="Equipment Rental">Equipment Rental</option>
                    <option value="Field Booking">Field Booking</option>
                    <option value="Team Building Events">Team Building Events</option>
                </select>
            </label>
        </div>
    
        <div class="inputs">
            <label for="price" name="price">
                Price:
                <select name="price" id="price">
                    <option value="50">50$</option>
                    <option value="50">30$</option>
                    <option value="50">100$</option>
                    <option value="50">500$</option>
                </select>
    
            </label>
        </div>
        
        <button name="submit"> Send</button>
        
        
    </form>
    </form>
</div>
<div class="footer">
    <p>&copy; 2024 Football Company. All rights reserved.</p>
</div>
</body>
</html>

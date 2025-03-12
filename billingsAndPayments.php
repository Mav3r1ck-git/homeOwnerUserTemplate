<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billing & Payment</title>

    <style>
        :root {
            --brown: #8B4513;
            --light-brown: #A0522D;
            --dark-brown: #654321;
            --beige: #F5F5DC;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: var(--beige);
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            display: flex;
        }

        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: var(--brown);
            color: white;
            padding: 20px;
            position: fixed;
            left: 0;
            top: 0;
            display: flex;
            flex-direction: column;
        }

        .sidebar .logo {
            background-color: var(--light-brown);
            text-align: center;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            margin: 8px 0;
            display: block;
        }

        .sidebar a:hover {
            text-decoration: underline;
        }

        .content {
            margin-left: 270px;
            padding: 20px;
            width: 100%;
        }

        .billing-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .billing-header {
            text-align: center;
            font-size: 1.5rem;
            font-weight: bold;
            color: var(--brown);
            margin-bottom: 20px;
        }

        .billing-form label {
            display: block;
            margin-bottom: 8px;
            color: var(--dark-brown);
        }

        .billing-form input, .billing-form select {
            width: 97%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid var(--dark-brown);
            border-radius: 5px;
        }

        .billing-form button {
            background-color: var(--light-brown);
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        .billing-form button:hover {
            background-color: var(--brown);
        }
    </style>
</head>
<body>

    <!-- Sidebar Navigation -->
    <div class="sidebar">
        <div class="logo">Logo and Name of the Website</div>
        <a href="home.php">Home</a>
        <a href="calendar.php">Calendar</a>
        <a href="community.php">Community Forum</a>
        <a href="#">Contact Directories</a>
        <hr>
        <a href="#">Billings & Payment</a>
        <a href="#">Facility Reservation</a>
        <a href="#">Service Request</a>
        <a href="#">Documents</a>
        <a href="#">Visitor Pass Request</a>
        <a href="#">Vehicle Registration</a>
    </div>

    <div class="content">
        <div class="billing-container">
            <div class="billing-header">Billing & Payment</div>
            <form class="billing-form">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>

                <label for="payment">Service Type</label>
                <select id="payment" name="payment">
                    <option value=""></option>
                    <option value="Home Maintenance">Home Maintenance</option>
                    <option value="ome Remodeling">Home Remodeling</option>
                    <option value="Plumbing">Plumbing</option>
                    <option value="Carpet Cleaning">Carpet Cleaning</option>
                    <option value="Home Cleaning">Home Cleaning</option>
                    <option value="Electrical">Electrical</option>
                </select>

                <label for="payment">Payment Method</label>
                <select id="payment" name="payment">
                    <option value="credit">Credit Card</option>
                    <option value="paypal">PayPal</option>
                    <option value="bank">Bank Transfer</option>
                </select>

                <label for="amount">Amount</label>
                <input type="number" id="amount" name="amount" required>

                <label for="cardNumber">Card Number</label>
                <input type="text" id="cardNumber" name="cardNumber" required>

                <label for="VCC">VCC</label>
                <input type="text" id="VCC" name="VCC" required>

                <button type="submit">Submit Payment</button>
            </form>
        </div>
    </div>

</body>
</html>
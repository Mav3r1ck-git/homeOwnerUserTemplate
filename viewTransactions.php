<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Transactions</title>

    <style>
        :root {
            --brown: #8B4513;
            --light-brown: #A0522D;
            --dark-brown: #654321;
            --beige: #F5F5DC;
            --completed: #4CAF50;
            --not-completed: #D9534F;
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
            margin-left: 280px; /* Increased margin to add spacing */
            padding: 20px; /* Added padding to prevent text from sticking */
            width: 100%;
        }

        .table-container {
            background-color: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            text-align: center;
            padding: 12px;
            border: 1px solid var(--brown);
        }

        th {
            background-color: var(--brown);
            color: white;
        }

        .completed {
            background-color: var(--completed);
            color: white;
            border-radius: 4px;
            padding: 4px 10px;
        }

        .not-completed {
            background-color: var(--not-completed);
            color: white;
            border-radius: 4px;
            padding: 4px 10px;
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

    <!-- Content -->
    <div class="content">
        <div class="table-container">
            <h2>Transaction History</h2>
            <table>
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Type of Service</th>
                        <th>Staff Assigned</th>
                        <th>Paid Amount</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2025-03-10</td>
                        <td>Facility Reservation</td>
                        <td>John Doe</td>
                        <td>₱1,500</td>
                        <td class="completed">Completed</td>
                    </tr>
                    <tr>
                        <td>2025-03-05</td>
                        <td>Billings & Payment</td>
                        <td>Jane Smith</td>
                        <td>₱2,200</td>
                        <td class="not-completed">Not Completed</td>
                    </tr>
                    <tr>
                        <td>2025-02-28</td>
                        <td>Service Request</td>
                        <td>David Clark</td>
                        <td>₱800</td>
                        <td class="completed">Completed</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar (Events)</title>

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

        .calendar-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .calendar-header {
            text-align: center;
            font-size: 1.5rem;
            font-weight: bold;
            color: var(--brown);
            margin-bottom: 20px;
        }

        .calendar table {
            width: 100%;
            border-collapse: collapse;
        }

        .calendar th, .calendar td {
            text-align: center;
            padding: 15px;
            border: 1px solid var(--brown);
        }

        .calendar th {
            background-color: var(--brown);
            color: white;
        }

        .calendar .today {
            background-color: var(--light-brown);
            color: white;
            border-radius: 70%;
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
        <div class="calendar-container">
            <div class="calendar-header"><u>Calendar Events</u> <br> March 2025</div>
            <div class="calendar">
                <table>
                    <thead>
                        <tr>
                            <th>Su</th>
                            <th>Mo</th>
                            <th>Tu</th>
                            <th>We</th>
                            <th>Th</th>
                            <th>Fr</th>
                            <th>Sa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class=></td>
                            <td class=></td>
                            <td class=></td>
                            <td class=></td>
                            <td class=></td>
                            <td class=></td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                            <td>5</td>
                            <td>6</td>
                            <td>7</td>
                            <td>8</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>10</td>
                            <td>11</td>
                            <td class="today">12</td>
                            <td>13</td>
                            <td>14</td>
                            <td>15</td>
                        </tr>
                        <tr>
                            <td>16</td>
                            <td>17</td>
                            <td>18</td>
                            <td>19</td>
                            <td>20</td>
                            <td>21</td>
                            <td>22</td>
                        </tr>
                        <tr>
                            <td>23</td>
                            <td>24</td>
                            <td>25</td>
                            <td>26</td>
                            <td>27</td>
                            <td>28</td>
                            <td>29</td>
                        </tr>
                        <tr>
                            <td>30</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>
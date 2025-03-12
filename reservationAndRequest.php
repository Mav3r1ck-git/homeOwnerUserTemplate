<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservations & Requests</title>
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
            margin: 10px 0;
            display: block;
            padding: 8px;
            border-radius: 5px;
        }

        .sidebar a:hover {
            background-color: var(--dark-brown);
        }

        .content {
            margin-left: 270px;
            padding: 20px;
            width: 100%;
        }

        .form-container {
            background-color: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: auto;
        }

        label, select, input, textarea {
            display: block;
            width: 100%;
            margin-bottom: 10px;
        }

        .hidden {
            display: none;
        }

        .availability-table {
            margin-top: 20px;
            border-collapse: collapse;
            width: 100%;
        }

        .availability-table th, .availability-table td {
            border: 1px solid var(--brown);
            padding: 8px;
            text-align: center;
        }

        .availability-table th {
            background-color: var(--brown);
            color: white;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="logo">Website Name</div>
        <a href="home.html">Home</a>
        <a href="calendar.html">Calendar</a>
        <a href="community.html">Community Forum</a>
        <a href="contact.html">Contact Directories</a>
        <hr>
        <a href="billing.html">Billings & Payment</a>
        <a href="reservationsAndRequests.html">Facility Reservation</a>
        <a href="services.html">Service Request</a>
        <a href="documents.html">Documents</a>
        <a href="visitorPass.html">Visitor Pass Request</a>
        <a href="vehicleReg.html">Vehicle Registration</a>
    </div>

    <div class="content">
        <div class="form-container">
            <h2>Reservations & Service Requests</h2>
            <label for="requestType">Choose Request Type:</label>
            <select id="requestType">
                <option value="">Select an option</option>
                <option value="reservation">Facility Reservation</option>
                <option value="service">Service Request</option>
            </select>

            <div id="reservationOptions" class="hidden">
                <label for="facility">Choose a Facility:</label>
                <select id="facility">
                    <option>Swimming Pool A</option>
                    <option>Swimming Pool B</option>
                    <option>Function Halls</option>
                    <option>Sports Court</option>
                </select>

                <label for="schedule">Choose a Schedule:</label>
                <select id="schedule">
                    <option>March 15, 2025 - 10:00 AM - 12:00 PM</option>
                    <option>March 15, 2025 - 1:00 PM - 3:00 PM</option>
                    <option>March 16, 2025 - 9:00 AM - 11:00 AM</option>
                    <option>March 16, 2025 - 2:00 PM - 4:00 PM</option>
                    <option>March 17, 2025 - 10:00 AM - 12:00 PM</option>
                    <option>March 17, 2025 - 3:00 PM - 5:00 PM</option>
                </select>
            </div>


            <div id="serviceOptions" class="hidden">
                <label for="service">Choose a Service:</label>
                <select id="service">
                    <option>Electric</option>
                    <option>Plumbing</option>
                    <option>Carpet Cleaning</option>
                    <option>Window Cleaning</option>
                    <option>Painting</option>
                    <option>Appliance Repair</option>
                    <option>Carpentry</option>
                    <option>Roofing</option>
                    <option>General Home Maintenance</option>
                    <option>Junk Removal</option>
                </select>

                <label for="schedule">Choose a Schedule:</label>
                <select id="schedule">
                    <option>March 15, 2025 - 10:00 AM - 12:00 PM</option>
                    <option>March 15, 2025 - 1:00 PM - 3:00 PM</option>
                    <option>March 16, 2025 - 9:00 AM - 11:00 AM</option>
                    <option>March 16, 2025 - 2:00 PM - 4:00 PM</option>
                    <option>March 17, 2025 - 10:00 AM - 12:00 PM</option>
                    <option>March 17, 2025 - 3:00 PM - 5:00 PM</option>
                </select>
            </div>

            <button type="submit">Submit</button>
        </div>
    </div>

    <script>
        document.getElementById('requestType').addEventListener('change', function() {
            let reservationDiv = document.getElementById('reservationOptions');
            let serviceDiv = document.getElementById('serviceOptions');
            if (this.value === 'reservation') {
                reservationDiv.classList.remove('hidden');
                serviceDiv.classList.add('hidden');
            } else if (this.value === 'service') {
                serviceDiv.classList.remove('hidden');
                reservationDiv.classList.add('hidden');
            } else {
                reservationDiv.classList.add('hidden');
                serviceDiv.classList.add('hidden');
            }
        });
    </script>
</body>
</html>

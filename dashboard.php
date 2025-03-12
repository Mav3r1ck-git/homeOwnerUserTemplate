<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        display: flex;
        min-height: 100vh;
        flex-direction: column;
    }

    .container {
        display: flex;
        flex-grow: 1;
        padding:0;
    }

    .sidebar {
        width: 250px;
        background-color: #8B4513; /* Brown */
        color: #fff;
        padding: 20px;
    }

    .sidebar .logo {
        background-color: #A0522D; /* Light Brown */
        padding: 15px;
        text-align: center;
        border-radius: 8px;
        margin-bottom: 20px;
    }

    .sidebar a {
        color: #fff;
        text-decoration: none;
        display: block;
        padding: 10px 0;
    }

    .sidebar a:hover {
        text-decoration: underline;
    }

    .main-content {
        flex-grow: 1;
        padding: 20px;
    }

    .announcements {
        background-color: #F5F5DC; /* Beige */
        padding: 20px;
        border-radius: 8px;
    }

    footer {
        background-color: #fff;
        text-align: center;
        padding: 10px 0;
        border-top: 1px solid #ddd;
        width: 100%;
    }
</style>

<div class="container">
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="logo">Logo and Name of the Website</div>
        <a href="#">Home</a>
        <a href="#">Calendar</a>
        <a href="#">Community Forum</a>
        <a href="#">Contact Directories</a>
        <hr>
        <a href="#">Billings & Payment</a>
        <a href="#">Facility Reservation</a>
        <a href="#">Service Request</a>
        <a href="#">Documents</a>
        <a href="#">Visitor Pass Request</a>
        <a href="#">Vehicle Registration</a>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="announcements">
            <h2>Announcements</h2>
            <p>Announcements here</p>
        </div>
    </div>
</div>

<footer>
    &copy; 2025 - HomeOwners - <a href="#">Privacy</a>
</footer>

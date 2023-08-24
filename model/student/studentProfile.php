<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/images/favicon.png" rel="icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <link rel="stylesheet" href="../../assets/css/profile.css">
    <title>Student Profile</title>
</head>

<body>
    <nav class="sidebar" id="sidebar">
        <ul>
            <li><a href="#" class="active"><i class="fas fa-home"></i> Dashboard</a></li>
            <li><a href="./studentPersonalDetails"><i class="fas fa-user"></i> Personal Details</a></li>
            <li>
                <a href="#" class="dropdown-link"><i class="fas fa-graduation-cap"></i> Academic Details <i
                        class="fa fa-chevron-left" id="dropdown-i" aria-hidden="true"></i></a>
                <ul class="dropdown-sidebar">
                    <li><a href="#">Current Subjects Offered</a></li>
                    <li><a href="#">Term Results</a></li>
                </ul>
            </li>
            <li><a href="#"><i class="fas fa-money-bill"></i> Finance</a></li>
        </ul>
    </nav>


    <header class="profile-header">
        <div class="sidebar-toggle" id="sidebarToggle">
            <i class="fas fa-bars"></i>
        </div>
        <img src="../../assets/images/logo.png" alt="School Logo" class="logo">
        <div class="student-info">
            <span class="student-name">John Doe</span>
            <div class="dropdown">
                <button class="dropbtn">
                    <img src="../../assets/images/demo-image.jpg" alt="Demo Image" class="demo-image">
                    <i class="fas fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="#"><i class="fas fa-key"></i> Change Password</a>
                    <a href="#"><i class="fas fa-sign-out-alt"></i> Log Out</a>
                </div>
            </div>
        </div>
    </header>

    <div class="notification-box" id="notification-box">
        <h2 class="notification-heading">NOTIFICATION</h2>
        <table class="timetable">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Notice</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="notification-title">Notification 1</td>
                    <td class="notification-notice">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
                </tr>
                <tr>
                    <td class="notification-title">Notification 2</td>
                    <td class="notification-notice">Nulla ac justo hendrerit.</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Profile content goes here -->

    <script src="../../assets/js/studentProfile.js"></script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../assets/images/favicon.png" rel="icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <link rel="stylesheet" href="../../assets/css/profile.css">
    <title>Student Result</title>
</head>

<body>
    <nav class="sidebar sidebar-dropdown" id="sidebar">
        <ul>
            <li><a href="./studentProfile"><i class="fas fa-home"></i> Dashboard</a></li>
            <li><a href="./studentPersonalDetails"><i class="fas fa-user"></i> Personal Details</a></li>
            <li>
                <a href="#" class="dropdown-link"><i class="fas fa-graduation-cap"></i> Academic Details <i
                        class="fa fa-chevron-down" id="dropdown-i" aria-hidden="true"></i>
                    <ul class="dropdown-sidebar active">
                        <li><a href="./studentSubjectOffered"><i class="fas fa-book-open"></i> Current Subjects
                                Offered</a></li>
                        <li><a href="./studentResults" class="active"><i class="fas fa-file"></i> Results</a></li>
                    </ul>
            </li>
            <li>
                <a href="#" class="finance-dropdown-link"><i class="fas fa-money-bill"></i> Finance <i
                        class="fa fa-chevron-down" id="dropdown-fi" aria-hidden="true"></i>
                    <ul class="finance-dropdown-sidebar active">
                        <li><a href="#"><i class="fas fa-book-open"></i> Finance Statement Offered</a></li>
                        <li><a href="#"><i class="fas fa-file"></i> Current Charges</a></li>
                        <li><a href="#"><i class="fas fa-credit-card"></i> Make payment</a></li>
                        <li><a href="#"><i class="fas fa-file-alt"></i> Financial Clearance</a></li>
                        <li><a href="#"><i class="fas fa-receipt"></i> Print Receipt</a></li>
                    </ul>
            </li>
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

    <div class="student-details-box" id="student-details-box">
        <div class="navbar-box">
            <h2 class="navbar-heading">Term List</h2>
        </div>
        <h2 class="student-details-heading">TERM LIST
            <div class="table-buttons">
                <button class="refresh-button" id="refresh-button"><i class="fas fa-sync-alt"></i> Refresh</button>
                <button class="excel-button"><i class="fas fa-file-excel"></i> Excel</button>
                <button class="pdf-button"><i class="fas fa-file-pdf"></i> Pdf</button>
            </div>
        </h2>
        <div id="refresh-content">
            <table class="student-details-table">
                <thead>
                    <tr>
                        <th>Term</th>
                        <th>Class</th>
                        <th>Position</th>
                        <th>Avg (%)</th>
                        <th>C.Avg (%)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr data-href="./studentTermResult">
                        <td><a href="./studentTermResult" class="td-link">First Term</a></td>
                        <td>JSS 1</td>
                        <td>2nd</td>
                        <td>93</td>
                        <td>93</td>
                    </tr>
                    <tr data-href="./studentTermResult">
                        <td><a href="./studentTermResult" class="td-link">Second Term</a></td>
                        <td>JSS 1</td>
                        <td>1st</td>
                        <td>94</td>
                        <td>93.5</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
    <!-- Profile content goes here -->

    <script src="../../assets/js/studentProfile.js"></script>

</body>

</html>
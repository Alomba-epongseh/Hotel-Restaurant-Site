><?php

session_start(); 

if (isset($_SESSION['Id']) && isset($_SESSION['user_name'])) {

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body class="bdy">
    <div class="container-fluid bg-dark px-0" style="margin-top: 10;">
        <div class="row gx-0">
            <div class="col-lg-3 bg-dark d-none d-lg-block">
                <a href="index.html" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                    <h1 class="m-0 text-primary text-uppercase">Vanillier</h1>
                </a>
            </div>
        </div>
    </div>
    <div class="d-flex">
        <div class="container-fluid m-0 col-lg-6" style="width: 15%; background: linear-gradient(rgba(157, 201, 251, 0.401),rgba(157, 201, 251, 0.401))">
            <div class="sidebar navbar-nav mr-auto py-0">
                <a href="addmenu.html" class="nav-item nav-link ">MENU</a>
                <a href="addroom.html" class="nav-item nav-link ">ROOMS</a>
                <a href="addrestaustaff.html" class="nav-item nav-link">RESTAU STAFF</a>
                <a href="addhotelstaff.html" class="nav-item nav-link">HOTEL STAFF</a>
                <a href="addrestauservices.html" class="nav-item nav-link">RESTAU SERVICES</a>
                <a href="addhotelservices.html" class="nav-item nav-link">HOTEL SERVICES</a>
                <a href="restaureservations.html" class="nav-item nav-link">RESTAU RESERVATIONS</a>
                <a href="hotelreservations.html" class="nav-item nav-link">HOTEL RESERVATIONS</a>
                <div >
                    <a href="logout.php" class="btn btn-danger text-uppercase mt-5" >Logout</a>
                </div>
            </div>
        </div>
    
        <div class="container-fluid col-lg-6">
            <div class="admindashboard">
               <p style="text-align: center; padding: 30px;">
                    <h1> WELCOME TO THE ADMIN'S DASHBOARD.</h1>
               </p>
            </div>
        
            
        </div>
    </div>
    



    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
</body>
</html>

<?php
}
else{

    header("Location: indexlogin.php");

    exit();
}
?>
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
    <link href="img/logo.png" rel="icon">

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
<body class="bdy" style="background: linear-gradient(rgba(128, 128, 128, 0.43),rgba(128, 128, 128, 0.43)),url(img/hotelview.jpg); background-size: contain; ">
    <div class="container-fluid bg-dark px-0 m-0">
        <div class="row gx-0">
            <div class="col-lg-3 bg-dark d-none d-lg-block">
                <a href="index.php" class="navbar-brand d-flex ms-2 p-1 ">
                    <img src="img/logo.png" alt="" class="image image-fluid" style="width: 50px; height: 50px;" >
                    <h1 class="ms-4 text-primary text-uppercase">Vanillier</h1>
                </a>
            </div>
        </div>
    </div>
    <div class="container-fluid d-flex" style="height: 100vh" >
        <div class="m-0 col-lg-6" style="width: 15%; background: linear-gradient(rgba(157, 201, 251, 0.401),rgba(157, 201, 251, 0.401))">
            <div class="sidebar navbar-nav mr-auto p-2">
                <a href="addmenu.php" class="nav-item nav-link ">MENU</a>
                <a href="addroom.php" class="nav-item nav-link active ">ROOMS</a>
                <a href="addrestaustaff.php" class="nav-item nav-link">RESTAU STAFF</a>
                <a href="addhotelstaff.php" class="nav-item nav-link">HOTEL STAFF</a>
                <a href="addrestauservices.php" class="nav-item nav-link">RESTAU SERVICES</a>
                <a href="addhotelservices.php" class="nav-item nav-link">HOTEL SERVICES</a>
                <a href="restaureservations.php" class="nav-item nav-link">RESTAU RESERVATIONS</a>
                <a href="hotelreservations.php" class="nav-item nav-link">HOTEL RESERVATIONS</a>
                <a href="logout.php" class="btn btn-danger text-uppercase mt-5 justify-content-end" >Logout</a>
            </div>
        </div>
    
        <div class="container-fluid col-lg-6">
            <div class="admindashboard text-center align-item-center">
               <p style="text-align: center; padding: 30px;">
                    <h1 class="text-center"> WELCOME TO THE ADMIN'S DASHBOARD.</h1>
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
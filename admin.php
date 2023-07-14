<?php

session_start(); 

if (isset($_SESSION['Id']) && isset($_SESSION['user_name'])) {

?>
<?php

include_once "db.php";
$conn=openconn();

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
        <div class="m-0 col-lg-4" style="width: 15%; background: linear-gradient(rgba(157, 201, 251, 0.401),rgba(157, 201, 251, 0.401))">
            <div class="sidebar navbar-nav mr-auto p-2">
                <a href="admin.php?addmenu" class="nav-item nav-link ">MENU</a>
                <a href="admin.php?viewmenu" class="nav-item nav-link ">VIEW MENU</a>
                <a href="admin.php?addroom" class="nav-item nav-link active ">ROOMS</a>
                <a href="admin.php?viewrooms" class="nav-item nav-link active ">VIEW ROOMS</a>
                <a href="admin.php?addrestaustaff" class="nav-item nav-link">RESTAU STAFF</a>
                <a href="admin.php?viewrestaustaff" class="nav-item nav-link">VIEW RESTAU STAFF</a>
                <a href="admin.php?addhotelstaff" class="nav-item nav-link">HOTEL STAFF</a>
                <a href="admin.php?viewhotelstaff" class="nav-item nav-link">VIEW HOTEL STAFF</a>
                <a href="admin.php?addrestauservices" class="nav-item nav-link">RESTAU SERVICES</a>
                <a href="admin.php?addhotelservices" class="nav-item nav-link">HOTEL SERVICES</a>
                <a href="admin.php?restaureservations" class="nav-item nav-link">RESTAU RESERVATIONS</a>
                <a href="admin.php?hotelreservation" class="nav-item nav-link">HOTEL RESERVATIONS</a>
                <a href="admin.php?logout" class="btn btn-danger text-uppercase mt-5 justify-content-end" >Logout</a>
            </div>
        </div>
    
        <div class="container-fluid col-lg-8">
            

            <?php

                if (isset($_GET['addmenu'])) {
                   include_once "addmenu.php";
                }
                elseif (isset($_GET['addroom'])) {
                    include_once "addroom.php";
                }
                elseif (isset($_GET['addrestaustaff'])) {
                    include_once "addrestaustaff.php";
                }
                elseif (isset($_GET['addhotelstaff'])) {
                    include_once "addhotelstaff.php";
                }
                elseif (isset($_GET['addrestauservices'])) {
                    include_once "addrestauservices.php";
                }
                elseif (isset($_GET['addhotelservices'])) {
                    include_once "addhotelservices.php";
                }
                elseif (isset($_GET['restaureservations'])) {
                    include_once "restaureservations.php";
                }
                elseif (isset($_GET['hotelreservation'])) {
                    include_once "hotelreservations.php";
                }
                elseif (isset($_GET['viewhotelstaff'])) {
                    include_once "viewhotelstaff.php";
                }
                elseif (isset($_GET['viewrestaustaff'])) {
                    include_once "viewrestaustaff.php";
                }
                elseif (isset($_GET['viewrooms'])) {
                    include_once "viewrooms.php";
                }
                elseif (isset($_GET['viewmenu'])) {
                    include_once "viewmenu.php";
                }
                elseif (isset($_GET['delete_hotelstaff'])) {
                    include_once "delete_hotelstaff.php";
                }
                elseif (isset($_GET['delete_restaustaff'])) {
                    include_once "delete_restaustaff.php";
                }
                elseif (isset($_GET['delete_menu'])) {
                    include_once "delete_menu.php";
                }
                elseif (isset($_GET['delete_room'])) {
                    include_once "delete_room.php";
                }
                elseif (isset($_GET['edit_room'])) {
                    include_once "edit_room.php";
                }
                elseif (isset($_GET['edit_menu'])) {
                    include_once "edit_menu.php";
                }
                elseif (isset($_GET['edit_hotelstaff'])) {
                    include_once "edit_hotelstaff.php";
                }
                elseif (isset($_GET['edit_restaustaff'])) {
                    include_once "edit_restaustaff.php";
                }
                elseif (isset($_GET['logout'])) {
                    include_once "logout.php";
                }
                else {
                    echo "
                    <div class='admindashboard text-center align-item-center'>
                    <p style='text-align: center; padding: 30px;'>
                         <h1 class='text-center'> WELCOME TO THE ADMIN'S DASHBOARD.</h1>
                    </p>
                 </div>
                    ";
                }
            ?>
        
            
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
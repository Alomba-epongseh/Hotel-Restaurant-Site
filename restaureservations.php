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
        <div class="container-fluid d-flex">
            <div class="container-fluid m-0 col-lg-6" style="width: 15%; background: linear-gradient(rgba(157, 201, 251, 0.401),rgba(157, 201, 251, 0.401));">
                <div class="sidebar navbar-nav mr-auto py-0">
                <a href="addmenu.php" class="nav-item nav-link active ">MENU</a>
                <a href="addroom.php" class="nav-item nav-link ">ROOMS</a>
                <a href="addrestaustaff.php" class="nav-item nav-link">RESTAU STAFF</a>
                <a href="addhotelstaff.php" class="nav-item nav-link">HOTEL STAFF</a>
                <a href="addrestauservices.php" class="nav-item nav-link">RESTAU SERVICES</a>
                <a href="addhotelservices.php" class="nav-item nav-link">HOTEL SERVICES</a>
                <a href="restaureservations.php" class="nav-item nav-link">RESTAU RESERVATIONS</a>
                <a href="hotelreservations.php" class="nav-item nav-link">HOTEL RESERVATIONS</a>
                <a href="logout.php" class="btn btn-danger text-uppercase mt-5 justify-content-end" >Logout</a>
                </div>
            </div>
    
        <div class="container-fluid col-lg-6" style="width: 80%; align_item: center;">
            <div class="form bg-light align-item-center" style="text_align: center;">
               <h2 style="text-align: center; padding: 5px;"> WELCOME TO THE HOTEL'S RESERVATIONS.</h2>
                <?php            

                    getbook();
                
                ?>

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



function getbook(){

    global $conn;

    $conn = new mysqli("localhost", "Vanilla", "Vanibelle", "vanillier");

    $getbook = "SELECT * from tablebooking order by RAND() limit 0,6";
    $runbook = mysqli_query($conn, $getbook) or die ('Error: '. mysqli_error($con));

                        echo "
                        
                        <table style='margin-left: 1%; margin-right: 1%; margin-top: 1%; width: 98%'>
                        <tr class='table' style='text_align: center; border: 2px solid black; padding-top: 20px; padding-bottom:20px;'>

                            <th style='text_align: center; border: 2px solid black; padding-top: 20px; padding-bottom:20px; width: 5%;'>ID</th>
                            <th style='text_align: center; border: 2px solid black; padding-top: 20px; padding-bottom:20px; width: 15%;'>Full Name</th>
                            <th style='text_align: center; border: 2px solid black; padding-top: 20px; padding-bottom:20px; width: 25%;'>Email</th>
                            <th style='text_align: center; border: 2px solid black; padding-top: 20px; padding-bottom:20px; width: 15%;'>Date And Time</th>
                            <th style='text_align: center; border: 2px solid black; padding-top: 20px; padding-bottom:20px; width: 5%;'>People</th>
                            <th style='text_align: center; border: 2px solid black; padding-top: 20px; padding-bottom:20px; width: 20%;'>Special Requst</th>
                        
                            </tr>
        
                        </table>

                        ";

    while($row_book = mysqli_fetch_array($runbook)){

        $book_id = $row_book['Id'];
        $book_fullname = $row_book['Full_Name'];
        $book_Email = $row_book['Email'];
        $book_Dateandtime = $row_book['DateAndTime'];
        $book_People = $row_book['People'];
        $book_SpecialRequest = $row_book['Special_Request'];


        echo "
            
            <table style='margin-left: 1%; margin-right: 1%; width: 98%'>
            
            <tr style='text_align: center; border: 2px solid black;  padding-top: 20px; padding-bottom:20px;'>

            <td style='text_align: center; border: 2px solid black;  padding-top: 20px; padding-bottom:20px; width: 5%;' > $book_id </td>
            <td style='text_align: center; border: 2px solid black;  padding-top: 20px; padding-bottom:20px; width: 15%;' > $book_fullname </td>
            <td style='text_align: center; border: 2px solid black;  padding-top: 20px; padding-bottom:20px; width: 25%;' > $book_Email </td>
            <td style='text_align: center; border: 2px solid black;  padding-top: 20px; padding-bottom:20px; width: 15%;' > $book_Dateandtime </td>
            <td style='text_align: center; border: 2px solid black;  padding-top: 20px; padding-bottom:20px; width: 5%;' > $book_People </td>
            <td style='text_align: center; border: 2px solid black;  padding-top: 20px; padding-bottom:20px; width: 20%;' > $book_SpecialRequest </td>
            
            </tr>
            
            </table>
        
        ";

    };


}

?>
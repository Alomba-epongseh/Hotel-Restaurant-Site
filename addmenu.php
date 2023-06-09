<?php

    include 'db.php';

    $conn = openconn();

?>

<!DOCTYPE html>
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
    
            <div class="container-fluid col-lg-6">
                <div class="bg-light">
                    <form class="form p-3" action="#" enctype="multipart/form-data" method="post" style="margin-top: 5%; ">
                        <div class="mb-3">
                            <label for="exampleMealName" class="form-label" >Meal Name</label>
                            <input type="text" class="form-control" id="mealname" name="mealname" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPrice" class="form-label">Price</label>
                            <input type="text" class="form-control" id="price" name="price" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputDescription" class="form-label">Description</label>
                            <input type="text" class="form-control" id="description" name="description">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputCategory" class="form-label">Category</label>
                            <!--<input type="text" class="form-control" id="category" name="category" required>-->
                            <select class="form-select" id="select1" name="category" required>
                              <option value="1">Select Category</option>
                              <option value="Breakfast">Breakfast</option>
                              <option value="Lunch">Lunch</option>
                              <option value="Others">Others</option>
                              <option value="Juice">Juice</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputImage" class="form-label">Image</label>
                            <input type="file" class="form-control" id="image" name="image" required style="height: 50px;" >
                        </div>
                        <button class="btn btn-primary" type="submit" name="insert_post">Submit</button>
                    </form>
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
//submitting file to the database


if (isset($_POST['insert_post'])) {
    $Meal_name = $_POST['mealname'];
    $Price = $_POST['price'];
    $Description = $_POST['description'];
    $Category = $_POST['category'];

    $Image = $_FILES['image']['name'];
    $Image_temporal = $_FILES['image']['temporal_name'];

    move_uploaded_file($Image_temporal,"menu_images/$Image");

    
    $menuquery = "INSERT INTO menu (Category, Meal, Descriptions, Price, Images ) VALUES ('$Category','$Meal_name','$Description','$Price','$Image')";
    $result = mysqli_query($conn, $menuquery);


if($result){
    echo "<script>alert('Menu successfully updated')</script>";
    echo "<script>window.open('admin.php','_self')</script>";
}
}
?>
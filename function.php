<?php
//function to collect menu data from database and display on web page.

function menudata(){

    global $conn;

    $conn = new mysqli("localhost", "Vanilla", "Vanibelle", "vanillahotel");

    $getmenu = "SELECT * from menu order by RAND() limit 0,6";
    $runmenu = mysqli_query($conn, $getmenu);

    while($row_menu = mysqli_fetch_array($runmenu)){

        $book_meal = $row_menu['Meal'];
        $book_description = $row_menu['Descriptions'];
        $book_price = $row_menu['Price'];
        $book_image = $row_menu['Image'];

    };
}

function hotelservices(){
    global $conn;

    $get_service = "SELECT * FROM `hotelservice` ";
    $run_service = mysqli_query($conn, $get_service);

    while ($row_service = mysqli_fetch_array($run_service)) {
        $id  = $row_service['Id'];
        $service  = $row_service['Services'];
                    echo "
                    <div class='col-lg-4 col-md-6 wow fadeInUp rounded' data-wow-delay='0.1s'>
                    <a class='service-item rounded' href=''>
                        <div class='service-icon bg-transparent border rounded-circle p-1 '>
                            <div class='w-100 h-100 border rounded-circle align-items-center justify-content-center p-4'>
                                <i class='fa fa-hotel fa-2x text-primary '></i><br>
                                <h5 class='mb-3'>$service </h5>
                            </div>
                            
                        </div>
                    </a>
                </div>
                    ";
}
}

function rooms(){
    global $conn;
    $get_room = "SELECT * FROM `rooms` ";
    $run_room = mysqli_query($conn, $get_room);

    while ($row_room = mysqli_fetch_array($run_room)) {
        $room_id  = $row_room['Id'];
        $room_name  = $row_room['Room_Name'];
        $room_desc  = $row_room['Descriptions'];
        $room_image  = $row_room['Images'];
        $room_price = $row_room['Price'];
        echo "
            <div class='col-lg-4 col-md-6 wow fadeInUp' data-wow-delay='0.1s'>
                        <div class='room-item shadow rounded overflow-hidden'>
                            <div class='position-relative'>
                                <img class='img-fluid' src='room_images/$room_image ' alt='wrong path' >
                                <small class='position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4'>$$room_price /Night</small>
                            </div>
                            <div class='p-4 mt-2'>
                                <div class='d-flex justify-content-between mb-3'>
                                    <h5 class='mb-0'>$room_name</h5>
                                    <div class='ps-2'>
                                        <small class='fa fa-star text-primary'></small>
                                        <small class='fa fa-star text-primary'></small>
                                        <small class='fa fa-star text-primary'></small>
                                        <small class='fa fa-star text-primary'></small>
                                        <small class='fa fa-star text-primary'></small>
                                    </div>
                                </div>
                                <p class='text-body mb-3'>$room_desc </p>
                                <div class='d-flex justify-content-between'>
                                    <a class='btn btn-sm btn-primary rounded py-2 px-4' href=''>View Detail</a>
                                    <a class='btn btn-sm btn-dark rounded py-2 px-4' href=''>Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
        ";
    }
}

function hotelstaff(){
    global $conn;
    $get_staff = "SELECT * FROM `hotelstaff`";
    $run_staff = mysqli_query($conn, $get_staff);

    while ($row_staff = mysqli_fetch_array($run_staff)) {
        $staff_id  = $row_staff['Id'];
        $Full_name  = $row_staff['Full_Name'];
        $staff_image  = $row_staff['images'];
        $role  = $row_staff['Role'];
        echo "
        <div class='col-lg-3 col-md-6 wow fadeInUp' data-wow-delay='0.5s'>
        <div class='rounded shadow overflow-hidden'>
            <div class='position-relative'>
                <img class='chef img-fluid' src='img/$staff_image' alt='wrong path'>
                <div class='position-absolute start-50 top-100 translate-middle d-flex align-items-center'>
                    <a class='btn btn-square btn-primary mx-1' href=''><i class='fab fa-facebook-f'></i></a>
                    <a class='btn btn-square btn-primary mx-1' href=''><i class='fab fa-twitter'></i></a>
                    <a class='btn btn-square btn-primary mx-1' href=''><i class='fab fa-instagram'></i></a>
                </div>
            </div>
            <div class='text-center p-4 mt-3'>
                <h5 class='fw-bold mb-0'>$Full_name</h5>
                <small>$role</small>
            </div>
        </div>
        </div>
        ";
    }
}

function restaustaff(){
    global $conn;
    $get_staff = "SELECT * FROM `restaustaff`";
    $run_staff = mysqli_query($conn, $get_staff);

    while ($row_staff = mysqli_fetch_array($run_staff)) {
        $staff_id  = $row_staff['Id'];
        $Full_name  = $row_staff['Full_Name'];
        $staff_image  = $row_staff['Images'];
        $role  = $row_staff['Role'];
        echo "
        <div class='col-lg-3 col-md-6 wow fadeInUp' data-wow-delay='0.1s'>
        <div class='rounded shadow text-center overflow-hidden'>
            <div class='position-relative'>
                <img class='chef img-fluid' src='img/$staff_image' alt='wrong path'>
                <div class='position-absolute start-50 top-100 translate-middle d-flex align-items-center'>
                    <a class='btn btn-square btn-primary mx-1' href=''><i class='fab fa-facebook-f'></i></a>
                    <a class='btn btn-square btn-primary mx-1' href=''><i class='fab fa-twitter'></i></a>
                    <a class='btn btn-square btn-primary mx-1' href=''><i class='fab fa-instagram'></i></a>
                </div>
            </div>
            <div class='text-center p-4 mt-3'>
                <h5 class='fw-bold mb-0'>$Full_name</h5>
                <small>$role</small>
            </div>
        </div>
        </div>
        ";
    }
}

function restauservices(){
    global $conn;

    $get_service = "SELECT * FROM `restauservices`";
    $run_service = mysqli_query($conn, $get_service);

    while ($row_service = mysqli_fetch_array($run_service)) {
        $id  = $row_service['Id'];
        $service  = $row_service['Services'];
        $description  = $row_service['Description'];
                    echo "
                    <div class='col-lg-3 col-sm-6 wow fadeInUp' data-wow-delay='0.1s'>
                    <div class='service-item rounded pt-3'>
                        <div class='p-4'>
                            <i class='fa fa-3x fa-user-tie text-primary mb-4'></i>
                            <h5>$service</h5>
                            <p>$description</p>
                        </div>
                    </div>
                </div>
                    ";
    }
}

function menu(){
    global $conn;
    $get_menu = "SELECT * FROM `menu` ";
    $run_menu = mysqli_query($conn, $get_menu);

    echo "
        <ul class='nav nav-pills d-inline-flex justify-content-center border-bottom mb-5'>
        <li class='nav-item'>
            <a class='d-flex align-items-center text-start mx-3 ms-0 pb-3 active' data-bs-toggle='pill' href='#tab-1'>
                <i class='fa fa-coffee fa-2x text-primary'></i>
                <div class='ps-3'>
                    <small class='text-body'>Popular</small>
                    <h6 class='mt-n1 mb-0'>Breakfast</h6>
                </div>
            </a>
        </li>
        <li class='nav-item'>
            <a class='d-flex align-items-center text-start mx-3 pb-3' data-bs-toggle='pill' href='#tab-2'>
                <i class='fa fa-hamburger fa-2x text-primary'></i>
                <div class='ps-3'>
                    <small class='text-body'>Special</small>
                    <h6 class='mt-n1 mb-0'>Launch</h6>
                </div>
            </a>
        </li>
        <li class='nav-item'>
            <a class='d-flex align-items-center text-start mx-3 me-0 pb-3' data-bs-toggle='pill' href='#tab-3'>
                <i class='fa fa-utensils fa-2x text-primary'></i>
                <div class='ps-3'>
                    
                    <h6 class='mt-n1 mb-0'>Others</h6>
                </div>
            </a>
        </li>
        <li class='nav-item'>
            <a class='d-flex align-items-center text-start mx-3 pb-3' data-bs-toggle='pill' href='#tab-4'>
                <i class='fa fa-coffee fa-2x text-primary'></i>
                <div class='ps-3'>
                    <small class='text-body'>Natural</small>
                    <h6 class='mt-n1 mb-0'>Juice</h6>
                </div>
            </a>
        </li>
    </ul>
    <div class='tab-content'>
        ";

    while ($row_menu = mysqli_fetch_array($run_menu)) {
        $menu_id  = $row_menu['Id'];
        $menu_name  = $row_menu['Meal'];
        $menu_desc  = $row_menu['Descriptions'];
        $menu_image  = $row_menu['Images'];
        $menu_price = $row_menu['Price'];
        $menu_cat  = $row_menu['Category'];

        if ($menu_cat=='breakfast') {
        echo "
        <div id='tab-1' class='tab-pane fade show p-0 '>
                            <div class='row g-4'>
                                <div class='col-lg-6'>
                                    <div class='d-flex align-items-center'>
                                        <img class='flex-shrink-0 img-fluid rounded' src='img/$menu_image' alt='' style='width: 80px;'>
                                        <div class='w-100 d-flex flex-column text-start ps-4'>
                                            <h5 class='d-flex justify-content-between border-bottom pb-2'>
                                                <span>$menu_name</span>
                                                <span class='text-primary'>$$menu_price</span>
                                            </h5>
                                            <small class='fst-italic'>$menu_desc</small>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        </div>
        ";
        }
        
        elseif ($menu_cat=='Lunch') {
            echo "

                        <div id='tab-2' class='tab-pane fade show p-0'>
                            <div class='row g-4'>
                                <div class='col-lg-6'>
                                    <div class='d-flex align-items-center'>
                                        <img class='flex-shrink-0 img-fluid rounded' src='img/$menu_image' alt='' style='width: 80px;'>
                                        <div class='w-100 d-flex flex-column text-start ps-4'>
                                            <h5 class='d-flex justify-content-between border-bottom pb-2'>
                                                <span>$menu_name</span>
                                                <span class='text-primary'>$$menu_price</span>
                                            </h5>
                                            <small class='fst-italic'>$menu_desc</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
            ";
        }
        elseif ($menu_cat=='others') {
            echo "
                        <div id='tab-3' class='tab-pane fade show p-0'>
                            <div class='row g-4'>
                                <div class='col-lg-6'>
                                    <div class='d-flex align-items-center'>
                                        <img class='flex-shrink-0 img-fluid rounded' src='img/$menu_image' alt='' style='width: 80px;'>
                                        <div class='w-100 d-flex flex-column text-start ps-4'>
                                            <h5 class='d-flex justify-content-between border-bottom pb-2'>
                                                <span>$menu_name</span>
                                                <span class='text-primary'>$$menu_price</span>
                                            </h5>
                                            <small class='fst-italic'>$menu_desc</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    ";
        }
        else{
            echo "
                        <div id='tab-4' class='tab-pane fade show p-0'>
                            <div class='row g-4'>
                                <div class='col-lg-6'>
                                    <div class='d-flex align-items-center'>
                                        <img class='flex-shrink-0 img-fluid rounded' src='img/$menu_image' alt='' style='width: 80px;'>
                                        <div class='w-100 d-flex flex-column text-start ps-4'>
                                            <h5 class='d-flex justify-content-between border-bottom pb-2'>
                                                <span>$menu_name</span>
                                                <span class='text-primary'>$$menu_price</span>
                                            </h5>
                                            <small class='fst-italic'>$menu_desc</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
        ";
        }
    }
}
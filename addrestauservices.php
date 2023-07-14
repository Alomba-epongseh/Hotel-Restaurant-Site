
        <div class="container-fluid ">
            <div class="bg-light">
                <form class="form p-3" action="#" enctype="multipart/form-data" method="post" style="margin-top: 30%; ">
                    <div class="mb-3">
                      <label for="exampleService" class="form-label">Service</label>
                      <input type="text" class="form-control" id="service" name="service" required>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputDescription" class="form-label">Description</label>
                      <input type="text" class="form-control" id="desc" name="desc" required>
                    </div>
                    <button type="submit" class="btn btn-primary" name="insert_post">Submit</button>
                </form>
            </div>
        
            
        </div>
    </div>
    




<?php

include 'db.php';
$conn = openconn();

if (isset($_POST['insert_post'])) {
    $service = $_POST['service'];
    $desc = $_POST['desc'];

    $servicequery = "INSERT INTO restauservices (Services, Descriptions ) VALUES ('$service','$desc')";
    $resultquery = mysqli_query($conn, $servicequery);

    if($resultquery){
        echo "<script>alert('Service successfully added')</script>";
        echo "<script>window.open('admin.php','_self')</script>";
    }
     
};
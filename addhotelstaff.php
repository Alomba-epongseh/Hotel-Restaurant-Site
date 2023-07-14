
    
        <div class="container-fluid ">
            <div class="bg-light">
                <form class="form p-3" action="#" enctype="multipart/form-data" method="post" style="margin-top: 25%; ">
                    <div class="mb-3">
                      <label for="exampleMealName" class="form-label">Staff Name</label>
                      <input type="text" class="form-control" id="fullname" name="fullname" required >
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputRole" class="form-label">Staff Role</label>
                      <input type="text" class="form-control" id="role" name="role" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputImage" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" name="image" required style="height: 50px;" >
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
    $fullname = $_POST['fullname'];
    $role = $_POST['role'];

    $Image = $_FILES['image']['name'];
    $Image_temporal = $_FILES['image']['temporal_name'];

    move_uploaded_file($Image_temporal,"staff_images/$Image");

    
    $staffquery = "INSERT INTO hotelstaff (Full_name, Role, Images ) VALUES ('$fullname','$role','$Image')";
    $result = mysqli_query($conn, $staffquery);


if($result){
    echo "<script>alert('Staff List Successfully Updated')</script>";
    echo "<script>window.open('admin.php','_self')</script>";
}
}
?>
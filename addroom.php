
    
        <div class="container-fluid ">
            <div class="bg-light">
                <form class="form p-3" style="margin-top: 12%;" action="#" enctype="multipart/form-data" method="post">
                    <div class="mb-3">
                      <label for="exampleMealName" class="form-label">Room Name</label>
                      <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPrice" class="form-label">Price</label>
                      <input type="text" class="form-control" id="price" name="price">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputDescription" class="form-label">Description</label>
                        <input type="text" class="form-control" id="desc" name="desc">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputImage" class="form-label">Image</label>
                        <input type="file" name="image" class="form-control" id="" style="height: 50px;" >
                    </div>
                    <button type="submit" name="insert_post" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        
            
        </div>
    </div>

<?php

if (isset($_POST['insert_post'])) {
    $Name = $_POST['name'];
    $Price = $_POST['price'];
    $Desc = $_POST['desc'];
    $Image = $_FILES['image']['name'];
    $Image_temporal = $_FILES['image']['temporal_name'];

    move_uploaded_file($Image_temporal,"room_images/$Image");


    
    //mysqli_query($conn, "SELECT * FROM roombooking");
   // mysqli_query($conn, "INSERT INTO roombooking (Full_Name, Email, Check_In, Check_Out, Adults, Children, Room_Type, Special_Request) VALUES ('$Name','$Email','$Check_In','$Check_out','$Adults','$Children','$Room_Type','$Special_Request') ");

    $bookquery = "INSERT INTO rooms (Room_Name, Descriptions, Price, Images) VALUES ('$Name','$Desc','$Price','$Image')";
    $result = mysqli_query($conn, $bookquery);


//$insert_det = mysqli_query($conn, $insert_details);

if($result){
    echo "<script>alert('Room Successfully Updated')</script>";
    echo "<script>window.open('admin.php','_self')</script>";
}
}
?>
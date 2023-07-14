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
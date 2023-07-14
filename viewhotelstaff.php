<?php            
    include_once "db.php";
    $conn=openconn();
?>

    
        <div class="container-fluid " style="width: 100%; align_item: center;">
            <div class="form bg-light align-item-center" style="text_align: center;">
               <h2 style="text-align: center; padding: 5px;"> WELCOME TO THE ADMIN'S DASHBOARD.</h2>

<h3 class="text-center text-success">ALL HOTEL'S STAFFS</h3>
    <table class="table table-bordered mt-5">
        <thead class="bg-info">
            <tr>
                <th>Id</th>
                <th>Full Name</th>
                <th>Image</th>
                <th>Role</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody class="bg-secondary text-light" >
            <?php
            $getstaff = "SELECT * FROM `hotelstaff`";
            $runstaff = mysqli_query($conn, $getstaff);
            while($row_staff = mysqli_fetch_array($runstaff)){

                $staff_id = $row_staff['Id'];
                $staff_fullname = $row_staff['Full_Name'];
                $staff_Image = $row_staff['Images'];
                $Role = $row_staff['Role'];
                
        
            ?>
                <tr class='text-center' >
                    <td><?php echo $staff_id?></td>
                    <td><?php echo $staff_fullname?></td>
                    <td><img src='staff_images/<?php echo $staff_Image?>' alt='wrong path' style='width:50px; height:50px;'/></td>
                    <td><?php echo $Role?></td>        
                    <td><a href='admin.php?edit_hotelstaff=<?php echo $staff_id ?>' class='text-primary'>Edit</i></a></td>
                    <td><a href='admin.php?delete_hotelstaff=<?php echo $staff_id ?>' class='text-danger' type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</a></td>
                    
                </tr>
            <?php }?>
            
            
        </tbody>
    </table>

            </div>
        
            
        </div>
    </div>
    
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete this</h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><a href="admin.php?viewhotelstaff" class='text-decoration-none text-light'>No</a></button>
        <button type="button" class="btn btn-danger"><a href='admin.php?delete_hotelstaff=<?php echo $staff_id ?>' class='text-decoration-none text-light'>Yes</a></button>
      </div>
    </div>
  </div>
</div>


    
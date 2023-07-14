<?php            
    include_once "db.php";
    $conn=openconn();
?>

    
        <div class="container-fluid " style="width: 100%; align_item: center;">
            <div class="form bg-light align-item-center" style="text_align: center;">
               <h2 style="text-align: center; padding: 5px;"> WELCOME TO THE ADMIN'S DASHBOARD.</h2>

<h3 class="text-center text-success">ALL HOTEL'S ROOMS</h3>
    <table class="table table-bordered mt-5">
        <thead class="bg-info">
            <tr>
                <th>Id</th>
                <th>Room Name</th>
                <th>Description</th>
                <th>Image</th>
                <th>Price</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody class="bg-secondary text-light" >
            <?php
            $getroom = "SELECT * FROM `rooms`";
            $runroom = mysqli_query($conn, $getroom);
            while($row_room = mysqli_fetch_array($runroom)){

                $room_id = $row_room['Id'];
                $room_name = $row_room['Room_Name'];
                $room_description = $row_room['Description'];
                $room_Image = $row_room['Images'];
                $room_Price = $row_room['Price'];
        
            ?>
                <tr class='text-center' >
                    <td><?php echo $room_id?></td>
                    <td><?php echo $room_name?></td>
                    <td><?php echo $room_description?></td>
                    <td><img src='staff_images/<?php echo $room_Image?>' alt='wrong path' style='width:50px; height:50px;'/></td>
                    <td><?php echo $room_Price?></td>         
                    <td><a href='admin.php?edit_room=<?php echo $room_id ?>' class='text-primary'>Edit</i></a></td>
                    <td><a href='admin.php?delete_room=<?php echo $room_id ?>' class='text-danger' type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</a></td>
                    
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
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><a href="admin.php?viewrooms" class='text-decoration-none text-light'>No</a></button>
        <button type="button" class="btn btn-danger"><a href='admin.php?delete_room=<?php echo $room_id ?>' class='text-decoration-none text-light'>Yes</a></button>
      </div>
    </div>
  </div>
</div>

    
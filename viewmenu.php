<?php            
    include_once "db.php";
    $conn=openconn();
?>

    
        <div class="container-fluid " style="width: 100%; align_item: center;">
            <div class="form bg-light align-item-center" style="text_align: center;">
               <h2 style="text-align: center; padding: 5px;"> WELCOME TO THE ADMIN'S DASHBOARD.</h2>

<h3 class="text-center text-success">ALL RESTAU'S MENU</h3>
    <table class="table table-bordered mt-5">
        <thead class="bg-info">
            <tr>
                <th>Id</th>
                <th>Meal</th>
                <th>Category</th>
                <th>Description</th>
                <th>Image</th>
                <th>Price</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody class="bg-secondary text-light" >
            <?php
            $getmenu = "SELECT * FROM `menu`";
            $runmenu = mysqli_query($conn, $getmenu);
            while($row_menu = mysqli_fetch_array($runmenu)){

                $menu_id = $row_menu['Id'];
                $menu_name = $row_menu['menu_Name'];
                $menu_description = $row_menu['Description'];
                $menu_Image = $row_menu['Images'];
                $menu_Price = $row_menu['Price'];
        
            ?>
                <tr class='text-center' >
                    <td><?php echo $menu_id?></td>
                    <td><?php echo $menu_name?></td>
                    <td><?php echo $menu_description?></td>
                    <td><img src='staff_images/<?php echo $menu_Image?>' alt='wrong path' style='width:50px; height:50px;'/></td>
                    <td><?php echo $menu_Price?></td>         
                    <td><a href='admin.php?edit_menu=<?php echo $menu_id ?>' class='text-primary'>Edit</i></a></td>
                    <td><a href='admin.php?delete_menu=<?php echo $menu_id ?>' class='text-danger' type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</a></td>
                    
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
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><a href="admin.php?viewmenu" class='text-decoration-none text-light'>No</a></button>
        <button type="button" class="btn btn-danger"><a href='admin.php?delete_menu=<?php echo $menu_id ?>' class='text-decoration-none text-light'>Yes</a></button>
      </div>
    </div>
  </div>
</div>
    
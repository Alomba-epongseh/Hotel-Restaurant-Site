<?php            
    include_once "db.php";
    $conn=openconn();
?>

    
        <div class="container-fluid " style="width: 100%; align_item: center;">
            <div class="form bg-light align-item-center" style="text_align: center;">
               <h2 style="text-align: center; padding: 5px;"> WELCOME TO THE ADMIN'S DASHBOARD.</h2>

<h3 class="text-center text-success">ALL HOTEL'S RESERVATIONS</h3>
    <table class="table table-bordered mt-5">
        <thead class="bg-info">
            <tr>
                <th>Id</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Check-In</th>
                <th>Check-Out</th>
                <th>Adults</th>
                <th>Children</th>
                <th>Room Type</th>
                <th>Special Request</th>
                <!--<th>Edit</th>-->
                <th>Delete</th>
            </tr>
        </thead>
        <tbody class="bg-secondary text-light" >
            <?php
            $getbook = "SELECT * from roombooking order by RAND() ";
            $runbook = mysqli_query($conn, $getbook);
            while($row_book = mysqli_fetch_array($runbook)){

                $book_id = $row_book['id'];
                $book_fullname = $row_book['Full_Name'];
                $book_Email = $row_book['Email'];
                $book_CheckIn = $row_book['Check_In'];
                $book_CheckOut = $row_book['Check_Out'];
                $book_Adults = $row_book['Adults'];
                $book_Children = $row_book['Children'];
                $book_RoomType = $row_book['Room_Type'];
                $book_SpecialRequest = $row_book['Special_Request'];
        
            ?>
                <tr class='text-center' >
                    <td><?php echo $book_id?></td>
                    <td><?php echo $book_fullname?></td>
                    <td><?php echo $book_Email?></td>
                    <td><?php echo $book_CheckIn?></td>
                    <td><?php echo $book_CheckOut?></td>
                    <td><?php echo $book_Adults?></td>
                    <td><?php echo $book_Children?></td>
                    <td><?php echo $book_RoomType?></td>
                    <td><?php echo $book_SpecialRequest?></td>          
                    <!--<td><a href='index.php?edit_reservation=<?php //echo $book_id ?>' class='text-primary'>Edit</i></a></td>-->
                    <td><a href='index.php?delete_reservation=<?php echo $book_id ?>' class='text-danger' type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</a></td>
                    
                </tr>
            <?php }?>
            
            
        </tbody>
    </table>

            </div>
        
            
        </div>
    </div>
    



    
<?php
    if (isset($_GET['delete_hotelstaff'])) {
        $staff_id=$_GET['delete_hotelstaff'];
        $delete_hotelstaff="DELETE FROM `hotelstaff` WHERE Id=$staff_id";
        $result=mysqli_query($conn,$delete_hotelstaff);
        if($result){
            echo "<script>alert('Staff Deleted')</script>";
            echo "<script>window.open('admin.php?viewhotelstaff','_self')</script>";
        }
    }
?>
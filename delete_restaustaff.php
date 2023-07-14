<?php
    if (isset($_GET['delete_restaustaff'])) {
        $staff_id=$_GET['delete_restaustaff'];
        $delete_restaustaff="DELETE FROM `restaustaff` WHERE Id=$staff_id";
        $result=mysqli_query($conn,$delete_restaustaff);
        if($result){
            echo "<script>alert('Staff Deleted')</script>";
            echo "<script>window.open('admin.php?viewrestaustaff','_self')</script>";
        }
    }
?>
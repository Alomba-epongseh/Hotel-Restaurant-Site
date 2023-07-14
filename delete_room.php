<?php
    if (isset($_GET['delete_room'])) {
        $room_id=$_GET['delete_room'];
        $delete_room="DELETE FROM `rooms` WHERE Id=$room_id";
        $result=mysqli_query($conn,$delete_room);
        if($result){
            echo "<script>alert('Room Deleted')</script>";
            echo "<script>window.open('admin.php?viewrooms','_self')</script>";
        }
    }
?>
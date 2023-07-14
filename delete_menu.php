<?php
    if (isset($_GET['delete_menu'])) {
        $menu_id=$_GET['delete_menu'];
        $delete_menu="DELETE FROM `menu` WHERE Id=$menu_id";
        $result=mysqli_query($conn,$delete_menu);
        if($result){
            echo "<script>alert('Menu Deleted')</script>";
            echo "<script>window.open('admin.php?viewmenu','_self')</script>";
        }
    }
?>
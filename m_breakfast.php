<?php 
    if (isset($_GET['m_lunch'])) {
        $cat=$_GET['m_lunch'];
        $get_menu = "SELECT * FROM `menu` where Category=$cat ";
    $run_menu = mysqli_query($conn, $get_menu);

    while ($row_menu = mysqli_fetch_array($run_menu)) {
        $menu_id  = $row_menu['Id'];
        $menu_name  = $row_menu['Meal'];
        $menu_desc  = $row_menu['Descriptions'];
        $menu_image  = $row_menu['Images'];
        $menu_price = $row_menu['Price'];
        $menu_cat  = $row_menu['Category'];
    }
    
?>
                    
                    
                    <div id='tab-1' class='tab-pane fade show p-0 active'>
                            <div class='row g-4'>
                                <div class='col-lg-6'>
                                    <div class='d-flex align-items-center'>
                                        <img class='flex-shrink-0 img-fluid rounded' src='img/<?php echo $menu_image?>' alt='' style='width: 80px;'>
                                        <div class='w-100 d-flex flex-column text-start ps-4'>
                                            <h5 class='d-flex justify-content-between border-bottom pb-2'>
                                                <span><?php echo $menu_name?></span>
                                                <span class='text-primary'>$<?php echo $menu_price?></span>
                                            </h5>
                                            <small class='fst-italic'><?php echo $menu_desc ?></small>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>

<?php 
    }
?>
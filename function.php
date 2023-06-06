<?php
//function to collect menu data from database and display on web page.

function menudata(){

    global $conn;

    $conn = new mysqli("localhost", "Vanilla", "Vanibelle", "vanillier");

    $getmenu = "SELECT * from menu order by RAND() limit 0,6";
    $runmenu = mysqli_query($conn, $getmenu);

    while($row_menu = mysqli_fetch_array($runmenu)){

        $book_meal = $row_book['Meal'];
        $book_description = $row_book['Descriptions'];
        $book_price = $row_book['Price'];
        $book_image = $row_book['Image'];

    };
}
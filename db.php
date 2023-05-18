<?php
function openconn(){
    $dbhost = "localhost";
    $dbuser = "Vanilla";
    $dbpass = "Vanibelle";
    $db = "vanillier";

    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

    return $conn;
}

function closeconn($conn){
    $conn -> close();
}

?>
<?php

    include 'db.php';

    $conn = openconn();

    //echo "Connected successfully";

    
?>

<?php 

session_start(); 

//include "db.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['uname']);

    $pass = validate($_POST['password']);

    if (empty($uname)) {

        header("Location: login.php?error=User Name is required");

        exit();

    }else if(empty($pass)){

        header("Location: login.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM adminlogin WHERE user_name ='$uname' AND passwordd ='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['user_name'] === $uname && $row['passwordd'] === $pass) {

                $_SESSION['user_name'] = $row['user_name'];

                $_SESSION['admin_name'] = $row['admin_name'];

                $_SESSION['Id'] = $row['Id'];

                header("Location: admin.php");

                exit();

            }
            else{

                header("Location: indexlogin.php?error=Incorect User name or password");
        
                exit();
        
            }

        }
        else{

            header("Location: indexlogin.php?error=Incorect User name or password");
    
            exit();
    
        }
    

    }

}else{

    header("Location: indexlogin.php");

    exit();

}
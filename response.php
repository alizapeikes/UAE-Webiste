<?php
session_start();
//Connects to the database
$mySQL = new mysqli("localhost", "root", "Miriamp1!", "dubaiwebsite");
if ($mySQL -> connect_errno) {
    echo "Failed to database!".$mySQL -> connect_error ;
    exit();
}    
$username = $_POST['username'];
$password = $_POST['password'];
        
$login = mysqli_query($mySQL,"SELECT * FROM authorizedUsers WHERE username = '$username' and password='$password'");         
      
if($row=$login->fetch_assoc())
{
    setcookie('username', $_POST['username']);

    if($row['userType'] == "visitor") {
        header("Location: http://localhost/DubaiWebsite/home.php");
    } else {
        header("Location: http://localhost/DubaiWebsite/homeAdmin.php");
    }
}
else{
    echo ("Login error, click <a href='javascript:history.back();'>back</a> to try again");
}


?>
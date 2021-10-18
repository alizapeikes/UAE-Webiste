<?php
    include 'dataBaseConnect.php';
    
    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $monthBday = $_POST['monthBday'];
    $dayBday = $_POST['dayBday'];     
          
    $sql = "INSERT INTO signup (name,password, email, phone, street, city, state, zip, monthBday, dayBday)
        VALUES('$name', '$password', '$email', '$phone', '$street', '$city', '$state', '$zip', '$monthBday', '$dayBday')";

    if ($mySQL->query($sql) !== TRUE) {
         echo "Error: " . $sql . "<br>" . $mySQL->error;
    }
    
    $sql2 = "INSERT INTO authorizedusers (username, password, userType)
             VALUES('$name', '$password', 'visitor')";
    
    if ($mySQL->query($sql2) !== TRUE) {
         echo "Error: " . $sql2 . "<br>" . $mySQL->error;
    }
    
    echo "Thank you for signing up";
    echo "<a href='login.php'>\nPress here to login in!</a>";
    
?>


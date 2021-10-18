<?php

//Connects to the database
$mySQL = new mysqli("localhost", "root", "Miriamp1!", "dubaiwebsite");
if ($mySQL -> connect_errno) {
    echo "Failed to database!".$mySQL -> connect_error ;
    exit();
}
?>

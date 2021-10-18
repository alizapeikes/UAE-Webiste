<HTML>
<HEAD>
<link rel="stylesheet" href="sample.css" type="text/css" />
<script src="//code.jquery.com/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</HEAD>
<BODY>
<div id="logo"><img src="logo2.png" alt="logo"></div>
</br>
<?php $mySQL = new mysqli("localhost", "root", "Miriamp1!", "dubaiwebsite");
    if ($mySQL -> connect_errno) {
        echo "Failed to database!".$mySQL -> connect_error ;
        exit();
    }
    $username = $_COOKIE['username'];

    $result = mysqli_query($mySQL,"SELECT userType FROM authorizedUsers WHERE username ='$username'");
               
                   
       
if($row=$result->fetch_assoc())
{
   

    if($row['userType'] == "visitor") {
     include "menu.php";
} else {
     include "menuAdmin.php";}
}
        
    ?>

    <script>
    $('nav li').hover(
        function () {
            $('ul',this).stop().slideDown(200);
        },
        function () {
            $('ul' ,this).stop().slideUp(200);
        }
    );
</script>
    <style>
        a:hover {
            color: darkgrey;
        }

    </style>

</br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Things To Do</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
     <script src="//code.jquery.com/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="thingsToDo.css" rel="stylesheet"/>
</head>

<header>
<!--begin header-->
     <div id="Site Logo">
         <?php include "header.php"; ?>
     </div>
<!--end header-->

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner" >
    <div class="carousel-item active" data-bs-interval="3000">
      <img src="sight1.jpg" class="carouselPic" alt="Sight 1">
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="sight2.jpg" class="carouselPic" alt="Sight 2">
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="sight3.jpg" class="carouselPic" alt="Sight 3">
    </div>
    <div class="carousel-item" data-bs-interval="3000">
        <img src="sight4.jpg" class="carouselPic" alt="Sight 4">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


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
    <!--end navbar-->
</header>


    <div >
        <img src="waterPic.jpg" alt="Water Activities" id="waterPic"/>
    </div>
        <div>
    <h1 id="boatingHeader" >
        Water Activities
    </h1>
    <blockquote id="boatingParagraph" >
        Parasailing, Jet Skiing, Speed Boating, Flyboarding, Kitesurfing....and so much more!
        You name it and Dubai has it!
        </br> Some sites to check out:
        </br> <a target="_blank" href="https://www.seabreacherinuae.ae/"> Sea Breacher </a>
        <a target="_blank" href="https://rideindubai.com/"> <br/> Ride in Dubai </a>
        <a target="_blank" href="https://hydro-watersports.com/"> <br/>Hydro Water Sports</a>
    </blockquote>




        <img src="museum.jpg" alt="Activities" id="museumPic"/>
    <h1 id="museumHeader">
        Museum
    </h1>
    <blockquote id="museumParagraph">
        There are many Museums to visit in Dubai. Learn about science, arts, history and much more!
        </br>Some sites to check out:
        <a target="_blank" href="https://museumofthefuture.ae/"><br/>Museum of the Future</a>
        <a target="_blank" href="https://etihadmuseum.dubaiculture.gov.ae/en/pages/default.aspx"> <br/>Etihad Museum</a>
        <a target="_blank" href="https://museumofillusions.ae/"><br/>Museum of Illusions</a>
    </blockquote>


    <img  src="tours.jpg" alt="Hikes and Sights" id="toursPic"/>
    <h1 id="toursHeader">
        Tours
    </h1>
    <blockquote id="toursParagraph">
        Do you enjoy touring the places you visit? Here are some great sites to check out:
        <a target="_blank" href="https://booktoursindubai.com/"><br/>Book Tours in Dubai</a>
        <a target="_blank" href="https://www.aroohatours.com/"><br/> Arooha Tours </a>
        <a target="_blank" href="https://www.dubaitraveltourism.com/"><br/>Dubai Travel and Tourism</a>
    </blockquote>
        </div>

</body>
<?php include "footer.php"; ?>
</html>
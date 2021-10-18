<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Things To Do</title>
       <script src="//code.jquery.com/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="MainBooking.css" rel="stylesheet">
    <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
    <script src="jquery.zoom.js"></script>
     <script src="//code.jquery.com/jquery.min.js"></script>
     <link href="eatAndDrink.css" rel="stylesheet"/>
</head>

<header>
<!--begin header-->
     <div id="Site Logo">
         <?php include "header.php"; ?>
     </div>
<!--end header-->
<body>
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner" >
    <div class="carousel-item active" data-bs-interval="3000">
      <img src="res1.jpg" class="carouselPic" alt="Restaurant 1">
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="res2.jpg" class="carouselPic" alt="Restaurant 2">
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="res3.jpg" class="carouselPic" alt="Restaurant 3">
    </div>
    <div class="carousel-item" data-bs-interval="3000">
        <img src="res4.jpg" class="carouselPic" alt="Restaurant 4">
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

<h1 id="zuma">ZUMA</h1>

  <div class="card" id="card1"style="width: 30rem; height: 32.8rem">
     

        <span class='zoom' id='ex1'>
            <img height="250" src="zuma.jpeg"  class="card-img-top" alt="Zuma">

          </span>
     
        <div class="card-body">
          <p class="card-text"> Zuma Dubai is located in the international financial centre, at the heart of the city.
              Enjoy contemporary Japanese cuisine in the vicinity of the world’s tallest building, the Burj Khalifa.
              </br></br></br></br></p>
          <a href="https://zumarestaurant.com/locations/dubai/" target="blank" class="btn btn-primary" style="background-color: #333333" >Click here to view</a>
        </div>
     
     
  </div>

<h1 id="lpm">LA </br>PETITE</br> MAISON</h1>
  <div class="card" id="card2"style="width: 30rem; height: 32.8rem">

        <span class='zoom' id='ex1'>
            <img height="250" src="la_petite_maison.jpg"  class="card-img-top" alt="La Petite Maison">

          </span>
     
        <div class="card-body">
          <p class="card-text">La Petite Maison is located in the Dubai International Financial Center, surrounded by art galleries, high-end shopping, and hotels such as The Ritz-Carlton and Four Seasons.
              Relaxed restaurant with a Cote d'Azur feel serving a mix of southern French and Italian cuisine.</br></br></p>
          <a href="https://lpmrestaurants.com/dubai//" target="blank" class="btn btn-primary" style="background-color: #333333">Click here to view</a>
        </div>
  </div>

<h1 id="ossiano">OSSIANO</h1>
  <div class="card" id="card3" style="width: 30rem; height: 32.8rem">

        <span class='zoom' id='ex1'>
            <img height="250" src="Ossiano.jpg"  class="card-img-top" alt="Ossiano">

          </span>
     
        <div class="card-body">
            <p class="card-text"> Imagine feasting on a sumptuous dinner in one of Dubai’s underwater restaurants, as stingrays, sharks and fish glide right past your table.
                For a meal you won't soon forget, you're invited to indulge at the finest restaurant, Ossiano.</br></br></br></p>
          <a href="https://www.atlantis.com/dubai/restaurants/ossiano?utm_source=googleplaces&utm_medium=location&utm_content=listings&utm_campaign=ossiano" target="blank" class="btn btn-primary" style="background-color: #333333">Click here to view</a>
        </div>

  </div>
<h1 id="ai">AL</br> IWAN</h1>
  <div class="card" id="card4" style="width: 30rem; height: 32.8rem">

        <span class='zoom' id='ex1'>
            <img height="250" src="Al Iwan.jpg"  class="card-img-top" alt="Al Iwan">

          </span>
     
        <div class="card-body">
            <p class="card-text"> Al Iwan is an Arabian buffet restaurant, which is richly decorated in red and gold.
                The restuarant is located in the huge atrium of Saadiyat Island Resort with gorgeous sea views.</br> </br> </br></br></p>
          <a href="https://www.jumeirah.com/en/dine/dubai/burj-al-arab-al-iwan?utm_source=google&utm_medium=google%20places&utm_campaign=restaurant" target="blank" class="btn btn-primary" style="background-color: #333333">Click here to view</a>
        </div>

  </div>

<h1 id="armani">ARMANI</h1>
  <div class="card" id="card5" style="width: 30rem; height: 32.8rem">

        <span class='zoom' id='ex1'>
            <img height="250" src="Armani - Amal.jpg"  class="card-img-top" alt="Armani">

          </span>
     
        <div class="card-body">
            <p class="card-text">The essence of Italy is brought to life at Armani/Ristorante where a natural passion for the finest ingredients, exquisite flavour combinations and
                contemporary presentation come together in an exclusive environment that excites the palate and leaves lovers of gourmet dining wanting more. </br></br></p>
          <a href="https://www.jumeirah.com/en/dine/dubai/burj-al-arab-al-iwan?utm_source=google&utm_medium=google%20places&utm_campaign=restaurant" target="blank" class="btn btn-primary" style="background-color: #333333">Click here to view</a>
        </div>

  </div>


<h1 id="al">AL</br> HADHEERAH</h1>
  <div class="card" id="card6" style="width: 30rem; height: 32.8rem">

        <span class='zoom' id='ex1'>
            <img height="250" src="Al Hadheerah.jpg"  class="card-img-top" alt="Al Hadheerah">

          </span>
     
        <div class="card-body">
            <p class="card-text">Bab Al Shams presents Al Hadheerah, its desert getaway and food spectacular.
                Explore the sights, sounds and tastes of Arabia at an authentic venue amidst the rolling dunes.
                Feast under the stars, and enjoy the night with live cooking stations overlooking the desert.</br></br></p>
          <a href="https://babalshams.com/al-hadheerah" target="blank" class="btn btn-primary" style="background-color: #333333">Click here to view</a>
        </div>

  </div>

<h1 id="zh">ZHENG </br>HE</h1>
  <div class="card" id="card7" style="width: 30rem; height: 32.8rem">

        <span class='zoom' id='ex1'>
            <img height="250" src="Zheng He.jpg"  class="card-img-top" alt="Zheng He">
          </span>
     
        <div class="card-body">
            <p class="card-text">Zheng He's at Jumeirah Mina A'Salam in Dubai celebrates Chinese cuisine,
                reimagined with modern flair in a waterside restaurant. It is situated near the famous waterways of Mina A'Salam at Madinat Jumeirah.
                The restaurant's interior features polished wood flooring with modern Asian inspired decor.</br></br></p>
          <a href="https://www.jumeirah.com/en/dine/dubai/mina-a-salam-zheng-hes?utm_source=google&utm_medium=google%20places&utm_campaign=restaurant" target="blank" class="btn btn-primary" style="background-color: #333333">Click here to view</a>
        </div>

  </div>
</body>
<?php include "footer.php"; ?>
</html>

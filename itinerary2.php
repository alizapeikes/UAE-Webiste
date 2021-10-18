<html>
<head>
  <meta charset="utf-8">
  <title>Itinerary Submit</title>
  <link rel="stylesheet" type="text/css" href="itinerary2.css">
</head>

<body>
  <div class="login-root">
    <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
      <div class="loginbackground box-background--white padding-top--64">
        <div class="loginbackground-gridContainer">
          <div class="box-root flex-flex" style="grid-area: top / start / 8 / end;">
            <div class="box-root" style="background-image: linear-gradient(white 0%, rgb(247, 250, 252) 33%); flex-grow: 1;">
            </div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 2 / auto / 5;">
            <div class="box-root box-divider--light-all-2 animationLeftRight tans3s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 6 / start / auto / 2;">
            <div class="box-root box-background--blue800" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 7 / start / auto / 4;">
            <div class="box-root box-background--blue animationLeftRight" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 8 / 4 / auto / 6;">
            <div class="box-root box-background--gray100 animationLeftRight tans3s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 2 / 15 / auto / end;">
            <div class="box-root box-background--cyan200 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 3 / 14 / auto / end;">
            <div class="box-root box-background--blue animationRightLeft" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 17 / auto / 20;">
            <div class="box-root box-background--gray100 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 5 / 14 / auto / 17;">
            <div class="box-root box-divider--light-all-2 animationRightLeft tans3s" style="flex-grow: 1;"></div>
          </div>
        </div>
      </div>
      <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
        <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
          <h1><a href="http://blog.stackfindover.com/" rel="dofollow">My Dubai Itinerary</a></h1>
        </div>
        <div class="formbg-outer">
          <div class="formbg">
            <div class="formbg-inner padding-horizontal--48">
              
              <?php  include 'dataBaseConnect.php'; ?>
              
              <form id="stripe-login" action="itinerarySubmitSample.php" method="post">
                  
                <div class="field padding-bottom--24">
                  <label for="nameTrip">Name of Trip</label>
                <input type="text" name="nameTrip" id="nameTrip"  >
                </div>
                  
                <div class="field padding-bottom--24">
                    <label for="attraction">Attractions</label>
                    <input type="text" name="attraction" id="attraction"  required/>
                </div>
                  
                <div class="field padding-bottom--24">
                    <label for="hotel">  Hotel Choice </label>
                    <select name="hotel" class="form-control" multiple>
                    <?php
                        $results=$mySQL->query("select * from hotel");

                        while ($row=$results->fetch_assoc()){
                            echo "<option value='".$row['hotelName']."'>".$row['hotelName']."</option>";
                    }
                    ?>
                    </select>
                </div>
                  
               
                  <div class="field padding-bottom--24">
                       <label for="restaurant">Restaurant</label>
                       <select name="restaurant" class="form-control" multiple>
                       <?php
                    
                           $results=$mySQL->query("select * from restaurant");

                            while ($row=$results->fetch_assoc()){
                               echo "<option value='".$row['nameRestaurant']."'>".$row['nameRestaurant']."</option>";
                            }
                        ?>
                    </select>
                       
                  </div>
                  
                        <div class="field padding-bottom--24">
                            <label for="transportation">Mode of Transportation</label>
                            <select name="transportation" class="form-control" multiple>
                            <?php
               
                                $results=$mySQL->query("select * from transportation");

                                while ($row=$results->fetch_assoc()){
                                echo "<option value='".$row['modeOfTransportation']."'>".$row['modeOfTransportation']."</option>";
                            }
                            ?>
                            </select>
                        </div>
                  
  
                <div class="field padding-bottom--24">
                  <input type="submit" name="submit" value="Make Itinerary">
                </div>
                  

              </form>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</body>

</html>
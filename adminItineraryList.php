<html>
    <head>
        <title>admin itinerary list</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            table {
                width: 80%;
                margin-right: auto;
                margin-left: auto;
                border-width: 5px;
                border-color: rgb(0,120,210);
                border-style: solid;
                border-collapse: collapse;
                font-size: large;
            }
            table tr th, table tr td{
                border-width: 1px;
                border-color: rgb(0,140,210);
                border-style: solid;
                padding: 10px;
              }
        </style>
    </head>
    <body>
    <?php include "header.php"; ?>
    <?php include 'dataBaseConnect.php'; ?>
        <table>
            <tr>
                <th>Name of Trip</th>
                <th>Attractions</th>
                <th>Hotels</th>
                <th>Restaurants</th>
                <th>Transportation</th>
            </tr>
                <?php
                $result = mysqli_query($mySQL,"SELECT * FROM itinerary");
                while($row = mysqli_fetch_array($result))
                    {
                    echo "<tr>";
                    echo "<td>" . $row['nameTrip'] . "</td>";
                    echo "<td>" . $row['attraction'] . "</td>";
                    echo "<td>" . $row['hotel'] . "</td>";
                    echo "<td>" . $row['restaurant'] . "</td>";
                    echo "<td>" . $row['transportation'] . "</td>";
                    echo "</tr>";
                    }
                ?>
            <tr>
                
            </tr>
        </table>
        <?php include "footer.php" ?>
    </body>
</html>
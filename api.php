<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <meta name="description" content="Rezip.io">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" href="img/Favicon.jpg" type="image/x-icon"/>
    <link href="css/style.css" type="text/css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>API Test</title>
</head>

<body>
    <header class="p-3 bg-dark text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="index.php" class="nav-link px-2 text-white">Rezip.io</a></li>
                </ul>
            </div>
        </div>
    </header>
    <br><br>
<?php

// Required PHP version -> 5.6.13

if(isset($_POST["submit"])) /*sees if the submit is posted*/
{
    $apiKey = $_POST["APIKey"];
    $apiLink = "https://api.rezip.io/v2.0/";
    header('accept: text/plain' , 'X-Api-Key: '.$apiKey);
    $category = $_POST["category"];
    switch ($category) {
        case "Distance":
            $fromZipCode = $_POST["fromZipCode"];
            $fromHouseNumber = $_POST["fromHouseNumber"];
            $fromHouseNumberLetter = $_POST["fromHousenumberLetter"];
            $toZipCode = $_POST["toZipCode"];
            $toHouseNumber = $_POST["toHouseNumber"];
            $toHouseNumberLetter = $_POST["toHousenumberLetter"];

            $endpoint = $apiLink."distance?fromZipCode=$fromZipCode&fromHouseNumber=$fromHouseNumber&fromHousenumberLetter=$fromHouseNumberLetter&toZipCode=$toZipCode&toHouseNumber=$toHouseNumber&toHousenumberLetter=$toHouseNumberLetter";
        break;
        case "Nearby":
            $latitude = $_POST["latitude"];
            $longitude = $_POST["longitude"];

            $endpoint = $apiLink."nearby?latitude=$latitude&longitude=$longitude";
        break;
        case "Address":
            $ZipCode = $_POST["zipCode"];
            $HouseNumber = $_POST["houseNumber"];
            $HouseNumberLetter = $_POST["housenumberLetter"];

            $endpoint = $apiLink."address?zipCode=$ZipCode&houseNumber=$HouseNumber&housenumberLetter=$HouseNumberLetter";
        break;
        case "City":    
            $City = $_POST["cityname"];
            $endpoint = $apiLink."city?name=$City";
        break;
        case "Cities":
            $endpoint = $apiLink."cities";
        break;
        case "Ip-Location": 
            $PublicIP = $_POST["ipAddress"];
            $endpoint = $apiLink."iplocation?ipAddress=$PublicIP";
        break;
        case "Legacy-v2-Addresses":
            $Address = $_POST["postcode"];
            $HouseNumber = $_POST["number"];

            $endpoint = $apiLink."legacy/v2/addresses?postcode=$Address&number=$HouseNumber";
        break;
        case "Address-Autocomplete":
            $AddressString = $_POST["address"];

            $endpoint = $apiLink."address-autocomplete?value=$AddressString&top=10";
        break;
        case "City-Autocomplete":
            $CityString = $_POST["city"];

            $endpoint = $apiLink."city-autocomplete?city=$CityString&top=25";
            break;
    }

    //  Initiate curl
    $ch = curl_init();
    // Set The Response Format to Json
    curl_setopt($ch, CURLOPT_HTTPHEADER, array( 'accept: text/plain' , 'X-Api-Key: '.$apiKey));
    // Disable SSL verification
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    // Will return the response, if false it print the response
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    // Set the url
    curl_setopt($ch, CURLOPT_URL,$endpoint);
    // Execute
    $result=curl_exec($ch);
    // Closing
    curl_close($ch);

    $decodedResult = json_decode($result, true);
    ?>
    <div class="distance container styling">
        <div class="row mb-3">
            <div class="col-6 col-sm-4 themed-grid-col">
                <h2 class="mt-4"><?php echo$category?></h2>
            </div>
            <div class="col-6 col-sm-4 themed-grid-col"></div>
            <div class="col-6 col-sm-4 themed-grid-col"></div>
        </div>
        <div class="row mb-3">
            <div class="col-6 col-sm-12 themed-grid-col">
                <?php
                    switch ($category) {
                        case "Distance":
                            echo "Distance not decoded = ".$result;
                            echo "<br>Distance decoded = ".$decodedResult;
                        break;
                        case "Nearby":
                            echo "zipcodeId = ".$decodedResult["zipcodeId"];
                            echo "</br> zipcode = ".$decodedResult["zipcode"];
                            echo "</br> houseNumber = ".$decodedResult["houseNumber"];
                            echo "</br> houseNumberLetter = ".$decodedResult["houseNumberLetter"];
                            echo "</br> houseNumberAddition = ".$decodedResult["houseNumberAddition"];
                            echo "</br> street = ".$decodedResult["street"];
                            echo "</br> city = ".$decodedResult["city"];
                            echo "</br> municipality = ".$decodedResult["municipality"];
                            echo "</br> province = ".$decodedResult["province"];
                            echo "</br> longitude = ".$decodedResult["longitude"];
                            echo "</br> latitude = ".$decodedResult["latitude"];
                        break;
                        case "Address":
                            echo "houseNumber = ".$decodedResult["houseNumber"];
                            echo "</br> houseNumberLetter = ".$decodedResult["houseNumberLetter"];
                            echo "</br> houseNumberAddition = ".$decodedResult["houseNumberAddition"];
                            echo "</br> street = ".$decodedResult["street"];
                            echo "</br> city = ".$decodedResult["city"];
                            echo "</br> municipality = ".$decodedResult["municipality"];
                            echo "</br> province = ".$decodedResult["province"];
                            echo "</br> longitude = ".$decodedResult["longitude"];
                            echo "</br> latitude = ".$decodedResult["latitude"];
                        break;
                        case "City":    
                            echo "cityId = ".$decodedResult["city"]["cityId"];
                            echo "</br> cityCode = ".$decodedResult["city"]["cityCode"];
                            echo "</br> cityName = ".$decodedResult["city"]["cityName"];
                            echo "</br> municipality = ".$decodedResult["city"]["municipality"];
                            echo "</br> province = ".$decodedResult["city"]["province"];
                            echo "</br> region = ".$decodedResult["city"]["region"];
                            echo "</br> longitude = ".$decodedResult["city"]["longitude"];
                            echo "</br> latitude = ".$decodedResult["city"]["latitude"];
                            echo "</br> geoSurface = ".$decodedResult["city"]["geoSurface"];
                        break;
                        case "Cities":
                            foreach ($decodedResult as $color) {
                                echo $color . '<br>';
                            }
                        break;
                        case "Ip-Location": 
                            echo "countryCode = ".$decodedResult["countryCode"];
                            echo "</br> countryName = ".$decodedResult["countryName"];
                            echo "</br> regionName = ".$decodedResult["regionName"];
                            echo "</br> cityName = ".$decodedResult["cityName"];
                            echo "</br> longitude = ".$decodedResult["longitude"];
                            echo "</br> latitude = ".$decodedResult["latitude"];
                            echo "</br> zipcode = ".$decodedResult["zipcode"];
                            echo "</br> timezone = ".$decodedResult["timezone"];
                        break;
                        case "Legacy-v2-Addresses":
                            foreach ($decodedResult["embedded"]["addresses"] as $color) {
                                echo "id = ".$color["id"];
                                echo "<br> street = ".$color["street"];
                                echo "<br> number = ".$color["number"];
                                echo "<br> letter = ".$color["letter"];
                                echo "<br> addition = ".$color["addition"];
                                echo "<br> postcode = ".$color["postcode"];
                                echo "<br> nen5825 street = ".$color["nen5825"]["street"];
                                echo "<br> nen5825 postcode = ".$color["nen5825"]["postcode"];
                                echo "<br> city = ".$color["city"]["label"];
                                echo "<br> municipality = ".$color["municipality"]["label"];
                                echo "<br> province = ".$color["province"]["label"];
                                echo "<br> latitude = ".$color["geo"]["center"]["wgs84"]["coordinates"][0];
                                echo "<br> longitude = ".$color["geo"]["center"]["wgs84"]["coordinates"][1];
                            }
                        break;
                        case "Address-Autocomplete":
                            foreach ($decodedResult as $color) {
                                
                                echo "zipcode = ".$color["zipcode"];
                                echo "</br> houseNumber = ".$color["houseNumber"];
                                echo "</br> houseNumberLetter = ".$color["houseNumberLetter"];
                                echo "</br> houseNumberAddition = ".$color["houseNumberAddition"];
                                echo "</br> street = ".$color["street"];
                                echo "</br> city = ".$color["city"];
                                echo "</br> municipality = ".$color["municipality"];
                                echo "</br> province = ".$color["province"];
                                echo "</br> longitude = ".$color["longitude"];
                                echo "</br> latitude = ".$color["latitude"];
                                echo "</br> objectCode = ".$color["objectCode"];
                                echo "</br> zipcodeId = ".$color["zipcodeId"];
                                echo "</br></br></br></br>";
                            }
                        break;
                        case "City-Autocomplete":
                            foreach ($decodedResult as $color) {
                                echo "<h2>cityName = ".$color["city"]["cityName"]."</h2>";
                                echo "</br> cityCode = ".$color["city"]["cityCode"];
                                echo "</br> municipality = ".$color["city"]["municipality"];
                                echo "</br> province = ".$color["city"]["province"];
                                echo "</br> region = ".$color["city"]["region"];
                                echo "</br> longitude = ".$color["city"]["longitude"];
                                echo "</br> latitude = ".$color["city"]["latitude"];
                                echo "</br> cityId = ".$color["city"]["cityId"];
                                echo "</br> geoSurface = ".$color["city"]["geoSurface"];
                                echo "</br>";

                                echo "surfaces";
                                foreach ($color["surfaces"] as $flower) {
                                    foreach ($flower as $paint) {
                                        echo "</br> x = ".$paint["x"];
                                        echo "</br> y = ".$paint["y"];
                                    }
                                }
                            }
                        break;
                    }
                ?>
            </div>
        </div>
<?php
}
else
{
    echo "something went wrong, please try again";
}
?>
        <div class="row mb-3">
            <div class="col-6 col-sm-4 themed-grid-col">
                <form method="POST" action="index.php">
                    <input type="submit" name="submit" value="Go Back">
                </form>
            </div>
            <div class="col-6 col-sm-4 themed-grid-col"></div>
            <div class="col-6 col-sm-4 themed-grid-col"></div>
        </div>
    </div><br><br>

    <div class="container-fluid themed-container styling">ReZip</div>
    </body>
    <?php

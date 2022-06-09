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

<body onload="StorageFunction()">
    <header class="p-3 bg-dark text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 text-white">Rezip.io</a></li>
                </ul>
            </div>
        </div>
    </header><br><br>

    <!-- <input placeholder="Enter some text" name="name" onchange="updateTest()"/>
    <p id="log"></p> -->

    <div class="key container styling">
        <div class="row mb-3">
            <div class="col-6 col-sm-4 themed-grid-col">
                <h2 class="mt-4">API-Key</h2>
            </div>
            <div class="col-6 col-sm-4 themed-grid-col"></div>
            <div class="col-6 col-sm-4 themed-grid-col"></div>
        </div>
        <form method="POST" action="api.php">
            <div class="row mb-3">
                <div class="col-6 col-sm-4 themed-grid-col">
                    <a>API-Key</a><br>
                    <input id="APIKey" type="text" name="APIKey" placeholder="API-Key" oninput="setKey()" required ><br><br>
                    <a>Filled In Key:</a><br>
                    <label id="ChangeText"></label>
                </div>
                <div class="col-6 col-sm-4 themed-grid-col">
                </div>
                <div class="col-6 col-sm-4 themed-grid-col">
                </div>
            </div><br>
        </form>
    </div><br><br>

    <div class="distance container styling">
        <div class="row mb-3">
            <div class="col-6 col-sm-4 themed-grid-col">
                <h2 class="mt-4">Distance</h2>
            </div>
            <div class="col-6 col-sm-4 themed-grid-col"></div>
            <div class="col-6 col-sm-4 themed-grid-col"></div>
        </div>
            <form method="POST" action="api.php">
                <input type="hidden" id="APIKeyDistance" name="APIKey" value="ToBeChanged"/>
            <div class="row mb-3">
                <div class="col-6 col-sm-4 themed-grid-col">
                    <a>From Zip Code</a><br>
                    <input type="text" name="fromZipCode" placeholder="fromZipCode" required>
                </div>
                <div class="col-6 col-sm-4 themed-grid-col">
                    <a>From House Number</a><br>
                    <input type="number" name="fromHouseNumber" placeholder="fromHouseNumber" required>
                </div>
                <div class="col-6 col-sm-4 themed-grid-col">
                    <a>From House Number Letter</a><br>
                    <input type="text" name="fromHousenumberLetter" placeholder="fromHousenumberLetter">
                </div>
            </div><br>
            <div class="row mb-3">
                <div class="col-6 col-sm-4 themed-grid-col">
                    <a>To Zip Code</a><br>
                    <input type="text" name="toZipCode" placeholder="toZipCode" required>
                </div>
                <div class="col-6 col-sm-4 themed-grid-col">
                    <a>To House Number</a><br>
                    <input type="number" name="toHouseNumber" placeholder="toHouseNumber" required>
                </div>
                <div class="col-6 col-sm-4 themed-grid-col">
                    <a>To House Number Letter</a><br>
                    <input type="text" name="toHousenumberLetter" placeholder="toHousenumberLetter">
                </div>
            </div><br>
            <div class="row mb-3">
                <div class="col-6 col-sm-4 themed-grid-col"></div>
                <div class="col-6 col-sm-4 themed-grid-col"></div>
                <div class="col-6 col-sm-4 themed-grid-col"><br>
                    <input type="hidden" name="category" value="Distance">
                    <input type="submit" name="submit" value="Submit">
                </div>
            </div>
        </form>
    </div><br><br>

    <div class="nearby container styling">

        <div class="row mb-3">
            <div class="col-6 col-sm-4 themed-grid-col">
                <h2 class="mt-4">Nearby</h2>
            </div>
            <div class="col-6 col-sm-4 themed-grid-col"></div>
            <div class="col-6 col-sm-4 themed-grid-col"></div>
        </div>

        <form method="POST" action="api.php">
            <input type="hidden" name="APIKey" id="APIKeyNearby" value=""/>
            <div class="row mb-3">
                <div class="col-6 col-sm-4 themed-grid-col">
                    <a>latitude</a><br>
                    <input type="text" name="latitude" placeholder="latitude" required>
                </div>
                <div class="col-6 col-sm-4 themed-grid-col">
                    <a>longitude</a><br>
                    <input type="text" name="longitude" placeholder="longitude" required>
                </div>
                <div class="col-6 col-sm-4 themed-grid-col"></div>
            </div><br>
            <div class="row mb-3">
                <div class="col-6 col-sm-4 themed-grid-col"></div>
                <div class="col-6 col-sm-4 themed-grid-col"></div>
                <div class="col-6 col-sm-4 themed-grid-col"><br>
                    <input type="hidden" name="category" value="Nearby">
                    <input type="submit" name="submit" value="Submit">
                </div>
            </div>
        </form>
    </div><br><br>

    <div class="address container styling">
        
        <div class="row mb-3">
            <div class="col-6 col-sm-4 themed-grid-col">
                <h2 class="mt-4">address</h2>
            </div>
            <div class="col-6 col-sm-4 themed-grid-col"></div>
            <div class="col-6 col-sm-4 themed-grid-col"></div>
        </div>

        <form method="POST" action="api.php">
            <input type="hidden" name="APIKey" id="APIKeyAddress" value=""/>
            <div class="row mb-3">
                <div class="col-6 col-sm-4 themed-grid-col">
                    <a>zipCode</a><br>
                    <input type="text" name="zipCode" placeholder="zipCode" required>
                </div>
                <div class="col-6 col-sm-4 themed-grid-col">
                    <a>houseNumber</a><br>
                    <input type="number" name="houseNumber" placeholder="houseNumber" required>
                </div>
                <div class="col-6 col-sm-4 themed-grid-col">
                    <a>housenumberLetter</a><br>
                    <input type="text" name="housenumberLetter" placeholder="housenumberLetter">
                </div>
            </div><br>
            <div class="row mb-3">
                <div class="col-6 col-sm-4 themed-grid-col"></div>
                <div class="col-6 col-sm-4 themed-grid-col"></div>
                <div class="col-6 col-sm-4 themed-grid-col"><br>
                    <input type="hidden" name="category" value="Address">
                    <input type="submit" name="submit" value="Submit">
                </div>
            </div>
        </form>
    </div><br><br>

    <div class="city container styling">
        
        <div class="row mb-3">
            <div class="col-6 col-sm-4 themed-grid-col">
                <h2 class="mt-4">city</h2>
            </div>
            <div class="col-6 col-sm-4 themed-grid-col"></div>
            <div class="col-6 col-sm-4 themed-grid-col"></div>
        </div>

        <form method="POST" action="api.php">
            <input type="hidden" name="APIKey" id="APIKeyCity" value=""/>
            <div class="row mb-3">
                <div class="col-6 col-sm-4 themed-grid-col">
                    <a>cityname</a><br>
                    <input type="text" name="cityname" placeholder="name" required>
                </div>
                <div class="col-6 col-sm-4 themed-grid-col">
                </div>
                <div class="col-6 col-sm-4 themed-grid-col">
                </div>
            </div><br>
            <div class="row mb-3">
                <div class="col-6 col-sm-4 themed-grid-col"></div>
                <div class="col-6 col-sm-4 themed-grid-col"></div>
                <div class="col-6 col-sm-4 themed-grid-col"><br>
                    <input type="hidden" name="category" value="City">
                    <input type="submit" name="submit" value="Submit">
                </div>
            </div>
        </form>
    </div><br><br>

    <div class="cities container styling">
        
        <div class="row mb-3">
            <div class="col-6 col-sm-4 themed-grid-col">
                <h2 class="mt-4">cities</h2>
            </div>
            <div class="col-6 col-sm-4 themed-grid-col"></div>
            <div class="col-6 col-sm-4 themed-grid-col"></div>
        </div>

        <form method="POST" name="myform" action="api.php">
            <input type="hidden" name="APIKey" id="APIKeyCities" value=""/>
            <div class="row mb-3">           
                <div class="col-6 col-sm-4 themed-grid-col"></div>
                <div class="col-6 col-sm-4 themed-grid-col"></div>
                <div class="col-6 col-sm-4 themed-grid-col"><br>
                    <input type="hidden" name="category" value="Cities">
                    <input type="submit" name="submit" value="Submit">
                </div>
            </div>
        </form>
    </div><br><br>

    <div class="IP-Location container styling">
        
        <div class="row mb-3">
            <div class="col-6 col-sm-4 themed-grid-col">
                <h2 class="mt-4">IP-Location</h2>
            </div>
            <div class="col-6 col-sm-4 themed-grid-col"></div>
            <div class="col-6 col-sm-4 themed-grid-col"></div>
        </div>

        <form method="POST" action="api.php">
            <input type="hidden" name="APIKey" id="APIKeyIP-Location" value=""/>
            <div class="row mb-3">
                <div class="col-6 col-sm-4 themed-grid-col">
                    <a>ipAddress</a><br>
                    <input type="text" name="ipAddress" placeholder="ipAddress" required>
                </div>
                <div class="col-6 col-sm-4 themed-grid-col">
                </div>
                <div class="col-6 col-sm-4 themed-grid-col">
                </div>
            </div><br>
            <div class="row mb-3">
                <div class="col-6 col-sm-4 themed-grid-col"></div>
                <div class="col-6 col-sm-4 themed-grid-col"></div>
                <div class="col-6 col-sm-4 themed-grid-col"><br>
                    <input type="hidden" name="category" value="Ip-Location">
                    <input type="submit" name="submit" value="Submit">
                </div>
            </div>
        </form>
    </div><br><br>

    <div class="Legacy-v2-Addresses container styling">
        
        <div class="row mb-3">
            <div class="col-6 col-sm-4 themed-grid-col">
                <h2 class="mt-4">Legacy-v2-Addresses</h2>
            </div>
            <div class="col-6 col-sm-4 themed-grid-col"></div>
            <div class="col-6 col-sm-4 themed-grid-col"></div>
        </div>

        <form method="POST" action="api.php">
            <input type="hidden" name="APIKey" id="APIKeyLegacy" value=""/>
            <div class="row mb-3">
                <div class="col-6 col-sm-4 themed-grid-col">
                    <a>postcode</a><br>
                    <input type="text" name="postcode" placeholder="postcode" required>
                </div>
                <div class="col-6 col-sm-4 themed-grid-col">
                    <a>number</a><br>
                    <input type="number" name="number" placeholder="number" required>
                </div>
                <div class="col-6 col-sm-4 themed-grid-col">
                </div>
            </div><br>
            <div class="row mb-3">
                <div class="col-6 col-sm-4 themed-grid-col"></div>
                <div class="col-6 col-sm-4 themed-grid-col"></div>
                <div class="col-6 col-sm-4 themed-grid-col"><br>
                    <input type="hidden" name="category" value="Legacy-v2-Addresses">
                    <input type="submit" name="submit" value="Submit">
                </div>
            </div>
        </form>
    </div><br><br>

    <div class="Address-Autocomplete container styling">
        <div class="row mb-3">
            <div class="col-6 col-sm-4 themed-grid-col">
                <h2 class="mt-4">Address-Autocomplete</h2>
            </div>
            <div class="col-6 col-sm-4 themed-grid-col"></div>
            <div class="col-6 col-sm-4 themed-grid-col"></div>
        </div>
        <form method="POST" action="api.php">
            <input type="hidden" name="APIKey" id="APIKeyAddressAuto" value=""/>
            <div class="row mb-3">
                <div class="col-6 col-sm-4 themed-grid-col">
                    <a>address</a><br>
                    <input type="text" name="address" placeholder="Street Name" required>
                </div>
                <div class="col-6 col-sm-4 themed-grid-col">
                </div>
                <div class="col-6 col-sm-4 themed-grid-col">
                </div>
            </div><br>
            <div class="row mb-3">
                <div class="col-6 col-sm-4 themed-grid-col"></div>
                <div class="col-6 col-sm-4 themed-grid-col"></div>
                <div class="col-6 col-sm-4 themed-grid-col"><br>
                    <input type="hidden" name="category" value="Address-Autocomplete">
                    <input type="submit" name="submit" value="Submit">
                </div>
            </div>
        </form>
    </div><br><br>

    <div class="City-Autocomplete container styling">
        <div class="row mb-3">
            <div class="col-6 col-sm-4 themed-grid-col">
                <h2 class="mt-4">City-Autocomplete</h2>
            </div>
            <div class="col-6 col-sm-4 themed-grid-col"></div>
            <div class="col-6 col-sm-4 themed-grid-col"></div>
        </div>
        <form method="POST" action="api.php">
            <input type="hidden" name="APIKey" id="APIKeyCityAuto" value=""/>
            <div class="row mb-3">
                <div class="col-6 col-sm-4 themed-grid-col">
                    <a>city</a><br>
                    <input type="text" name="city" placeholder="City Name" required>
                </div>
                <div class="col-6 col-sm-4 themed-grid-col">
                </div>
                <div class="col-6 col-sm-4 themed-grid-col">
                </div>
            </div><br>
            <div class="row mb-3">
                <div class="col-6 col-sm-4 themed-grid-col"></div>
                <div class="col-6 col-sm-4 themed-grid-col"></div>
                <div class="col-6 col-sm-4 themed-grid-col"><br>
                    <input type="hidden" name="category" value="City-Autocomplete">
                    <input type="submit" name="submit" value="Submit">
                </div>
            </div>
        </form>
    </div><br><br>

    <div class="container-fluid themed-container styling">Rezip.io</div>
    <script src="js/index.js"></script>
</body>
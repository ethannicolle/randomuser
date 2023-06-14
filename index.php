<?php 

    $url = "https://randomuser.me/api/";
    $params = array('results' => 1);

    $queryString = http_build_query($params);
    $apiUrl = $url . "?" . $queryString;

    $response = file_get_contents($apiUrl);
    $data = json_decode($response, true);

    $users = $data['results'];

    $photo = $users[0]['picture']['large'];

    // Name informations
    $title = $users[0]['name']['title'];
    $firstname = $users[0]['name']['first'];
    $lastname = $users[0]['name']['last'];

    // Birth informations
    $age = $users[0]['dob']['age'];
    $dateofbirth = $users[0]['dob']['date'];
    $dob = strtok($dateofbirth, "T");

    // Location informations
    $streetnumber = $users[0]['location']['street']['number'];
    $streetname = $users[0]['location']['street']['name'];
    $postcode = $users[0]['location']['postcode'];
    $city = $users[0]['location']['city'];
    $state = $users[0]['location']['state'];
    $country = $users[0]['location']['country'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RandomUser.me API</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">

        <div class="user-card-container">

            <div class="left-content">
                <div class="image-container">
                    <img src="<?= $photo?>" alt="">
                </div>
            </div>
            <div class="right-content">
                <p><?= $title . ". " . $lastname . " " . $firstname  ?></p>
                <p><?= $age ?> years old <span class="notimportant">(<?= date("d.m.Y", strtotime($dob)) ?>)</span></p>
                <p><?= $streetnumber . " " . $streetname?></p>
                <p><?= $postcode . " " . $city?></p>
                <p><?= $country ?></p>
            </div>

        </div>

    </div>
    
</body>
</html>
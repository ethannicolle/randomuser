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
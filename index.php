<?php 

require_once 'data.php';

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

            <div class="top">
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

            <div class="bottom">
                <button class="btn-primary" onclick="location.reload()">Generate another ID</button>
            </div>

        </div>
        

    </div>
    
</body>
</html>
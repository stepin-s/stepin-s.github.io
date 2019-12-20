<?php require "header.php" ?>
<div class="container">
<?php

if(isset($_GET['cityid'])){
    $city = $_GET['cityid'];
    if($city == 'Moscow'){
        $cityId = 524901;
    }
    else if ($city == 'London'){
        $cityId = 2643743;
    }
    else if ($city == 'Kiev'){
        $cityId = 703448;
    }
    else if ($city == 'Valencia'){
        $cityId = 2509954;
    }
}

$apiKey = "4fe604a8569a708f96b8c0f510045751";
$apiUrl = "http://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=ru&units=metric&APPID=" . $apiKey;

$crequest = curl_init();

curl_setopt($crequest, CURLOPT_HEADER, 0);
curl_setopt($crequest, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($crequest, CURLOPT_URL, $apiUrl);
curl_setopt($crequest, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($crequest, CURLOPT_VERBOSE, 0);
curl_setopt($crequest, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($crequest);

curl_close($crequest);
$data = json_decode($response);
$currentTime = time();

?>

<div class="weather">
    <br><br>
    <h2 class="weather__title">Погода в городе <?php echo $data->name; ?></h2>
    <div class="weather__time">
        <p class="weather__time"><?php echo date("l g:i a", $currentTime); ?></p>
        <p class="weather__date"><?php echo date("jS F, Y",$currentTime); ?></p>
        <p class="weather__status"><?php echo ucwords($data->weather[0]->description); ?></p>
    </div>
    <div class="weather__forecast">
        <span class="weather__min"><?php echo $data->main->temp_min; ?>°C</span>
        <span class="weather__max"><?php echo $data->main->temp_max; ?>°C</span>
    </div>
    <p class="weather__humidity">Влажность: <?php echo $data->main->humidity; ?> %</p>
    <p class="weather__wind">Ветер: <?php echo $data->wind->speed; ?> км/ч</p>
</div>

</div>
<?php require "footer.php" ?>
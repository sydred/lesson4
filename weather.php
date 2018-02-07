<?php

$appid = 'f92d791855edae248c7abfd74906e8ab';
$city_id = '524901';

$api = file_get_contents("http://api.openweathermap.org/data/2.5/weather?id=" . $city_id . "&appid=" . $appid);

$text = file_get_contents("text.json");
$decode_api = json_decode($api, true);
$decode_city = json_decode($text, true);


$city_name = $decode_api['name'];


$weather_desc = $decode_api['weather'][0]['description'];
$pressure = $decode_api['main']['pressure'];
$humidity = $decode_api['main']['humidity'];
$coord_lon = $decode_api['coord']['lon'];
$coord_lat = $decode_api['coord']['lat'];


$temp = $decode_api['main']['temp'];


$temp_celsius = $temp - 273;
$temp_celsius = round($temp_celsius, 1). ' C&deg';



?>

<!DOCTYPE html>
<head>
	<title>Погода в Москве</title>
	<meta charset="utf-8">
</head>
<body>
	<h1><?=$city_name;?></h1>
	<div><?=$temp_celsius;?></div>
	<div><?=$weather_desc;?></div>
	<ul>
		<li>Pressure:<?=$pressure;?></li>
		<li>Humidity:<?=$humidity ;?></li>
		<li>Coord:[<?=$coord_lat;?><?=$coord_lon;?>]</li>

	</ul>
</body>
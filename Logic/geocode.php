<?php
	$address = $_POST['addressInput'];
	$city = $_POST['cityInput'];
	$zip = $_POST['zipInput'];

	$userDest = $address . ", " . $city . ", " . $zip;
	$begGeoURL = "https://maps.googleapis.com/maps/api/geocode/json?address=";
	$begGeoURL = $begGeoURL . urlencode($begGeoURL) . "&sensor=false";

	$goToSite = curl_init();
	curl_setopt($goToSite, CURLOPT_URL, $begGeoURL);
	curl_setopt($goToSite, CURLOPT_RETURNTRANSFER, 1);
	$locData = json_decode(curl_exec($goToSite), true);

	$latitude = $locData["results"][0]["geometry"]["lat"];
	$longitude = $locData["results"][0]["geometry"]["lng"];

	echo "<p id='#hideLat'>" . $latitude . "</p>";
	echo "<p id='#hideLon'>" . $longitude . "</p>";
?>
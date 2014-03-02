<?php
	$address = $_POST['addressHere'];
	$city = $_POST['cityHere'];
	$country = $_POST['countryHere'];

	$userDest = $address . ", " . $city . ", " . $country;
	$begGeoURL = "https://maps.googleapis.com/maps/api/geocode/json?sensor=false&address=";
	$begGeoURL = $begGeoURL . urlencode(trim($userDest)) . "/";

	echo $begGeoURL;
	$goToSite = curl_init();
	curl_setopt($goToSite, CURLOPT_URL, $begGeoURL);
	curl_setopt($goToSite, CURLOPT_RETURNTRANSFER, 1);
	echo curl_exec($goToSite);
	$locData = json_decode(curl_exec($goToSite), true);

	echo $locData[results][0][geometry][location][lat];
	echo $locData[results][0][geometry][location][lng];

?>
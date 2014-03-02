<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Travel App</title>
		<link href="css/travelStyle.css" rel="stylesheet">
		<!-- Bootstrap -->
	    <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->
	</head>
	<body>

	<?php
		$address = $_POST['addressInput'];
		$city = $_POST['cityInput'];
		$country = $_POST['countryInput'];

		$userDest = $address . ", " . $city . ", " . $country;
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

		<h1>Results Page</h1>
		<h2>You chose &ltInsert Country Here&gt</h2>

		<div id="weatherDiv">
			<p>Weather in Charlottesville</p></div>

		<div id="twoDivs">
			<div id="poiDiv">
				<p>Points of Interest</p>
				<table id="poiTable">
					<tr>
  						<th>Name</th>
  						<th>Address</th>		
  						<th></th>
  					</tr>
					<tr>
					<tr>
  						<td></td>
  						<td></td>		
  						<td></td>
  					</tr>
					<tr>
  						<td></td>
  						<td></td>		
  						<td></td>
					</tr>
					<tr>
  						<td></td>
  						<td></td>		
  						<td></td>
					</tr>
				</table>
			</div>

			<div id="restaurantsDiv">
				<p>Nearby Restaurants</p>
				<table id="restaurantsTable">
					<tr>
  						<th>Name</th>
  						<th>Address</th>		
  						<th></th>
  					</tr>
					<tr>
					<tr>
  						<td></td>
  						<td></td>		
  						<td></td>
  					</tr>
					<tr>
  						<td></td>
  						<td></td>		
  						<td></td>
					</tr>
					<tr>
  						<td></td>
  						<td></td>		
  						<td></td>
					</tr>
				</table>
			</div>
		</div>

	</body>
</html>
<?php
	$address = $_POST['addressInput'];
	$city = $_POST['cityInput'];
	$country = $_POST['countryInput'];

	echo $city . " and " . $country;

	$userDest = $address . ", " . $city . ", " . $country;
	$begGeoURL = "https://maps.googleapis.com/maps/api/geocode/json?address=";
	$begGeoURL = $begGeoURL . urlencode($begGeoURL) . "&sensor=false";

	$goToSite = curl_init();
	curl_setopt($goToSite, CURLOPT_URL, $begGeoURL);
	curl_setopt($goToSite, CURLOPT_RETURNTRANSFER, 1);
	$locData = json_decode(curl_exec($goToSite), true);

	$latitude = $locData["results"][0]["geometry"]["lat"];
	$longitude = $locData["results"][0]["geometry"]["lng"];

echo "<html lang='en'>";
	echo "<head>";
		echo "<meta charset='utf-8'>";
		echo "<meta http-equiv='X-UA-Compatible' content='IE=edge'>";
		echo "<meta name='viewport' content='width=device-width, initial-scale=1'>";
		echo "<title>Travel App</title>";
		echo "<link href='../css/travelStyle.css' rel='stylesheet'>";
		echo "<!-- Bootstrap -->";
	    echo "<link href='../css/bootstrap.min.css' rel='stylesheet'>";
	echo "</head>";
	echo "<body>";
	echo "<h1>You chose " . $country . "</h1>";
	echo "<div id='weatherDiv'>";
	echo "<p>Weather in " . $city . ", " . $country . "</p>";
	echo "</div>";
		echo "<div id='twoDivs'>";
			echo "<div id='poiDiv'>";
				echo "<p>Points of Interest</p>";
				echo "<table id='poiTable'>";
					echo "<tr>";
  						echo "<th>Name</th>";
  						echo "<th>Address</th>";		
  						echo "<th></th>";
  					echo "</tr>";
					echo "<tr>";
					echo "<tr>";
  						echo "<td></td>";
  						echo "<td></td>";		
  						echo "<td></td>";
  					echo "</tr>";
					echo "<tr>";
  						echo "<td></td>";
  						echo "<td></td>";		
  						echo "<td></td>";
					echo "</tr>";
					echo "<tr>";
  						echo "<td></td>";
  						echo "<td></td>";	
  						echo "<td></td>";
					echo "</tr>";
				echo "</table>";
			echo "</div>";

			echo "<div id='restaurantsDiv'>";
				echo "<p>Nearby Restaurants</p>";
				echo "<table id='restaurantsTable'>";
					echo "<tr>";
  						echo "<th>Name</th>";
  						echo "<th>Address</th>";		
  						echo "<th></th>";
  					echo "</tr>";
					echo "<tr>";
					echo "<tr>";
  						echo "<td></td>";
  						echo "<td></td>";		
  						echo "<td></td>";
  					echo "</tr>";
					echo "<tr>";
  						echo "<td></td>";
  						echo "<td></td>";		
  						echo "<td></td>";
					echo "</tr>";
					echo "<tr>";
  						echo "<td></td>";
  						echo "<td></td>";	
  						echo "<td></td>";
					echo "</tr>";
				echo "</table>";
			echo "</div>";
		echo "</div>";

	echo "</body>";
echo "</html>";
?>
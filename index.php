<?php

function get_weather($url){
	$options = array(
		CURLOPT_RETURNTRANSFER => true,	// return web pages
		CURLOPT_HEADER => false,	// dont return headers
		CURLOPT_FOLLOWLOCATION => true,	// follow redirects
		CURLOPT_MAXREDIRS => 10,	//stop after 10 redirects
		CURLOPT_ENCODING => "",	//handle compressed
		CURLOPT_USERAGENT => "test",	// name of client
		CURLOPT_AUTOREFERER => true,	// set referrer on redirect
		CURLOPT_CONNECTTIMEOUT => 120,	//time-out on connect
		CURLOPT_TIMEOUT => 120,	// time-out on response
	);

	$ch = curl_init($url);
	curl_setopt_array($ch, $options);

	$content=curl_exec($ch);

	curl_close($ch);

	return $content;
}


// URL for the accuweather service
//$response = get_weather("http://dataservice.accuweather.com/currentconditions/v1/188095?apikey=AHe5X4MdHoCwniDdQYtwmZl85dj5A71v");

//$resArr = array();
//$resArr = json_decode($response);


?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel='stylesheet' type='text/css' href='css/main.css'>
		<title> GOA </title>
	</head>

	<body>
		<h3 style="text-align: left">
			GOA : Live Weather
		</h3> 

			<div style="background-image: url('/images/image1.jpg'); background-attachment: fixed; padding: 300px; background-repeat:no-repeat;background-size: 60% 60%">
		
			</div>

		
				<div align="left" style="float: left" >
Average Temperature
					<table >
			<tr>
				<th>min</th>
				<th>max</th>
				<th>avg</th>
			</tr>
			<tr>
				<td> 23 °c</td>
				<td> 32 °c</td>
				<td> 28 °c</td>

		</table>

		</div>
				<div align="right" style="float: right">
Current Temperature
					<table >
			<tr>

				<th>temp</th>

			</tr>
			<tr>

				<td> <?php 
				//print_r($resArr[0]->Temperature->Metric->Value);
				//?>°c </td>


		</table>
</div>
		</div>
		<div>
		
		</div>

	</body>
</html>

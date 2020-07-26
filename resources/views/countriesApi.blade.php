<?php
$curl = curl_init();
curl_setopt_array($curl, array(
	CURLOPT_URL => "https://countries-cities.p.rapidapi.com/location/country/list?format=json",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => array(
		"x-rapidapi-host: countries-cities.p.rapidapi.com",
		"x-rapidapi-key: f395975d9cmshb729a9c28f3f76dp12080djsnb34d53145864"
	),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	$countries = json_decode($response);
	dd($countries);
	foreach ($countries->countries as $k => $v) {
	// echo $v.'<br/>';
	echo $k.' : '.$v.'<br/>';
	// dd($countries->countries);
}
}

?>
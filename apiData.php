<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://realty-mole-property-api.p.rapidapi.com/saleListings?city=Aptos&state=CA",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: realty-mole-property-api.p.rapidapi.com",
		"x-rapidapi-key: 16e5bc17b7msh8eca5bc5694a3a7p18e6c4jsn9210d7235635"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
    $json_data = file_get_contents($response);
    $response_data = json_decode($json_data);

$user_data = $response_data->data;

$user_data = array_slice($user_data, 0, 50);

print_r($user_data);
}
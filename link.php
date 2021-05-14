
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
</head>
<?php
$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://covid-19-data.p.rapidapi.com/country?name=italy",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: covid-19-data.p.rapidapi.com",
		"x-rapidapi-key: 39e62da73amsh2351807651fda8ep1de6bejsn3db67a8a69b1"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	// echo $response;
    $data=json_decode($response,true);
    // print_r($data);

    // Manipulate data
   foreach($data as $key=> $value){
$country=$value['country'];
$code=$value['code'];
$recovered=$value['recovered'];
$critical=$value['critical'];
$deaths=$value['deaths'];
$lat=$value['latitude'];
$long=$value['longitude'];

// echo $long;
   }

?>

<body>

<div class="container">
    
<div class="row">
 <div class="col-lg-12">
 <table class="table table-responsive table-hover table-bordered">
    <thead>
        <th>Country</th>
        <th>Code</th>
        <th>Recovered</th>
        <th>Critical</th>
        <th>Deaths</th>
        <th>Latitude</th> 
        <th>Longitude</th>
    </thead>
<tbody>
<td><?php echo $country; ?></td>
<td><?php echo $code;?></td>
<td><?php echo $recovered;?></td>
<td><?php echo $critical; ?></td>
<td><?php echo $deaths; ?></td>
<td><?php echo $lat;?></td>
<td><?php echo $long; ?></td>
</tbody>
</table>
 </div>   
</div>
</div>
</body>



<?php

}

?>




</html>

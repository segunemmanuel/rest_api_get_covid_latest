<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://linkupjobsearch-linkup-job-search-v1.p.rapidapi.com/developers/v-1/search-handler.js?api_key=%7Bapi_key%7D&embedded_search_key=%7Bsearch_key%7D&orig_ip=%7Bip_addr%7D&keyword=%7Bkeyword%7D&location=%7Blocation%7D&distance=%7Bradius%7D",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"authorization: Basic U2VndW44MDgwMTIzOlNlZ3VuODA4MDEyMw==",
		"x-rapidapi-host: linkupjobsearch-linkup-job-search-v1.p.rapidapi.com",
		"x-rapidapi-key: 39e62da73amsh2351807651fda8ep1de6bejsn3db67a8a69b1"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}
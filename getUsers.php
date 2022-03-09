<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
$ch = curl_init();

$page = $_GET['page'];
$url = 'https://api.buttondown.email/v1/subscribers';
if($page){
	$url = $url.'?page='.$page;
}

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');


$headers = array();
$headers[] = 'Authorization: Token a501317c-9cf7-4fb2-bd84-b76d66a31010';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);

$result = json_decode($result,true);
foreach($result['results'] as $user){
	print_r($user);
	$email = $user['email'];
	$metadata = $user['metadata'];
	$organisation = $metadata['organisation'];
	$organisationTag = ucwords(str_replace("-", " ", $organisation));
	
	if($organisationTag==''){
		$organisationTag = 'Individual';
	}

	$ch = curl_init();
	
	curl_setopt($ch, CURLOPT_URL, 'https://api.buttondown.email/v1/subscribers/'.$user['id']);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PATCH');
	curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"tags\": [\"$organisationTag\"]}");
	
	$headers = array();
	$headers[] = 'Authorization: Token a501317c-9cf7-4fb2-bd84-b76d66a31010';
	$headers[] = 'Content-Type: application/json';
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	
	$result2 = curl_exec($ch);
	if (curl_errno($ch)) {
	    echo 'Error:' . curl_error($ch);
	}
	curl_close($ch);
	
	print_r($result2);
	
	echo "<hr />";

}
?>
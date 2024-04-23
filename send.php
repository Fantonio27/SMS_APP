<?php 
	
// Define the URL and data 
$url = 'http://localhost:3000/send'; 
// $data = ['key' => 'value']; 
// $number = $_POST["number"]; 
// $message = $_POST["message"];
$number = $_GET['number']; 
$message = $_GET['message'];
// $data = ['key' => 'value']; 
$data = ['number' => 'cscsc', 'message' => 'cacscasc'];
// $data = http_build_query($data_array);

// $ch = curl_init();

// curl_setopt($ch, CURLOPT_URL, $url);
// curl_setopt($ch, CURLOPT_POST, true);
// curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);

// $resp = curl_exec($ch);

// if($e = curl_error($ch)){
// 	echo $e;
// }else{
// 	$decoded = json_decode($resp);
// 	echo $decoded;
// }
// Prepare POST data 
$options = [ 
	'http' => [ 
		'method' => 'GET', 
		'header' => 'Content-type: application/x-www-form-urlencoded', 
		'content' => http_build_query($data), 
	], 
]; 

// Create stream context 
$context = stream_context_create($options); 

// Perform POST request 
$response = file_get_contents($url, false, $context); 

// Display the response 
echo $response; 

//process $response

?>

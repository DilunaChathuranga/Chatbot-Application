<?php


session_start();

print_r($_SESSION) ; 

 	
    $workspace_id = 'e1dd819c-e706-4610-b806-8c699a450c6d';
    $release_date = '2018-09-20';
	$apikey = 'WTWT18MV_0aP2mP-tk_VQbDeK_HGzMqo4dZua8Me3cSN';
	$data['input']['text'] = "";
    $data['alternate_intents'] = false;
	$json = json_encode($data, JSON_UNESCAPED_UNICODE);
	$ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL, 'https://gateway-lon.watsonplatform.net/assistant/api/v1/workspaces/'.$workspace_id .'/message?version='.$release_date); 
	// Instructions here: https://www.ibm.com/watson/developercloud/assistant/api/v1/curl.html?curl#message
    curl_setopt($ch, CURLOPT_USERPWD, "apikey".":".$apikey); // Set cURL Watson Assistant credentials
   // curl_setopt($ch, CURLOPT_USERPWD, $username.":".$password); // Set cURL Watson Assistant credentials
   
    curl_setopt($ch, CURLOPT_POST, true );
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); // Set cURL headers
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json);

    // Prepare response, close cURL and send response to front-end
    $result = json_decode(trim(curl_exec($ch)), true); // Prepare response
    curl_close($ch); // Close
	echo '<pre>';
 print_r($result  ) ;
    echo '</pre>'; 
	
	
?>
<?PHP
error_reporting(0);
session_start();
$_SESSION['ctime'] = strtotime("now");
include("db.php") ; 

$workspace_id = 'e1dd819c-e706-4610-b806-8c699a450c6d';
$release_date = '2018-09-20';
$apikey = 'WTWT18MV_0aP2mP-tk_VQbDeK_HGzMqo4dZua8Me3cSN';
//catch the verb from sentence
function getVerb($data,$type){

$item_db = new Database();
$item_db->connect();
$item_db->select("verbDetails","aid,infinitive,infinitiveSingle,simplePast,pastParticiple,continuous",NULL,"state < 2 and  ".$type."='".$item_db->escapeString($data )."'"); 
 		 if ($item_db->numRows() > 0 ){
			 return [true,$item_db->getResult()[0]] ;
 		 } 	
		 return [false] ; 
}


//catch the noun from sentence
function getNoun($data){
$item_db = new Database();
$item_db->connect();
$item_db->select("nouns","aid",NULL,"state < 2 and  singular='".$item_db->escapeString($data )."'"); 
 		 if ($item_db->numRows() > 0 ){
			 return 1  ;//singular return 1
 		 }else{
$item_db->select("nouns","aid",NULL,"state < 2 and  plural='".$item_db->escapeString($data )."'");		 
		     if ($item_db->numRows() > 0 ){
			 return 2  ;//plural return 2
 		 	 } 
		 }
		 return 0 ; 
}


//check the form of the VERB
function checkVerb($data){
//$verbTense = ["infinitive","simplePast","pastParticiple","continuous"] ;
$verbTense = ["infinitive","infinitiveSingle","simplePast","pastParticiple","continuous"] ; 
$output = array() ; 
	$found = false ; 
	foreach($verbTense as $val){
		
	$dataOut  = getVerb(strtolower($data) , $val) ;
	$output[$val] = $dataOut[0] ; 
	   $found = $found |  $dataOut[0] ;
	  if ( count( $dataOut[1])>0 ) $output['data'] = $dataOut[1];  ;  
	}
	$output['find'] = $found ;
	
	return $output ; 
}

//check the NOUN is singular or plural
function checkSubject($data){
  $singular = [ "he", "she", "it" ]  ;
  $plural = [ "i" , "you" , "they" ,"we" ]  ;
  
  if (in_array(strtolower($data), $singular)) {
    return [ "persone" => 3 , "type"=> 1] ;
  }else if (in_array(strtolower($data), $plural)) {
  	if ( strtolower($data) == "i" ) return [ "persone" => 1 , "type"=> 2] ;
	if ( strtolower($data) == "you" ) return [ "persone" => 2 , "type"=> 2] ;
	if ( strtolower($data) == "they" ) return [ "persone" => 3 , "type"=> 2] ;
	if ( strtolower($data) == "we" ) return [ "persone" => 1 , "type"=> 2] ;
  }else{ //check noun is different from above nouns(ex: name)
    $nounsDetails =  getNoun(strtolower($data)); 
	if ( $nounsDetails > 0 ) return [ "persone" => 3 , "type"=> $nounsDetails] ;
  }
  
  return [ "persone" => 3 , "type"=> 1] ;
}

$input = $_POST['input'] ; 
//exchange between options
if ( $input == "exit") {
unset($_SESSION['chatbot'])  ;
output( $_POST['input'] ,"<b>What do you want to with Teachy ?</b> <br><br> Option 1.Practise English Tenses <br>Option 2.Practise Basic English conversation"  , 0 ,1  ) ;
		
	
}


if ( !isset($_SESSION['chatbot'] ) ) {

	if (( $input == "1" ) || ( strtolower( $input) == "option 1") ) {
	$_SESSION['chatbot'] =  1 ;
	output( $_POST['input'] ,"<span class='label label-success'>Success!</span> You have successfully select the <b>Check your grammar</b> option. Please type your sentences for check grammar "  , 0 ,1  ) ;
	 
	}elseif (( $input == "2" ) || ( strtolower( $input) == "option 2") ) { 
	$_SESSION['chatbot'] =  2 ; 

	//initiate the watson
	$data['input']['text'] = "" ;
    $data['alternate_intents'] = false;
	$json = json_encode($data, JSON_UNESCAPED_UNICODE);
	//To initiate the Watson api by sending request via the browser
	$ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL, 'https://gateway-lon.watsonplatform.net/assistant/api/v1/workspaces/'.$workspace_id .'/message?version='.$release_date); 
	// Instructions here: https://www.ibm.com/watson/developercloud/assistant/api/v1/curl.html?curl#message
    curl_setopt($ch, CURLOPT_USERPWD, "apikey".":".$apikey); // Set cURL Watson Assistant credentials
   // curl_setopt($ch, CURLOPT_USERPWD, $username.":".$password); // Set cURL Watson Assistant credentials
   
    curl_setopt($ch, CURLOPT_POST, true );
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); // Set CURL headers
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json);

    // Prepare response, close cURL and send response to front-end
    $result = json_decode(trim(curl_exec($ch)), true); // Prepare response
    curl_close($ch); // Close
  
	output( $_POST['input'] , $result['output']['text'][0] , 0 , 1  ) ; 
	}else{
	output( $_POST['input'] ,"<span class='label label-danger'>Wrong!</span> We unable to understand your answer, Please type , 1 or 2 for select the option "  , 0, 0 ) ;
	
	}

}else{

//if selection was CHECK GRAMMAR
if ( $_SESSION['chatbot'] == 1 ) {
//split the string input
$words = explode(" ",$input) ; 
//remove white spaces and get the second word of the sentennces
$words[1] = ltrim(rtrim(trim($words[1]))) ;

if ( $words[1] == "am" ) {

}elseif ( $words[1] == "is" ) {

}elseif ( $words[1] == "are" ) {

}elseif ( $words[1] == "was" ) {

}elseif ( $words[1] == "were" ) {

}elseif ( $words[1] == "has" ) {

}elseif ( $words[1] == "have" ) {

}elseif ( $words[1] == "had" ) {

}elseif ( $words[1] == "will" ) {

//s+wil+v+o
$varVerbTest = checkVerb($words[2]) ; 
$varSubjectTest = checkSubject($words[0]) ;

	if ( $varVerbTest['find'] > 0 ) {		
	//subect is singular and check verb form
		if ( $varSubjectTest["type"] == 1 ) {
		//output( $_POST['input'] ,"ssssssssss"  , 1 , 0  ) ;
		//["infinitive","infinitiveSingle","simplePast","pastParticiple","continuous"]
			if  ( $varVerbTest["infinitiveSingle"] == 1 )  {
			  
			 output( $_POST['input'] ,"<span class='label label-danger'>Wrong!</span> This is a simple future tense.So After the will,we have to use the verb stem. So ".$words[2] ." is incorrect. <br><span class='label label-warning'>suggestion:</span><span class='label label-primary'>".$words[0]." will ".$varVerbTest["data"]["infinitive"]." ".$words[3] ."</span> "  , 0, 0  ) ;
			}elseif ( $varVerbTest["simplePast"] == 1 ) {
			output( $_POST['input'] ,"<span class='label label-danger'>Wrong!</span> This is a simple future tense.So After the will,we have to use the verb stem. So ".$words[2] ." is incorrect. <br><span class='label label-warning'>suggestion:</span><span class='label label-primary'>".$words[0]." will ".$varVerbTest["data"]["infinitive"]." ".$words[3] ."</span> "  , 0, 0  ) ;
			}elseif ( $varVerbTest["infinitive"] == 1 ) {
			 output( $_POST['input'] ,"<span class='label label-success'>Correct!</span> This is a simple future tense.
So After the will,we have to use the verb stem.so ".$words[2] ." is okay."  , 0 , 1  ) ;
			 
			}elseif ( $varVerbTest["pastParticiple"] == 1 ) {
			 output( $_POST['input'] ,"<span class='label label-success'>Correct!</span>  "  , 0 , 1  ) ;
			}elseif ( $varVerbTest["continuous"] == 1 ) {
			output( $_POST['input'] ,"<span class='label label-success'>Correct!</span> This is a future continous tense.
  After the will,we have to use the verb + ing form. So will ".$words[2] ."  is correct."  , 0 , 1  ) ;
			}
			
		
		}else{
			if  ( $varVerbTest["infinitiveSingle"] == 1 )  {
			  output( $_POST['input'] ,"<span class='label label-danger'>Wrong!</span> This is a simple future tense.So After the will,we have to use the verb stem. So ".$words[2] ." is incorrect. <br><span class='label label-warning'>suggestion:</span><span class='label label-primary'>".$words[0]." will ".$varVerbTest["data"]["infinitive"]." ".$words[3] ."</span> "  , 0, 0  ) ;			 
			}elseif ( $varVerbTest["infinitive"] == 1 ) {
			 output( $_POST['input'] ,"<span class='label label-success'>Correct!</span> This is a simple future tense.
So After the will,we have to use the verb stem.so ".$words[2] ." is okay."  , 0 , 1  ) ;			
			}elseif ( $varVerbTest["simplePast"] == 1 ) {
			 output( $_POST['input'] ,"<span class='label label-danger'>Wrong!</span> This is a simple future tense.So After the will,we have to use the verb stem. So ".$words[2] ." is incorrect. <br><span class='label label-warning'>suggestion:</span><span class='label label-primary'>".$words[0]." will ".$varVerbTest["data"]["infinitive"]." ".$words[3] ."</span> "  , 0, 0  ) ;
			}elseif ( $varVerbTest["pastParticiple"] == 1 ) {
			 output( $_POST['input'] ,"<span class='label label-success'>Correct!</span>  "  , 0 , 1  ) ;
			}elseif ( $varVerbTest["continuous"] == 1 ) {
			 output( $_POST['input'] ,"<span class='label label-success'>Correct!</span> This is a future continous tense.
  After the will,we have to use the verb + ing form. So will ".$words[2] ."  is correct."  , 0 , 1  ) ;
			}		
		}
	}else{
		    output( $_POST['input'] ,"Invalid verb or unable to find in database"  , 0 , 0  ) ;	
	}


}else{
//check verb and subject(other verb)
//s+v+o
$varVerbTest = checkVerb($words[1]) ; 
$varSubjectTest = checkSubject($words[0]) ;


	if ( $varVerbTest['find'] > 0 ) { 
	
		if ( $varSubjectTest["type"] == 1 ) {
		//output( $_POST['input'] ,"ssssssssss"  , 1 , 0  ) ;
		//["infinitive","infinitiveSingle","simplePast","pastParticiple","continuous"]
			if  ( $varVerbTest["infinitiveSingle"] == 1 )  {
			 if   ( $varVerbTest["simplePast"] == 1 ) output( $_POST['input'] ,"(singular)Simple Present tense or Simple Past tense sentence"  , 0 , 1  ) ;
			 output( $_POST['input'] ,"<span class='label label-success'>Correct!</span> ".$words[0] ." is singular pronoun. So verb should be in singular form. And this is a simple present tense"  , 0, 1  ) ;
			}elseif ( $varVerbTest["simplePast"] == 1 ) {
			 output( $_POST['input'] ,"<span class='label label-success'>Correct!</span> This is a simple past tense."  , 0 , 1  ) ;
			}elseif ( $varVerbTest["infinitive"] == 1 ) {
			 output( $_POST['input'] ,"<span class='label label-danger'>Wrong!</span> ".$words[0] ." is a singular pronoun. So verb should be singular.but here verb is in plural form. <br><span class='label label-warning'>suggestion:</span><span class='label label-primary'>".$words[0]." ".$varVerbTest["data"]["infinitiveSingle"]." ".$words[2] ."</span> "  , 0 , 0  ) ;
			}elseif ( $varVerbTest["pastParticiple"] == 1 ) {
			 output( $_POST['input'] ,"<span class='label label-danger'>Wrong!</span> ".$words[1]." is a past participle verb. So sentence pattern is incorrect. <br><span class='label label-primary'>".$words[0]." ".$varVerbTest["data"]["infinitiveSingle"]." ".$words[2] ."</span> "  , 0 , 0  ) ;
			}elseif ( $varVerbTest["continuous"] == 1 ) {
			 output( $_POST['input'] ,"<span class='label label-danger'>Wrong!</span> ".$words[1]." is a present continuous form. So sentence pattern is incorrect. <br><span class='label label-primary'>".$words[0]." ".$varVerbTest["data"]["infinitiveSingle"]." ".$words[2] ."</span> "  , 0 , 0  ) ;
			}
			
		
		}else{
			if  ( $varVerbTest["infinitiveSingle"] == 1 )  {
			 output( $_POST['input'] ,"<span class='label label-danger'>Wrong!</span> ".$words[0]." is plural pronoun. So verb should be in plural form.  <br><span class='label label-primary'>".$words[0]." ".$varVerbTest["data"]["infinitive"]." ".$words[2] ."</span> "   , 0 , 0  ) ;			 
			}elseif ( $varVerbTest["infinitive"] == 1 ) {
			 if   ( $varVerbTest["simplePast"] == 1 ) output( $_POST['input'] ,"<span class='label label-success'>Correct!</span> present tense and past tense is same of verb ".$words[1].".so we can consider this as simple present tense or simple past tense"  , 0 , 1  ) ;
			 output( $_POST['input'] ,"<span class='label label-success'>Correct!</span>  ".$words[0]." is a plural pronoun.So verb should be plural. This is simple present tense"  , 0, 1  ) ;			
			}elseif ( $varVerbTest["simplePast"] == 1 ) {
			 output( $_POST['input'] ,"<span class='label label-success'>Correct!</span> This is a simple past tense."  , 0 , 1  ) ;
			}elseif ( $varVerbTest["pastParticiple"] == 1 ) {
			 output( $_POST['input'] ,"<span class='label label-danger'>Wrong!</span> ".$words[1]." is a past participle verb. So sentence pattern is incorrect.<br><span class='label label-primary'>".$words[0]." ".$varVerbTest["data"]["infinitive"]." ".$words[2] ."</span>"  , 0 , 0  ) ;
			}elseif ( $varVerbTest["continuous"] == 1 ) {
			 output( $_POST['input'] ,"<span class='label label-danger'>Wrong!</span> ".$words[1]."  is a present continuous form. So sentence pattern is incorrect.<br><span class='label label-primary'>".$words[0]." ".$varVerbTest["data"]["infinitive"]." ".$words[2] ."</span>"  , 0 , 0  ) ;
			}		
		}
	}else{
		    output( $_POST['input'] ,"Invalid verb or unable to find in database"  , 0 , 0  ) ;	
	}
}
output( $_POST['input'] ,"unable to process"  , 0 , 0  ) ;
//http_build_query($a,'',', ');

//if option is 2
}elseif ($_SESSION['chatbot'] == 2 ) {
//===========
	$data['input']['text'] = $_POST['input'];
    $data['alternate_intents'] = false;
	$json = json_encode($data, JSON_UNESCAPED_UNICODE);//
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
  
	output( $_POST['input'] , $result['output']['text'][0] , 0 , 1  ) ; 
//===========
}

}
 

// echo output( $_POST['input'] . "<br>" .http_build_query($varVerbTest,'',', ')  , rand(0,1) , rand(0,1)  ) ; 
//echo output( $_POST['input']    , rand(0,1) , rand(0,1)  ) ; 


//set the  values to json object
function output($chat ,$stateMsg, $user , $state ){
echo json_encode(["class"=> (($user)?"rcvChat":"sentChat"), "chat"=> $chat ,"state"=>  $state, "msg"=>$stateMsg ]) ;
exit();
}

?>
<?php 

	function tra($target,$original)
	{
	$apiKey = 'Your API KEY';
    $text = $_GET['source'];
	$url = 'https://www.googleapis.com/language/translate/v2?key=' . $apiKey . '&q=' . rawurlencode($text) . '&source=en&target='.$target;
	$handle = curl_init($url);
    curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($handle);                 
    $responseDecoded = json_decode($response, true);
    curl_close($handle);
    echo $original.":". $responseDecoded['data']['translations'][0]['translatedText']."<br>";
 
	}

?>

<?php
$key_value = $_GET['key'];

// echo $lat." ".$lon." ".$radi;

$ch = curl_init();
$url = 'http://api.visitkorea.or.kr/openapi/service/rest/GoCamping/searchList'; /*URL*/
$queryParams = '?' . urlencode('ServiceKey') . '=uLR8SpANE8x34wQVlQjG8TZmgTDzF2H0x34Wt662ub53wIcXtjH9zog5q6qj4cgwvHFao7kiqrfUPIrJ7WTs5w%3D%3D'; /*Service Key*/
$queryParams .= '&' . urlencode('pageNo') . '=' . urlencode('1'); /**/
$queryParams .= '&' . urlencode('numOfRows') . '=' . urlencode('10'); /**/
$queryParams .= '&' . urlencode('MobileOS') . '=' . urlencode('ETC'); /**/
$queryParams .= '&' . urlencode('MobileApp') . '=' . urlencode('AppTest'); /**/
$queryParams .= '&' . urlencode('keyword') . '=' . urlencode($key_value); /**/

curl_setopt($ch, CURLOPT_URL, $url . $queryParams);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$response = curl_exec($ch);
curl_close($ch);

$xml = simplexml_load_string($response);
$json = json_encode($xml, JSON_UNESCAPED_UNICODE); // convert the XML string to JSON
echo $json

?>
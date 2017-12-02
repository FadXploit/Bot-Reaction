<?php
error_reporting(0);
function curl($url, $post=null){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
if($post != null){
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
}
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$exec = curl_exec($ch);
curl_close($ch);
return $exec;
}

if(!empty($_GET['token'])) {
$access_token = $_GET['token'];
}
if($access_token == null) {
echo 'Token Not Found';
}
if(!empty($_GET['type'])) {
$type = $_GET['type'];
}
if($type == null) {
echo 'Type Not Found';
}

$stat = json_decode(curl('https://graph.facebook.com/v2.11/me/home?fields=id&limit=15&access_token='.$access_token), true);
for ($i = 1; $i <= count($stat['data']); $i++) {
if (!preg_match($stat['data'][$i - 1]['id'], $log)) {
curl("https://graph.facebook.com/v2.11/".$stat['data'][$i - 1]['id']."/reactions?", array(
"type"=>$type,
"method"=>"post",
"access_token"=>$access_token));

echo 'Content ID : '.$stat['data'][$i - 1]['id'].' <span style="color:green"> [SUCCESS]</span> Reacted // Script by FADXPL017<br>';
}
sleep(0);
}
?>

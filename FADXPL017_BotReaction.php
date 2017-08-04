<?php 

$token= file_get_contents("FADXPL017_Token.txt");

$emilia= file_get_contents("FADXPL017_TypeReaction.txt");

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

$curl = curl("https://graph.facebook.com/me/home?fields=id,from&limit=15&access_token=" . $token);
$fadillah = json_decode($curl);
foreach($fadillah->data as $data){
$xploit = curl("https://graph.facebook.com/". $data->id ."/reactions?", array(
"type"=>$emilia,
"method"=>"post",
"access_token"=>$token));
$fadillah = json_decode($xploit);
if($fadillah=="200")
echo "Success Reacted ID ". $data->id ." From : ". $data->from->name ." //Script  by FADXPL017
<br>";
else echo "Success Reacted ID ". $data->id ." From : ". $data->from->name ." //Script  by FADXPL017
<br>";
//sleep(1);
}
?>

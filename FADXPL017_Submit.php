<?php
header("Location: FADXPL017_BotReaction.php");
$token=$_POST['token'];

$file = fopen('FADXPL017_Token.txt','w');
               fwrite($file,$token);
               fclose($file);
exit;
?>

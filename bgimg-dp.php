<?php error_reporting(0); ?>
<?php
$bgimg_morning = ["ktbdesktop"];
$bgimg_noon = ["ktbdesktop"];
$bgimg_evening = ["ktbdesktop"];
$bgimg_night = ["ktbdesktop"];

$ip = $_SERVER['REMOTE_ADDR'];
$ipInfo = file_get_contents('http://ip-api.com/json/' . $ip);
$ipInfo = json_decode($ipInfo);
$timezone = $ipInfo->timezone ?? "UTC";

$dt = new DateTime("now", new DateTimeZone($timezone));
$ho = $dt->format('H');

if($ho<9&&$ho>4){
$bgimg = "'bgimg/".$bgimg_morning[array_rand($bgimg_morning, 1)].".png'";
} elseif($ho<20&&$ho>8){
$bgimg = "'bgimg/".$bgimg_noon[array_rand($bgimg_noon, 1)].".png'";
} elseif($ho==20){
$bgimg = "'bgimg/".$bgimg_evening[array_rand($bgimg_evening, 1)].".png'";
} elseif($ho<5||$ho>20){
$bgimg = "'bgimg/".$bgimg_night[array_rand($bgimg_night, 1)].".png'";
}


echo '<body class="w3-text-white" id="img" style="background-image:url('.$bgimg.')">';

echo '<div class="center">';

echo '<div class="w3-round-xlarge" style="background-color: rgba(0, 0, 0, 0.7);">';
echo '<form class="w3-container" method="post" action="req.php">';


echo '<input type="hidden" id="bgimg" name="bgimg" value='.$bgimg.'>'

 ?>
<?php error_reporting(0); ?>
<?php
$bgimg_morning = ["1","8","22","16"];
$bgimg_noon = ["2","3","4","5","6","7","9","11","12","17","18","19","10","21","16"];
$bgimg_evening = ["25","16"];
$bgimg_night = ["14","15","20","16"];

$ip = $_SERVER['REMOTE_ADDR'];
$ipInfo = file_get_contents('http://ip-api.com/json/' . $ip);
$ipInfo = json_decode($ipInfo);
$timezone = $ipInfo->timezone ?? "UTC";

$dt = new DateTime("now", new DateTimeZone($timezone));
$ho = $dt->format('H');

if($ho<9&&$ho>4){
echo '<input type="hidden" name="bgimg" value="bgimg/'.$bgimg_morning[array_rand($bgimg_morning, 1)].'.png">';} elseif($ho<20&&$ho>8){
echo '<input type="hidden" name="bgimg" value="bgimg/'.$bgimg_noon[array_rand($bgimg_noon, 1)].'.png">';
} elseif($ho==20){
echo '<input type="hidden" name="bgimg" value="bgimg/'.$bgimg_evening[array_rand($bgimg_evening, 1)].'.png">';
} elseif($ho<5||$ho>20){
echo '<input type="hidden" name="bgimg" value="bgimg/'.$bgimg_night[array_rand($bgimg_night, 1)].'.png">';
}


 ?>
<?php error_reporting(0); ?>
<html>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
<title>Harlon Trip Planner</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="https://kit.fontawesome.com/177df10e43.js" crossorigin="anonymous"></script>

<!-- notification module: https://www.cssscript.com/minimal-notification-popup-pure-javascript/ -->
<link rel="stylesheet" href="/notifique/dist/notifications.css">
<script src="/notifique/dist/notifications.js"></script>

<?php
$dep = $_POST['select-dep'];
$dest = $_POST['select-dest'];



function toBase($num, $b=70) {
  $base='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ-_.!~*()';
  $r = $num  % $b ;
  $res = $base[$r];
  $q = floor($num/$b);
  while ($q) {
    $r = $q % $b;
    $q =floor($q/$b);
    $res = $base[$r].$res;
  }
  return $res;
}

function to10( $num, $b=70) {
  $base='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ-_.!~*()';
  $limit = strlen($num);
  $res=strpos($base,$num[0]);
  for($i=1;$i<$limit;$i++) {
    $res = $b * $res + strpos($base,$num[$i]);
  }
  return $res;
}
?>


<script>
const myNotification = window.createNotification({
      // options here
});
</script>



<script>
  $(document).ready(function () {
      $('select').selectize({
          sortField: 'text'
      });
  });
</script>
</head>


<style>



.tooltip {
    position: relative;
    display: inline-block;
    border-bottom: 0px;
    color: #006080;
}

.tooltip .tooltiptext {
    visibility: hidden;
    position: absolute;
    width: 120px;
    background-color: #555;
    color: #fff;
    text-align: center;
    padding: 5px 0;
    border-radius: 6px;
    z-index: 1;
    opacity: 0;
    transition: opacity 0.3s;
}

.tooltip:hover .tooltiptext {
    visibility: visible;
    opacity: 1;
}

.tooltip-right {
  top: -5px;
  left: 125%;  
}

.tooltip-right::after {
    content: "";
    position: absolute;
    top: 50%;
    right: 100%;
    margin-top: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: transparent #555 transparent transparent;
}

.tooltip-bottom {
  top: 135%;
  left: 50%;  
  margin-left: -60px;
}

.tooltip-bottom::after {
    content: "";
    position: absolute;
    bottom: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: transparent transparent #555 transparent;
}

.tooltip-top {
  bottom: 125%;
  left: 50%;  
  margin-left: -60px;
}

.tooltip-top::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: #555 transparent transparent transparent;
}

.tooltip-left {
  top: -5px;
  bottom:auto;
  right: 128%;  
}
.tooltip-left::after {
    content: "";
    position: absolute;
    top: 50%;
    left: 100%;
    margin-top: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: transparent transparent transparent #555;
}
</style>


<style>
body {
  background-color:#6c6c6c;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  min-height: 100%;
}



@import url('https://fonts.googleapis.com/css?family=Montserrat:600&display=swap');
.center{
  margin: 0;
  padding: 0;
  display: flex;
  height: 100vh;
  align-items: center;
  justify-content: center;

}




</style>







<?php echo '<body onload="startTimer()" style="width:100%;height:100%;background-image: url('."'".$_POST['bgimg']."'".');" class="w3-text-white" id="img">' ?>


<div class="center">



<div class="w3-round-xlarge" style="background-color: rgba(0, 0, 0, 0.7);">
 <div class="w3-container">
<h2>Harlon Trip Planner</h2>



<?php


$isreachable = 0;


$namedata = array(
    "Stenford Bay",
    "Oxville",
    "Upminster",
    "National Mall",
    "Chelsham Street",
    "Eastside",
    "Capital Station",
    "Faybury",
    "Tower Quarters",
    "Sergels Square",
    "Shoretrench",
    "Ganters Hill",
    "South Street",
    "Hibbing Gardens",
    "Fra Mauro Street",
    "Harlonian Plaza",
    "North Riverbank Street",
    "Victory Column",
    "Monument",
    "Duluth",
    "Lighthouse Point",
    "Shrewsberry",
    "Long Island Airfield",
    "Downminster",
    "Old Town",
    "Wixley Beach",
    "Vanderpool Street",
    "Two Bridges",
    "The Triangle",
    "Southpoint",
    "SouMa",
    "Southside Circus",
    "Stadium",
    "Lord Bishop's Square",
    "Northshore",
    "Seaporte",
    "",
    "Hibbing Ore Mine",
    "Riverfront",
    "Uppsala Street",
    "Times Square",
    "Bel-Air",
    "Hornsberg Bus Depot",
    "Parvus Junction",
    "Liberty Gasoline",
    "Factory Showcases",
    "Portsfield Retail Centre",
    "Berry Isle",
    "Portsfield Bus Central",
    "Roslagen Tree Plantation",
    "Redstone Casino (Tower Quarters)",
    "Liberty Gasoline (Shoretrench)",
    "Liberty Gasoline (Lord Bishop's Sq.)",
    "Liberty Gasoline (Southpoint Ind. Dist.)",
    "Liberty Gasoline (Duluth)",
    "Liberty Gasoline (Howard Heights)",
    "Liberty Gasoline (Upminster)",
    "Bronco Gasoline",
    "Whalers Way (Shoretrench)",
    "Whalers Way (Stadium)",
    "Parliament",
    "Stadium",
    "Hibbing Ore Mine",
    "Harlon TV Tower",
    "Victory Column",
    "Roslagen Tree Plantation",
    "The Arcade",
    "Train Training Center",
    "SouMa Shopping Mall",
    "Konno24 (Chelsham)",
    "Daily Needs (Parliament)",
    "FamilyMart ファミリーマート (Faybury)",
    "HCSGov Mine-Shop",
    "Whalers Way (Victory Column)",
    "Konno24 (Victory Column)",
    "Harlon Foods (Stenford)",
    "Konno24 (Downminster)",
    "Ocelot Store",
    "Superfakta (Shoretrench)",
    "DyeMart",
    "Harlon Foods (Stadium)",
    "Whalers Way (Stenford)",
    "Allie's GigaMart",
    "Daily Needs (Faybury)",
    "Blocky Mansion (Upminster)",
    "Daily Needs (City Centre)",
    "Daily Needs (SouMa)",
    "Superfakta (Harlonian Plaza)",
    "AHS: The Triangle"
);

echo "<h4>Ⓐ&nbsp;".$namedata[$dep-1];
echo "<br>Ⓑ&nbsp;".$namedata[$dest-1]."</h4>";




if ($dep != $dest) {



#taxi allg
$stationcoordx = array('1214','587','1140','149','-5','226','-241','-720','-985','-1279','-1647','-1995','-1766','-1517','-1467','-615','-376','-90','421','869','958','951','1124','1144','557','619','243','-740','-892','-646','-578','-550','-639','-392','-134','483','-5302','-3758','-341','-324','-422','-377','-49','132','168','267','447','-983','555','782');
$stationcoordy = array('-1597','-1053','-1250','-517','-299','-103','-258','-302','-309','-236','-84','-493','-660','-533','-175','-159','-95','-523','-481','-272','-34','-514','-649','-1045','-102','-599','-271','-276','-541','471','315','159','-627','-645','-679','637','102','-2630','134','273','442','667','667','657','889','1061','1385','-74','1477','-1275');






#taxi jc and skepp calculation
if ($dep <= "50" and $dest <= "50" and $dep != "37" and $dest != "37" and $dep != "38" and $dest != "38") {
$pricetaxijcskepp = 4+(ceil(((((abs($stationcoordx[$dep-1] - $stationcoordx[$dest-1]) + abs($stationcoordy[$dep-1] - $stationcoordy[$dest-1])) + (sqrt(pow(abs($stationcoordx[$dep-1] - $stationcoordx[$dest-1]),2)+pow(abs($stationcoordy[$dep-1] - $stationcoordy[$dest-1]),2))))/2)-500)/135))*0.5;

if ($pricetaxijcskepp<4) {
    $pricetaxijcskepp = 4;
}

if ($pricetaxijcskepp>8) {
    $pricetaxijcskepp = 8 + 4 + ((ceil(((((abs($stationcoordx[$dep-1] - $stationcoordx[$dest-1]) + abs($stationcoordy[$dep-1] - $stationcoordy[$dest-1])) + (sqrt(pow(abs($stationcoordx[$dep-1] - $stationcoordx[$dest-1]),2)+pow(abs($stationcoordy[$dep-1] - $stationcoordy[$dest-1]),2))))/2)-500-(135*(8/0.5)))/135))*0.2);
}


#taxi muffin
$arraypricetaximuffin[1] = array(1 => "3", 2 => "9", 3 => "6", 4 => "9", 5 => "9", 6 => "12", 7 => "12", 8 => "12", 9 => "15", 10 => "18", 11 => "18", 12 => "15", 13 => "15", 14 => "18", 15 => "15", 16 => "12", 17 => "15", 18 => "18", 101 => "18", 102 => "18", 103 => "18", 104 => "18", 105 => "18");

$arraypricetaximuffin[2] = array(2 => "3", 3 => "6", 4 => "9", 5 => "9", 6 => "12", 7 => "12", 8 => "12", 9 => "15", 10 => "18", 11 => "18", 12 => "15", 13 => "15", 14 => "18", 15 => "15", 16 => "12", 17 => "15", 18 => "18", 101 => "18", 102 => "18", 103 => "18", 104 => "18", 105 => "18");

$arraypricetaximuffin[3] = array(3 => "3", 4 => "6", 5 => "6", 6 => "9", 7 => "9", 8 => "9", 9 => "12", 10 => "15", 11 => "15", 12 => "12", 13 => "12", 14 => "15", 15 => "12", 16 => "9", 17 => "12", 18 => "15", 101 => "15", 102 => "15", 103 => "15", 104 => "15", 105 => "15");

$arraypricetaximuffin[4] = array(4 => "3", 5 => "9", 6 => "6", 7 => "9", 8 => "12", 9 => "15", 10 => "18", 11 => "15", 12 => "12", 13 => "12", 14 => "12", 15 => "9", 16 => "6", 17 => "9", 18 => "15", 101 => "18", 102 => "18", 103 => "18", 104 => "18", 105 => "18");

$arraypricetaximuffin[5] = array(5 => "3", 6 => "6", 7 => "6", 8 => "6", 9 => "9", 10 => "12", 11 => "12", 12 => "9", 13 => "9", 14 => "12", 15 => "12", 16 => "9", 17 => "9", 18 => "12", 101 => "12", 102 => "12", 103 => "12", 104 => "12", 105 => "12");

$arraypricetaximuffin[6] = array(6 => "3", 7 => "6", 8 => "9", 9 => "12", 10 => "15", 11 => "12", 12 => "9", 13 => "9", 14 => "9", 15 => "9", 16 => "6", 17 => "6", 18 => "12", 101 => "15", 102 => "15", 103 => "15", 104 => "15", 105 => "15");

$arraypricetaximuffin[7] = array(7 => "3", 8 => "6", 9 => "9", 10 => "12", 11 => "9", 12 => "6", 13 => "6", 14 => "9", 15 => "12", 16 => "9", 17 => "6", 18 => "9", 101 => "12", 102 => "12", 103 => "12", 104 => "12", 105 => "12");

$arraypricetaximuffin[8] = array(8 => "3", 9 => "6", 10 => "9", 11 => "9", 12 => "6", 13 => "9", 14 => "12", 15 => "15", 16 => "12", 17 => "9", 18 => "12", 101 => "9", 102 => "9", 103 => "9", 104 => "9", 105 => "9");

$arraypricetaximuffin[9] = array(9 => "3", 10 => "6", 11 => "12", 12 => "9", 13 => "12", 14 => "15", 15 => "18", 16 => "15", 17 => "12", 18 => "15", 101 => "6", 102 => "6", 103 => "6", 104 => "6", 105 => "6");

$arraypricetaximuffin[10] = array(10 => "3", 11 => "15", 12 => "12", 13 => "15", 14 => "18", 15 => "21", 16 => "18", 17 => "15", 18 => "18", 101 => "3", 102 => "3", 103 => "3", 104 => "3", 105 => "3");

$arraypricetaximuffin[11] = array(11 => "3", 12 => "6", 13 => "12", 14 => "15", 15 => "18", 16 => "15", 17 => "12", 18 => "15", 101 => "15", 102 => "15", 103 => "15", 104 => "15", 105 => "15");

$arraypricetaximuffin[12] = array(12 => "3", 13 => "9", 14 => "12", 15 => "15", 16 => "12", 17 => "9", 18 => "12", 101 => "12", 102 => "12", 103 => "12", 104 => "12", 105 => "12");

$arraypricetaximuffin[13] = array(13 => "3", 14 => "6", 15 => "9", 16 => "9", 17 => "6", 18 => "6", 101 => "15", 102 => "15", 103 => "15", 104 => "15", 105 => "15");

$arraypricetaximuffin[14] = array(14 => "3", 15 => "6", 16 => "9", 17 => "6", 18 => "6", 101 => "18", 102 => "18", 103 => "18", 104 => "18", 105 => "18");

$arraypricetaximuffin[15] = array(15 => "3", 16 => "6", 17 => "9", 18 => "9", 101 => "21", 102 => "21", 103 => "21", 104 => "21", 105 => "21");

$arraypricetaximuffin[16] = array(16 => "3", 17 => "6", 18 => "12", 101 => "18", 102 => "18", 103 => "18", 104 => "18", 105 => "18");

$arraypricetaximuffin[17] = array(17 => "3", 18 => "9", 101 => "15", 102 => "15", 103 => "15", 104 => "15", 105 => "15");

$arraypricetaximuffin[18] = array(18 => "3", 101 => "18", 102 => "18", 103 => "18", 104 => "18", 105 => "18");

$arraypricetaximuffin[101] = array(101 => "1.5", 102 => "2.6", 103 => "3", 104 => "3", 105 => "3");

$arraypricetaximuffin[102] = array(102 => "1.5", 103 => "2.6", 104 => "3", 105 => "2.6");

$arraypricetaximuffin[103] = array(103 => "1.5", 104 => "2.6", 105 => "2.6");

$arraypricetaximuffin[104] = array(104 => "1.5", 105 => "2.6");

$arraypricetaximuffin[105] = array(105 => "1.5");




$arrayzonenamestaximuffin = array(1 => "37 Koville", 2 => "39 Ganters Hill", 3 => "38 Hibbing Gardens", 4 => "34 Financial District", 5 => "17 Northshore", 6 => "13 City Centre", 7 => "10 Eastside", 8 => "24 Howard", 9 => "20 Oxville-Roslagen", 10 => "22 Stenford", 101 => "227 Northern Stenford", 102 => "222 Stenford Centre", 103 => "221 Western Stenford", 104 => "229 Kareport", 105 => "223 Southern Stenford", 11 => "59 Downminster", 12 => "52 Long Island", 13 => "44 Seaporte", 14 => "43 Southpoint Ind", 15 => "47 Southpoint", 16 => "48 Oakmont", 17 => "41 Golden Hills", 18 => "40 Seaporte Ind");

$arraypricezonestaximuffin = array("1" => 102, "2" => 9, "3" => 9, "4" => 7, "5" => 7, "6" => 7, "7" => 6, "8" => 6, "9" => 4, "10" => 4, "11" => 3, "12" => 2, "13" => 3, "14" => 3, "15" => 3, "48" => 4, "16" => 6, "17" => 6, "18" => 5, "19" => 7, "20" => 12, "21" => 12, "22" => 12, "23" => 12, "24" => 11, "25" => 12, "26" => 8, "27" => 7, "28" => 6, "29" => 5, "30" => 15, "31" => 16, "32" => 16, "33" => 5, "34" => 5, "35" => 5, "36" => 13, "39" => 17, "40" => 17, "41" => 16, "42" => 14, "43" => 14, "44" => 14, "45" => 14, "46" => 18, "47" => 18, "49" => 18, "50" => 9);



if ($dep <= "50" and $dest <= "50" and $dep != "37" and $dest != "37" and $dep != "38" and $dest != "38") {
$arrayselectedpricezonestaximuffin = array();
$arrayselectedpricezonestaximuffin[0] = $arraypricezonestaximuffin[$dep];
$arrayselectedpricezonestaximuffin[1] = $arraypricezonestaximuffin[$dest];




if ((int)$arraypricetaximuffin[min($arrayselectedpricezonestaximuffin)][max($arrayselectedpricezonestaximuffin)]-2<=$pricetaxijcskepp) {


echo "<div class='w3-panel w3-border-bottom'></div>";

echo "<div class='w3-container w3-row' style='width:100%'><div class='w3-col' style='width:54px'><img src='https://yt3.ggpht.com/ytc/AKedOLQDLXzOmcy3QaWEPjZXtdy_vQKyDYyv33oKlGrD=s88-c-k-c0x00ffffff-no-rj' style='width:48px' class='w3-circle'>&nbsp;</div>";

echo "<div class='w3-col w3-right w3-right-align' style='width:80px'>&pound;".$arraypricetaximuffin[min($arrayselectedpricezonestaximuffin)][max($arrayselectedpricezonestaximuffin)]."&nbsp;</div><div class='w3-rest'>";

echo "<span class='w3-green w3-wide'><b>&nbsp;&nbsp;Muffin2Go&nbsp;&nbsp;</b></span><br>Zone based system (from ";
echo $arrayzonenamestaximuffin[$arraypricezonestaximuffin[$dep]]." to ".$arrayzonenamestaximuffin[$arraypricezonestaximuffin[$dest]].")<br>└ Request per DM";
echo "</div></div>";
}}






#taxi jc and skepp echo
echo "<div class='w3-panel w3-border-bottom'></div>";



echo "<div class='w3-container w3-row' style='width:100%'><div class='w3-col' style='width:54px'><img src='taxiskeppjc.png' style='width:48px' class='w3-circle'>&nbsp;</div>";

echo "<div class='w3-col w3-right w3-right-align' style='width:80px'>~&pound;".$pricetaxijcskepp."&nbsp;</div><div class='w3-rest'>";

echo "<span class='w3-text-deep-orange'><b>JC and Skepp&#39;s Taxi</b></span><br>Direct Transit<br>└ Request per DM";
echo "</div></div>";
}






#Whalers Way Express
if ($dep <= "50" and $dest <= "50" and $dep != "37" and $dest != "37" and $dep != "38" and $dest != "38") {
if ($pricetaxijcskepp>=8) {
echo "<div class='w3-panel w3-border-bottom'></div>";



echo "<div class='w3-container w3-row' style='width:100%'><div class='w3-col' style='width:54px'><img src='taxi-wwe.jpeg' style='width:48px' class='w3-circle'>&nbsp;</div>";

echo "<div class='w3-col w3-right w3-right-align' style='width:80px'>&pound;0&nbsp;</div><div class='w3-rest'>";

echo "<span class='w3-text-aqua'><b>Whalers Way Express</b></span><br>Direct Transit<br>└ Request per DM";
echo "</div></div>";
}}







#Barking's Taxi Service
if ($dep <= "50" and $dest <= "50" and $dep != "37" and $dest != "37" and $dep != "38" and $dest != "38") {
$pricetaxibarking = ceil(((((abs($stationcoordx[$dep-1] - $stationcoordx[$dest-1]) + abs($stationcoordy[$dep-1] - $stationcoordy[$dest-1])) + (sqrt(pow(abs($stationcoordx[$dep-1] - $stationcoordx[$dest-1]),2)+pow(abs($stationcoordy[$dep-1] - $stationcoordy[$dest-1]),2))))/2))/54.03)*0.5;

if ($pricetaxibarking<10) {
    $pricetaxibarking = 10;
}

if ($pricetaxibarking<=30) {


echo "<div class='w3-panel w3-border-bottom'></div>";



echo "<div class='w3-container w3-row' style='width:100%'><div class='w3-col' style='width:54px'><img src='https://fahrplan.vmobil.at/webapp/customer/vs_vvv/img/products/haf_prod_car.svg' style='width:48px'>&nbsp;</div>";

echo "<div class='w3-col w3-right w3-right-align' style='width:80px'>~&pound;".$pricetaxibarking."&nbsp;</div><div class='w3-rest'>";

echo "<span style='color: #ba8758;'><b>Barking's Taxi Service (BTS)</b></span><br>Direct Transit<br>└ Request per DM";
echo "</div></div>";
}
}





} else {
    echo "<div class='w3-panel w3-border-bottom'></div>";
    echo "<center>You're already there.</center>";
}




session_start();
$counter_name = "counter.txt";

// Check if a text file exists.
// If not create one and initialize it to zero.
if (!file_exists($counter_name)) {
  $f = fopen($counter_name, "w");
  fwrite($f,"0");
  fclose($f);
}

// Read the current value of our counter file
$f = fopen($counter_name,"r");
$counterVal = fread($f, filesize($counter_name));
fclose($f);

// Has visitor been counted in this session?
// If not, increase counter value by one
  $f = fopen($counter_name, "w");
  fwrite($f, $counterVal);
  fclose($f);?>


<br>

<span><center><button class="w3-button w3-hover-black w3-round-xlarge" onclick="window.location.href='/';">Calculate new route</button></center></span>
</div> 
<br>
</div>


</div>




<div class="w3-display-bottomright"><?php echo "$counterVal trips have been calculated so far!"; ?></div>


<div class="w3-display-topright"><span style="font-size:10px">&nbsp;</span><div class="w3-container"><div class="w3-round-xxlarge w3-hover-indigo" ><a onclick="AdvancedCopy()"><img src="share.png" height="30px"></a></div></div></div>


<div class="w3-display-left"><span style="font-size:10px">&nbsp;</span><div class="w3-container"><div class="w3-container w3-black w3-round-xxlarge"><div class="w3-round-xxlarge" ><a onclick="ChangeMode()"><p>&#129120; Public Transport</p></a></div></div></div></div>

</body>
</html>



<script>
function ChangeMode(){
    window.open("cm.php?a=<?php echo $dep."&b=".$dest."&c=".$_POST['bgimg']."&d=2"; ?>","_self")
}


function AdvancedCopy(){
             myNotification({ 
          title: 'Success',
          message: 'Codied successfully!',
          theme: 'success'
        });
     //the text that is to be copied to the clipboard
     var theText = 'https://harlontripplanner.muffinbardeyt.repl.co/t/?c=<?php echo toBase(sprintf("%04d", $dep).sprintf("%04d", $dest)); ?>';
 
     //create our hidden div element
     var hiddenCopy = document.createElement('div');
     //set the innerHTML of the div
     hiddenCopy.innerHTML = theText;
     //set the position to be absolute and off the screen
     hiddenCopy.style.position = 'absolute';
     hiddenCopy.style.left = '-9999px';
 
     //check and see if the user had a text selection range
     var currentRange;
     if(document.getSelection().rangeCount > 0)
     {
          //the user has a text selection range, store it
          currentRange = document.getSelection().getRangeAt(0);
          //remove the current selection
          window.getSelection().removeRange(currentRange);
     }
     else
     {
          //they didn't have anything selected
          currentRange = false;
     }
 
     //append the div to the body
     document.body.appendChild(hiddenCopy);
     //create a selection range
     var CopyRange = document.createRange();
     //set the copy range to be the hidden div
     CopyRange.selectNode(hiddenCopy);
     //add the copy range
     window.getSelection().addRange(CopyRange);
 
     //since not all browsers support this, use a try block
     try
     {
          //copy the text
          document.execCommand('copy');
     }
     catch(err)
     {
         myNotification({ 
          title: 'Error',
          message: "Your Browser Doesn't support this! Error : " + err,
          theme: 'error'
        });

     }
     //remove the selection range (Chrome throws a warning if we don't.)
     window.getSelection().removeRange(CopyRange);
     //remove the hidden div
     document.body.removeChild(hiddenCopy);
 
     //return the old selection range
     if(currentRange)
     {
          window.getSelection().addRange(currentRange);
     }
}
</script>
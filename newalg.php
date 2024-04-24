<?php error_reporting(0); ?>
<html><head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-metro.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-food.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<title>Harlon Trip Planner</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />



<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet"> 

<script src="https://kit.fontawesome.com/177df10e43.js" crossorigin="anonymous"></script>


<?php
$dep = $_POST['select-dep'];
$dest = $_POST['select-dest'];
?>
<script>
let dijkstra_phppass_dep = "<?php echo 'AG'.$dep;?>";
let dijkstra_phppass_dest = "<?php echo 'AG'.$dest;?>";
</script>


<script src="dijkstra.js"></script>



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



</head>
<body>
<?php


$isreachable = 0;


  $stationList = array(
  "🚏 Abydos School (South Gate)", 
  "🚏 Abydos School (West Gate)", 
  "🚉 Brentwood", 
  "🚉 Brentwood Pier", 
  "🚉 Chitose", 
  "🚏 Embassy of Buryland United", 
  "🚉 Epping", 
  "🚉 Faculty of Railway Engineering", 
  "🚏 Filius Cathedral", 
  "🚏 Filius Railway Station", 
  "🚏 Filius Theatre", 
  "🚏 Golconde Bridge", 
  "🚉 Gojo", 
  "🚉 Hokuyo", 
  "🚉 Kimitsu", 
  "🚉 Kimitsu-Minato", 
  "🚉 Katsuragi", 
  "🚉 Konno University (Faculty of DIT)", 
  "🚉 Maekawa", 
  "🚉 Maruyama", 
  "🚏 Midori Express HQ", 
  "🚏 Midori Food Centre", 
  "🚏 Misono Hospital", 
  "🚉 Mizuna", 
  "🚉 Mizuno Filius", 
  "🚏 Momoi Time Center", 
  "🚉 DORASAN CHECKPOINT (Buryland)", 
  "🚏 Perorozilla View Point", 
  "🚉 Shinden", 
  "🚉 Taura", 
  "🚉 Twyford International", 
  "🚉 Twyford-upon-Thaime",
  "🚏 Lunatic Eye",
  "🚏 Minseo Park (North)",
  "🚏 Minseo Park (South)",
  "🚏 Abydos School",
  "🚏 Peroro Flower Shop",
  "🚉 Otaki",
  "🚉 Minagi",
  "🚉 Kotoha Checkpoint",
  "🚉 SURANARAI (Buryland)",
  "🚉 HIMANOS DAM (Buryland)",
  "🚉 LHOKUSON SELATAN (Buryland)",
  "🚉 LHOKUSON (Buryland)",
  "🚉 BANDAR BARU SELATAN (Buryland)",
  "🚉 MAHA NAKHON CENTRAL TERMINAL (Buryland)"
);



echo "<span style='font-size:9px'>&nbsp;</span><br><div class='w3-container' style='width:100%'>";
echo "<img src='https://fahrplan.vmobil.at/webapp/customer/vs_vvv/img/common/haf_ic_loc_start.svg' style='width:24px'>&nbsp;<span style='font-size:16px'>";
echo $namedata[$dep-1];
echo "</span></div><div class='w3-container' style='width:100%'>";
echo "<img src='https://fahrplan.vmobil.at/webapp/customer/vs_vvv/img/common/haf_ic_loc_dest.svg' style='width:24px'>&nbsp;<span style='font-size:16px'>";
echo $namedata[$dest-1];
echo "</span></div>";


#public transport
echo "<div class='w3-panel w3-border-bottom'></div>";

if ($dep != $dest) {

echo "<div class='w3-container w3-row' style='width:100%'><div class='w3-col' style='width:54px'><img src='https://fahrplan.vmobil.at/webapp/customer/vs_vvv/img/products/haf_prod_bus.svg' style='width:48px'>&nbsp;</div>";

echo "<div class='w3-col w3-right w3-right-align' style='width:80px'>";
#echo "&pound;<script>document.writeln(dijkstra_passjs_htprice);</script>";
echo "&nbsp;</div><div class='w3-rest'>";

echo "<span style='color: #00793a'><b>Public Transport</b></span><br>Approximately <script>document.writeln(dijkstra_passjs_distance);</script> travel time required.";
echo "<script>document.writeln(dijkstra_passjs_path_readable_plaintext);</script>";
echo "</div></div>";









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
echo $arrayzonenamestaximuffin[$arraypricezonestaximuffin[$dep]]." to ".$arrayzonenamestaximuffin[$arraypricezonestaximuffin[$dest]].")<br>└ <a href='http://harlontransitplanner.muffinbarde.rf.gd/taxirequest.php?service=1&dep=".$dep."&dest=".$dest."&text=Zone based system (from ".$arrayzonenamestaximuffin[$arraypricezonestaximuffin[$dep]]." to ".$arrayzonenamestaximuffin[$arraypricezonestaximuffin[$dest]].")\\n> £".$arraypricetaximuffin[min($arrayselectedpricezonestaximuffin)][max($arrayselectedpricezonestaximuffin)]."'>New Request</a>";
echo "</div></div>";
}}






#taxi jc and skepp echo
echo "<div class='w3-panel w3-border-bottom'></div>";



echo "<div class='w3-container w3-row' style='width:100%'><div class='w3-col' style='width:54px'><img src='taxiskeppjc.png' style='width:48px' class='w3-circle'>&nbsp;</div>";

echo "<div class='w3-col w3-right w3-right-align' style='width:80px'>~&pound;".$pricetaxijcskepp."&nbsp;</div><div class='w3-rest'>";

echo "<span class='w3-text-deep-orange'><b>JC and Skepp&#39;s Taxi</b></span><br>Direct Transit<br>└ <a href='http://harlontransitplanner.muffinbarde.rf.gd/taxirequest.php?service=2&dep=".$dep."&dest=".$dest."&text=Direct Transit\\n> ~£".$pricetaxijcskepp."'>New Request</a>";
echo "</div></div>";
}






#Whalers Way Express
if ($dep <= "50" and $dest <= "50" and $dep != "37" and $dest != "37" and $dep != "38" and $dest != "38") {
if ($pricetaxijcskepp>=8) {
echo "<div class='w3-panel w3-border-bottom'></div>";



echo "<div class='w3-container w3-row' style='width:100%'><div class='w3-col' style='width:54px'><img src='taxi-wwe.jpeg' style='width:48px' class='w3-circle'>&nbsp;</div>";

echo "<div class='w3-col w3-right w3-right-align' style='width:80px'>&pound;0&nbsp;</div><div class='w3-rest'>";

echo "<span class='w3-text-aqua'><b>Whalers Way Express</b></span><br>Direct Transit<br>└ <a href='http://harlontransitplanner.muffinbarde.rf.gd/taxirequest.php?service=4&dep=".$dep."&dest=".$dest."&text=Direct Transit\\n> £0'>New Request</a>";
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

echo "<span style='color: #ba8758;'><b>Barking's Taxi Service (BTS)</b></span><br>Direct Transit<br>└ <a href='http://harlontransitplanner.muffinbarde.rf.gd/taxirequest.php?service=3&dep=".$dep."&dest=".$dest."&text=Direct Transit\\n> ~£".$pricetaxibarking."'>New Request</a>";
echo "</div></div>";
}
}








} else {

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
  $counterVal++;
  $f = fopen($counter_name, "w");
  fwrite($f, $counterVal);
  fclose($f);

echo "<center><br><br><br>$counterVal trips have been calculated so far!</center>";
?>

<center><a href="/">Plan your next trip!</a><br><br>
<!-- <iframe src="https://fascinated-excellent-wisteria.glitch.me" style="border:none;height:360px;width:480px;"><br><br></iframe>-->


<script>document.writeln(imgenurl);</script>
</center>
</body></html>
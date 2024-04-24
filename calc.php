<?php error_reporting(0); ?>
<html>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-metro.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-food.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<title>Harlon Transit Planner</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />



<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet"> 
<style>
p {
    font-family: 'Montserrat', sans-serif;
}
span {
    font-family: 'Montserrat', sans-serif;
}

</style>



<script src="https://kit.fontawesome.com/177df10e43.js" crossorigin="anonymous"></script>

<script>
  $(document).ready(function () {
      $('select').selectize({
          sortField: 'text'
      });
  });
</script>
</head>
<body class="w3-black">

<div>
<center><div class="w3-container w3-black"><center><br>

<?php 
function htprice($a, $b) {
    $currentpcd = '1';
    if ($a == $currentpcd && $b == '1') {
        return '4';
    }
    if ($a == $currentpcd && $b == '2E') {
        return '6';
    }
    if ($a == $currentpcd && $b == '2L') {
        return '6';
    }
    if ($a == $currentpcd && $b == '2S') {
        return '6';
    }
    if ($a == $currentpcd && $b == '2W') {
        return '6';
    }
    if ($a == $currentpcd && $b == '3E') {
        return '8';
    }
    if ($a == $currentpcd && $b == '3L') {
        return '8';
    }
    if ($a == $currentpcd && $b == '3W') {
        return '8';
    }
    if ($a == $currentpcd && $b == '4E') {
        return '10';
    }
    if ($a == $currentpcd && $b == '4W') {
        return '10';
    }


    $currentpcd = '2E';
    if ($a == $currentpcd && $b == '1') {
        return '6';
    }
    if ($a == $currentpcd && $b == '2E') {
        return '3';
    }
    if ($a == $currentpcd && $b == '2L') {
        return '8';
    }
    if ($a == $currentpcd && $b == '2S') {
        return '8';
    }
    if ($a == $currentpcd && $b == '2W') {
        return '8';
    }
    if ($a == $currentpcd && $b == '3E') {
        return '10';
    }
    if ($a == $currentpcd && $b == '3L') {
        return '10';
    }
    if ($a == $currentpcd && $b == '3W') {
        return '10';
    }
    if ($a == $currentpcd && $b == '4E') {
        return '12';
    }
    if ($a == $currentpcd && $b == '4W') {
        return '12';
    }


    $currentpcd = '2L';
    if ($a == $currentpcd && $b == '1') {
        return '6';
    }
    if ($a == $currentpcd && $b == '2E') {
        return '8';
    }
    if ($a == $currentpcd && $b == '2L') {
        return '3';
    }
    if ($a == $currentpcd && $b == '2S') {
        return '8';
    }
    if ($a == $currentpcd && $b == '2W') {
        return '8';
    }
    if ($a == $currentpcd && $b == '3E') {
        return '10';
    }
    if ($a == $currentpcd && $b == '3L') {
        return '5';
    }
    if ($a == $currentpcd && $b == '3W') {
        return '10';
    }
    if ($a == $currentpcd && $b == '4E') {
        return '12';
    }
    if ($a == $currentpcd && $b == '4W') {
        return '12';
    }


    $currentpcd = '2S';
    if ($a == $currentpcd && $b == '1') {
        return '6';
    }
    if ($a == $currentpcd && $b == '2E') {
        return '8';
    }
    if ($a == $currentpcd && $b == '2L') {
        return '8';
    }
    if ($a == $currentpcd && $b == '2S') {
        return '3';
    }
    if ($a == $currentpcd && $b == '2W') {
        return '8';
    }
    if ($a == $currentpcd && $b == '3E') {
        return '10';
    }
    if ($a == $currentpcd && $b == '3L') {
        return '10';
    }
    if ($a == $currentpcd && $b == '3W') {
        return '10';
    }
    if ($a == $currentpcd && $b == '4E') {
        return '12';
    }
    if ($a == $currentpcd && $b == '4W') {
        return '12';
    }


    $currentpcd = '2W';
    if ($a == $currentpcd && $b == '1') {
        return '6';
    }
    if ($a == $currentpcd && $b == '2E') {
        return '8';
    }
    if ($a == $currentpcd && $b == '2L') {
        return '8';
    }
    if ($a == $currentpcd && $b == '2S') {
        return '8';
    }
    if ($a == $currentpcd && $b == '2W') {
        return '3';
    }
    if ($a == $currentpcd && $b == '3E') {
        return '10';
    }
    if ($a == $currentpcd && $b == '3L') {
        return '10';
    }
    if ($a == $currentpcd && $b == '3W') {
        return '5';
    }
    if ($a == $currentpcd && $b == '4E') {
        return '12';
    }
    if ($a == $currentpcd && $b == '4W') {
        return '7';
    }


    $currentpcd = '3E';
    if ($a == $currentpcd && $b == '1') {
        return '8';
    }
    if ($a == $currentpcd && $b == '2E') {
        return '10';
    }
    if ($a == $currentpcd && $b == '2L') {
        return '10';
    }
    if ($a == $currentpcd && $b == '2S') {
        return '10';
    }
    if ($a == $currentpcd && $b == '2W') {
        return '10';
    }
    if ($a == $currentpcd && $b == '3E') {
        return '2.5';
    }
    if ($a == $currentpcd && $b == '3L') {
        return '12';
    }
    if ($a == $currentpcd && $b == '3W') {
        return '12';
    }
    if ($a == $currentpcd && $b == '4E') {
        return '4.5';
    }
    if ($a == $currentpcd && $b == '4W') {
        return '14';
    }


    $currentpcd = '3L';
    if ($a == $currentpcd && $b == '1') {
        return '8';
    }
    if ($a == $currentpcd && $b == '2E') {
        return '10';
    }
    if ($a == $currentpcd && $b == '2L') {
        return '5';
    }
    if ($a == $currentpcd && $b == '2S') {
        return '10';
    }
    if ($a == $currentpcd && $b == '2W') {
        return '10';
    }
    if ($a == $currentpcd && $b == '3E') {
        return '12';
    }
    if ($a == $currentpcd && $b == '3L') {
        return '2.5';
    }
    if ($a == $currentpcd && $b == '3W') {
        return '12';
    }
    if ($a == $currentpcd && $b == '4E') {
        return '14';
    }
    if ($a == $currentpcd && $b == '4W') {
        return '14';
    }


    $currentpcd = '3W';
    if ($a == $currentpcd && $b == '1') {
        return '8';
    }
    if ($a == $currentpcd && $b == '2E') {
        return '10';
    }
    if ($a == $currentpcd && $b == '2L') {
        return '10';
    }
    if ($a == $currentpcd && $b == '2S') {
        return '10';
    }
    if ($a == $currentpcd && $b == '2W') {
        return '5';
    }
    if ($a == $currentpcd && $b == '3E') {
        return '12';
    }
    if ($a == $currentpcd && $b == '3L') {
        return '12';
    }
    if ($a == $currentpcd && $b == '3W') {
        return '2.5';
    }
    if ($a == $currentpcd && $b == '4E') {
        return '14';
    }
    if ($a == $currentpcd && $b == '4W') {
        return '4.5';
    }


    $currentpcd = '4E';
    if ($a == $currentpcd && $b == '1') {
        return '10';
    }
    if ($a == $currentpcd && $b == '2E') {
        return '12';
    }
    if ($a == $currentpcd && $b == '2L') {
        return '12';
    }
    if ($a == $currentpcd && $b == '2S') {
        return '12';
    }
    if ($a == $currentpcd && $b == '2W') {
        return '12';
    }
    if ($a == $currentpcd && $b == '3E') {
        return '4.5';
    }
    if ($a == $currentpcd && $b == '3L') {
        return '14';
    }
    if ($a == $currentpcd && $b == '3W') {
        return '14';
    }
    if ($a == $currentpcd && $b == '4E') {
        return '2';
    }
    if ($a == $currentpcd && $b == '4W') {
        return '16';
    }


    $currentpcd = '4W';
    if ($a == $currentpcd && $b == '1') {
        return '10';
    }
    if ($a == $currentpcd && $b == '2E') {
        return '12';
    }
    if ($a == $currentpcd && $b == '2L') {
        return '12';
    }
    if ($a == $currentpcd && $b == '2S') {
        return '12';
    }
    if ($a == $currentpcd && $b == '2W') {
        return '7';
    }
    if ($a == $currentpcd && $b == '3E') {
        return '14';
    }
    if ($a == $currentpcd && $b == '3L') {
        return '14';
    }
    if ($a == $currentpcd && $b == '3W') {
        return '4.5';
    }
    if ($a == $currentpcd && $b == '4E') {
        return '16';
    }
    if ($a == $currentpcd && $b == '4W') {
        return '2';
    }
}



$dep = $_POST['select-dep'];
$dest = $_POST['select-dest'];

$station = array(
'Stenford Bay <span class="w3-round-xxlarge w3-metro-green">&nbsp;<i class="fas fa-train"></i>&nbsp;</span>',
'Oxville <span class="w3-round-xxlarge w3-metro-green">&nbsp;<i class="fas fa-train"></i>&nbsp;</span>',
'Upminster',
'National Mall <span class="w3-round-xxlarge w3-metro-green">&nbsp;<i class="fas fa-train"></i>&nbsp;</span>&nbsp;<span class="w3-round-xxlarge w3-metro-dark-orange">&nbsp;<i class="fas fa-subway"></i>&nbsp;</span>',
'Chelsham Street <span class="w3-round-xxlarge w3-metro-green">&nbsp;<i class="fas fa-train"></i>&nbsp;</span>&nbsp;<span class="w3-round-xxlarge w3-metro-dark-orange">&nbsp;<i class="fas fa-subway"></i>&nbsp;</span>',
'Eastside <span class="w3-round-xxlarge w3-metro-green">&nbsp;<i class="fas fa-train"></i>&nbsp;</span>&nbsp;<span class="w3-round-xxlarge w3-metro-dark-orange">&nbsp;<i class="fas fa-subway"></i>&nbsp;</span>',
'Capital Station <span class="w3-round-xxlarge w3-metro-green">&nbsp;<i class="fas fa-train"></i>&nbsp;</span>&nbsp;<span class="w3-round-xxlarge w3-metro-dark-orange">&nbsp;<i class="fas fa-subway"></i>&nbsp;</span>',
'Faybury <span class="w3-round-xxlarge w3-metro-green">&nbsp;<i class="fas fa-train"></i>&nbsp;</span>',
'Tower Quarters <span class="w3-round-xxlarge w3-metro-green">&nbsp;<i class="fas fa-train"></i>&nbsp;</span>',
'Sergels Square <span class="w3-round-xxlarge w3-metro-green">&nbsp;<i class="fas fa-train"></i>&nbsp;</span>&nbsp;<span class="w3-round-xxlarge w3-metro-dark-orange">&nbsp;<i class="fas fa-subway"></i>&nbsp;</span>',
'Shoretrench <span class="w3-round-xxlarge w3-metro-green">&nbsp;<i class="fas fa-train"></i>&nbsp;</span>',

'Ganters Hill <span class="w3-round-xxlarge w3-metro-dark-orange">&nbsp;<i class="fas fa-subway"></i>&nbsp;</span>',
'South Street <span class="w3-round-xxlarge w3-metro-dark-orange">&nbsp;<i class="fas fa-subway"></i>&nbsp;</span>',
'Hibbing Gardens <span class="w3-round-xxlarge w3-metro-dark-orange">&nbsp;<i class="fas fa-subway"></i>&nbsp;</span>',
'Fra Mauro Street <span class="w3-round-xxlarge w3-metro-dark-orange">&nbsp;<i class="fas fa-subway"></i>&nbsp;</span>',
'Harlonian Plaza <span class="w3-round-xxlarge w3-metro-dark-orange">&nbsp;<i class="fas fa-subway"></i>&nbsp;</span>',
'North Riverbank Street <span class="w3-round-xxlarge w3-metro-dark-orange">&nbsp;<i class="fas fa-subway"></i>&nbsp;</span>',
'Victory Column <span class="w3-round-xxlarge w3-metro-dark-orange">&nbsp;<i class="fas fa-subway"></i>&nbsp;</span>',
'Monument <span class="w3-round-xxlarge w3-metro-dark-orange">&nbsp;<i class="fas fa-subway"></i>&nbsp;</span>',
'Duluth <span class="w3-round-xxlarge w3-metro-dark-orange">&nbsp;<i class="fas fa-subway"></i>&nbsp;</span>',
'Lighthouse Point <span class="w3-round-xxlarge w3-metro-dark-orange">&nbsp;<i class="fas fa-subway"></i>&nbsp;</span>',
'Shrewsberry <span class="w3-round-xxlarge w3-metro-dark-orange">&nbsp;<i class="fas fa-subway"></i>&nbsp;</span>',
'Long Island Airf. <span class="w3-round-xxlarge w3-metro-dark-orange">&nbsp;<i class="fas fa-subway"></i>&nbsp;</span>',
'Downminster <span class="w3-round-xxlarge w3-metro-dark-orange">&nbsp;<i class="fas fa-subway"></i>&nbsp;</span>',

'Old Town <span class="w3-round-xxlarge w3-metro-dark-orange">&nbsp;<i class="fas fa-subway"></i>&nbsp;</span>',
'Wixley Beach <span class="w3-round-xxlarge w3-metro-dark-orange">&nbsp;<i class="fas fa-subway"></i>&nbsp;</span>',
'Vanderpool Street <span class="w3-round-xxlarge w3-metro-dark-orange">&nbsp;<i class="fas fa-subway"></i>&nbsp;</span>',
'Two Bridges <span class="w3-round-xxlarge w3-metro-dark-orange">&nbsp;<i class="fas fa-subway"></i>&nbsp;</span>',
'The Triangle <span class="w3-round-xxlarge w3-metro-dark-orange">&nbsp;<i class="fas fa-subway"></i>&nbsp;</span>',

'Southpoint <span class="w3-round-xxlarge w3-metro-dark-orange">&nbsp;<i class="fas fa-subway"></i>&nbsp;</span>',
'SouMa <span class="w3-round-xxlarge w3-metro-dark-orange">&nbsp;<i class="fas fa-subway"></i>&nbsp;</span>',
'Southbank Circus <span class="w3-round-xxlarge w3-metro-dark-orange">&nbsp;<i class="fas fa-subway"></i>&nbsp;</span>',
'Stadium <span class="w3-round-xxlarge w3-metro-dark-orange">&nbsp;<i class="fas fa-subway"></i>&nbsp;</span>',
'Lord Bishop&#39;s Square <span class="w3-round-xxlarge w3-metro-dark-orange">&nbsp;<i class="fas fa-subway"></i>&nbsp;</span>',
'Northshore <span class="w3-round-xxlarge w3-metro-dark-orange">&nbsp;<i class="fas fa-subway"></i>&nbsp;</span>',

'Seaporte',
'Jamestown',

'Hibbing Ore Mine',
'Riverfront',
'Uppsala Street',
'Times Square',
'Bel-Air',
'Hornsberg Bus Depot',
'Parvus Junction',
'Liberty Gasoline',
'Factory Showcases',
'Portsfield Retail Centre',

'Berry Isle <span class="w3-round-xxlarge w3-metro-dark-orange">&nbsp;<i class="fas fa-subway"></i>&nbsp;</span>',

'Portsfield Bus Central',
'Roslagen Tree Plantation',

'Stenford Bay West <span class="w3-round-xxlarge w3-brown">&nbsp;SPR&nbsp;</span>',
'Stenford Bay Hilltop <span class="w3-round-xxlarge w3-brown">&nbsp;SPR&nbsp;</span>',
'Stenford Bay Arkney TS <span class="w3-round-xxlarge w3-brown">&nbsp;SPR&nbsp;</span>',
'Stenford Bay Airport Station <span class="w3-round-xxlarge w3-brown">&nbsp;SMA&nbsp;</span>&nbsp;<span class="w3-round-xxlarge w3-brown">&nbsp;SPR&nbsp;</span>',
'Stenford Bay Monument <span class="w3-round-xxlarge w3-brown">&nbsp;SPR&nbsp;</span>',
'Stenford Bay Rhode <span class="w3-round-xxlarge w3-brown">&nbsp;SPR&nbsp;</span>',
'Stenford Bay Tower <span class="w3-round-xxlarge w3-brown">&nbsp;SPR&nbsp;</span>',

'Stenford Bay Henlā <span class="w3-round-xxlarge w3-brown">&nbsp;SMA&nbsp;</span>&nbsp;<span class="w3-round-xxlarge w3-brown">&nbsp;SRR&nbsp;</span>',
'Stenford Bay Business District <span class="w3-round-xxlarge w3-brown">&nbsp;SMA&nbsp;</span>',
'Stenford Bay Erzladen <span class="w3-round-xxlarge w3-brown">&nbsp;SMA&nbsp;</span>',
'Stenford Port <span class="w3-round-xxlarge w3-brown">&nbsp;SMA&nbsp;</span>',
'Stenford Bay Museum <span class="w3-round-xxlarge w3-brown">&nbsp;SMA&nbsp;</span>',
'Stenford Bay Stenport Street <span class="w3-round-xxlarge w3-brown">&nbsp;SMA&nbsp;</span>',
'Stenford Bay Athena-Kareport <span class="w3-round-xxlarge w3-brown">&nbsp;SMA&nbsp;</span>',
'Stenford Bay Craft Park <span class="w3-round-xxlarge w3-brown">&nbsp;SMA&nbsp;</span>',

'Stenford Bay Buildersfield <span class="w3-round-xxlarge w3-brown">&nbsp;SRR&nbsp;</span>',
'Stenford Bay Cove Beach <span class="w3-round-xxlarge w3-brown">&nbsp;SRR&nbsp;</span>',
'Downtown Stenford <span class="w3-round-xxlarge w3-brown">&nbsp;SRR&nbsp;</span>',
'Stenford Road Hub <span class="w3-round-xxlarge w3-brown">&nbsp;SRR&nbsp;</span>',
'Stenford Bay South Tip <span class="w3-round-xxlarge w3-brown">&nbsp;SRR&nbsp;</span>',
'Stenford Bay Flatground Observatory Bridge <span class="w3-round-xxlarge w3-brown">&nbsp;SRR&nbsp;</span>',
'Stenford Bay Farmhill <span class="w3-round-xxlarge w3-brown">&nbsp;SRR&nbsp;</span>',
'Stenford Bay Kareport North <span class="w3-round-xxlarge w3-brown">&nbsp;SRR&nbsp;</span>',
'Stenford Bay Transit Junction <span class="w3-round-xxlarge w3-brown">&nbsp;SRR&nbsp;</span>',

'Stenford Bay Cortex Fields <span class="w3-round-xxlarge w3-brown">&nbsp;SRR&nbsp;</span>',
'Stenford Bay Marston <span class="w3-round-xxlarge w3-brown">&nbsp;SRR&nbsp;</span>',
'Stenford Bay Hampsill <span class="w3-round-xxlarge w3-brown">&nbsp;SRR&nbsp;</span>',
'Stenford Bay Dilly Court <span class="w3-round-xxlarge w3-brown">&nbsp;SRR&nbsp;</span>',
'Stenford Bay Eastdilly Falls <span class="w3-round-xxlarge w3-brown">&nbsp;SRR&nbsp;</span>',
'Stenford Bay Eastdilly <span class="w3-round-xxlarge w3-brown">&nbsp;SRR&nbsp;</span>',

'Stenford Bay George Square <span class="w3-round-xxlarge w3-brown">&nbsp;SRR&nbsp;</span>',
'Stenford Bay Mansion Of Arts <span class="w3-round-xxlarge w3-brown">&nbsp;SRR&nbsp;</span>',
'Stenford Foothill <span class="w3-round-xxlarge w3-brown">&nbsp;SRR&nbsp;</span>',
'Stenford Bay Southeast Fields <span class="w3-round-xxlarge w3-brown">&nbsp;SRR&nbsp;</span>',
'Stenford Bay Southbranch <span class="w3-round-xxlarge w3-brown">&nbsp;SRR&nbsp;</span>',
'Stenford Bay Beachwind <span class="w3-round-xxlarge w3-brown">&nbsp;SRR&nbsp;</span>',

'Stenford Bay Swift Market <span class="w3-round-xxlarge w3-brown">&nbsp;SRR&nbsp;</span>',


'Stenford Bay Tall Build Square <span class="w3-round-xxlarge w3-brown">&nbsp;SRR&nbsp;</span>',


'Stenford Bay Southern Stenford <span class="w3-round-xxlarge w3-brown">&nbsp;SRR&nbsp;</span>',
'Stenford Bay Kare Square <span class="w3-round-xxlarge w3-brown">&nbsp;SRR&nbsp;</span>',

'Stenford Bay South Cortex <span class="w3-round-xxlarge w3-brown">&nbsp;SRR&nbsp;</span>',


'Stenford Bay Corner City <span class="w3-round-xxlarge w3-brown">&nbsp;SRR&nbsp;</span>',


'Stenford Bay Harlon River <span class="w3-round-xxlarge w3-brown">&nbsp;SRR&nbsp;</span>',

'Stenford Farm <span class="w3-round-xxlarge w3-brown">&nbsp;SRR&nbsp;</span>',
'Stenford Bay South Mansion <span class="w3-round-xxlarge w3-brown">&nbsp;SRR&nbsp;</span>',

'Stenford Bay Field O&#39; Flowers <span class="w3-round-xxlarge w3-brown">&nbsp;SRR&nbsp;</span>',
'Stenford Bay Horli <span class="w3-round-xxlarge w3-brown">&nbsp;SRR&nbsp;</span>',
'Stenford Bay Dilly Court North <span class="w3-round-xxlarge w3-brown">&nbsp;SRR&nbsp;</span>',
'Stenford Bay Rosby Homes <span class="w3-round-xxlarge w3-brown">&nbsp;SRR&nbsp;</span>',
'Stenford Bay Cortex South <span class="w3-round-xxlarge w3-brown">&nbsp;SRR&nbsp;</span>',
'Stenford Bay Henla Hill <span class="w3-round-xxlarge w3-brown">&nbsp;SRR&nbsp;</span>',
'Stenford Bay Cortex-Kelford Junction <span class="w3-round-xxlarge w3-brown">&nbsp;SRR&nbsp;</span>',
'Stenford Bay Emmaru I/C <span class="w3-round-xxlarge w3-brown">&nbsp;SRR&nbsp;</span>',
'Stenford Bay East Edge <span class="w3-round-xxlarge w3-brown">&nbsp;SRR&nbsp;</span>',

'Stenford Bay Kare Forest <span class="w3-round-xxlarge w3-brown">&nbsp;SRR&nbsp;</span>',

'Stenford Bay Searay <span class="w3-round-xxlarge w3-brown">&nbsp;SPR&nbsp;</span>',
'Stenford Bay SRR Tower <span class="w3-round-xxlarge w3-brown">&nbsp;SRR&nbsp;</span>'
);


$stationcoordx = array('1214','587','1140','149','-5','226','-241','-720','-985','-1279','-1647','-1995','-1766','-1517','-1467','-615','-376','-90','421','869','958','951','1124','1144','557','619','243','-740','-892','-646','-578','-550','-639','-392','-134','483','-5302','-3758','-341','-324','-422','-377','-49','132','168','267','447','-983','555','782');
$stationcoordy = array('-1597','-1053','-1250','-517','-299','-103','-258','-302','-309','-236','-84','-493','-660','-533','-175','-159','-95','-523','-481','-272','-34','-514','-649','-1045','-102','-599','-271','-276','-541','471','315','159','-627','-645','-679','637','102','-2630','134','273','442','667','667','657','889','1061','1385','-74','1477','-1275');




echo $station[(intval($dep)-1)].'&nbsp;<i class="fas fa-chevron-right"></i>&nbsp;'.$station[(intval($dest)-1)];

$harlontransitpricezone = array('4E','3E','4E','1','1','1','1','1','2W','2W','3W','4W','4W','3W','3W','1','1','1','1','2L','2L','3L','3L','3L','2L','2E','1','1','1','2S','2S','2S','1','1','1','0','0','0','0','0','0','0','0','0','0','0','0','2W');

$content_c1 = array('1','2','4','5','7','8','9','10','11');
if (in_array($dep, $content_c1)) {$dep_content_c1 = 1;} else {$dep_content_c1 = 0;}
if (in_array($dest, $content_c1)) {$dest_content_c1 = 1;} else {$dest_content_c1 = 0;}

$content_c2 = array('6','5','7','8','9','10');
if (in_array($dep, $content_c2)) {$dep_content_c2 = 1;} else {$dep_content_c2 = 0;}
if (in_array($dest, $content_c2)) {$dest_content_c2 = 1;} else {$dest_content_c2 = 0;}

$content_m1 = array('21','25','6','5','7','17','16','28','29');
if (in_array($dep, $content_m1)) {$dep_content_m1 = 1;} else {$dep_content_m1 = 0;}
if (in_array($dest, $content_m1)) {$dest_content_m1 = 1;} else {$dest_content_m1 = 0;}

$content_m11 = array('26','19','27','5','7','17','16','28');
if (in_array($dep, $content_m11)) {$dep_content_m11 = 1;} else {$dep_content_m11 = 0;}
if (in_array($dest, $content_m11)) {$dest_content_m11 = 1;} else {$dest_content_m11 = 0;}

$content_m2 = array('30','31','32','16','28','29','33','34','35');
if (in_array($dep, $content_m2)) {$dep_content_m2 = 1;} else {$dep_content_m2 = 0;}
if (in_array($dest, $content_m2)) {$dest_content_m2 = 1;} else {$dest_content_m2 = 0;}

$content_m3 = array('21','20','4','18','7','16','48','10','15','14','13','12');
if (in_array($dep, $content_m3)) {$dep_content_m3 = 1;} else {$dep_content_m3 = 0;}
if (in_array($dest, $content_m3)) {$dest_content_m3 = 1;} else {$dest_content_m3 = 0;}

$content_m31 = array('24','23','22','20');
if (in_array($dep, $content_m31)) {$dep_content_m31 = 1;} else {$dep_content_m31 = 0;}
if (in_array($dest, $content_m31)) {$dest_content_m31 = 1;} else {$dest_content_m31 = 0;}

$content_bus51 = array('2','50','3','1');
if (in_array($dep, $content_bus51)) {$dep_content_bus51 = 1;} else {$dep_content_bus51 = 0;}
if (in_array($dest, $content_bus51)) {$dest_content_bus51 = 1;} else {$dest_content_bus51 = 0;}

$content_bus81 = array('16','7','17','39','40','41','42','43','44','45','46','47','49');
if (in_array($dep, $content_bus81)) {$dep_content_bus81 = 1;} else {$dep_content_bus81 = 0;}
if (in_array($dest, $content_bus81)) {$dest_content_bus81 = 1;} else {$dest_content_bus81 = 0;}

$content_bus177 = array('7','38');
if (in_array($dep, $content_bus177)) {$dep_content_bus177 = 1;} else {$dep_content_bus177 = 0;}
if (in_array($dest, $content_bus177)) {$dest_content_bus177 = 1;} else {$dest_content_bus177 = 0;}

$content_ferry = array('1','24','25','36');
if (in_array($dep, $content_ferry)) {$dep_content_ferry = 1;} else {$dep_content_ferry = 0;}
if (in_array($dest, $content_ferry)) {$dest_content_ferry = 1;} else {$dest_content_ferry = 0;}

$content_sprapollo = array('51','54','55','56','57');
if (in_array($dep, $content_sprapollo)) {$dep_content_sprapollo = 1;} else {$dep_content_sprapollo = 0;}
if (in_array($dest, $content_sprapollo)) {$dest_content_sprapollo = 1;} else {$dest_content_sprapollo = 0;}

$content_sprathena = array('51','52','106','53');
if (in_array($dep, $content_sprathena)) {$dep_content_sprathena = 1;} else {$dep_content_sprathena = 0;}
if (in_array($dest, $content_sprathena)) {$dest_content_sprathena = 1;} else {$dest_content_sprathena = 0;}

$content_sprpluto = array('57','53');
if (in_array($dep, $content_sprpluto)) {$dep_content_sprpluto = 1;} else {$dep_content_sprpluto = 0;}
if (in_array($dest, $content_sprpluto)) {$dest_content_sprpluto = 1;} else {$dest_content_sprpluto = 0;}

$content_sprares = array('57','54');
if (in_array($dep, $content_sprares)) {$dep_content_sprares = 1;} else {$dep_content_sprares = 0;}
if (in_array($dest, $content_sprares)) {$dest_content_sprares = 1;} else {$dest_content_sprares = 0;}

$content_smact = array('62','61','60','59','58');
if (in_array($dep, $content_smact)) {$dep_content_smact = 1;} else {$dep_content_smact = 0;}
if (in_array($dest, $content_smact)) {$dest_content_smact = 1;} else {$dest_content_smact = 0;}

$content_smakp = array('61','63','64','65','54');
if (in_array($dep, $content_smakp)) {$dep_content_smakp = 1;} else {$dep_content_smakp = 0;}
if (in_array($dest, $content_smakp)) {$dest_content_smakp = 1;} else {$dest_content_smakp = 0;}

$content_srreastdilly = array('66','58','75','76','77','78','79','80');
if (in_array($dep, $content_srreastdilly)) {$dep_content_srreastdilly = 1;} else {$dep_content_srreastdilly = 0;}
if (in_array($dest, $content_srreastdilly)) {$dest_content_srreastdilly = 1;} else {$dest_content_srreastdilly = 0;}

$content_srrbulletcartcirc = array('66','67','68','69','70','71','72','107','73','74','58');
if (in_array($dep, $content_srrbulletcartcirc)) {$dep_content_srrbulletcartcirc = 1;} else {$dep_content_srrbulletcartcirc = 0;}
if (in_array($dest, $content_srrbulletcartcirc)) {$dest_content_srrbulletcartcirc = 1;} else {$dest_content_srrbulletcartcirc = 0;}

$content_srrsunrisecirc = array('66','58','75','76','81','82','83','84','69','68','85','67','86');
if (in_array($dep, $content_srrsunrisecirc)) {$dep_content_srrsunrisecirc = 1;} else {$dep_content_srrsunrisecirc = 0;}
if (in_array($dest, $content_srrsunrisecirc)) {$dest_content_srrsunrisecirc = 1;} else {$dest_content_srrsunrisecirc = 0;}

$content_srrcraft = array('66','87','102','81','89','90','107');
if (in_array($dep, $content_srrcraft)) {$dep_content_srrcraft = 1;} else {$dep_content_srrcraft = 0;}
if (in_array($dest, $content_srrcraft)) {$dest_content_srrcraft = 1;} else {$dest_content_srrcraft = 0;}

$content_srrcortexb = array('66','87','74','91','81');
if (in_array($dep, $content_srrcortexb)) {$dep_content_srrcortexb = 1;} else {$dep_content_srrcortexb = 0;}
if (in_array($dest, $content_srrcortexb)) {$dest_content_srrcortexb = 1;} else {$dest_content_srrcortexb = 0;}

$content_srrsouthcirc = array('83','84','70','95','93','71','89','82');
if (in_array($dep, $content_srrsouthcirc)) {$dep_content_srrsouthcirc = 1;} else {$dep_content_srrsouthcirc = 0;}
if (in_array($dest, $content_srrsouthcirc)) {$dest_content_srrsouthcirc = 1;} else {$dest_content_srrsouthcirc = 0;}

$content_srrkareportb = array('73','79','107','90','94','72');
if (in_array($dep, $content_srrkareportb)) {$dep_content_srrkareportb = 1;} else {$dep_content_srrkareportb = 0;}
if (in_array($dest, $content_srrkareportb)) {$dest_content_srrkareportb = 1;} else {$dest_content_srrkareportb = 0;}

$content_srrtramm = array('73','107','90','96','97','81','98','99','100','101','102','103','87','66','67','68','104');
if (in_array($dep, $content_srrtramm)) {$dep_content_srrtramm = 1;} else {$dep_content_srrtramm = 0;}
if (in_array($dest, $content_srrtramm)) {$dest_content_srrtramm = 1;} else {$dest_content_srrtramm = 0;}

$content_srrtramd = array('90','105','92');
if (in_array($dep, $content_srrtramd)) {$dep_content_srrtramd = 1;} else {$dep_content_srrtramd = 0;}
if (in_array($dest, $content_srrtramd)) {$dest_content_srrtramd = 1;} else {$dest_content_srrtramd = 0;}

$content_srrtramc = array('90','105','88','89');
if (in_array($dep, $content_srrtramc)) {$dep_content_srrtramc = 1;} else {$dep_content_srrtramc = 0;}
if (in_array($dest, $content_srrtramc)) {$dest_content_srrtramc = 1;} else {$dest_content_srrtramc = 0;}

$content_srrtramt = array('98','107');
if (in_array($dep, $content_srrtramt)) {$dep_content_srrtramt = 1;} else {$dep_content_srrtramt = 0;}
if (in_array($dest, $content_srrtramt)) {$dest_content_srrtramt = 1;} else {$dest_content_srrtramt = 0;}

if ($dep == $dest) {
echo '<br>&nbsp;</center></div></center><center><div class="w3-container w3-grey w3-border-bottom w3-border-black"><center><br>';
echo "<i>No public transportation needed: You're already there.</i>";
} else {

if ($dep_content_bus177 == 1 && $dest_content_bus177 == 1) {
    if (intval(array_search($dep, $content_bus177)) < intval(array_search($dest, $content_bus177))) {
        echo '<br>&nbsp;</center></div></center><center><div class="w3-container w3-grey w3-border-bottom w3-border-black"><center><br>';
        echo '<i>&#xa3;10</i>&nbsp;&nbsp;';
        echo '<span class="w3-round-xxlarge w3-white w3-text-black">&nbsp;<i class="fas fa-bus-alt"></i>&nbsp;177&nbsp;</span>&nbsp;towards <b>Hibbing Ore Mines #EXPRESS SERVICE#</b>';
    } else {
        echo '<br>&nbsp;</center></div></center><center><div class="w3-container w3-grey w3-border-bottom w3-border-black"><center><br>';
        echo '<i>&#xa3;10</i>&nbsp;&nbsp;';
        echo '<span class="w3-round-xxlarge w3-white w3-text-black">&nbsp;<i class="fas fa-bus-alt"></i>&nbsp;177&nbsp;</span>&nbsp;towards <b>Harlon Capital #EXPRESS SERVICE#</b>';
    }   
}


else if ($dep_content_m3 == 1 && $dest_content_m3 == 1) {
    if (intval(array_search($dep, $content_m3)) < intval(array_search($dest, $content_m3))) {
        echo '<br>&nbsp;</center></div></center><center><div class="w3-container w3-grey w3-border-bottom w3-border-black"><center><br><i>&#xa3;';
        echo htprice($harlontransitpricezone[$dep-1], $harlontransitpricezone[$dest-1]);
        echo '</i>&nbsp;&nbsp;';
        echo '<span class="w3-round-xxlarge w3-metro-red w3-text-black">&nbsp;<i class="fas fa-subway"></i>&nbsp;M3&nbsp;</span>&nbsp;towards <b>Westlyn (Ganters Hill)</b>';
    } else {
        echo '<br>&nbsp;</center></div></center><center><div class="w3-container w3-grey w3-border-bottom w3-border-black"><center><br><i>&#xa3;';
        echo htprice($harlontransitpricezone[$dep-1], $harlontransitpricezone[$dest-1]);
        echo '</i>&nbsp;&nbsp;';
        echo '<span class="w3-round-xxlarge w3-metro-red w3-text-black">&nbsp;<i class="fas fa-subway"></i>&nbsp;M3&nbsp;</span>&nbsp;towards <b>Long Island (Lighthouse Pt)</b>';
    }   
}


else if ($dep_content_m2 == 1 && $dest_content_m2 == 1) {
    if (intval(array_search($dep, $content_m2)) < intval(array_search($dest, $content_m2))) {
        echo '<br>&nbsp;</center></div></center><center><div class="w3-container w3-grey w3-border-bottom w3-border-black"><center><br><i>&#xa3;';
        echo htprice($harlontransitpricezone[$dep-1], $harlontransitpricezone[$dest-1]);
        echo '</i>&nbsp;&nbsp;';
        echo '<span class="w3-round-xxlarge w3-metro-yellow w3-text-black">&nbsp;<i class="fas fa-subway"></i>&nbsp;M2&nbsp;</span>&nbsp;towards <b>Main Island (Northshore)</b>';
    } else {
        echo '<br>&nbsp;</center></div></center><center><div class="w3-container w3-grey w3-border-bottom w3-border-black"><center><br><i>&#xa3;';
        echo htprice($harlontransitpricezone[$dep-1], $harlontransitpricezone[$dest-1]);
        echo '</i>&nbsp;&nbsp;';
        echo '<span class="w3-round-xxlarge w3-metro-yellow w3-text-black">&nbsp;<i class="fas fa-subway"></i>&nbsp;M2&nbsp;</span>&nbsp;towards <b>Southside (Southpoint)</b>';
    }   
}


else if ($dep_content_m1 == 1 && $dest_content_m1 == 1) {
    if (intval(array_search($dep, $content_m1)) < intval(array_search($dest, $content_m1))) {
        echo '<br>&nbsp;</center></div></center><center><div class="w3-container w3-grey w3-border-bottom w3-border-black"><center><br><i>&#xa3;';
        echo htprice($harlontransitpricezone[$dep-1], $harlontransitpricezone[$dest-1]);
        echo '</i>&nbsp;&nbsp;';
        echo '<span class="w3-round-xxlarge w3-metro-green w3-text-black">&nbsp;<i class="fas fa-subway"></i>&nbsp;M1&nbsp;</span>&nbsp;towards <b>Main Island (The Triangle)</b>';
    } else {
        echo '<br>&nbsp;</center></div></center><center><div class="w3-container w3-grey w3-border-bottom w3-border-black"><center><br><i>&#xa3;';
        echo htprice($harlontransitpricezone[$dep-1], $harlontransitpricezone[$dest-1]);
        echo '</i>&nbsp;&nbsp;';
        echo '<span class="w3-round-xxlarge w3-metro-green w3-text-black">&nbsp;<i class="fas fa-subway"></i>&nbsp;M1&nbsp;</span>&nbsp;towards <b>Long Island (Lighthouse Pt)</b>';
    }   
}


else if ($dep_content_m11 == 1 && $dest_content_m11 == 1) {
    if (intval(array_search($dep, $content_m11)) < intval(array_search($dest, $content_m11))) {
        echo '<br>&nbsp;</center></div></center><center><div class="w3-container w3-grey w3-border-bottom w3-border-black"><center><br><i>&#xa3;';
        echo htprice($harlontransitpricezone[$dep-1], $harlontransitpricezone[$dest-1]);
        echo '</i>&nbsp;&nbsp;';
        echo '<span class="w3-round-xxlarge w3-metro-green w3-text-black">&nbsp;<i class="fas fa-subway"></i>&nbsp;M11&nbsp;</span>&nbsp;towards <b>Main Island (Two Bridges)</b>';
    } else {
        echo '<br>&nbsp;</center></div></center><center><div class="w3-container w3-grey w3-border-bottom w3-border-black"><center><br><i>&#xa3;';
        echo htprice($harlontransitpricezone[$dep-1], $harlontransitpricezone[$dest-1]);
        echo '</i>&nbsp;&nbsp;';
        echo '<span class="w3-round-xxlarge w3-metro-green w3-text-black">&nbsp;<i class="fas fa-subway"></i>&nbsp;M11&nbsp;</span>&nbsp;towards <b>Jutisle (Wixley Beach)</b>';
    }   
}

else if ($dep_content_c1 == 1 && $dest_content_c1 == 1) {
    if (intval(array_search($dep, $content_c1)) < intval(array_search($dest, $content_c1))) {
        echo '<br>&nbsp;</center></div></center><center><div class="w3-container w3-grey w3-border-bottom w3-border-black"><center><br><i>&#xa3;';
        echo htprice($harlontransitpricezone[$dep-1], $harlontransitpricezone[$dest-1]);
        echo '</i>&nbsp;&nbsp;';
        echo '<span class="w3-round-xxlarge w3-metro-green w3-text-black">&nbsp;<i class="fas fa-train"></i>&nbsp;C1&nbsp;</span>&nbsp;towards <b>Westlyn (Shoretrench)</b>';
    } else {
        echo '<br>&nbsp;</center></div></center><center><div class="w3-container w3-grey w3-border-bottom w3-border-black"><center><br><i>&#xa3;';
        echo htprice($harlontransitpricezone[$dep-1], $harlontransitpricezone[$dest-1]);
        echo '</i>&nbsp;&nbsp;';
        echo '<span class="w3-round-xxlarge w3-metro-green w3-text-black">&nbsp;<i class="fas fa-train"></i>&nbsp;C1&nbsp;</span>&nbsp;towards <b>Jutisle (Stenford Bay)</b>';
    }   
}

else if ($dep_content_c2 == 1 && $dest_content_c2 == 1) {
    if (intval(array_search($dep, $content_c2)) < intval(array_search($dest, $content_c2))) {
        echo '<br>&nbsp;</center></div></center><center><div class="w3-container w3-grey w3-border-bottom w3-border-black"><center><br><i>&#xa3;';
        echo htprice($harlontransitpricezone[$dep-1], $harlontransitpricezone[$dest-1]);
        echo '</i>&nbsp;&nbsp;';
        echo '<span class="w3-round-xxlarge w3-metro-green w3-text-black">&nbsp;<i class="fas fa-train"></i>&nbsp;C2&nbsp;</span>&nbsp;towards <b>Westlyn (Sergels Square)</b>';
    } else {
        echo '<br>&nbsp;</center></div></center><center><div class="w3-container w3-grey w3-border-bottom w3-border-black"><center><br><i>&#xa3;';
        echo htprice($harlontransitpricezone[$dep-1], $harlontransitpricezone[$dest-1]);
        echo '</i>&nbsp;&nbsp;';
        echo '<span class="w3-round-xxlarge w3-metro-green w3-text-black">&nbsp;<i class="fas fa-train"></i>&nbsp;C2&nbsp;</span>&nbsp;towards <b>Main Island (Eastside)</b>';
    }   
}

else if ($dep_content_bus81 == 1 && $dest_content_bus81 == 1) {
    if (intval(array_search($dep, $content_bus81)) < intval(array_search($dest, $content_bus81))) {
        echo '<br>&nbsp;</center></div></center><center><div class="w3-container w3-grey w3-border-bottom w3-border-black"><center><br>';
        echo '<i>&#xa3;4.5</i>&nbsp;&nbsp;';
        echo '<span class="w3-round-xxlarge w3-white w3-text-black">&nbsp;<i class="fas fa-bus-alt"></i>&nbsp;81&nbsp;</span>&nbsp;towards <b>Portsfield</b>';
    } else {
        echo '<br>&nbsp;</center></div></center><center><div class="w3-container w3-grey w3-border-bottom w3-border-black"><center><br>';
        echo '<i>&#xa3;4.5</i>&nbsp;&nbsp;';
        echo '<span class="w3-round-xxlarge w3-white w3-text-black">&nbsp;<i class="fas fa-bus-alt"></i>&nbsp;81&nbsp;</span>&nbsp;towards <b>Harlonian Plaza</b>';
    }   
}

else if ($dep_content_bus51 == 1 && $dest_content_bus51 == 1) {
    if (intval(array_search($dep, $content_bus51)) < intval(array_search($dest, $content_bus51))) {
        echo '<br>&nbsp;</center></div></center><center><div class="w3-container w3-grey w3-border-bottom w3-border-black"><center><br>';
        echo '<i>&#xa3;4.5</i>&nbsp;&nbsp;';
        echo '<span class="w3-round-xxlarge w3-white w3-text-black">&nbsp;<i class="fas fa-bus-alt"></i>&nbsp;51&nbsp;</span>&nbsp;towards <b>Stenford Bay</b>';
    } else {
        echo '<br>&nbsp;</center></div></center><center><div class="w3-container w3-grey w3-border-bottom w3-border-black"><center><br>';
        echo '<i>&#xa3;4.5</i>&nbsp;&nbsp;';
        echo '<span class="w3-round-xxlarge w3-white w3-text-black">&nbsp;<i class="fas fa-bus-alt"></i>&nbsp;51&nbsp;</span>&nbsp;towards <b>Oxville</b>';
    }   
}

else if ($dep_content_m31 == 1 && $dest_content_m31 == 1) {
    if (intval(array_search($dep, $content_m31)) < intval(array_search($dest, $content_m31))) {
        echo '<br>&nbsp;</center></div></center><center><div class="w3-container w3-grey w3-border-bottom w3-border-black"><center><br><i>&#xa3;';
        echo htprice($harlontransitpricezone[$dep-1], $harlontransitpricezone[$dest-1]);
        echo '</i>&nbsp;&nbsp;';
        echo '<span class="w3-round-xxlarge w3-metro-red w3-text-black">&nbsp;<i class="fas fa-subway"></i>&nbsp;M31&nbsp;</span>&nbsp;towards <b>Long Island (Duluth)</b>';
    } else {
        echo '<br>&nbsp;</center></div></center><center><div class="w3-container w3-grey w3-border-bottom w3-border-black"><center><br><i>&#xa3;';
        echo htprice($harlontransitpricezone[$dep-1], $harlontransitpricezone[$dest-1]);
        echo '</i>&nbsp;&nbsp;';
        echo '<span class="w3-round-xxlarge w3-metro-red w3-text-black">&nbsp;<i class="fas fa-subway"></i>&nbsp;M31&nbsp;</span>&nbsp;towards <b>Long Island (Downminster)</b>';
    }   
}

else if ($dep_content_srrcortexb == 1 && $dest_content_srrcortexb == 1) {
    if (intval(array_search($dep, $content_srrcortexb)) < intval(array_search($dest, $content_srrcortexb))) {
        echo '<br>&nbsp;</center></div></center><center><div class="w3-container w3-grey w3-border-bottom w3-border-black"><center><br>';
        echo '<i><a href="pricessrr.jpg" target="_blank">&#xa3;0.49</a></i>&nbsp;&nbsp;';
        echo '<span class="w3-round-xxlarge w3-red w3-text-black">&nbsp;<i class="fas fa-location-arrow"></i>&nbsp;SRR Cortex Branch&nbsp;</span>&nbsp;towards <b>George Square</b>';
    } else {
        echo '<br>&nbsp;</center></div></center><center><div class="w3-container w3-grey w3-border-bottom w3-border-black"><center><br>';
        echo '<i><a href="pricessrr.jpg" target="_blank">&#xa3;0.49</a></i>&nbsp;&nbsp;';
        echo '<span class="w3-round-xxlarge w3-red w3-text-black">&nbsp;<i class="fas fa-location-arrow"></i>&nbsp;SRR Cortex Branch&nbsp;</span>&nbsp;towards <b>Buildersfield</b>';
    }   
}

else if ($dep_content_srrkareportb == 1 && $dest_content_srrkareportb == 1) {
    if (intval(array_search($dep, $content_srrkareportb)) < intval(array_search($dest, $content_srrkareportb))) {
        echo '<br>&nbsp;</center></div></center><center><div class="w3-container w3-grey w3-border-bottom w3-border-black"><center><br>';
        echo '<i><a href="pricessrr.jpg" target="_blank">&#xa3;0.49</a></i>&nbsp;&nbsp;';
        echo '<span class="w3-round-xxlarge w3-food-kiwi w3-text-black">&nbsp;<i class="fas fa-location-arrow"></i>&nbsp;SRR Kareport Branch&nbsp;</span>&nbsp;towards <b>Farmhill</b>';
    } else {
        echo '<br>&nbsp;</center></div></center><center><div class="w3-container w3-grey w3-border-bottom w3-border-black"><center><br>';
        echo '<i><a href="pricessrr.jpg" target="_blank">&#xa3;0.49</a></i>&nbsp;&nbsp;';
        echo '<span class="w3-round-xxlarge w3-food-kiwi w3-text-black">&nbsp;<i class="fas fa-location-arrow"></i>&nbsp;SRR Kareport Branch&nbsp;</span>&nbsp;towards <b>Kareport North</b>';
    }   
}

else if ($dep_content_srreastdilly == 1 && $dest_content_srreastdilly == 1) {
    if (intval(array_search($dep, $content_srreastdilly)) < intval(array_search($dest, $content_srreastdilly))) {
        echo '<br>&nbsp;</center></div></center><center><div class="w3-container w3-grey w3-border-bottom w3-border-black"><center><br>';
        echo '<i><a href="pricessrr.jpg" target="_blank">&#xa3;0.49</a></i>&nbsp;&nbsp;';
        echo '<span class="w3-round-xxlarge w3-purple w3-text-black">&nbsp;<i class="fas fa-location-arrow"></i>&nbsp;SRR Eastdilly&nbsp;</span>&nbsp;towards <b>Eastdilly</b>';
    } else {
        echo '<br>&nbsp;</center></div></center><center><div class="w3-container w3-grey w3-border-bottom w3-border-black"><center><br>';
        echo '<i><a href="pricessrr.jpg" target="_blank">&#xa3;0.49</a></i>&nbsp;&nbsp;';
        echo '<span class="w3-round-xxlarge w3-purple w3-text-black">&nbsp;<i class="fas fa-location-arrow"></i>&nbsp;SRR Eastdilly&nbsp;</span>&nbsp;towards <b>Buildersfield</b>';
    }   
}

else if ($dep_content_srrcraft == 1 && $dest_content_srrcraft == 1) {
    if (intval(array_search($dep, $content_srrcraft)) < intval(array_search($dest, $content_srrcraft))) {
        echo '<br>&nbsp;</center></div></center><center><div class="w3-container w3-grey w3-border-bottom w3-border-black"><center><br>';
        echo '<i><a href="pricessrr.jpg" target="_blank">&#xa3;0.49</a></i>&nbsp;&nbsp;';
        echo '<span class="w3-round-xxlarge w3-yellow w3-text-black">&nbsp;<i class="fas fa-location-arrow"></i>&nbsp;SRR Craft&nbsp;</span>&nbsp;towards <b>SRR Tower</b>';
    } else {
        echo '<br>&nbsp;</center></div></center><center><div class="w3-container w3-grey w3-border-bottom w3-border-black"><center><br>';
        echo '<i><a href="pricessrr.jpg" target="_blank">&#xa3;0.49</a></i>&nbsp;&nbsp;';
        echo '<span class="w3-round-xxlarge w3-yellow w3-text-black">&nbsp;<i class="fas fa-location-arrow"></i>&nbsp;SRR Craft&nbsp;</span>&nbsp;towards <b>Buildersfield</b>';
    }   
}

else if ($dep_content_smact == 1 && $dest_content_smact == 1) {
    if (intval(array_search($dep, $content_smact)) < intval(array_search($dest, $content_smact))) {
        echo '<br>&nbsp;</center></div></center><center><div class="w3-container w3-grey w3-border-bottom w3-border-black"><center><br>';
        echo '<i>&#xa3;0.5</i>&nbsp;&nbsp;';
        echo '<span class="w3-round-xxlarge w3-red w3-text-black">&nbsp;<i class="fas fa-location-arrow"></i>&nbsp;SMA Crosstown&nbsp;</span>&nbsp;towards <b>Henlā</b>';
    } else {
        echo '<br>&nbsp;</center></div></center><center><div class="w3-container w3-grey w3-border-bottom w3-border-black"><center><br>';
        echo '<i>&#xa3;0.5</i>&nbsp;&nbsp;';
        echo '<span class="w3-round-xxlarge w3-red w3-text-black">&nbsp;<i class="fas fa-location-arrow"></i>&nbsp;SMA Crosstown&nbsp;</span>&nbsp;towards <b>Museum</b>';
    }   
}

else if ($dep_content_smakp == 1 && $dest_content_smakp == 1) {
    if (intval(array_search($dep, $content_smakp)) < intval(array_search($dest, $content_smakp))) {
        echo '<br>&nbsp;</center></div></center><center><div class="w3-container w3-grey w3-border-bottom w3-border-black"><center><br>';
        echo '<i>&#xa3;0.5</i>&nbsp;&nbsp;';
        echo '<span class="w3-round-xxlarge w3-yellow w3-text-black">&nbsp;<i class="fas fa-location-arrow"></i>&nbsp;SMA Kareport&nbsp;</span>&nbsp;towards <b>Airport</b>';
    } else {
        echo '<br>&nbsp;</center></div></center><center><div class="w3-container w3-grey w3-border-bottom w3-border-black"><center><br>';
        echo '<i>&#xa3;0.5</i>&nbsp;&nbsp;';
        echo '<span class="w3-round-xxlarge w3-yellow w3-text-black">&nbsp;<i class="fas fa-location-arrow"></i>&nbsp;SMA Kareport&nbsp;</span>&nbsp;towards <b>Stenford Port</b>';
    }   
}

else if ($dep_content_sprares == 1 && $dest_content_sprares == 1) {
    if (intval(array_search($dep, $content_sprares)) < intval(array_search($dest, $content_sprares))) {
        echo '<br>&nbsp;</center></div></center><center><div class="w3-container w3-grey w3-border-bottom w3-border-black"><center><br>';
        echo '<i>&#xa3;1</i>&nbsp;&nbsp;';
        echo '<span class="w3-round-xxlarge w3-blue-gray w3-text-black">&nbsp;<i class="fas fa-location-arrow"></i>&nbsp;SPR Ares&nbsp;</span>&nbsp;towards <b>Airport Station</b>';
    } else {
        echo '<br>&nbsp;</center></div></center><center><div class="w3-container w3-grey w3-border-bottom w3-border-black"><center><br>';
        echo '<i>&#xa3;1</i>&nbsp;&nbsp;';
        echo '<span class="w3-round-xxlarge w3-blue-gray w3-text-black">&nbsp;<i class="fas fa-location-arrow"></i>&nbsp;SPR Ares&nbsp;</span>&nbsp;towards <b>Tower</b>';
    }   
}

else if ($dep_content_sprapollo == 1 && $dest_content_sprapollo == 1) {
    if (intval(array_search($dep, $content_sprapollo)) < intval(array_search($dest, $content_sprapollo))) {
        echo '<br>&nbsp;</center></div></center><center><div class="w3-container w3-grey w3-border-bottom w3-border-black"><center><br>';
        echo '<i>&#xa3;1</i>&nbsp;&nbsp;';
        echo '<span class="w3-round-xxlarge w3-green w3-text-black">&nbsp;<i class="fas fa-location-arrow"></i>&nbsp;SPR Apollo&nbsp;</span>&nbsp;towards <b>Tower</b>';
    } else {
        echo '<br>&nbsp;</center></div></center><center><div class="w3-container w3-grey w3-border-bottom w3-border-black"><center><br>';
        echo '<i>&#xa3;1</i>&nbsp;&nbsp;';
        echo '<span class="w3-round-xxlarge w3-green w3-text-black">&nbsp;<i class="fas fa-location-arrow"></i>&nbsp;SPR Apollo&nbsp;</span>&nbsp;towards <b>West</b>';
    }   
}

else if ($dep_content_sprathena == 1 && $dest_content_sprathena == 1) {
    if (intval(array_search($dep, $content_sprathena)) < intval(array_search($dest, $content_sprathena))) {
        echo '<br>&nbsp;</center></div></center><center><div class="w3-container w3-grey w3-border-bottom w3-border-black"><center><br>';
        echo '<i>&#xa3;1</i>&nbsp;&nbsp;';
        echo '<span class="w3-round-xxlarge w3-yellow w3-text-black">&nbsp;<i class="fas fa-location-arrow"></i>&nbsp;SPR Athena&nbsp;</span>&nbsp;towards <b>Arkney TS</b>';
    } else {
        echo '<br>&nbsp;</center></div></center><center><div class="w3-container w3-grey w3-border-bottom w3-border-black"><center><br>';
        echo '<i>&#xa3;1</i>&nbsp;&nbsp;';
        echo '<span class="w3-round-xxlarge w3-yellow w3-text-black">&nbsp;<i class="fas fa-location-arrow"></i>&nbsp;SPR Athena&nbsp;</span>&nbsp;towards <b>West</b>';
    }   
}

else if ($dep_content_sprpluto == 1 && $dest_content_sprpluto == 1) {
    if (intval(array_search($dep, $content_sprpluto)) < intval(array_search($dest, $content_sprpluto))) {
        echo '<br>&nbsp;</center></div></center><center><div class="w3-container w3-grey w3-border-bottom w3-border-black"><center><br>';
        echo '<i>&#xa3;1</i>&nbsp;&nbsp;';
        echo '<span class="w3-round-xxlarge w3-pink w3-text-black">&nbsp;<i class="fas fa-location-arrow"></i>&nbsp;SPR Pluto&nbsp;</span>&nbsp;towards <b>Arkney TS</b>';
    } else {
        echo '<br>&nbsp;</center></div></center><center><div class="w3-container w3-grey w3-border-bottom w3-border-black"><center><br>';
        echo '<i>&#xa3;1</i>&nbsp;&nbsp;';
        echo '<span class="w3-round-xxlarge w3-pink w3-text-black">&nbsp;<i class="fas fa-location-arrow"></i>&nbsp;SPR Pluto&nbsp;</span>&nbsp;towards <b>Tower</b>';
    }   
}

else if ($dep_content_srrsouthcirc == 1 && $dest_content_srrsouthcirc == 1) {
        echo '<br>&nbsp;</center></div></center><center><div class="w3-container w3-grey w3-border-bottom w3-border-black"><center><br>';
        echo '<i><a href="pricessrr.jpg" target="_blank">&#xa3;0.49</a></i>&nbsp;&nbsp;';
        echo '<span class="w3-round-xxlarge w3-aqua w3-text-black">&nbsp;<i class="fas fa-location-arrow"></i>&nbsp;SRR South Circular&nbsp;</span>&nbsp;towards <b>Circular Service</b>'; 
}

else if ($dep_content_srrsunrisecirc == 1 && $dest_content_srrsunrisecirc == 1) {
        echo '<br>&nbsp;</center></div></center><center><div class="w3-container w3-grey w3-border-bottom w3-border-black"><center><br>';
        echo '<i><a href="pricessrr.jpg" target="_blank">&#xa3;0.49</a></i>&nbsp;&nbsp;';
        echo '<span class="w3-round-xxlarge w3-orange w3-text-black">&nbsp;<i class="fas fa-location-arrow"></i>&nbsp;SRR Sunrise Circular&nbsp;</span>&nbsp;towards <b>Circular Service</b>';  
}


else if ($dep_content_srrbulletcartcirc == 1 && $dest_content_srrbulletcartcirc == 1) {
        echo '<br>&nbsp;</center></div></center><center><div class="w3-container w3-grey w3-border-bottom w3-border-black"><center><br>';
        echo '<i><a href="pricessrr.jpg" target="_blank">&#xa3;0.99</a></i>&nbsp;&nbsp;';
        echo '<span class="w3-round-xxlarge w3-blue-gray w3-text-black">&nbsp;<i class="fas fa-location-arrow"></i>&nbsp;SRR Bulletcart Circular&nbsp;</span>&nbsp;towards <b>Circular Service</b>';
}


else if ($dep_content_srrtramm == 1 && $dest_content_srrtramm == 1) {
        echo '<br>&nbsp;</center></div></center><center><div class="w3-container w3-grey w3-border-bottom w3-border-black"><center><br>';
        echo '<i><a href="pricessrr.jpg" target="_blank">&#xa3;0.24</a></i>&nbsp;&nbsp;';
        echo '<span class="w3-round-xxlarge w3-green w3-text-black">&nbsp;<i class="fas fa-location-arrow"></i>&nbsp;SRR Tram&nbsp;</span>&nbsp;towards <b>M Main Route</b>';
}


else if ($dep_content_srrtramd == 1 && $dest_content_srrtramd == 1) {
        echo '<br>&nbsp;</center></div></center><center><div class="w3-container w3-grey w3-border-bottom w3-border-black"><center><br>';
        echo '<i><a href="pricessrr.jpg" target="_blank">&#xa3;0.24</a></i>&nbsp;&nbsp;';
        echo '<span class="w3-round-xxlarge w3-green w3-text-black">&nbsp;<i class="fas fa-location-arrow"></i>&nbsp;SRR Tram&nbsp;</span>&nbsp;towards <b>D Depot Branch</b>';
}


else if ($dep_content_srrtramc == 1 && $dest_content_srrtramc == 1) {
        echo '<br>&nbsp;</center></div></center><center><div class="w3-container w3-grey w3-border-bottom w3-border-black"><center><br>';
        echo '<i><a href="pricessrr.jpg" target="_blank">&#xa3;0.24</a></i>&nbsp;&nbsp;';
        echo '<span class="w3-round-xxlarge w3-green w3-text-black">&nbsp;<i class="fas fa-location-arrow"></i>&nbsp;SRR Tram&nbsp;</span>&nbsp;towards <b>C Craft Branch</b>';
}


else if ($dep_content_srrtramt == 1 && $dest_content_srrtramt == 1) {
        echo '<br>&nbsp;</center></div></center><center><div class="w3-container w3-grey w3-border-bottom w3-border-black"><center><br>';
        echo '<i><a href="pricessrr.jpg" target="_blank">&#xa3;0.24</a></i>&nbsp;&nbsp;';
        echo '<span class="w3-round-xxlarge w3-green w3-text-black">&nbsp;<i class="fas fa-location-arrow"></i>&nbsp;SRR Tram&nbsp;</span>&nbsp;towards <b>T Tree Branch</b>';
}











# -> m3 + m31

else if ($dep == '11' && $dest_content_m3 == 1) {
        $harlontransitzone_dep = $harlontransitpricezone[$dep-1];
        $harlontransitzone_dest = $harlontransitpricezone[$dest-1];
        echo '<br>&nbsp;</center></div></center><center><div class="w3-container w3-grey w3-border-bottom w3-border-black"><center><br>';
        echo '<span class="w3-round-xxlarge w3-metro-green w3-text-black">&nbsp;<i class="fas fa-train"></i>&nbsp;C1&nbsp;</span>&nbsp;towards <b>Jutisle (Stenford Bay)</b>';
        echo '<br><i class="fas fa-exchange-alt"></i> Interchange: Sergels Square';
        if ($dest == '12' or $dest == '13' or $dest == '14' or $dest == '15') {
            echo '<br><i>&#xa3;';
            echo htprice($harlontransitzone_dep, $harlontransitzone_dest);   
            echo '</i>&nbsp;&nbsp;';
            echo '<span class="w3-round-xxlarge w3-metro-red w3-text-black">&nbsp;<i class="fas fa-subway"></i>&nbsp;M3&nbsp;</span>&nbsp;towards <b>Westlyn (Ganters Hill)</b>';
        } else {
            echo '<br><i>&#xa3;';
            echo htprice($harlontransitzone_dep, $harlontransitzone_dest);   
            echo '</i>&nbsp;&nbsp;';
            echo '<span class="w3-round-xxlarge w3-metro-red w3-text-black">&nbsp;<i class="fas fa-subway"></i>&nbsp;M3&nbsp;</span>&nbsp;towards <b>Long Island (Lighthouse Pt)</b>';
        }
}


else if ($dep == '11' && $dest_content_m31 == 1) {
        $harlontransitzone_dep = $harlontransitpricezone[$dep-1];
        $harlontransitzone_dest = $harlontransitpricezone[$dest-1];
        echo '<br>&nbsp;</center></div></center><center><div class="w3-container w3-grey w3-border-bottom w3-border-black"><center><br>';
        echo '<span class="w3-round-xxlarge w3-metro-green w3-text-black">&nbsp;<i class="fas fa-train"></i>&nbsp;C1&nbsp;</span>&nbsp;towards <b>Jutisle (Stenford Bay)</b>';
        echo '<br><i class="fas fa-exchange-alt"></i> Interchange: Sergels Square';



echo '<br><span class="w3-round-xxlarge w3-metro-red w3-text-black">&nbsp;<i class="fas fa-subway"></i>&nbsp;M3&nbsp;</span>&nbsp;towards <b>Long Island (Lighthouse Pt)</b>';
            echo '<br><i class="fas fa-exchange-alt"></i> Interchange: Duluth';
            echo '<br><i>&#xa3;';
            echo htprice($harlontransitzone_dep, $harlontransitzone_dest);   
            echo '</i>&nbsp;&nbsp;';
            echo '<span class="w3-round-xxlarge w3-metro-red w3-text-black">&nbsp;<i class="fas fa-subway"></i>&nbsp;M31&nbsp;</span>&nbsp;towards <b>Long Island (Downminster)</b>';

}










# -> c1


else if ($dep == '6' && $dest_content_c1 == 1 or $dep == '25' && $dest_content_c1 == 1) {
        $harlontransitzone_dep = $harlontransitpricezone[$dep-1];
        $harlontransitzone_dest = $harlontransitpricezone[$dest-1];
        echo '<br>&nbsp;</center></div></center><center><div class="w3-container w3-grey w3-border-bottom w3-border-black"><center><br>';
        echo '<span class="w3-round-xxlarge w3-metro-green w3-text-black">&nbsp;<i class="fas fa-subway"></i>&nbsp;M1&nbsp;</span>&nbsp;towards <b>Main Island (The Triangle)</b>';
        echo '<br><i class="fas fa-exchange-alt"></i> Interchange: Chelsham Street';
        if ($dest == '11') {
            echo '<br><i>&#xa3;';
            echo htprice($harlontransitzone_dep, $harlontransitzone_dest);   
            echo '</i>&nbsp;&nbsp;';
            echo '<span class="w3-round-xxlarge w3-metro-green w3-text-black">&nbsp;<i class="fas fa-train"></i>&nbsp;C1&nbsp;</span>&nbsp;towards <b>Westlyn (Shoretrench)</b>';
        } else {
            echo '<br><i>&#xa3;';
            echo htprice($harlontransitzone_dep, $harlontransitzone_dest);   
            echo '</i>&nbsp;&nbsp;';
            echo '<span class="w3-round-xxlarge w3-metro-green w3-text-black">&nbsp;<i class="fas fa-train"></i>&nbsp;C1&nbsp;</span>&nbsp;towards <b>Jutisle (Stenford Bay)</b>';
        }
}


else if ($dep == '20' && $dest_content_c1 == 1 or $dep == '21' && $dest_content_c1 == 1) {
        $harlontransitzone_dep = $harlontransitpricezone[$dep-1];
        $harlontransitzone_dest = $harlontransitpricezone[$dest-1];
        echo '<br>&nbsp;</center></div></center><center><div class="w3-container w3-grey w3-border-bottom w3-border-black"><center><br>';
            echo '<span class="w3-round-xxlarge w3-metro-red w3-text-black">&nbsp;<i class="fas fa-subway"></i>&nbsp;M3&nbsp;</span>&nbsp;towards <b>Westlyn (Ganters Hill)</b>';
        echo '<br><i class="fas fa-exchange-alt"></i> Interchange: National Mall';
        if ($dest == '11' or $dest == '9' or $dest == '8') {
            echo '<br><i>&#xa3;';
            echo htprice($harlontransitzone_dep, $harlontransitzone_dest);   
            echo '</i>&nbsp;&nbsp;';
            echo '<span class="w3-round-xxlarge w3-metro-green w3-text-black">&nbsp;<i class="fas fa-train"></i>&nbsp;C1&nbsp;</span>&nbsp;towards <b>Westlyn (Shoretrench)</b>';
        } else {
            echo '<br><i>&#xa3;';
            echo htprice($harlontransitzone_dep, $harlontransitzone_dest);   
            echo '</i>&nbsp;&nbsp;';
            echo '<span class="w3-round-xxlarge w3-metro-green w3-text-black">&nbsp;<i class="fas fa-train"></i>&nbsp;C1&nbsp;</span>&nbsp;towards <b>Jutisle (Stenford Bay)</b>';
        }
}

else if ($dep == '29' && $dest_content_c1 == 1 or $dep == '28' && $dest_content_c1 == 1 or $dep == '17' && $dest_content_c1 == 1) {
        $harlontransitzone_dep = $harlontransitpricezone[$dep-1];
        $harlontransitzone_dest = $harlontransitpricezone[$dest-1];
        echo '<br>&nbsp;</center></div></center><center><div class="w3-container w3-grey w3-border-bottom w3-border-black"><center><br>';
        echo '<span class="w3-round-xxlarge w3-metro-green w3-text-black">&nbsp;<i class="fas fa-subway"></i>&nbsp;M1&nbsp;</span>&nbsp;towards <b>Long Island (Lighthouse Pt)</b>';
        echo '<br><i class="fas fa-exchange-alt"></i> Interchange: Capital Station';
        if ($dest == '11' or $dest == '9' or $dest == '8') {
            echo '<br><i>&#xa3;';
            echo htprice($harlontransitzone_dep, $harlontransitzone_dest);   
            echo '</i>&nbsp;&nbsp;';
            echo '<span class="w3-round-xxlarge w3-metro-green w3-text-black">&nbsp;<i class="fas fa-train"></i>&nbsp;C1&nbsp;</span>&nbsp;towards <b>Westlyn (Shoretrench)</b>';
        } else {
            echo '<br><i>&#xa3;';
            echo htprice($harlontransitzone_dep, $harlontransitzone_dest);   
            echo '</i>&nbsp;&nbsp;';
            echo '<span class="w3-round-xxlarge w3-metro-green w3-text-black">&nbsp;<i class="fas fa-train"></i>&nbsp;C1&nbsp;</span>&nbsp;towards <b>Jutisle (Stenford Bay)</b>';
        }
}

else if ($dep == '16' && $dest_content_c1 == 1) {
        $harlontransitzone_dep = $harlontransitpricezone[$dep-1];
        $harlontransitzone_dest = $harlontransitpricezone[$dest-1];
        echo '<br>&nbsp;</center></div></center><center><div class="w3-container w3-grey w3-border-bottom w3-border-black"><center><br>';
        echo '<span class="w3-round-xxlarge w3-metro-red w3-text-black">&nbsp;<i class="fas fa-subway"></i>&nbsp;M3&nbsp;</span>&nbsp;towards <b>Long Island (Lighthouse Pt)</b>';
        echo '<br><i class="fas fa-exchange-alt"></i> Interchange: Capital Station';
        if ($dest == '11' or $dest == '9' or $dest == '8') {
            echo '<br><i>&#xa3;';
            echo htprice($harlontransitzone_dep, $harlontransitzone_dest);   
            echo '</i>&nbsp;&nbsp;';
            echo '<span class="w3-round-xxlarge w3-metro-green w3-text-black">&nbsp;<i class="fas fa-train"></i>&nbsp;C1&nbsp;</span>&nbsp;towards <b>Westlyn (Shoretrench)</b>';
        } else {
            echo '<br><i>&#xa3;';
            echo htprice($harlontransitzone_dep, $harlontransitzone_dest);   
            echo '</i>&nbsp;&nbsp;';
            echo '<span class="w3-round-xxlarge w3-metro-green w3-text-black">&nbsp;<i class="fas fa-train"></i>&nbsp;C1&nbsp;</span>&nbsp;towards <b>Jutisle (Stenford Bay)</b>';
        }
}

else if ($dep == '12' && $dest_content_c1 == 1 or $dep == '13' && $dest_content_c1 == 1 or $dep == '14' && $dest_content_c1 == 1 or $dep == '15' && $dest_content_c1 == 1) {
        $harlontransitzone_dep = $harlontransitpricezone[$dep-1];
        $harlontransitzone_dest = $harlontransitpricezone[$dest-1];
        echo '<br>&nbsp;</center></div></center><center><div class="w3-container w3-grey w3-border-bottom w3-border-black"><center><br>';
        echo '<span class="w3-round-xxlarge w3-metro-red w3-text-black">&nbsp;<i class="fas fa-subway"></i>&nbsp;M3&nbsp;</span>&nbsp;towards <b>Long Island (Lighthouse Pt)</b>';
        echo '<br><i class="fas fa-exchange-alt"></i> Interchange: Sergels Square';
        if ($dest == '11') {
            echo '<br><i>&#xa3;';
            echo htprice($harlontransitzone_dep, $harlontransitzone_dest);   
            echo '</i>&nbsp;&nbsp;';
            echo '<span class="w3-round-xxlarge w3-metro-green w3-text-black">&nbsp;<i class="fas fa-train"></i>&nbsp;C1&nbsp;</span>&nbsp;towards <b>Westlyn (Shoretrench)</b>';
        } else {
            echo '<br><i>&#xa3;';
            echo htprice($harlontransitzone_dep, $harlontransitzone_dest);   
            echo '</i>&nbsp;&nbsp;';
            echo '<span class="w3-round-xxlarge w3-metro-green w3-text-black">&nbsp;<i class="fas fa-train"></i>&nbsp;C1&nbsp;</span>&nbsp;towards <b>Jutisle (Stenford Bay)</b>';
        }
}


else if ($dep == '48' && $dest_content_c1 == 1) {
        $harlontransitzone_dep = $harlontransitpricezone[$dep-1];
        $harlontransitzone_dest = $harlontransitpricezone[$dest-1];
        echo '<br>&nbsp;</center></div></center><center><div class="w3-container w3-grey w3-border-bottom w3-border-black"><center><br>';
        echo '<span class="w3-round-xxlarge w3-metro-red w3-text-black">&nbsp;<i class="fas fa-subway"></i>&nbsp;M3&nbsp;</span>&nbsp;towards <b>Westlyn (Ganters Hill)</b>';
        echo '<br><i class="fas fa-exchange-alt"></i> Interchange: Sergels Square';
        if ($dest == '11') {
            echo '<br><i>&#xa3;';
            echo htprice($harlontransitzone_dep, $harlontransitzone_dest);   
            echo '</i>&nbsp;&nbsp;';
            echo '<span class="w3-round-xxlarge w3-metro-green w3-text-black">&nbsp;<i class="fas fa-train"></i>&nbsp;C1&nbsp;</span>&nbsp;towards <b>Westlyn (Shoretrench)</b>';
        } else {
            echo '<br><i>&#xa3;';
            echo htprice($harlontransitzone_dep, $harlontransitzone_dest);   
            echo '</i>&nbsp;&nbsp;';
            echo '<span class="w3-round-xxlarge w3-metro-green w3-text-black">&nbsp;<i class="fas fa-train"></i>&nbsp;C1&nbsp;</span>&nbsp;towards <b>Jutisle (Stenford Bay)</b>';
        }
}


else if ($dep == '26' && $dest_content_c1 == 1 or $dep == '19' && $dest_content_c1 == 1 or $dep == '27' && $dest_content_c1 == 1) {
        $harlontransitzone_dep = $harlontransitpricezone[$dep-1];
        $harlontransitzone_dest = $harlontransitpricezone[$dest-1];
        echo '<br>&nbsp;</center></div></center><center><div class="w3-container w3-grey w3-border-bottom w3-border-black"><center><br>';
        echo '<span class="w3-round-xxlarge w3-metro-green w3-text-black">&nbsp;<i class="fas fa-subway"></i>&nbsp;M11&nbsp;</span>&nbsp;towards <b>Main Island (Two Bridges)</b>';
        echo '<br><i class="fas fa-exchange-alt"></i> Interchange: Chelsham Street';
        if ($dest == '11' or $dest == '9' or $dest == '8') {
            echo '<br><i>&#xa3;';
            echo htprice($harlontransitzone_dep, $harlontransitzone_dest);   
            echo '</i>&nbsp;&nbsp;';
            echo '<span class="w3-round-xxlarge w3-metro-green w3-text-black">&nbsp;<i class="fas fa-train"></i>&nbsp;C1&nbsp;</span>&nbsp;towards <b>Westlyn (Shoretrench)</b>';
        } else {
            echo '<br><i>&#xa3;';
            echo htprice($harlontransitzone_dep, $harlontransitzone_dest);   
            echo '</i>&nbsp;&nbsp;';
            echo '<span class="w3-round-xxlarge w3-metro-green w3-text-black">&nbsp;<i class="fas fa-train"></i>&nbsp;C1&nbsp;</span>&nbsp;towards <b>Jutisle (Stenford Bay)</b>';
        }
}


else if ($dep == '33' && $dest_content_c1 == 1 or $dep == '34' && $dest_content_c1 == 1 or $dep == '35' && $dest_content_c1 == 1) {
        $harlontransitzone_dep = $harlontransitpricezone[$dep-1];
        $harlontransitzone_dest = $harlontransitpricezone[$dest-1];
        echo '<br>&nbsp;</center></div></center><center><div class="w3-container w3-grey w3-border-bottom w3-border-black"><center><br>';
        echo '<span class="w3-round-xxlarge w3-metro-yellow w3-text-black">&nbsp;<i class="fas fa-subway"></i>&nbsp;M2&nbsp;</span>&nbsp;towards <b>Southside (Southpoint)</b>';
        echo '<br><i class="fas fa-exchange-alt"></i> Interchange: Harlonian Plaza<br>';
        echo '<span class="w3-round-xxlarge w3-metro-red w3-text-black">&nbsp;<i class="fas fa-subway"></i>&nbsp;M3&nbsp;</span>&nbsp;towards <b>Long Island (Lighthouse Pt)</b>';
        echo '<br><i class="fas fa-exchange-alt"></i> Interchange: Capital Station';
        if ($dest == '11' or $dest == '9' or $dest == '8') {
            echo '<br><i>&#xa3;';
            echo htprice($harlontransitzone_dep, $harlontransitzone_dest);   
            echo '</i>&nbsp;&nbsp;';
            echo '<span class="w3-round-xxlarge w3-metro-green w3-text-black">&nbsp;<i class="fas fa-train"></i>&nbsp;C1&nbsp;</span>&nbsp;towards <b>Westlyn (Shoretrench)</b>';
        } else {
            echo '<br><i>&#xa3;';
            echo htprice($harlontransitzone_dep, $harlontransitzone_dest);   
            echo '</i>&nbsp;&nbsp;';
            echo '<span class="w3-round-xxlarge w3-metro-green w3-text-black">&nbsp;<i class="fas fa-train"></i>&nbsp;C1&nbsp;</span>&nbsp;towards <b>Jutisle (Stenford Bay)</b>';
        }
}


else if ($dep == '30' && $dest_content_c1 == 1 or $dep == '31' && $dest_content_c1 == 1 or $dep == '32' && $dest_content_c1 == 1) {
        $harlontransitzone_dep = $harlontransitpricezone[$dep-1];
        $harlontransitzone_dest = $harlontransitpricezone[$dest-1];
        echo '<br>&nbsp;</center></div></center><center><div class="w3-container w3-grey w3-border-bottom w3-border-black"><center><br>';
        echo '<span class="w3-round-xxlarge w3-metro-yellow w3-text-black">&nbsp;<i class="fas fa-subway"></i>&nbsp;M2&nbsp;</span>&nbsp;towards <b>Main Island (Northshore)</b>';
        echo '<br><i class="fas fa-exchange-alt"></i> Interchange: Harlonian Plaza<br>';
        echo '<span class="w3-round-xxlarge w3-metro-red w3-text-black">&nbsp;<i class="fas fa-subway"></i>&nbsp;M3&nbsp;</span>&nbsp;towards <b>Long Island (Lighthouse Pt)</b>';
        echo '<br><i class="fas fa-exchange-alt"></i> Interchange: Capital Station';
        if ($dest == '11' or $dest == '9' or $dest == '8') {
            echo '<br><i>&#xa3;';
            echo htprice($harlontransitzone_dep, $harlontransitzone_dest);   
            echo '</i>&nbsp;&nbsp;';
            echo '<span class="w3-round-xxlarge w3-metro-green w3-text-black">&nbsp;<i class="fas fa-train"></i>&nbsp;C1&nbsp;</span>&nbsp;towards <b>Westlyn (Shoretrench)</b>';
        } else {
            echo '<br><i>&#xa3;';
            echo htprice($harlontransitzone_dep, $harlontransitzone_dest);   
            echo '</i>&nbsp;&nbsp;';
            echo '<span class="w3-round-xxlarge w3-metro-green w3-text-black">&nbsp;<i class="fas fa-train"></i>&nbsp;C1&nbsp;</span>&nbsp;towards <b>Jutisle (Stenford Bay)</b>';
        }
}


else if ($dep == '22' && $dest_content_c1 == 1 or $dep == '23' && $dest_content_c1 == 1 or $dep == '24' && $dest_content_c1 == 1) {
        $harlontransitzone_dep = $harlontransitpricezone[$dep-1];
        $harlontransitzone_dest = $harlontransitpricezone[$dest-1];
        echo '<br>&nbsp;</center></div></center><center><div class="w3-container w3-grey w3-border-bottom w3-border-black"><center><br>';
        echo '<span class="w3-round-xxlarge w3-metro-red w3-text-black">&nbsp;<i class="fas fa-subway"></i>&nbsp;M31&nbsp;</span>&nbsp;towards <b>Long Island (Duluth)</b>';
        echo '<br><i class="fas fa-exchange-alt"></i> Interchange: Duluth<br>';
        echo '<span class="w3-round-xxlarge w3-metro-red w3-text-black">&nbsp;<i class="fas fa-subway"></i>&nbsp;M3&nbsp;</span>&nbsp;towards <b>Westlyn (Ganters Hill)</b>';
        echo '<br><i class="fas fa-exchange-alt"></i> Interchange: National Mall';
        if ($dest == '11' or $dest == '9' or $dest == '8') {
            echo '<br><i>&#xa3;';
            echo htprice($harlontransitzone_dep, $harlontransitzone_dest);   
            echo '</i>&nbsp;&nbsp;';
            echo '<span class="w3-round-xxlarge w3-metro-green w3-text-black">&nbsp;<i class="fas fa-train"></i>&nbsp;C1&nbsp;</span>&nbsp;towards <b>Westlyn (Shoretrench)</b>';
        } else {
            echo '<br><i>&#xa3;';
            echo htprice($harlontransitzone_dep, $harlontransitzone_dest);   
            echo '</i>&nbsp;&nbsp;';
            echo '<span class="w3-round-xxlarge w3-metro-green w3-text-black">&nbsp;<i class="fas fa-train"></i>&nbsp;C1&nbsp;</span>&nbsp;towards <b>Jutisle (Stenford Bay)</b>';
        }
}

else if ($dep_content_bus81 == 1 && $dest_content_c1 == 1) {
        $harlontransitzone_dep = '1';
        $harlontransitzone_dest = $harlontransitpricezone[$dest-1];
        echo '<br>&nbsp;</center></div></center><center><div class="w3-container w3-grey w3-border-bottom w3-border-black"><center><br>';
        echo '<i>&#xa3;4.5</i>&nbsp;&nbsp;';
        echo '<span class="w3-round-xxlarge w3-white w3-text-black">&nbsp;<i class="fas fa-bus-alt"></i>&nbsp;81&nbsp;</span>&nbsp;towards <b>Harlonian Plaza</b>';
        echo '<br><i class="fas fa-exchange-alt"></i> Interchange: Capital Station';
        if ($dest == '11' or $dest == '9' or $dest == '8') {
            echo '<br><i>&#xa3;';
            echo htprice($harlontransitzone_dep, $harlontransitzone_dest);   
            echo '</i>&nbsp;&nbsp;';
            echo '<span class="w3-round-xxlarge w3-metro-green w3-text-black">&nbsp;<i class="fas fa-train"></i>&nbsp;C1&nbsp;</span>&nbsp;towards <b>Westlyn (Shoretrench)</b>';
        } else {
            echo '<br><i>&#xa3;';
            echo htprice($harlontransitzone_dep, $harlontransitzone_dest);   
            echo '</i>&nbsp;&nbsp;';
            echo '<span class="w3-round-xxlarge w3-metro-green w3-text-black">&nbsp;<i class="fas fa-train"></i>&nbsp;C1&nbsp;</span>&nbsp;towards <b>Jutisle (Stenford Bay)</b>';
        }
}

else if ($dep_content_bus51 == 1 && $dest_content_c1 == 1) {
        $harlontransitzone_dep = '3E';
        $harlontransitzone_dest = $harlontransitpricezone[$dest-1];
        echo '<br>&nbsp;</center></div></center><center><div class="w3-container w3-grey w3-border-bottom w3-border-black"><center><br>';
        echo '<i>&#xa3;4.5</i>&nbsp;&nbsp;';
        echo '<span class="w3-round-xxlarge w3-white w3-text-black">&nbsp;<i class="fas fa-bus-alt"></i>&nbsp;51&nbsp;</span>&nbsp;towards <b>Oxville</b>';
        echo '<br><i class="fas fa-exchange-alt"></i> Interchange: Oxville';

            echo '<br><i>&#xa3;';
            echo htprice($harlontransitzone_dep, $harlontransitzone_dest);   
            echo '</i>&nbsp;&nbsp;';
            echo '<span class="w3-round-xxlarge w3-metro-green w3-text-black">&nbsp;<i class="fas fa-train"></i>&nbsp;C1&nbsp;</span>&nbsp;towards <b>Westlyn (Shoretrench)</b>';

}

else if ($dep == 38 && $dest_content_c1 == 1) {
        $harlontransitzone_dep = '1';
        $harlontransitzone_dest = $harlontransitpricezone[$dest-1];
        echo '<br>&nbsp;</center></div></center><center><div class="w3-container w3-grey w3-border-bottom w3-border-black"><center><br>';
        echo '<i>&#xa3;10</i>&nbsp;&nbsp;';
        echo '<span class="w3-round-xxlarge w3-white w3-text-black">&nbsp;<i class="fas fa-bus-alt"></i>&nbsp;177&nbsp;</span>&nbsp;towards <b>Harlon Capital #EXPRESS SERVICE#</b>';
        echo '<br><i class="fas fa-exchange-alt"></i> Interchange: Capital Station';
        if ($dest == '11' or $dest == '9' or $dest == '8') {
            echo '<br><i>&#xa3;';
            echo htprice($harlontransitzone_dep, $harlontransitzone_dest);   
            echo '</i>&nbsp;&nbsp;';
            echo '<span class="w3-round-xxlarge w3-metro-green w3-text-black">&nbsp;<i class="fas fa-train"></i>&nbsp;C1&nbsp;</span>&nbsp;towards <b>Westlyn (Shoretrench)</b>';
        } else {
            echo '<br><i>&#xa3;';
            echo htprice($harlontransitzone_dep, $harlontransitzone_dest);   
            echo '</i>&nbsp;&nbsp;';
            echo '<span class="w3-round-xxlarge w3-metro-green w3-text-black">&nbsp;<i class="fas fa-train"></i>&nbsp;C1&nbsp;</span>&nbsp;towards <b>Jutisle (Stenford Bay)</b>';
        }
}


















if ($dep_content_ferry == 1 && $dest_content_ferry == 1) {
    if (intval(array_search($dep, $content_ferry)) < intval(array_search($dest, $content_ferry))) {
        echo '<br>&nbsp;</center></div></center><center><div class="w3-container w3-grey w3-border-bottom w3-border-black"><center><br><i>&#xa3;';
        echo '50';
        echo '</i>&nbsp;&nbsp;';
        echo '<span class="w3-round-xxlarge w3-metro-red w3-text-black">&nbsp;<i class="fas fa-ship"></i>&nbsp;Ferry&nbsp;</span>&nbsp;towards <b>Stenford Bay - Downminster - Old Town - Seaporte</b>';
    } else {
        echo '<br>&nbsp;</center></div></center><center><div class="w3-container w3-grey w3-border-bottom w3-border-black"><center><br><i>&#xa3;';
        echo '50';
        echo '</i>&nbsp;&nbsp;';
        echo '<span class="w3-round-xxlarge w3-metro-red w3-text-black">&nbsp;<i class="fas fa-ship"></i>&nbsp;Ferry&nbsp;</span>&nbsp;towards <b>Seaporte - Old Town - Downminster - Stenford Bay</b>';
    }   
    echo '<br><i>Please note: Single-trip tickets are valid tickets and thus work with the turnstiles so you can legally ride the ferry for 10 pounds</i>';
}

if ($dep <= "50" and $dest <= "50" and $dep != "37" and $dest != "37" and $dep != "38" and $dest != "38") {
$pricetaxijcskepp = 4+(ceil(((((abs($stationcoordx[$dep-1] - $stationcoordx[$dest-1]) + abs($stationcoordy[$dep-1] - $stationcoordy[$dest-1])) + (sqrt(pow(abs($stationcoordx[$dep-1] - $stationcoordx[$dest-1]),2)+pow(abs($stationcoordy[$dep-1] - $stationcoordy[$dest-1]),2))))/2)-500)/135))*0.5;

if ($pricetaxijcskepp<4) {
    $pricetaxijcskepp = 4;
}

if ($pricetaxijcskepp>8) {
    $pricetaxijcskepp = 8 + 4 + ((ceil(((((abs($stationcoordx[$dep-1] - $stationcoordx[$dest-1]) + abs($stationcoordy[$dep-1] - $stationcoordy[$dest-1])) + (sqrt(pow(abs($stationcoordx[$dep-1] - $stationcoordx[$dest-1]),2)+pow(abs($stationcoordy[$dep-1] - $stationcoordy[$dest-1]),2))))/2)-500-(135*(8/0.5)))/135))*0.2);
}

echo '<br>&nbsp;</center></div></center><center><div class="w3-container w3-grey w3-border-bottom w3-border-black"><center><br>';
echo '<i><a href="pricestaxijcskepp.txt" target="_blank">&#xa3;';
echo $pricetaxijcskepp;
echo '*</a></i>&nbsp;&nbsp;<span class="w3-round-xxlarge w3-metro-yellow w3-text-black">&nbsp;<i class="fas fa-taxi"></i>&nbsp;JC and Skepp&#39;s Taxi&nbsp;</span>&nbsp;towards <b>Direct Transit</b>';


echo '<br><br><span style="font-size:10px">* Approximate Fare</span>';

# echo '<br><br><br>DEV: Dist1: ';
# echo abs(($stationcoordx[$dep-1] - $stationcoordx[$dest-1]) + abs($stationcoordy[$dep-1] - $stationcoordy[$dest-1]));
# echo ' Dist2: ';
# echo sqrt(pow(abs($stationcoordx[$dep-1] - $stationcoordx[$dest-1]),2)+pow(abs($stationcoordy[$dep-1] - $stationcoordy[$dest-1]),2));
}




}


?>
<br>&nbsp;</center></div><br>
<a href="/"><button class="w3-button w3-grey w3-round-xxlarge">Calculate new route</button></a>

</center>

<br><br><br>
<center><div class="w3-white" style="width:75%"><br><br><span style="font-size:40px">Here could be your ad!</span><br>Contact <b>Quantenoffenlegung#5438</b> now<br><br>&nbsp;</div></center>

<br>
<center><div class="w3-black" style="width:75%"><br>Join the Harlon Transit Planner Discord: <a href="https://discord.gg/nFHhuPXEET" target="_blank">Join now!</a><br>&nbsp;</div></center>

</div>



</body></html>
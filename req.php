<?php
error_reporting(0);

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

$depCode = 'AG' . $dep;
$destCode = 'AG' . $dest;

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
    "🚉 KNU Council",
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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KTB Konno Trip Planner</title>
  <link rel="icon" type="image/x-icon" href="ktbkonno.ico">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://kit.fontawesome.com/177df10e43.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/notifique/dist/notifications.css">
    <script src="/notifique/dist/notifications.js"></script>

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

        body {
            background-color:#6c6c6c;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            min-height: 100%;
        }

        @import url('https://fonts.googleapis.com/css?family=Montserrat:600&display=swap');

        .center {
            margin: 0;
            padding: 0;
            display: flex;
            height: 100vh;
            align-items: center;
            justify-content: center;
        }

        @font-face {
            font-family: 'FCround';
            src: url('FCSubjectRoundedNoncml-Reg.woff2') format('woff2'),
                url('FCSubjectRoundedNoncml-Reg.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }
    </style>
</head>
<body onload="startTimer()" style="width:100%;height:100%;background-image: url('<?php echo $_POST['bgimg']; ?>');" class="w3-text-white" id="img">
    <div class="center">
        <div class="w3-round-xlarge" style="background-color: rgba(0, 0, 0, 0.7);">
            <div class="w3-container">
                <h2><span style="font-family: FCround;color: aquamarine; font-size: 25px;">KTB Konno Trip Planner</span></h2>
                <h4><?php echo $stationList[$dep-1]; ?><br><?php echo $stationList[$dest-1]; ?></h4>
                <div class="w3-panel w3-border-bottom"></div>
                <?php if ($dep != $dest): ?>
                    <div class="w3-container w3-row" style="width:100%">
                        <div class="w3-col w3-right w3-right-align" style="width:80px">&nbsp;</div>
                        <div class="w3-rest">
        
                            <?php /* Include your public transport details here */ ?>
                        </div>
                    </div>
                <?php else: ?>
                    <center>It's just right there.</center>
                <?php endif; ?>
                <br>
                <span><center><button class="w3-button w3-hover-black w3-round-xlarge" onclick="window.location.href='/';">Find another route</button></center></span>
            </div>
            <br>
        </div>
    </div>
    <div class="version-info" style="position: absolute; bottom: 10px; left: 10px; color: black;">
        System Version: Dev 1.0.0 <br>
        ® 2024 Konno Transportation Group Public Co., Ltd. (KTB Konno)
    </div>

    <div class="system-info" style="position: absolute; bottom: 10px; right: 10px; color: black;">
        System based on Skepia's Witaland Trip Planner <br>
        <span style="float: right;">Subject to change</span>
    </div>
</body>
</html>

<?php error_reporting(0); ?>
<?php
header("Content-Type: image/png");


$stationcoordx = array('1214','587','1140','149','-5','226','-241','-720','-985','-1279','-1647','-1995','-1766','-1517','-1467','-615','-376','-90','421','869','958','951','1124','1144','557','619','243','-740','-892','-646','-578','-550','-639','-392','-134','483','-5302','-3758','-341','-324','-422','-377','-49','132','168','267','447','-983','555','782');
$stationcoordy = array('-1597','-1053','-1250','-517','-299','-103','-258','-302','-309','-236','-84','-493','-660','-533','-175','-159','-95','-523','-481','-272','-34','-514','-649','-1045','-102','-599','-271','-276','-541','471','315','159','-627','-645','-679','637','102','-2630','134','273','442','667','667','657','889','1061','1385','-74','1477','-1275');

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













$jsdata = $_GET['data'];
$way_stationlist = array();
$way_color_r = array();
$way_color_g = array();
$way_color_b = array();
$jsget = "";


for ($x = 0; $x <= strlen($jsdata); $x++) {
    $for_substr_jsdata = substr($jsdata,$x,1);

  if ($for_substr_jsdata != "-"){
        $jsget = $jsget.$for_substr_jsdata;
  } elseif (preg_match('/[AB]/i', $for_substr_jsdata)) {
      array_push($way_color_r, 6);
      array_push($way_color_g, 178);
      array_push($way_color_b, 14);
  } elseif (preg_match('/[CD]/i', $for_substr_jsdata)) {   
      array_push($way_color_r, 5);
      array_push($way_color_g, 111);
      array_push($way_color_b, 13);
  } elseif (preg_match('/[E]/i', $for_substr_jsdata)) {
      array_push($way_color_r, 236);
      array_push($way_color_g, 226);
      array_push($way_color_b, 0);
  } elseif (preg_match('/[FG]/i', $for_substr_jsdata)) {
      array_push($way_color_r, 197);
      array_push($way_color_g, 0);
      array_push($way_color_b, 17);
  } elseif (preg_match('/[HIJ]/i', $for_substr_jsdata)) {
      array_push($way_color_r, 57);
      array_push($way_color_g, 123);
      array_push($way_color_b, 179);
  } elseif (preg_match('/[K]/i', $for_substr_jsdata)) {
      array_push($way_color_r, 0);
      array_push($way_color_g, 0);
      array_push($way_color_b, 0);
  } else {
        array_push($way_stationlist, (int)$jsget-1);
        $jsget = "";
  }
}




  $imgen_way_stationlist_xmax = min($stationcoordx);
  $imgen_way_stationlist_xmin = max($stationcoordx);
  $imgen_way_stationlist_ymax = min($stationcoordy);
  $imgen_way_stationlist_ymin = max($stationcoordy);

	foreach ($way_stationlist as $foreach_value) {
	  if ((int)$stationcoordx[(int)$foreach_value]>$imgen_way_stationlist_xmax){
		$imgen_way_stationlist_xmax = (int)$stationcoordx[(int)$foreach_value];
		}
	  if ((int)$stationcoordy[(int)$foreach_value]>$imgen_way_stationlist_ymax){
		$imgen_way_stationlist_ymax = (int)$stationcoordy[(int)$foreach_value];
		}
	  if ((int)$stationcoordx[(int)$foreach_value]<$imgen_way_stationlist_xmin){
		$imgen_way_stationlist_xmin = (int)$stationcoordx[(int)$foreach_value];
		}
	  if ((int)$stationcoordy[(int)$foreach_value]<$imgen_way_stationlist_ymin){
		$imgen_way_stationlist_ymin = (int)$stationcoordy[(int)$foreach_value];
		}
	}


  $imgen_im=imagecreate(($imgen_way_stationlist_xmax-$imgen_way_stationlist_xmin+400)*2,($imgen_way_stationlist_ymax-$imgen_way_stationlist_ymin+400)*2);






# - - IMGEN - -

function imagelinethick($image, $x1, $y1, $x2, $y2, $color, $thick = 1)
{
    /* this way it works well only for orthogonal lines
    imagesetthickness($image, $thick);
    return imageline($image, $x1, $y1, $x2, $y2, $color);
    */
    if ($thick == 1) {
        return imageline($image, $x1, $y1, $x2, $y2, $color);
    }
    $t = $thick / 2 - 0.5;
    if ($x1 == $x2 || $y1 == $y2) {
        return imagefilledrectangle($image, round(min($x1, $x2) - $t), round(min($y1, $y2) - $t), round(max($x1, $x2) + $t), round(max($y1, $y2) + $t), $color);
    }
    $k = ($y2 - $y1) / ($x2 - $x1); //y = kx + q
    $a = $t / sqrt(1 + pow($k, 2));
    $points = array(
        round($x1 - (1+$k)*$a), round($y1 + (1-$k)*$a),
        round($x1 - (1-$k)*$a), round($y1 - (1+$k)*$a),
        round($x2 + (1+$k)*$a), round($y2 - (1-$k)*$a),
        round($x2 + (1-$k)*$a), round($y2 + (1+$k)*$a),
    );
    imagefilledpolygon($image, $points, 4, $color);
    return imagepolygon($image, $points, 4, $color);
}

  $imgen_rand=rand();
  $imgen_im_save_hash = md5(md5($imgen_rand));


  imagecolorallocate($imgen_im,255,255,255);

$foreach_x2 = 99999999999999999999999;
$foreach_countup = -1;

	foreach ($way_stationlist as $foreach_value) {


# $imgen_way_stationlist_xmin+(int)$stationcoordx[(int)$foreach_value]+200

$foreach_x1 = -$imgen_way_stationlist_xmin+(int)$stationcoordx[(int)$foreach_value]+200;
$foreach_y1 = -$imgen_way_stationlist_ymin+(int)$stationcoordy[(int)$foreach_value]+200;

if ($foreach_x2 != 99999999999999999999999) {
    $foreach_countup++;

  		imagelinethick($imgen_im, $foreach_x1*2, $foreach_y1*2, $foreach_x2*2, $foreach_y2*2,imagecolorallocate($imgen_im,$way_color_r[$foreach_countup],$way_color_g[$foreach_countup],$way_color_b[$foreach_countup]), ($imgen_way_stationlist_xmax-$imgen_way_stationlist_xmin+400)/400);

		# imagestring(GdImage $image,GdFont|int $font,int $x,int $y,string $string,int $color)
		imagestring($imgen_im,4,$foreach_x2*2,$foreach_y2*2,$namedata[$foreach_last_value],imagecolorallocate($imgen_im,0,0,0));
}

$foreach_x2 = $foreach_x1;
$foreach_y2 = $foreach_y1;

$foreach_last_value = $foreach_value;

	}

imagestring($imgen_im,4,$foreach_x2*2,$foreach_y2*2,$namedata[$foreach_last_value],imagecolorallocate($imgen_im,0,0,0));








  imagepng($imgen_im);
  imagedestroy($imgen_im);

?>
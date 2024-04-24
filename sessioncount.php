<?php error_reporting(0); ?>
<?php
$month = date('m');

session_start();
$counter_name = "_VAR_sessions.txt";
$sessionhist_name = "_VAR_sessionhist.txt";
$sessionmonth_name = "_VAR_sessionmonth.txt";

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

$g = fopen($sessionhist_name,"r");
$sessionhistVal = fread($g, filesize($sessionhist_name));
fclose($g);

$h = fopen($sessionmonth_name,"r");
$sessionmonthVal = fread($h, filesize($sessionmonth_name));
fclose($h);

// Has visitor been counted in this session?
// If not, increase counter value by one
if(!isset($_SESSION['hasVisited'])){
      if($sessionmonthVal!=(string)$month){
        $h = fopen($sessionmonth_name, "w");
        fwrite($h, (string)$month);
        fclose($h);

        $g = fopen($sessionhist_name, "w");
        fwrite($g, $sessionhistVal."<br><br>Month:&nbsp;".$sessionmonthVal."<br>Sessions:&nbsp;".$counterVal);
        fclose($g);

        $counterVal = 0;
      }


            $_SESSION['hasVisited']="yes";
            $counterVal++;
            $f = fopen($counter_name, "w");
            fwrite($f, $counterVal);
            fclose($f);

}
?>
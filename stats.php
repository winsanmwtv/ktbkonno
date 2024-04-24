<?php error_reporting(0); ?>
<head><link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"><title>HTP Stats</title></head>
<body class="w3-container"><br>
<?php
$counter_name = "_VAR_sessions.txt";
$sessionhist_name = "_VAR_sessionhist.txt";
$sessionmonth_name = "_VAR_sessionmonth.txt";

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

echo "Count of Current Month (".$sessionmonthVal."):&nbsp;".$counterVal."<br><br><b>History:</b><br>".$sessionhistVal;
?>
<br><br><br>>>Salary: 2800HLP + 2HLP/Session
</body>
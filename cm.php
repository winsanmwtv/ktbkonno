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


<script>
  $(document).ready(function () {
      $('select').selectize({
          sortField: 'text'
      });
  });
</script>
</head>



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



<?php

$dep = $_GET['a'];
$dest = $_GET['b'];
$bgimg = $_GET['c'];
$fromsite = $_GET['d'];

echo '<body style="background-image: url('."'".$bgimg."'".');" class="w3-text-white" id="img">';


if ($fromsite == "1") {
    
    echo '<form id="myForm" action="reqtaxi.php" method="post">';

} elseif ($fromsite == "2") {
    
    echo '<form id="myForm" action="req.php" method="post">';

} else {

    header('Location: /');

}

    echo '<input type="hidden" name="select-dep" value="'.$dep.'">';
    echo '<input type="hidden" name="select-dest" value="'.$dest.'">';
    echo '<input type="hidden" name="bgimg" value="'.$bgimg.'">';
    echo '<input type="hidden" name="cm" value="1">';
?>

</form>

<?php


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


<div class="w3-display-bottomright"><?php echo "$counterVal trips have been calculated so far!"; ?></div>


<div class="w3-display-topright"><span style="font-size:10px">&nbsp;</span><div class="w3-container"><div class="w3-round-xxlarge w3-hover-indigo" ><a><img src="share.png" height="30px"></a></div></div></div>





</body>
</html>
<script type="text/javascript">
    document.getElementById('myForm').submit();
</script>

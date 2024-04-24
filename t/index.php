<?php error_reporting(0); ?>
<?php

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



//v1
if ($_GET['a']!=null) {
    $a = $_GET['a'];
} else {
    $a = 0;
}

if ($_GET['b']!=null) {
    $b = $_GET['b'];
} else {
    $b = 0;
}



//v2
if ($_GET['c']!=null) {
    $c = sprintf("%08d", (int)to10($_GET['c']));
    $b = (int)substr($c, -4, 4);
    $a = (int)substr($c, -8, 4);
}



if ($a!=0 && $b!=0){
    echo '<form id="myForm" action="../req.php" method="post">';
} else {
    echo '<form id="myForm" action="../bgimg-gen.php" method="post">';
}
        

        echo '<input type="hidden" name="select-dep" value="'.$a.'">';
        echo '<input type="hidden" name="select-dest" value="'.$b.'">';

        //Background IMG
        include "bgimg-gen.php";
?>
</form>
<script type="text/javascript">
    document.getElementById('myForm').submit();
</script>
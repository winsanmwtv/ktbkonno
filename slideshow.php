<?php error_reporting(0); ?>
<style>


</style>

<html>
<title>
  Hello world.
</title>

<body onload="startTimer()" id="img" >
</body>
</html>

<script>
var images = ['index-bg.png',
  'index-bg1.png'
];

var img = document.getElementById("img");

function displayImage(x) {
  img.style.backgroundImage = "url(" + images[x] + ")";
}
function startTimer() {
  var x = 0;
  displayImage(x);
  setInterval(function() {
    x = x + 1 >= images.length ? 0 : x + 1;
    displayImage(x);
  }, 3000);
}
</script>
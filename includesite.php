<?php error_reporting(0); ?>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/177df10e43.js" crossorigin="anonymous"></script>

<script>
  $(document).ready(function () {
      $('select').selectize({
          sortField: 'text'
      });
  });
</script>


<style>

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
<center>
 <form class="w3-container" method="post" action="https://harlontransitplanner.muffinbarde.rf.gd/req.php" style="max-width:1200px" target="_blank">

<div class="w3-half">
<select id="select-dep" name="select-dep" placeholder="Pick a station..." required>
    <option value="">Select a station...</option>
<!-- COMMUTER -->
    <option value="1"> 🚍 Stenford Bay</option>
    <option value="2"> 🚍 Oxville</option>
    <option value="3"> 🚍 Upminster</option>
    <option value="4"> 🚍 National Mall</option>
    <option value="5"> 🚍 Chelsham Street</option>
    <option value="6"> 🚍 Eastside</option>
    <option value="7"> 🚍 Capital Station</option>
    <option value="8"> 🚍 Faybury</option>
    <option value="9"> 🚍 Tower Quarters</option>
    <option value="10"> 🚍 Sergels Square</option>
    <option value="11"> 🚍 Shoretrench</option>

<!-- RED LINE -->
    <option value="12"> 🚍 Ganters Hill</option>
    <option value="13"> 🚍 South Street</option>
    <option value="14"> 🚍 Hibbing Gardens</option>
    <option value="15"> 🚍 Fra Mauro Street</option>
    <option value="48"> 🚍 Berry Isle</option>
    <option value="16"> 🚍 Harlonian Plaza</option>
    <option value="17"> 🚍 North Riverbank Street</option>
    <option value="18"> 🚍 Victory Column</option>
    <option value="19"> 🚍 Monument</option>
    <option value="20"> 🚍 Duluth</option>
    <option value="21"> 🚍 Lighthouse Point</option>
    <option value="22"> 🚍 Shrewsberry</option>
    <option value="23"> 🚍 Long Island Airfield</option>
    <option value="24"> 🚍 Downminster</option>

<!-- DARK GREEN LINE -->
    <option value="25"> 🚍 Old Town</option>
    <option value="26"> 🚍 Wixley Beach</option>
    <option value="27"> 🚍 Vanderpool Street</option>
    <option value="28"> 🚍 Two Bridges</option>
    <option value="29"> 🚍 The Triangle</option>

<!-- YELLOW LINE -->
    <option value="30"> 🚍 Southpoint</option>
    <option value="31"> 🚍 SouMa</option>
    <option value="32"> 🚍 Southbank Circus</option>
    <option value="33"> 🚍 Stadium</option>
    <option value="34"> 🚍 Lord Bishop's Square</option>
    <option value="35"> 🚍 Northshore</option>

<!-- OTHER TRAIN / SHIP STATIONS -->
    <option value="36"> 🚍 Seaporte</option>

<!-- BUS STATIONS -->
    <option value="38"> 🚍 Hibbing Ore Mine</option>

    <option value="39"> 🚍 Riverfront</option>
    <option value="40"> 🚍 Uppsala Street</option>
    <option value="41"> 🚍 Times Square</option>
    <option value="42"> 🚍 Bel-Air</option>
    <option value="43"> 🚍 Hornsberg Bus Depot</option>
    <option value="44"> 🚍 Parvus Junction</option>
    <option value="45"> 🚍 Liberty Gasoline</option>
    <option value="46"> 🚍 Factory Showcases</option>
    <option value="47"> 🚍 Portsfield Retail Centre</option>
    <option value="49"> 🚍 Portsfield Bus Central</option>

    <option value="50"> 🚍 Roslagen Tree Plantation</option>

<!-- PLACES -->




    
    

</select>
<label>Departure station</label>



</div><div class="w3-half">


<select id="select-dest" name="select-dest" placeholder="Pick a station..." required>
    <option value="">Select a station...</option>
<!-- COMMUTER -->
    <option value="1"> 🚍 Stenford Bay</option>
    <option value="2"> 🚍 Oxville</option>
    <option value="3"> 🚍 Upminster</option>
    <option value="4"> 🚍 National Mall</option>
    <option value="5"> 🚍 Chelsham Street</option>
    <option value="6"> 🚍 Eastside</option>
    <option value="7"> 🚍 Capital Station</option>
    <option value="8"> 🚍 Faybury</option>
    <option value="9"> 🚍 Tower Quarters</option>
    <option value="10"> 🚍 Sergels Square</option>
    <option value="11"> 🚍 Shoretrench</option>

<!-- RED LINE -->
    <option value="12"> 🚍 Ganters Hill</option>
    <option value="13"> 🚍 South Street</option>
    <option value="14"> 🚍 Hibbing Gardens</option>
    <option value="15"> 🚍 Fra Mauro Street</option>
    <option value="48"> 🚍 Berry Isle</option>
    <option value="16"> 🚍 Harlonian Plaza</option>
    <option value="17"> 🚍 North Riverbank Street</option>
    <option value="18"> 🚍 Victory Column</option>
    <option value="19"> 🚍 Monument</option>
    <option value="20"> 🚍 Duluth</option>
    <option value="21"> 🚍 Lighthouse Point</option>
    <option value="22"> 🚍 Shrewsberry</option>
    <option value="23"> 🚍 Long Island Airfield</option>
    <option value="24"> 🚍 Downminster</option>

<!-- DARK GREEN LINE -->
    <option value="25"> 🚍 Old Town</option>
    <option value="26"> 🚍 Wixley Beach</option>
    <option value="27"> 🚍 Vanderpool Street</option>
    <option value="28"> 🚍 Two Bridges</option>
    <option value="29"> 🚍 The Triangle</option>

<!-- YELLOW LINE -->
    <option value="30"> 🚍 Southpoint</option>
    <option value="31"> 🚍 SouMa</option>
    <option value="32"> 🚍 Southbank Circus</option>
    <option value="33"> 🚍 Stadium</option>
    <option value="34"> 🚍 Lord Bishop's Square</option>
    <option value="35"> 🚍 Northshore</option>

<!-- OTHER TRAIN / SHIP STATIONS -->
    <option value="36"> 🚍 Seaporte</option>

<!-- BUS STATIONS -->
    <option value="38"> 🚍 Hibbing Ore Mine</option>

    <option value="39"> 🚍 Riverfront</option>
    <option value="40"> 🚍 Uppsala Street</option>
    <option value="41"> 🚍 Times Square</option>
    <option value="42"> 🚍 Bel-Air</option>
    <option value="43"> 🚍 Hornsberg Bus Depot</option>
    <option value="44"> 🚍 Parvus Junction</option>
    <option value="45"> 🚍 Liberty Gasoline</option>
    <option value="46"> 🚍 Factory Showcases</option>
    <option value="47"> 🚍 Portsfield Retail Centre</option>
    <option value="49"> 🚍 Portsfield Bus Central</option>

    <option value="50"> 🚍 Roslagen Tree Plantation</option>

<!-- PLACES -->


  
    

</select>
<label>Destination</label>


</div>

<?php include "bgimg-gen.php"; ?>


&nbsp;<br>
<span><input type="submit" value="Calculate best route" class="w3-button w3-hover-black w3-black w3-round">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:10px">Harlon Trip Planner by muffinbarde</span></span>
</form> 
</center>
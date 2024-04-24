<?php error_reporting(0); ?>
<html>
<head>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
  <title>KTB Konno Trip Planner</title>
  <link rel="icon" type="image/x-icon" href="ktbkonno.ico">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
  <script src="https://kit.fontawesome.com/177df10e43.js" crossorigin="anonymous"></script>

  <script>
    $(document).ready(function () {
      $('select').selectize({
        sortField: 'text'
      });
    });
  </script>

  <style>
    body {
      background-color:#6c6c6c;
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      min-height: 100%;
    }

    @font-face {
      font-family: 'FCround';
      src: url('FCSubjectRoundedNoncml-Reg.woff2') format('woff2'),
           url('FCSubjectRoundedNoncml-Reg.woff') format('woff');
      font-weight: normal;
      font-style: normal;
      font-display: swap;
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

    .logo {
      margin-right: 10px;
    }

    .version-info {
      position: absolute;
      bottom: 10px;
      left: 10px;
      color: black; /* Changed text color to black */
    }

    .system-info {
      position: absolute;
      bottom: 10px;
      right: 10px;
      color: black; /* Changed text color to black */
    }
  </style>
</head>

<body>
  <?php include 'bgimg-dp.php'; ?>

  <h2>
    <img class="logo" src="ktbkonno.png" alt="KTB Konno Logo" width="30">
    <span style="font-family: FCround;color: aquamarine; font-size: 25px;">KTB Konno Trip Planner</span>
  </h2>

  <form>
    <label><span style="font-family: FCround;color: white; font-size: 25px;">Start Point</span></label>
    <select id="select-dep" name="select-dep" placeholder="Key in start point or choose from menu" required>
      <option value="">Select a station...</option>
      <option value="1">🚏 Abydos School (South Gate)</option>
      <option value="2">🚏 Abydos School (West Gate)</option>
      <option value="3">🚉 Brentwood</option>
      <option value="4">🚉 Brentwood Pier</option>
      <option value="5">🚉 Chitose</option>
      <option value="6">🚏 Embassy of Buryland United</option>
      <option value="7">🚉 Epping</option>
      <option value="8">🚉 Faculty of Railway Engineering</option>
      <option value="9">🚏 Filius Cathedral</option>
      <option value="10">🚏 Filius Railway Station</option>
      <option value="11">🚏 Filius Theatre</option>
      <option value="12">🚏 Golconde Bridge</option>
      <option value="13">🚉 Gojo</option>
      <option value="14">🚉 Hokuyo</option>
      <option value="15">🚉 Kimitsu</option>
      <option value="16">🚉 Kimitsu-Minato</option>
      <option value="17">🚉 Katsuragi</option>
      <option value="18">🚉 Konno University (Faculty of DIT)</option>
      <option value="19">🚉 Maekawa</option>
      <option value="20">🚉 Maruyama</option>
      <option value="21">🚏 Midori Express HQ</option>
      <option value="22">🚏 Midori Food Centre</option>
      <option value="23">🚏 Misono Hospital</option>
      <option value="24">🚉 Mizuna</option>
      <option value="25">🚉 Mizuno Filius</option>
      <option value="26">🚏 Momoi Time Center</option>
      <option value="27">🚉 DORASAN CHECKPOINT (Buryland)</option>
      <option value="28">🚏 Perorozilla View Point</option>
      <option value="29">🚉 Shinden</option>
      <option value="30">🚉 Taura</option>
      <option value="31">🚉 Twyford International</option>
      <option value="32">🚉 Twyford-upon-Thaime</option>
      <option value="33">🚏 Lunatic Eye</option>
      <option value="34">🚏 Minseo Park (North)</option>
      <option value="35">🚏 Minseo Park (South)</option>
      <option value="36">🚉 KNU Council</option>
      <option value="37">🚏 Peroro Flower Shop</option>
      <option value="38">🚉 Otaki</option>
      <option value="39">🚉 Minagi</option>
      <option value="40">🚉 Kotoha Checkpoint</option>
      <option value="41">🚉 SURANARAI (Buryland)</option>
      <option value="42">🚉 HIMANOS DAM (Buryland)</option>
      <option value="43">🚉 LHOKUSON SELATAN (Buryland)</option>
      <option value="44">🚉 LHOKUSON (Buryland)</option>
      <option value="45">🚉 BANDAR BARU SELATAN (Buryland)</option>
      <option value="46">🚉 MAHA NAKHON CENTRAL TERMINAL (Buryland)</option>
    </select>

    <span style="font-family: FCround;color: white; font-size: 25px;">End Point</span>
    <select id="select-dest" name="select-dest" placeholder="Key in end point or choose from menu" required>
      <option value="">Select a station...</option>
      <option value="1">🚏 Abydos School (South Gate)</option>
      <option value="2">🚏 Abydos School (West Gate)</option>
      <option value="3">🚉 Brentwood</option>
      <option value="4">🚉 Brentwood Pier</option>
      <option value="5">🚉 Chitose</option>
      <option value="6">🚏 Embassy of Buryland United</option>
      <option value="7">🚉 Epping</option>
      <option value="8">🚉 Faculty of Railway Engineering</option>
      <option value="9">🚏 Filius Cathedral</option>
      <option value="10">🚏 Filius Railway Station</option>
      <option value="11">🚏 Filius Theatre</option>
      <option value="12">🚏 Golconde Bridge</option>
      <option value="13">🚉 Gojo</option>
      <option value="14">🚉 Hokuyo</option>
      <option value="15">🚉 Kimitsu</option>
      <option value="16">🚉 Kimitsu-Minato</option>
      <option value="17">🚉 Katsuragi</option>
      <option value="18">🚉 Konno University (Faculty of DIT)</option>
      <option value="19">🚉 Maekawa</option>
      <option value="20">🚉 Maruyama</option>
      <option value="21">🚏 Midori Express HQ</option>
      <option value="22">🚏 Midori Food Centre</option>
      <option value="23">🚏 Misono Hospital</option>
      <option value="24">🚉 Mizuna</option>
      <option value="25">🚉 Mizuno Filius</option>
      <option value="26">🚏 Momoi Time Center</option>
      <option value="27">🚉 DORASAN CHECKPOINT (Buryland)</option>
      <option value="28">🚏 Perorozilla View Point</option>
      <option value="29">🚉 Shinden</option>
      <option value="30">🚉 Taura</option>
      <option value="31">🚉 Twyford International</option>
      <option value="32">🚉 Twyford-upon-Thaime</option>
      <option value="33">🚏 Lunatic Eye</option>
      <option value="34">🚏 Minseo Park (North)</option>
      <option value="35">🚏 Minseo Park (South)</option>
      <option value="36">🚉 KNU Council</option>
      <option value="37">🚏 Peroro Flower Shop</option>
      <option value="38">🚉 Otaki</option>
      <option value="39">🚉 Minagi</option>
      <option value="40">🚉 Kotoha Checkpoint</option>
      <option value="41">🚉 SURANARAI (Buryland)</option>
      <option value="42">🚉 HIMANOS DAM (Buryland)</option>
      <option value="43">🚉 LHOKUSON SELATAN (Buryland)</option>
      <option value="44">🚉 LHOKUSON (Buryland)</option>
      <option value="45">🚉 BANDAR BARU SELATAN (Buryland)</option>
      <option value="46">🚉 MAHA NAKHON CENTRAL TERMINAL (Buryland)</option>
    </select>
    <br>

    <span><center><input type="submit" value="Find the route" class="w3-button w3-hover-black w3-round-xlarge"></center></span>
  </form>

  <div class="version-info">
    System Version: Dev 1.0.0 <br>
    ® 2024 Konno Transportation Group Public Co., Ltd. (KTB Konno)
  </div>

  <div class="system-info">
    System based on Skepia's Witaland Trip Planner <br>
    <span style="float: right;">Subject to change</span>
  </div>

</body>
</html>

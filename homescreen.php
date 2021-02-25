<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>The Town HTML CSS Template</title>
    <link rel="stylesheet" href="fontawesome-5.5/css/all.min.css" />
    <link rel="stylesheet" href="slick/slick.css">
    <link rel="stylesheet" href="slick/slick-theme.css">
    <link rel="stylesheet" href="magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/templatemo-style.css" />
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--
	The Town
	https://templatemo.com/tm-525-the-town
	-->
  <?php 
  function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
  }

  $server = "eu-cdbr-west-03.cleardb.net";
  $database = "heroku_1a727256584b6e8";
  $username = "ba806095039410";
  $wachtwoord = "f16318f1";
  

  if(!$connectie = mysqli_connect($server,$username,$wachtwoord,$database) ) {
    $boodschap = "Verbinding is mislukt, omdat:".mysqli_connect_error($connectie).
    "met foutnummer:".mysqli_connect_errno($connectie);
  } else{
    $boodschap = "Verbinding is gelukt<br>";
  }

  $getal1 = $_POST["email"];
  $getal2 = $_POST["pass"];
  $a[] = $getal1;
  $a[] = $getal2;

  echo "Wachtwoord of Gebruikersnaam is fout";
  #Lezen van database
  $query = "SELECT * FROM ea757";

  if(!$resultaat = mysqli_query($connectie, $query) ) {
    $boodschap .=  "query\" $query\" mislukt!"; 
  } else{
    $boodschap .= "query gelukt";
  }
  
  
  while($rij = mysqli_fetch_array($resultaat)){
    if ($getal1 == $rij[1]){
      debug_to_console("Naam is gevonden");
      debug_to_console($rij[1]);
      debug_to_console($rij[2]);
      debug_to_console($getal[1]);
      debug_to_console($getal[2]);
      if ($getal2 == $rij[2]) {
        $gevonden = "Gevonden";
        ob_start(); // ensures anything dumped out will be caught

        // do stuff here
        $url = 'http://bramt.veluwscollege.net/scouting/homescreen4.php'; 

        // clear out the output buffer
        while (ob_get_status()) 
        {
            ob_end_clean();
        }

        // no redirect
        header( "Location: $url" );

      }else{
        $gevonden = "Niet Gevonden";
      }
    }else{
      $gevonden = "Niet Gevonden";
    }
    
  }

  
  
  if ($gevonden == "Niet Gevonden") {
    ob_start(); // ensures anything dumped out will be caught

    // do stuff here
    $url = 'http://bramt.veluwscollege.net/scouting/index.html'; 

    // clear out the output buffer
    while (ob_get_status()) 
    {
        ob_end_clean();
    }

    // no redirect
    header( "Location: $url" );
  }
  

  mysqli_close($connectie);

  #Schrijven naar database
  
  
?>
<title>Login</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">

  </head>
  <body>
  
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <div class="login100-pic js-tilt" data-tilt>
          <img src="images/img-01.png" alt="IMG">
        </div>
        <form method="POST" action="homescreen.php">
          <form class="login100-form validate-form">
            <span class="login100-form-title">
              Member Login
            </span>

            <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
              <input class="input100" type="text" name="email" placeholder="Gebruikersnaam">
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa fa-envelope" aria-hidden="true"></i>
              </span>
            </div>

            <div class="wrap-input100 validate-input" data-validate = "Password is required">
              <input class="input100" type="password" name="pass" placeholder="Wachtwoord">
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa fa-lock" aria-hidden="true"></i>
              </span>
            </div>
            
            <div class="container-login100-form-btn">
              <button class="login100-form-btn" type="submit" name="verstuur">
                Login
              </button>
            </div>

            <div class="text-center p-t-12">
              <span class="txt1">
                Forgot
              </span>
              <a class="txt2" href="#">
                Username / Password?
              </a>
            </div>

            <div class="text-center p-t-136">
              <a class="txt2" href="#">
                Create your Account
                <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
              </a>
            </div>
          </form>
        </form>
      </div>
    </div>
  </div>
  
  

  
<!--===============================================================================================-->  
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <!--<script src="vendor/bootstrap/js/popper.js"></script>-->
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/tilt/tilt.jquery.min.js"></script>
  <script >
    $('.js-tilt').tilt({
      scale: 1.1
    })
  </script>
<!--===============================================================================================-->
  <script src="js/main.js"></script>

</body>
</html>
</html>
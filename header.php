<?php

$group = $_SESSION['group'];

function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}


if($group == "beversochtend"){
  $server = "eu-cdbr-west-03.cleardb.net";
  $database = "heroku_b6ccf5347f986b7";
  $username = "b73badccc28509";
  $wachtwoord = "46e7ba9f";
}
if($group == "beversmiddag"){
  $server = "eu-cdbr-west-03.cleardb.net";
  $database = "heroku_f9c9ff2287354ae";
  $username = "b8a6ec5dd4f831";
  $wachtwoord = "26d0c1e2";
}
if($group == "sionihorde"){
  $server = "eu-cdbr-west-03.cleardb.net";
  $database = "heroku_6ddc7ca4fb6c487";
  $username = "bd261e04c4f7ac";
  $wachtwoord = "2646f655";
}
if($group == "mowglihorde"){
  $server = "eu-cdbr-west-03.cleardb.net";
  $database = "heroku_043cac3778e37ef";
  $username = "b53a91493bfae6";
  $wachtwoord = "b0c77f1c";
}
if($group == "shantihorde"){
  $server = "eu-cdbr-west-03.cleardb.net";
  $database = "heroku_3e38dc503c384ed";
  $username = "bcf0fc9752adca";
  $wachtwoord = "4433dfb8";
}


if($group == "gaaientroep"){
  $server = "eu-cdbr-west-03.cleardb.net";
  $database = "heroku_72bce5d900dc0c4";
  $username = "b20d36b9e64e9a";
  $wachtwoord = "592a9017";
}
if($group == "pmt"){
  $server = "eu-cdbr-west-03.cleardb.net";
  $database = "heroku_936cbdf524a261e";
  $username = "bbb1086e05f46c";
  $wachtwoord = "305a5102";
}
if($group == "ekerstroep"){
  $server = "eu-cdbr-west-03.cleardb.net";
  $database = "heroku_b6ccf5347f986b7";
  $username = "b73badccc28509";
  $wachtwoord = "46e7ba9f";
}
if($group == "ea757"){
  $server = "eu-cdbr-west-03.cleardb.net";
  $database = "heroku_1cb03cce5ef2216";
  $username = "b9af828f2f4586";
  $wachtwoord = "64cb70a1";
}
if($group == "ea595"){
  $server = "eu-cdbr-west-03.cleardb.net";
  $database = "heroku_4f770db4c2019e5";
  $username = "bfbf8c292bd780";
  $wachtwoord = "408b12a0";
}


if($group == "stam1"){
  $server = "eu-cdbr-west-03.cleardb.net";
  $database = "heroku_4e519908e65abd9";
  $username = "b4e6692218c8bb";
  $wachtwoord = "55c5369c";
}
if($group == "stam2"){
  $server = "eu-cdbr-west-03.cleardb.net";
  $database = "heroku_1112b001d39794d";
  $username = "be0d90306e78fd";
  $wachtwoord = "dd2610aa";
}

if(!$connectie = mysqli_connect($server,$username,$wachtwoord,$database) ) {
  $boodschap = "Verbinding is mislukt, omdat:".mysqli_connect_error($connectie)."met foutnummer:".mysqli_connect_errno($connectie);
} else{
  $boodschap = "Verbinding is gelukt<br>";
}

$getal1 = $_SESSION['email'] ;
$getal2 = $_SESSION['password'];
$a[] = $getal1;
$a[] = $getal2;

$query = "SELECT * FROM {$group}";

if(!$resultaat = mysqli_query($connectie, $query) ) {
  $boodschap .=  "query\" $query\" mislukt!"; 
} else{
  $boodschap .= "query gelukt";
}

$getal3 = strtolower($getal1);
$getal4 = ucfirst($getal1);

while($rij = mysqli_fetch_array($resultaat)){
    #echo "Naam = ".$getal1." ww = ".$getal2;
    if ($getal1 == $rij[1] or $getal3 == $rij[1] or $getal4 == $rij[1]){
      if ($getal2 == $rij[2]) {
        $gevonden = "Gevonden";
        break;
      }else{
        $gevonden = "Niet Gevonden";
      }
    }else{
      $gevonden = "Niet Gevonden";
    }
  }

if ($gevonden != "Gevonden") {
	ob_start(); 
	$url = 'https://scoutonlinesite1.herokuapp.com/selectgroup.php'; 
	while (ob_get_status()){
	    ob_end_clean();
	}
	header( "Location: $url" );
}

?>
